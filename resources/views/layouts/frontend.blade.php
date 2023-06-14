<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TOKOPAEDI | {{ $title }}</title>

    {{-- Font & Icon --}}
    <link rel="preconnect" href="{{ url('https://fonts.googleapis.com') }}">
    <link rel="preconnect" href="{{ url('https://fonts.gstatic.com') }}" crossorigin>
    <link href="{{ url('https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap') }}" rel="stylesheet">
    <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ url('assets/img/icon tokopaedi.svg') }}">
    <script src="{{ url('https://kit.fontawesome.com/b40415df47.js') }}" crossorigin="anonymous"></script>
    <script src="{{ url('https://code.jquery.com/jquery-3.7.0.min.js') }}"></script>
    <link href="{{ url('//maxcdn.bootstrapcdn.com/fontawesome/4.1.0/css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css') }}">
    <link href="{{ url('assets/img/list-groups.css') }}" rel="stylesheet">
    <script>
      $(document).ready(function(){
        $(".notification_icon .fa-bell").click(function(){
          $(".cosdropdown").toggleClass("active");
        })
      });
    </script>
  </head>
  <body >
    <!-- Navbar -->
    @include('partials/navbar')
    <!-- Navbar -->

    @yield('content')

    <!-- Footer -->
    @include('partials/footer')
    <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>