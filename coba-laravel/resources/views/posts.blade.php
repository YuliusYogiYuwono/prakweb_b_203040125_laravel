@extends('layouts.main')

@section('container')
<h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/posts">
      @if (request('category'))
      <input type="hidden" name="category" value="{{ request('category') }}">
      @endif
      @if (request('author'))
      <input type="hidden" name="author" value="{{ request('author') }}">
      @endif

      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
        <button class="btn btn-danger" type="submit">Search</button>
      </div>
    </form>
  </div>
</div>

@foreach ($posts as $post)
<article class="mb-5 border-bottom pb-3">
  <h2>
    <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
  </h2>

  <p>By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">
    {{ $post->category->name }}</a></p>

  <p>{{ $post->excerpt }}</p>

  <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read More..</a>
</article>
@endforeach

@endsection
