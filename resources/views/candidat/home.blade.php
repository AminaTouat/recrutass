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
                            <a href="/home">
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
            @extends('layouts.candidat.header')
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
                        <form action="{{route('updateC')}}" method="post">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group app-label">
                                        @if($user->prenom!=null)
                                        <label for="prenom" class="text-muted">Prénom<span
                                                class="text-danger">*</span>:</label>
                                        <input id="prenom" name="prenom" type="text" class="form-control resume"
                                            placeholder="Prénom" value="{{$user->prenom}}" disabled>
                                        @else
                                        <label for="prenom" class="text-muted">Prénom<span
                                                class="text-danger">*</span>:</label>
                                        <input id="prenom" name="prenom" type="text" class="form-control resume"
                                            placeholder="Prénom" required>
                                        @endif

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group app-label">
                                        <label for="nom" class="text-muted">Nom<span class="text-danger">*</span>
                                            :</label>
                                        <input id="nom" name="name" type="text" class="form-control resume"
                                            value="{{$user->name}}" >
                                    </div>
                                </div>


                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group app-label">
                                        @if($user->datenaiss!=null)
                                        <label for="datenaiss" class="text-muted">Date de naissance<span
                                                class="text-danger">*</span> :</label>
                                        <input id="datenaiss" name="datenaiss" type="date" class="form-control resume"
                                            placeholder="13-02-1999" value="{{$user->datenaiss}}" disabled>
                                        @else
                                        <label for="datenaiss" class="text-muted">Date de naissance<span
                                                class="text-danger">*</span> :</label>
                                        <input id="datenaiss" name="datenaiss" type="date" class="form-control resume"
                                            placeholder="13-02-1999" required>
                                        @endif

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group app-label">
                                        @if($user->sexe!=null)
                                        <label class="text-muted">Sexe<span class="text-danger">*</span>:</label>
                                        <div style="font-size: 12px;">
                                            <select class="nice-select rounded" name="sexe" disabled>
                                                <option>{{$user->sexe}}</option>
                                            </select>
                                        </div>
                                        @else
                                        <label class="text-muted">Sexe<span class="text-danger">*</span>:</label>
                                        <div style="font-size: 12px;">
                                            <select class="nice-select rounded" name="sexe" required>
                                                <option value="homme">Homme</option>
                                                <option value="femme">Femme</option>

                                            </select>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group app-label">
                                        @if($user->civilite!=null)
                                        <label class="text-muted">Civilité<span class="text-danger">*</span>:</label>
                                        <div style="font-size: 12px;">
                                            <select class="nice-select rounded" name="civilite" disabled>
                                                <option>{{$user->civilite}} </option>
                                            </select>
                                        </div>
                                        @else
                                        <label class="text-muted">Civilité<span class="text-danger">*</span>:</label>
                                        <div style="font-size: 12px;">
                                            <select class="nice-select rounded" name="civilite">
                                                <option value="Mr ">Monsieur </option>
                                                <option value="Mme">Madame</option>
                                                <option value="Mmd">Mademoiselle </option>
                                            </select>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                    </div>
                    @if($user->linkedIN==null && $user->prenom==null && $user->datenaiss==null &&
                    $user->sexe==null && $user->civilite==null)
                    <div class="content services">
                        <div class="title"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group app-label">
                                    
                                        <label  class="text-muted"> Github<span
                                                class="text-danger">*</span> :</label>
                                        <input id="github" name="github" type="url" class="form-control resume" placeholder="https://github.com/">
                                      

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group app-label">
                                    
                                        <label  class="text-muted">LinkedIn<span
                                                class="text-danger">*</span> :</label>
                                        <input id="linkedin" name="linkedin" type="url" class="form-control resume" placeholder="https://www.linkedin.com/in/">
                                      

                                    </div>
                                </div>

                                <div class="clear"></div>
                            </div>
                            @endif
                            @if($user->prenom && $user->name && $user->datenaiss && $user->sexe && $user->civilite )
                            <a href={{url('edit/'.$user->id)}} class="btn btn-primary submitBnt" type="submit" id="profil">mettre a jour</a>
                            @else
                            <button class="btn btn-primary submitBnt" type="submit" id="profil">Enregistre</button>
                            @endif
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