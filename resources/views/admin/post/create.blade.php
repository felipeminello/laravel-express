@extends('admin.template')

@section('title')Post @endsection

@section('content')
    <h1>Create new Post</h1>

    @if($errors->any())
        <ul class="alert">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    @endif

    {!! Form::model($post, ['method' => 'post', 'route' => 'admin.post.store']) !!}

    @include('admin.post._form')

    <div class="form-group">
        {!! Form::label('tags', 'Tags:') !!}
        {!! Form::text('tags', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
@endsection