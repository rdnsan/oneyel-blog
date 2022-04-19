<nav class="navbar navbar-expand-lg navbar-light bg-info shadow-lg">
  <div class="container">
    <a class="navbar-brand" href="/">Oneyel Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->segment(1) === 'posts' ? 'active' : '' }}" href="/posts">Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->segment(1) === 'categories' ? 'active' : '' }}" href="/categories">
            Category
          </a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link {{ $active === 'authors' ? 'active' : '' }}" href="/authors">Authors</a>
        </li> --}}
      </ul>
      <ul class="navbar-nav ms-auto">
        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <i class="bi bi-person-circle me-1"></i> {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item" href="/dashboard">
                  <i class="bi bi-stack me-1"></i> Dashboard
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item">
                    <i class="bi bi-box-arrow-left me-1"></i> Logout
                  </button>
                </form>
              </li>
            </ul>
          </li>
        @else
          <li class="nav-item">
            <a href="/login" class="nav-link">
              <i class="bi bi-box-arrow-in-right me-1"></i> Login
            </a>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
