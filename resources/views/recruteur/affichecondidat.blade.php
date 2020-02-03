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
                            <a href="{{ route('afiche') }}">
                                <span class="icon ion-paintbrush"></span>
                                <span class="link">Cadidats</span>
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
            @extends('layouts.recruteur.header')
            @section('content')
            <div class="card-inner animated active" id="about-card">
                <div class="card-wrap">
                    <!-- 
						About 
					-->
                    <div class="content about">
        <div class="container opened" data-animation-in="fadeInLeft" data-animation-out="fadeOutLeft">
        
							
						</div>
						<div class="list-group">
                        <h2 class="title">liste des candidats</h2>
							<ul>
                                    @foreach ($users as $user1)
                                    <li class="list-group-item"> <img class="rounded-circle"  src="{{ asset('/uploads/avatar/'.$user1->avatar) }}"><a href="#">{{$user1->name}}</a> <small>habite à {{$user1->ville}}</small></li>
                                    @endforeach
							</ul>
						</div>
			
					</div></div>
					</div>
            <!--
                jQuery Scripts
            -->
@endsection
            <script src="../vcard/js/scripts.min.js"></script>
</body>

</html>