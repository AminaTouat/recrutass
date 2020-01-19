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
            <h2>Create New Offres</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('recruteur.indexo') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Warning!</strong> Please check your input code<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="#" method="POST">
    @csrf
 
     <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" id="intitule" name="intitule" class="form-control" placeholder="intitule">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:280px" id="description" name="description" placeholder="Description"></textarea>
            </div>
        </div>
       
    </div>
    <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contrat emploi:</strong>
               
									<select id="Type"  class="form-control jform-chosen-validate" required aria-required="true" name="Type" data-placeholder="Choisir Contrat emploi">
										<option value="112"  class="112" >cdd</option>
										<option value="69"  class="69" >cdi</option>
										<option value="150"  class="150" >Stage</option>
							</select></div>
        </div>
    </div>

  
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Catégorie emploi:</strong>		<select id="domaine"  class="form-control form-control-chosen ignore-valid jform-chosen-validate" required aria-required="true" name="domaine" data-placeholder="Choisir Catégorie emploi">
										<option value="239"  class="239" >Administratif</option>
										<option value="164"  class="164" >Aéronautique</option>
										<option value="192"  class="192" >Agriculture</option>
										<option value="124"  class="124" >Agro-alimentaire</option>
										<option value="13697"  class="13697" >Animation</option>
										<option value="207"  class="207" >Architecture</option>
										<option value="193"  class="193" >Artisanat</option>
										<option value="183"  class="183" >Assistante de direction</option>
										<option value="279"  class="279" >Assurances</option>
										<option value="280"  class="280" >Audiovisuel</option>
										<option value="201"  class="201" >Audit</option>
										<option value="165"  class="165" >Automobile</option>
										<option value="73"  class="73" >Autres</option>
										<option value="292"  class="292" >Aviation</option>
										<option value="184"  class="184" >Banque</option>
										<option value="85"  class="85" >Biologie</option>
										<option value="236"  class="236" >Call Center</option>
										<option value="76"  class="76" >Chimie</option>
										<option value="131"  class="131" >Commerce</option>
										<option value="231"  class="231" >Communication</option>
										<option value="67"  class="67" >Comptabilité</option>
										<option value="408"  class="408" >Confection</option>
										<option value="513"  class="513" >Consulting</option>
										<option value="155"  class="155" >Cosmétique</option>
										<option value="200"  class="200" >Cuisine</option>
										<option value="202"  class="202" >Décor</option>
										<option value="185"  class="185" >Documentation</option>
										<option value="198"  class="198" >Droit</option>
										<option value="194"  class="194" >Economie</option>
										<option value="149"  class="149" >Energie</option>
										<option value="86"  class="86" >Enseignement</option>
										<option value="191"  class="191" >Finance</option>
										<option value="180"  class="180" >Fiscalité</option>
										<option value="87"  class="87" >Fonction Publique</option>
										<option value="14989"  class="14989" >Formation</option>
										<option value="82"  class="82" >Génie civil</option>
										<option value="252"  class="252" >Génie électrique</option>
										<option value="98"  class="98" >Gestion</option>
										<option value="348"  class="348" >Hydraulique</option>
										<option value="384"  class="384" >Immobilier</option>
										<option value="488"  class="488" >Import / Export</option>
										<option value="77"  class="77" >Industrie électro-mécaniques</option>
										<option value="78"  class="78" >Industrie Métalliques</option>
										<option value="63"  class="63" >Informatique</option>
										<option value="83"  class="83" >Journalisme</option>
										<option value="206"  class="206" >Langues</option>
										<option value="244"  class="244" >Logistique</option>
										<option value="241"  class="241" >Maintenance industrielle</option>
										<option value="233"  class="233" >Management</option>
										<option value="163"  class="163" >Marketing</option>
										<option value="373"  class="373" >Physique</option>
										<option value="438"  class="438" >Plasturgie</option>
										<option value="230"  class="230" >Production</option>
										<option value="205"  class="205" >Psychologie</option>
										<option value="226"  class="226" >Rédaction</option>
										<option value="101"  class="101" >Ressources Humaines</option>
										<option value="84"  class="84" >Santé</option>
										<option value="227"  class="227" >Sécurité</option>
										<option value="228"  class="228" >Sport</option>
										<option value="235"  class="235" >Statistiques</option>
										<option value="197"  class="197" >Telecommunication</option>
										<option value="204"  class="204" >Textile</option>
										<option value="152"  class="152" >Tourisme</option>
										<option value="199"  class="199" >Traduction</option>
										<option value="68"  class="68" >Transport</option>
							</select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>lieu de travail:</strong>
                <input type="text" id="lieutravail" name="lieutravail" class="form-control" placeholder="lieutravail">
                </div>
        </div>
      
    </div>
  
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date de clôture de cet emploi:</strong>
                <input type="text" id="datefin" name="datefin" class="form-control" placeholder="datefin">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Compétence:</strong>
                <input type="text" id="compétence" name="compétence" class="form-control" placeholder="compétence">
                </div>
        </div>
        
    </div>
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Année d'experience:</strong>
                <input type="text" id="annéeExperience" name="annéeExperience" class="form-control" placeholder="annéeExperience">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Durée du travail:</strong>
                <input type="text" id="duréemploi"name="duréemploi" class="form-control" placeholder="duréemploi">
                </div>
        </div>
        
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Site web d'entreprise:</strong>
                <input type="text" id="url" name="url" class="form-control" placeholder="//http...">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>niveau d'éducation:</strong>
                <input type="text" id="niveau" name="niveau" class="form-control" placeholder="niveau">
                </div>
        </div>
     
        
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>salaire :</strong>
                <input type="text" id="prix" name="prix" class="form-control" placeholder="20000.0000DA">
            </div>
        </div>
       </div>
     
       <div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="group-input">
            <div class="custom-file">
            <input type="file" class="custom-file-input" name="image_logo">
            
            <label class="custom-file-label">choose file:</label>
            <form  action="{{route('offres.create')}}" method="post">
            
        </div>
        </div>
        </div>  </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        
</form>

            <!--
                jQuery Scripts
            -->
@endsection
            <script src="../vcard/js/scripts.min.js"></script>
</body>

</html>