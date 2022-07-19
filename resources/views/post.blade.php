@extends('layouts.main')

@section('container')
  <article>
    <h2>{{ $post->title }}</h2>

    {{-- blade escape character --}}
    {!! $post->body !!}
  </article>

  <a href="/posts">Back to all posts</a>
@endsection