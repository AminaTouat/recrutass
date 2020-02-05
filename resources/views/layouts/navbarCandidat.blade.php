<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="shortcut icon" href="../img/logo.png">
  <title>{{ Auth::user()->name }}</title>
  <!-- Bootstrap core CSS -->
  <link href="../vendor/jquery/jquery.js" rel="stylesheet">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../css/Recrutass.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<!-- 
<body id="page-top">
  Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a  class="navbar-brand js-scroll-trigger" href={{url('/')}}><img src="../img/logo.png" alt="logo Autoscuola"></a>
    
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item active">
              <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown"><img src="{{asset('../uploads/avatar/'.Auth::user()->avatar)}}" alt="user" class="mx-auto d-block shadow border rounded-circle" height="90"/></a>
              <div class="dropdown-menu">
                <a  class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                  Déconnection</a>
                <form  id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                              @csrf
                                          </form>
            </li>
        </ul>
      </div>
    </div>
  </nav>
  @yield('content4')
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../js/Recrutass.min.js"></script>
