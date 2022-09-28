@extends('layout')

@section('content')
<h1>Categories</h1>

<div class="row" align="left">
    <div class="pull-right">
        <a class="btn btn-dark" href="{{ route('post.index') }}">Your Posts</a>
        <a class="btn btn-dark" href="{{ route('home') }}">Home</a>

    </div>
</div>

<div class="row" align="left">
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('category.create') }}">Create Category</a>
    </div>
</div>

<table class="mx-auto table table-warning">
    <tr>
		<th>Name</th>
        <th>Options</th>
	</tr>

    @foreach($categories as $category)
	<tr>
		<td>{{ $category->name }}</td>
        <td>
            <form method="POST" action=" {{route('category.delete', $category->id) }}">
            @csrf
                <a class="btn btn-info" href="{{ route('category.update', $category->id) }}">Update</a>
                {{ method_field('DELETE') }}
                    <input type="submit" class="btn btn-danger delete-user" value="Delete">
            </form>
            </td>
	</tr>
	@endforeach
</table>
@endsection