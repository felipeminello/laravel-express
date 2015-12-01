@extends('template')

@section('title') Página inicial @endsection

@section('content')
    @foreach($posts as $post)
    <div class="post-preview">
        <a href="#">
            <h2 class="post-title">
                {{ $post['title'] }}
            </h2>
            @if (!empty($post['subtitle']))
                <h3 class="post-subtitle">
                    {{ $post['subtitle'] }}
                </h3>
            @endif
        </a>
        <p class="post-meta">Posted by <a href="#">{{ $post->user->name }}</a> on <a href="#">{{ date('d/m/Y H:i', DateHelper::timelize($post['created_at'])) }}</a></p>
        @if (count($post->tags) > 0)
            <p class="post-meta">
                @foreach($post->tags as $tag)
                    <a href="#">#{{ $tag->name }}</a>
                @endforeach
            </p>
        @endif
        @if (count($post->comments) > 0)
            <h3 class="post-meta">Comments:</h3>
            <ul class="list-unstyled">
            @foreach($post->comments as $comment)
                <li style="margin-bottom: 15px;"><strong><em>{{ $comment->name }}</em></strong>: {{ nl2br($comment->comment) }}</li>
            @endforeach
            </ul>
        @endif
    </div>
    <hr>
    @endforeach
@endsection