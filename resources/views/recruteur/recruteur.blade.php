


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
                                <span class="link">About</span>
                            </a>
                        </li>
                        <li>
                            <a href="/cv">
                                <span class="icon ion-android-list"></span>
                                <span class="link">Resume</span>
                            </a>
                        </li>
                        <li>
                            <a href="#works-card">
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
                            <a href="#contacts-card">
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
                        <div class="title">About Me</div>
                        <!-- content -->
                        <form action="{{route('updateR',$user->id)}}" method="post">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                     
                                    <div class="form-group app-label">

                                         <label for="prenomrecru" class="text-muted">Prénom<span class="text-danger">*</span>:</label>
                                        <input id="prenomrecru" name="prenomrecru" type="text"  class="form-control resume"
                                               placeholder="Prénom"required>

                                </div>
                                   
                                <div class="col-md-6">
                                    <div class="form-group app-label">
                                        <label for="nom" class="text-muted">Nom<span class="text-danger">*</span>
                                            :</label>
                                        <input id="nom" name="name" type="text" class="form-control resume"
                                            value="{{$user->name}}" disabled="disabled">
                                    </div>
                                </div>


                                <div class="clear"></div>
                            </div>
                            <div class="row">
                             
                           
                                <div class="col-md-3">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Sexe<span class="text-danger">*</span>:</label>
                                        <div style="font-size: 12px;">
                                            <select class="nice-select rounded"  name="Sexe" id="Sexe" required>
                                                <option data-display="sexe">Sexe</option>
                                                <option value="homme">Homme</option>
                                                <option value="femme">Femme</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                             
                                <div class="col-md-3">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Civilité<span class="text-danger">*</span>:</label>
                                        <div style="font-size: 12px;">
                                            <select class="nice-select rounded"  name="Civilité" id="Civilité" required>
                                                <option data-display="civilité">Civilité</option>
                                                <option value="Mr ">Monsieur </option>
                                                <option value="Mme">Madame</option>
                                                <option value="Mmd">Mademoiselle </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="clear"></div>
                            </div>
                
                            <button class="btn btn-primary submitBnt" type="submit">enregistrer</button>
                        </form>
                    </div>


                </div>
            </div>
            @endsection
            <!--
                jQuery Scripts
            -->

            <script src="../vcard/js/scripts.min.js"></script>
</body>

</html>
