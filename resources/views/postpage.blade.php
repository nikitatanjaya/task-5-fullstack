@extends('layout')

@section('content')
<h1>Posts</h1>

<div class="row" align="left">
    <div class="pull-right">
        <a class="btn btn-dark" href="{{ route('category.index') }}">Your Categories</a>
        <a class="btn btn-dark" href="{{ route('home') }}">Home</a>
    </div>
</div>

<div class="row" align="left">
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('post.create') }}">Create Post</a>
    </div>
</div>

<table class="mx-auto table table-warning">
    <tr>
		<th>Title</th>
        <th>Content</th>
        <th>Options</th>
	</tr>

    @foreach($posts as $post)
	<tr>
		<td>{{ $post->title }}</td>
        <td>{{ $post->content }}</td>
        <td>
            <form method="POST" action=" {{route('post.delete', $post->id) }}">
            @csrf
                <a class="btn btn-info" href="{{ route('post.update', $post->id) }}">Update</a>
                {{ method_field('DELETE') }}
                    <input type="submit" class="btn btn-danger delete-user" value="Delete">
            </form>
            </td>
	</tr>
	@endforeach
</table>
@endsection