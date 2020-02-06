<body>
    <div class="page">

        <!-- background -->
        <div class="background gradient">
            <ul class="bg-bubbles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <div class="container opened" data-animation-in="fadeInLeft" data-animation-out="fadeOutLeft">
            <header class="header">
                <!-- menu -->
                <div class="top-menu">
                    <ul>
                        <li class="active">
                            <a href="/recruteur">
                                <span class="icon ion-person"></span>
                                <span class="link">profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="/offre">
                                <span class="icon ion-android-list"></span>
                                <span class="link">Offre</span>
                            </a>
                        </li>
                        <li>
                            <a href="/contact">
                                <span class="icon ion-paintbrush"></span>
                                <span class="link">Works</span>
                            </a>
                        </li>
                        <li>
                            <a href="#blog-card">
                                <span class="icon ion-chatbox-working"></span>
                                <span class="link">Blog</span>
                            </a>
                        </li>
                        <li>
                            <a href="/contact">
                                <span class="icon ion-at"></span>
                                <span class="link">Contact</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <span class="icon ion-person"></span>
                                <span class="link">Déconnection</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
            </header>
            @extends('layouts.recruteur.headero')
            @section('content')

            <!-- 
				Card - About
			-->
            <div class="card-inner animated active" id="about-card">
            <div class="card-wrap">
                    <!-- 
						About 
					-->
                    <div class="content about">
                    @foreach($errors as $user)
                    <li>
                    <a href="{{ url("user/user->id") }}">{{$user->name}}</a>
                    </li>
                    @endforeach
                    </div>
                    <h1>candidats</h1>
    @if(count($errors) > 0)
        @foreach($errors as $user)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/users/{{$user->id}}">{{$errors->name}}</a></h3>
                        <small>Written on {{$user->created_at}} </small>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No posts found</p>
    @endif
                    </div>
            </div>
            @endsection
            <!--
                jQuery Scripts
            -->

            <script src="../vcard/js/scripts.min.js"></script>
</body>

</html>