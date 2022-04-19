@extends('dashboard.layouts.main')

@section('container')
  <div class="container">
    <div class="row mt-3 mb-5">
      <div class="col-lg-8">
        <article>
          <h2 class="mb-2">{{ $post->title }}</h2>
          <a href="/dashboard/posts" class="btn btn-success btn-sm">
            <span data-feather="arrow-left"></span> Back to Post
          </a>
          <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning btn-sm">
            <span data-feather="edit"></span> Edit
          </a>
          <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
              <span data-feather="trash"></span> Delete
            </button>
          </form>
          @if ($post->image)
            <div style="max-height: 350px; overflow: hidden;">
              <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-3 rounded shadow"
                alt="{{ $post->category->name }}">
            </div>
          @else
            <img src="https://source.unsplash.com/1200x500?{{ $post->category->name }}"
              class="img-fluid mt-3 rounded shadow" alt="{{ $post->category->name }}">
          @endif
          <div class="content my-4">
            {!! $post->body !!}
          </div>
        </article>
      </div>
    </div>
  </div>
@endsection
