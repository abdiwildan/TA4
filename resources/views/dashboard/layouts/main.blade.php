<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <script src="{{ url('../assets/js/color-modes.js') }}"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <title>TOKOPAEDI | Dashboard</title>

    <link rel="canonical" href="{{ url('https://getbootstrap.com/docs/5.3/examples/dashboard/') }}">
    <script src="{{ url('https://unpkg.com/feather-icons') }}"></script>
    <script src="{{ url('https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js') }}"></script> 


    <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


    
    <!-- Custom styles for this template -->
    <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ url('assets/css/dashboard.css') }}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ url('assets/img/icon tokopaedi.svg') }}">
  </head>
  <body>
   

<header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="/">Tokopaedi</a>

  <ul class="navbar-nav flex-row d-md-none">
    <li class="nav-item text-nowrap">
      <button class="nav-link px-3 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle search">
        <svg class="bi"><use xlink:href="#search"/></svg>
      </button>
    </li>
    <li class="nav-item text-nowrap">
      <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <svg class="bi"><use xlink:href="#list"/></svg>
      </button>
    </li>
  </ul>

  <div id="navbarSearch" class="navbar-search w-100 collapse">
    <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    @include('dashboard/layouts/sidebar')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    @yield('section')

  </main>
  </div>
</div>
    
    <script src="{{ url('') }}https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="{{ url('') }}https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script>
    <script src="{{ url('assets/js/dashboard.js') }}"></script>

  </body>
</html>
