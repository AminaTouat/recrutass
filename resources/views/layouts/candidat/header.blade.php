<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <!--
		Basic
	-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $user->name }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="vcard, resume, personal, card, cv, cards, portfolio,web developer,php developer,laravel,wordpress,joomal" />
    <meta name="google-site-verification" content="KRu7rdDZusMhg5DeiFq4vNJTqwiaY-Aqdruv9pE9J_8" />

    <!--
		Load Fonts
    -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="../releases/v5-0-9/css/all.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../vcard/css/styles.min.css" />
    <link rel="stylesheet" href="../vcard/css/template-colors/green.css" />
    <link href="../vendor/jquery/jquery.js" rel="stylesheet">
    
    <!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <!--
		Favicons
	-->
    {{-- <link rel="shortcut icon" href="images/favicons/favicon.ico"> --}}

</head>


        <!--
			Container
		-->
        
<!--
    Card - Started
-->
<div class="card-started" id="home-card">
    <!--
        Profile
    -->
    <div class="profile">
        <!-- profile image -->
        <div class="slide" style="background-image: url(img/bg.jpg);"></div>
        <!-- profile photo -->
        <div class="image">
            <img src="/uploads/avatar/{{ Auth::user()->avatar }}" />
            <form  action="{{route('updateM')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
    
                <label for="file" class="label-file" onchange="this.form.submit()">
                    Modifier la photo</label>
    
                   <input type="file" id="file" class="input-file" onchange="this.form.submit()" name="avatar">
                   <input type="hidden" name="_token" value="{{csrf_token()}}">
    
               </form>
                    
        </div>
       
            
       
        <!-- profile titles -->
        <div class="title">{{ $user->name }}</div>
        <div class="subtitle">Web Developer</div>
        <!-- profile socials -->
        <div class="social">
            <a target="_blank" href="{{$user->facebook}}"><span class="fab fa-facebook"></span></a>
            <a target="_blank" href="{{$user->twitter}}"><span class="fab fa-twitter"></span></a>
            <a target="_blank" href="{{$user->linkedIN}}"><i class="fab fa-linkedin-in"></i></a>
            <a target="_blank" href="{{$user->github}}"><span class="fab fa-github"></span></a>
        </div>
        <!-- profile buttons -->
        <div class="lnks">
            <a href="vcard/Jalal_CV.pdf" class="lnk">
                <span class="text">Download CV</span>
                <span class="ion ion-archive"></span>
            </a>
            <a href="#" class="lnk discover">
                <span class="text">Contact Me</span>
                <span class="arrow"></span>
            </a>
        </div>
    </div>
</div>
@yield('content')
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>