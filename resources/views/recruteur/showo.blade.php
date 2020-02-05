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
            @extends('layouts.recruteur.header')
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
                        <!-- title -->
                        <div class="title">Offres</div>
                        <!-- content -->
						<form action="{{route('offres.store')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

                          
                    </div>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show offre
              
                </h2>
            </div>
            <div class="pull-right">
          <button>      <a class="btn btn-primary" href="{{ route('recruteur.indexo') }}"> Back</a></button>
           </div>
        </div>
    </div>
   
   
            <div class="form-group">
                <strong>Title:</strong>
                {{ $offre->intitule }}
            </div>
     
     
            <div class="form-group">
                <strong>Description:</strong>
                {{ $offre->description }}
            </div>
      
 
   
            <div class="form-group">
                <strong>Contrat emploi:</strong>
                {{ $offre->Type }}
            </div>
        
     
            <div class="form-group">
                <strong>Catégorie emploi:</strong>
                {{ $offre->domaine }}
            </div>
       
            <div class="form-group">
                <strong>lieu de travail:</strong>
                {{ $offre->lieutravail }}
            </div>
      
            <div class="form-group">
                <strong>Date de clôture:</strong>
                {{ $offre->datefin }}
            </div>
        
    
            <div class="form-group">
                <strong>compétence:</strong>
                {{ $offre->compétence }}
            </div>
    
     
            <div class="form-group">
                <strong>Année Experience:</strong>
                {{ $offre->annéeExperience }}
            </div>
        
    
            <div class="form-group">
                <strong>duré emploi:</strong>
                {{ $offre->duréemploi }}
            </div>
       
       
            <div class="form-group">
                <strong>Site web d'entreprise:</strong>
                {{ $offre->url }}
            </div>
    
       <div class="form-group">
                <strong>niveau:</strong>
                {{ $offre->niveau }}
            </div>
       
            <div class="form-group">
                <strong>Salaire:</strong>
                {{ $offre->prix }}
            </div>
            <div class="form-group">
                <strong>logo entreprise:</strong>
                <img src="{{ asset('upload/logo/'.$offre->image_logo) }}">
            </div>
    @endsection
    <script src="../vcard/js/scripts.min.js"></script>
</body>

</html>