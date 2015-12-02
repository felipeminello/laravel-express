@extends('admin.template')

@section('title')Post @endsection

@section('content')
    <h1>Show Post</h1>

    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">User</h3></div>
                <div class="panel-body"> {{ $post->user->name }}</div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Created at</h3></div>
                <div class="panel-body"> {{ $post->created_at }}</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Title</h3></div>
                <div class="panel-body"> {{ $post->title }}</div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Subtitle</h3></div>
                <div class="panel-body"> {{ $post->subtitle }}</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Content</h3></div>
                <div class="panel-body"> {{ $post->content }}</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Tags</h3></div>
                <div class="panel-body"> {{ $post->tagList }}</div>
            </div>
        </div>
    </div>
@endsection