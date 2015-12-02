<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', $post->title, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('subtitle', 'Subtitle:') !!}
    {!! Form::text('subtitle', $post->subtitle, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', $post->content, ['class' => 'form-control']) !!}
</div>
