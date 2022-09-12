@extends('dashboard.layouts.main')

@section('container')
<div class="row mt-3 mb-5">
  <div class="col-lg-8">
    <h2 class="mb-3">{{ $post->title }}</h2>
    
    <a href="/dashboard/posts" class="btn btn-sm btn-secondary"><span data-feather="arrow-left"></span> Back to all my posts</a>
    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-sm btn-warning"><span data-feather="edit"></span> Edit</a>
    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
      @method('delete')
      @csrf
      <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
    </form>

    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mt-3">

    <article class="my-3 fs-5">
      {!! $post->body !!}
    </article>
  </div>
</div>
@endsection