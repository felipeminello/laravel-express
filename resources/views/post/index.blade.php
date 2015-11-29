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
        <p class="post-meta">Posted by <a href="#">{{ $post['author'] }}</a> on {{ date('d/m/Y H:i', DateHelper::timelize($post['created_at'])) }}</p>
    </div>
    <hr>
    @endforeach
@endsection