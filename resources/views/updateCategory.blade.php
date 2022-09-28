@extends('layout')

@section('content')

<div class="row" align="center">
<form action="{{ route('category.update', $category->id) }}" method="POST">
@csrf
        <div class="col-sm-4">

            <div class="left">
                Name
                <input type="text" name="name" class="form-control" value="{{ $category->name }}">
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