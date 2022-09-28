@extends('layout')

@section('content')

<div class="row" align="center">
<form action="{{ route('post.store') }}" method="POST">
@csrf
        <div class="col-sm-4">

            <div class="left">
                Title
                <input type="text" name="title" class="form-control">
            </div>

            <div class="left">
                Content
                <input type="text" name="content" class="form-control">
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