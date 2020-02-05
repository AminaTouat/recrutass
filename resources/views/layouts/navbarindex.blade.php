<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="shortcut icon" href="../img/logo.png">
  <title>Emploi</title>
  <!-- Bootstrap core CSS -->
<<<<<<< HEAD
  <link href="vendor/jquery/jquery.js" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
=======
  <link href="{{ asset('../vendor/jquery/jquery.js')}}" rel="stylesheet">
  <link href="{{ asset('../vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
>>>>>>> b16f5555377372c24ab0a78bc92a3df929d6cf59

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
<<<<<<< HEAD
  <link href="css/Recrutass.css" rel="stylesheet">
=======
  <link href="{{ asset('../css/Recrutass.css')}}" rel="stylesheet">
>>>>>>> b16f5555377372c24ab0a78bc92a3df929d6cf59
 
</head>

<body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a  class="navbar-brand js-scroll-trigger" href="#page-top"><img src="../img/logo.png" alt="logo Autoscuola"></a>
      
      
    
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item active">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">offres d'emploi</a>
            <div class="dropdown-menu">
             <a class="dropdown-item" href="/Liste des offres">Liste des offres</a>
             <a class="dropdown-item" href="/Liste des entreprises">Liste des entreprises</a>
             <a class="dropdown-item" href="/Les offres dune entreprises">Les offres d'une entreprises</a>
             <a class="dropdown-item" href="/Information sur lentreprise">Information sur l'entreprise</a>
          </li>
          @if (Auth::user())
          <ul class="navbar-nav ml-auto">
            <li class="dropdown nav-item active">
                <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown"><img src="{{asset('../uploads/avatar/'.Auth::user()->avatar)}}" alt="user" class="mx-auto d-block shadow border rounded-circle" height="90"/></a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{ url('/home') }}">Home</a>
                  <a  class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    Déconnection</a>
                  <form  id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>

              </li>
          </ul>
          @else
          <ul class="navbar-nav m-auto">
      <li class="dropdown nav-item active">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">S'INSCRIRE</a>
          <div class="dropdown-menu">
             <a class="dropdown-item" href="{{ route('register') }}">Espace Candidat</a>
             <a class="dropdown-item" href="{{ url('register/recruteur') }}">Espace recruteur</a>
        </li>
    </ul>
          <ul class="navbar-nav m-auto">
      <li class="dropdown nav-item active">
          <a href="#" class="nav-link js-scroll-trigger"data-toggle="dropdown"id="seconnecter">Se connecter</a>
          <div class="dropdown-menu">
             <a class="dropdown-item" href="{{ route('login') }}">Espace Candidat</a>
             <a class="dropdown-item" href="{{ url('login/recruteur') }}">Espace recruteur</a>
          </li>
    </ul>
                                                
    @endif
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
