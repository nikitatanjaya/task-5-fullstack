@extends('layout')

@section('content')

<div class="row" align="center">
<form action="{{ route('post.update', $post->id) }}" method="POST">
@csrf
        <div class="col-sm-4">

            <div class="left">
                Title
                <input type="text" name="title" class="form-control" value="{{ $post->title }}">
            </div>
            
            <div class="left">
                Content
                <input type="text" name="content" class="form-control" value="{{ $post->content }}">
            </div>

        </div>
        <div class="col-sm-4">

            <div class="left">
                <button type="submit" class="btn btn-danger">Submit</button>
             </div>

        </div>
</form>
</div>


@endsection