@extends('admin.template')

@section('title')Post @endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h1>Posts</h1>
        </div>
        <div class="col-md-6 text-right">
            <h1><a href="{{ route('admin.post.create') }}" class="btn btn-success">Create new post</a></h1>
        </div>
    </div>




    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td class="text-right">
                    <a href="{{ route('admin.post.show', ['id' => $post->id]) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('admin.post.edit', ['id' => $post->id]) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('admin.post.destroy', ['id' => $post->id]) }}" onclick="return confirm('Confirm?')" class="btn btn-danger">Destroy</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {!! $posts->render() !!}
@endsection