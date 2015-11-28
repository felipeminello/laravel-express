@extends('template')

@section('title') Página inicial @endsection

@section('content')
    @foreach($posts as $post)
    <div class="post-preview">
        <a href="#">
            <h2 class="post-title">
                {{ $post['title'] }}
            </h2>
            <h3 class="post-subtitle">
                Problems look mighty small from 150 miles up
            </h3>
        </a>
        <p class="post-meta">Posted by <a href="#">{{ $post['author'] }}</a> on September 24, 2014</p>
    </div>
    <hr>
    @endforeach
@endsection