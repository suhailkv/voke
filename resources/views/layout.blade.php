<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Manjari:wght@400;700&family=Mukta:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>@yield('style');
    </style>
    <title>@yield('title')</title>
  </head>
  <body id="page-top" style="font-family:sans-serif,'Manjari'">
    <!--header-->
    <header class="jumbotron pt-0 pb-0 mt-0 mb-0  rounded-0 " style="background-color: #457B9D;height:21vh">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="d-flex justify-content-center ">
              <div>
                <a  href="/"> <img style="max-height:9rem" class="img-fluid"  src="{{asset('img/mylogo.png')}}" alt=""> </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <nav style="font-family:'Mukta';" class="navbar navbar-expand-md navbar-light bg-light shadow mb-5 mt-0 pt-0"   id= "navbar_top">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="/"> <img id="" class="ml-5 mt-2 mr-n5 d-none" src="img/mylogo.png" height=35px; alt=""> </a>
      <div class="collapse navbar-collapse" id="basicExampleNav">
        <!-- Links -->
        <ul class="navbar-nav mx-auto pt-2">
          <li class="nav-item {{ Request::is('/') ? 'active' : '' }} pr-5">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item pr-5">
            <a class="nav-link" href="rsslatest.php">Latest</a>
          </li>
          <li class="nav-item pr-5">
            <a class="nav-link" href="catView.php?cat=Politics">Politics</a>
          </li>
          <li class="nav-item pr-5">
            <a class="nav-link" href="catView.php?cat=Movies">Movies</a>
          </li>
          <li class="nav-item pr-5">
            <a class="nav-link" href="catView.php?cat=Sports">Sports</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="catView.php?cat=Finance">Finance</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container">
      @yield('content')
    </div>
    <footer class="page-footer font-small pt-4" style="background-color:#02031c;color:white;font-family:'Mukta',sans-serif">
      <div class="container text-center text-md-left">
        <div class="row">
          <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">
            <a href="#"> <img class="img-fluid" src="{{asset('img/mylogof.png')}}" alt=""> </a>
          </div>
          <hr class="w-100 d-md-none">
          <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">
            <h5 class="font-weight-bold text-uppercase mb-4">Our Pages</h5>
            <ul class="list-unstyled">
              <li><p><a href="rsslatest.php">LATEST</a></p></li>
              <li><p><a href="catView.php?cat=Politics">POLITICS</a></p></li>
              <li><p><a href="catView.php?cat=Sports">SPORTS</a></p></li>
              <li><p><a href="catView.php?cat=Movies">MOVIES</a></p></li>
              <li><p><a href="catView.php?cat=Finance">FINANCE</a></p></li>
            </ul>
          </div>
          <hr class="w-100 d-md-none">
          <div class="col-md-2 col-lg-2 text-center mx-auto my-4">
            <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>
            <div>
              <a type="button" class="btn-floating btn-fb"><i class="fab fa-facebook-f"></i></a>
            </div>
            <div>
              <a type="button" class="btn-floating btn-tw"><i class="fab fa-twitter"></i></a>
            </div>
            <div>
              <a type="button" class="btn-floating btn-gplus"><i class="fab fa-google-plus-g"></i></a>
            </div>
            <div><a type="button" class="btn-floating btn-dribbble"><i class="fab fa-dribbble"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center py-3">The Voke © 2020</div>
    </footer>
  </body>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  </html>
