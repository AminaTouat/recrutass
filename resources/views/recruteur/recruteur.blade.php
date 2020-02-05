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
                            <a href="/recruteur/chartLine/year">
                                <span class="icon ion-chatbox-working"></span>
                                <span class="link">statistque (offre par an)</span>
                            </a>
                        </li>
                        <li>
<<<<<<< HEAD
                            <a href="/contact">
=======
                            <a href="/">
>>>>>>> 500ecb4c0b1514e33cf48a0334e3626fd186db51
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
                        <div class="title">profile</div>

                        
                        <!-- content -->
                        <form action="{{route('updateR')}}" method="post">
                            {{ csrf_field() }}
                            <h3 class="text-center">informations about me</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group app-label">
                                       
                                        @if($user->prenomrecru!=null)
                                    <div class="form-group app-label">

                                        <label for="prenomrecru" class="text-muted">Prénom<span class="text-danger">*</span>:</label>
                                        <input value="{{$user->prenomrecru}}" id="prenomrecru" name="prenomrecru"type="text"
                                         disabled="disabled" class="form-control resume"
                                           >

                                    </div>
                                    @else
                                    <div class="form-group app-label">

                                         <label for="prenomrecru" class="text-muted">Prénom<span
                                          class="text-danger">*</span>:</label>
                                        <input id="prenomrecru" name="prenomrecru" 
                                        type="text"  class="form-control resume"
                                               placeholder="Prénom"required>

                                </div>
                                    @endif

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group app-label">
                                        <label for="name" class="text-muted">Nom<span class="text-danger">*</span>
                                            :</label>
                                        <input id="name" name="name" type="text" class="form-control resume"
                                            value="{{$user->name}}" >
                                    </div>
                                </div>


                                <div class="clear"></div>
                            </div>
                            <div class="row">
                               
                               




                            <div class="col-md-6">
                                    <div class="form-group app-label">
                                       
                                        @if($user->emailrecru!=null)
                                    <div class="form-group app-label">

                                        <label for="emailrecru" class="text-muted">email recruteur:<span class="text-danger">*</span>:</label>
                                        <input value="{{$user->emailrecru}}" id="emailrecru" name="emailrecru"type="text"
                                         disabled="disabled" class="form-control resume"
                                           >

                                    </div>
                                    @else
                                    <div class="form-group app-label">

                                         <label for="emailrecru" class="text-muted">email recruteur:<span
                                          class="text-danger">*</span>:</label>
                                        <input id="emailrecru" name="emailrecru" 
                                        type="text"  class="form-control resume"
                                               placeholder="email recruteur"required>

                                </div>
                                    @endif

                                    </div>
                                </div>
                                






                                <div class="col-md-3">
                                    <div class="form-group app-label">
                                        @if($user->Sexe!=null)
                                        <label class="text-muted">Sexe<span class="text-danger">*</span>:</label>
                                        <div style="font-size: 12px;">
                                            <select class="nice-select rounded" name="Sexe" disabled>
                                                <option>{{$user->Sexe}}</option>
                                            </select>
                                        </div>
                                        @else
                                        <label class="text-muted">Sexe<span class="text-danger">*</span>:</label>
                                        <div style="font-size: 12px;">
                                            <select class="nice-select rounded" name="Sexe" required>
                                                <option value="homme">Homme</option>
                                                <option value="femme">Femme</option>

                                            </select>
                                        </div>
                                        @endif
                                        
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group app-label">
                                        @if($user->Civilite!=null)
                                        <label class="text-muted">Civilite<span class="text-danger">*</span>:</label>
                                        <div style="font-size: 12px;">
                                            <select class="nice-select rounded" name="Civilite" 
                                            id="Civilite" disabled>
                                                <option>{{$user->Civilite}} </option>
                                            </select>
                                        </div>
                                        @else
                                        <label class="text-muted">Civilite<span class="text-danger">*</span>:</label>
                                        <div style="font-size: 12px;">
                                            <select class="nice-select rounded" name="Civilite" id="Civilite">
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






                    <h3 class="text-center">information about our company</h3>

                    <div class="row">
                    <div class="col-md-6">
                                    <div class="form-group app-label">
                                       
                                        @if($user->nomrecru!=null)
                                    <div class="form-group app-label">

                                        <label for="nomrecru" class="text-muted">nom de la sociètè:<span class="text-danger">*</span>:</label>
                                        <input value="{{$user->nomrecru}}" id="nomrecru" name="nomrecru"type="text"
                                         disabled="disabled" class="form-control resume"
                                           >

                                    </div>
                                    @else
                                    <div class="form-group app-label">

                                         <label for="nomrecru" class="text-muted">nom de la sociètè:<span
                                          class="text-danger">*</span>:</label>
                                        <input id="nomrecru" name="nomrecru" 
                                        type="text"  class="form-control resume"
                                               placeholder="nom de la sociètè"required>

                                </div>
                                    @endif

                                    </div>
                                </div>
                                <div class="col-md-6">
                                <label for="logoo" class="text-muted">logo de la sociètè:</label>                  
                                <div class="custom-file">
                                      
            <input type="file" class="custom-file-input" name="logoo" id="logoo">
            
            <label class="custom-file-label">choose file:</label>
            
        </div>
        
                                </div>


                                <div class="clear"></div>
                            </div>


                            <div class="row">
                               
                            <div class="col-md-6">
                                    <div class="form-group app-label">
                                       
                                        @if($user->emailentre!=null)
                                    <div class="form-group app-label">

                                        <label for="emailentre" class="text-muted">email de la sociètè:<span class="text-danger">*</span>:</label>
                                        <input value="{{$user->emailentre}}" id="emailentre" name="emailentre"type="text"
                                         disabled="disabled" class="form-control resume"
                                           >

                                    </div>
                                    @else
                                    <div class="form-group app-label">

                                         <label for="emailentre" class="text-muted">email de la sociètè:<span
                                          class="text-danger">*</span>:</label>
                                        <input id="emailentre" name="emailentre" 
                                        type="text"  class="form-control resume"
                                               placeholder="email de la sociètè"required>

                                </div>
                                    @endif

                                    </div>
                                </div>
                                





                                <div class="col-md-6">
                                    <div class="form-group app-label">
                                       
                                        @if($user->adresseentre!=null)
                                    <div class="form-group app-label">

                                        <label for="adresseentre" class="text-muted">l'adresse de la sociètè:<span class="text-danger">*</span>:</label>
                                        <input value="{{$user->adresseentre}}" id="adresseentre" name="adresseentre"type="text"
                                         disabled="disabled" class="form-control resume"
                                           >

                                    </div>
                                    @else
                                    <div class="form-group app-label">

                                         <label for="adresseentre" class="text-muted">l'adresse de la sociètè:<span
                                          class="text-danger">*</span>:</label>
                                        <input id="adresseentre" name="adresseentre" 
                                        type="text"  class="form-control resume"
                                               placeholder="l'adresse de la sociètè"required>

                                </div>
                                    @endif

                                    </div>
                                </div>
                                <div class="clear"></div>
                    </div>
                    
                  







<div class="row">




                  <div class="col-md-6">
                                 <div class="form-group app-label">
                                       
                                        @if($user->telephoneentre!=null)
                                    <div class="form-group app-label">

                                        <label for="telephoneentre" class="text-muted">numéro de la sociètè:<span class="text-danger">*</span>:</label>
                                        <input value="{{$user->telephoneentre}}" id="telephoneentre" name="telephoneentre"type="text"
                                         disabled="disabled" class="form-control resume"
                                           >

                                    </div>
                                    @else
                                    <div class="form-group app-label">

                                         <label for="telephoneentre" class="text-muted">numéro de la sociètè:<span
                                          class="text-danger">*</span>:</label>
                                        <input id="telephoneentre" name="telephoneentre" 
                                        type="text"  class="form-control resume"
                                               placeholder="numéro de la sociètè"required>

                                     </div>
                                    @endif

                                </div>
                   </div>
                   <div class="col-md-6">
                   <div class="form-group app-label">
  <label for="descriptionentre">description sur la sociètè:</label>
  <textarea class="form-control" rows="1" id="descriptionentre"></textarea>
</div>
</div>


                  </div>
                  <div class="row">
                               
                            <div class="col-md-6">
                                    <div class="form-group app-label">
                                       
                                        @if($user->ville!=null)
                                    <div class="form-group app-label">

                                        <label for="ville" class="text-muted">ville:<span class="text-danger">*</span>:</label>
                                        <input value="{{$user->ville}}" id="ville" name="ville"type="text"
                                         disabled="disabled" class="form-control resume"
                                           >

                                    </div>
                                    @else
                                    <div class="form-group app-label">

                                         <label for="ville" class="text-muted">ville:<span
                                          class="text-danger">*</span>:</label>
                                        <input id="ville" name="ville" 
                                        type="text"  class="form-control resume"
                                               placeholder="ville de la sociètè"required>

                                </div>
                                    @endif

                                    </div>
                                </div></div>
                    @if($user->linkedIN==null && $user->prenomrecru==null && 
                    $user->Sexe==null && $user->Civilite==null)
                    <div class="content services">
                    <h3 class="text-center">social networks</h3>
                        <div class="title"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group app-label">
                                    
                                        <label  class="text-muted"> Facebook<span
                                                class="text-danger">*</span> :</label>
                                        <input id="facebook" name="facebook" type="url" class="form-control resume"placeholder="https://web.facebook.com/">
                                      

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group app-label">
                                    
                                        <label  class="text-muted">twitter<span
                                                class="text-danger">*</span> :</label>
                                        <input id="twitter" name="twitter" type="url" class="form-control resume" placeholder="https://twitter.com/">
                                      

                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group app-label">
                                    
                                        <label  class="text-muted">linkedIN<span
                                                class="text-danger">*</span> :</label>
                                        <input id="linkedIN" name="linkedIN" type="url" class="form-control resume" placeholder="https://twitter.com/">
                                      

                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group app-label">
                                    
                                        <label  class="text-muted">site de la sociètè:<span
                                                class="text-danger">*</span> :</label>
                                        <input id="sitewebentre" name="sitewebentre" type="url" class="form-control resume" placeholder="https://site.com/">
                                      

                                    </div>
                                </div>

                                <div class="clear"></div>
                            </div>
                           
                            @endif
                            @if($user->prenomrecru && $user->name && $user->Sexe && $user->Civilite )
                            <a href={{url('edit/'.$user->id)}} class="btn btn-primary submitBnt" type="submit" id="profil1">mettre a jour</a>
                            @else
                            <button class="btn btn-primary submitBnt" type="submit" id="profil1">Enregistre</button>
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
