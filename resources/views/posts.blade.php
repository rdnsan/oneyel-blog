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
          <input type="text" class="form-control" placeholder="Search Post..." name="search"
            value="{{ request('search') }}">
          <button class="btn btn-danger" type="submit">Search</button>
        </div>
      </form>
    </div>
  </div>

  @if ($posts->count())
    <div class="card mb-4">

      @if ($posts[0]->image)
        <div style="max-height: 400px; overflow: hidden;">
          <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top"
            alt="{{ $posts[0]->category->name }}">
        </div>
      @else
        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
          alt="{{ $posts[0]->category->name }}">
      @endif

      <div class="card-body text-center">
        <h3 class="card-title">
          <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
            {{ $posts[0]->title }}
          </a>
        </h3>
        <p>
          <small class="text-muted">
            by
            <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">
              {{ $posts[0]->author->name }}
            </a> in
            <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">
              {{ $posts[0]->category->name }}
            </a> - {{ $posts[0]->created_at->diffForHumans() }}
          </small>
        </p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-outline-primary">
          Read more
        </a>
      </div>
    </div>

    <div class="container">
      <div class="row g-4 mb-5">
        @foreach ($posts->skip(1) as $post)
          <div class="col-md-4">
            <div class="card h-100">
              <div class="position-absolute overflow-hidden" style="width: 100px; height: 100px;">
                <div class="position-absolute bg-danger px-0 py-1 text-center"
                  style="transform: rotate(-46deg);width: 130px;height: 24px;font-size: 13px;line-height: 15px;top: 24px;left: -28px;box-shadow: 0 0 3px rgb(0 0 0 / 30%);">
                  <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">
                    {{ $post->category->name }}
                  </a>
                </div>
              </div>

              @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top"
                  alt="{{ $post->category->name }}">
              @else
                <img src="https://source.unsplash.com/500x300?{{ $post->category->name }}" class="card-img-top"
                  alt="{{ $post->category->name }}">
              @endif

              <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p>
                  <small class="text-muted">
                    by
                    <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">
                      {{ $post->author->name }}
                    </a>
                    - {{ $post->created_at->diffForHumans() }}
                  </small>
                </p>
                <p class="card-text">{{ $post->excerpt }}</p>
                <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  @else
    <p class="fs-4 text-center">No post found ☹</p>
  @endif

  <div class="mb-5">
    {{ $posts->links() }}
  </div>

@endsection
