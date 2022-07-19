@extends('layouts.main')

@section('container')
  <article>
    <h2>{{ $post->title }}</h2>
    <p>By. Faiq Nov in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

    {{-- blade escape character --}}
    {!! $post->body !!}
  </article>

  <a href="/posts">Back to all posts</a>
@endsection