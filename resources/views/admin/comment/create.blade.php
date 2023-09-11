@extends('layouts.admin')
@section('title', 'コメント投稿')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>コメント投稿</h2>
                 <form action="{{ route('admin.comment.create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">名前</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">本文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="text" rows="20">{{ old('text') }}</textarea>
                        </div>
                    </div>
                     @csrf
                    <input type="submit" class="btn btn-primary" value="投稿する">
                </form>
            </div>
        </div>
    </div>
@endsection
        