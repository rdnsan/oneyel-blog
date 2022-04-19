@extends('layouts.main')

@section('container')
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-8">
        <article>
          <h2 class="mb-2">{{ $post->title }}</h2>
          <p>
            Posted by
            <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">
              {{ $post->author->name }}
            </a>
            in
            <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">
              {{ $post->category->name }}
            </a>
          </p>

          @if ($post->image)
            <div style="max-height: 400px; overflow: hidden;">
              <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid rounded shadow"
                alt="{{ $post->category->name }}">
            </div>
          @else
            <img src="https://source.unsplash.com/1200x500?{{ $post->category->name }}" class="img-fluid rounded shadow"
              alt="{{ $post->category->name }}">
          @endif

          <div class="content my-4">
            {!! $post->body !!}
          </div>
        </article>
        <a href="/posts" class="d-block text-decoration-none mt-3">← Back to Posts</a>
      </div>
    </div>
  </div>
@endsection
