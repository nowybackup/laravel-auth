@extends('layouts.master')

@section('content')
<!-- main nav categories -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarCenteredExample"
      aria-controls="navbarCenteredExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div
      class="collapse navbar-collapse justify-content-center"
      id="navbarCenteredExample"
    >
      <!-- Left links -->
      <ul class="navbar-nav mb-2 mb-lg-0">
            @foreach ($categories as $category)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}?category_id={{ $category->id }}">{{ $category->name }}</a>
                </li>
            @endforeach
        <!-- Navbar dropdown -->
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Nested row for non-featured blog posts-->
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="{{ route('viewpost', $post->id) }}">
                                    {{-- <img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg"
                                        alt="..." /> --}}
                                    <img class="card-img-top" src="{{ asset('uploads/posts/' . $post->image) }}"
                                        alt="Image">
                                </a>
                                <div class="card-body">
                                    <div class="small text-muted">{{ $post->created_at }}</div>
                                    <h2 class="card-title h4">{{ $post->title }}</h2>
                                    {{-- <p class="card-text">{{ $post->post_text }}</p> --}}
                                    <p class="card-text">{{ Str::limit($post->post_text, 500) }}</p>
                                    <a class="btn btn-primary" href="{{ route('viewpost', $post->id) }}">Read more →</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="list-unstyled mb-0">
                                    <b>Wyróżniony artykuł</b>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection