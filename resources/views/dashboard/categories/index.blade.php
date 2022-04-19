@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-md-nowrap align-items-center border-bottom mb-3 flex-wrap pt-3 pb-2">
    <h1 class="h2">Categories</h1>
  </div>

  @if (session('success'))
    <div class="alert alert-success col-lg-8" role="alert">
      {{ session('success') }}
    </div>
  @endif

  <div class="table-responsive col-lg-8">
    <a href="/dashboard/categories/create" class="btn btn-primary mb-3">
      <span data-feather="plus-circle"></span> Create new Category
    </a>
    <table class="table-striped table-sm table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->name }}</td>
            <td>
              <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info">
                <span data-feather="eye"></span>
              </a>
              <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning">
                <span data-feather="edit"></span>
              </a>
              <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                  <span data-feather="trash"></span>
                </button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
