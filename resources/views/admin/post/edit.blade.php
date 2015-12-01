@extends('admin.template')

@section('title')Post @endsection

@section('content')
    <h1>Edit Post: {{ $post->title }}</h1>

    @if($errors->any())
        <ul class="alert">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    @endif

    {!! Form::model($post, ['method' => 'put', 'route' => ['admin.post.update', $post->id]]) !!}

    @include('admin.post._form')

    <div class="form-group">
        {!! Form::submit('Save Post', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
@endsection