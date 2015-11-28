@extends('template')

@section('title') Minhas anotações @endsection

@section('content')
<ul>
    @foreach($notas as $nota)
        <li>{{ $nota }}</li>
    @endforeach
</ul>
@endsection