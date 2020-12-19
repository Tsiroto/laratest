<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ env('APP_NAME')}}</title>
  <link rel="stylesheet" href="/css/app.css">

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-brown mb-3 ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto d-flex">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('home')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('posts')}}">Posts <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('newpost')}}">New Post <span class="sr-only"></span></a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0" method="GET" action="{{ route('search') }}">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="q">
        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  @yield('content')
  
  <!-- Footer -->
  <footer class="page-footer font-small blue">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">{{ date('Y') }} © All Rights Reserved | Theme by 
      <a href="#">Chiroto.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
  <script src="/js/app.js"></script>
</body>
</html>