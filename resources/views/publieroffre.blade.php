@extends('layouts.navbarprofile')
@extends('layouts.sidebar')
@section('content1')
@section('content')

<div class="content-wrapper" style="padding: 20px 20px 60px 20px !important;"> 

            <div class="content-header">
<div class="col-lg-8 col-md-8 col-sm-12 main-cont ins"> 

<div class="ed_heading_top ed_bottompadder50">
          <h3 class="2"><span>Publier une offre</span> </h3>
        </div>

<div style="clear:both;"></div>

<form method="post" action="" class="wpcf7-form inss"  enctype="multipart/form-data">

 <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="form-group">
  <input class="wpcf7-form-control-wrap" type="text" name="titre" placeholder="Titre de l'offre *" required="true">
  </div>
      <div class="form-group">
<!--<textarea class="wpcf7-form-control-wrap" name="description" placeholder="Texte de l'annonce *" value="" required="true">Texte de l'annonce</textarea>-->
<div id="wp-my_frontend_editor-wrap" class="wp-core-ui wp-editor-wrap tmce-active"><link rel='stylesheet' id='dashicons-css'  href='https://emploinet.info/wp-includes/css/dashicons.min.css?ver=5.0.7' type='text/css' media='all' />
<link rel='stylesheet' id='editor-buttons-css'  href='https://emploinet.info/wp-includes/css/editor.min.css?ver=5.0.7' type='text/css' media='all' />
<div id="wp-my_frontend_editor-editor-tools" class="wp-editor-tools hide-if-no-js"><div class="wp-editor-tabs"><button type="button" id="my_frontend_editor-tmce" class="wp-switch-editor switch-tmce" data-wp-editor-id="my_frontend_editor">Visuel</button>
<button type="button" id="my_frontend_editor-html" class="wp-switch-editor switch-html" data-wp-editor-id="my_frontend_editor">Texte</button>
</div>
</div>
<div id="wp-my_frontend_editor-editor-container" class="wp-editor-container"><div id="qt_my_frontend_editor_toolbar" class="quicktags-toolbar"></div><textarea class="wp-editor-area" rows="10" autocomplete="off" cols="40" name="description" id="my_frontend_editor">Texte de l'annonce </textarea></div>
</div>

  </div>

  </div>
 </div>


<div class="row">

    <div class="col-lg-6 col-md-6 col-sm-12">

  <div class="form-group">
  <input class="wpcf7-form-control-wrap" type="email" name="email_candidature" placeholder="Email de réception des CV" >
  </div>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-12">
  <div class="form-group">
<input class="wpcf7-form-control-wrap" type="email" name="email" value="" placeholder="Email" disabled>
</div>
  </div>


 </div>

 <div class="row">
 <div class="col-lg-6 col-md-6 col-sm-12">
   <div class="form-group">
  <input class="wpcf7-form-control-wrap" type="text" name="postes" placeholder="Nombre de postes *" required="true">
  </div>
 </div>
  <div class="col-lg-6 col-md-6 col-sm-12">


<div class="form-group">

  <select required="true" placeholder="Type de poste *" class="chosen-select form-control wpcf7-form"  name="contrat" >
  <option value="">Type de poste *</option>
  <option value="CDI">CDI</option>
  <option value="CDD">CDD</option>
  <option value="Indépendant / Freelance">Indépendant / Freelance</option>
  <option value="Stage">Stage</option>
 
  </select>

</div>



  </div>

 </div>




<div class="row">

<div class="col-lg-6 col-md-6 col-sm-12">
<div class="form-group">

<div class="dropdown-mul-2">
  <select required="true" placeholder="Sélectionnez la fonction : *" class="chosen-select form-control wpcf7-form" style="display:none"  multiple name="fonction[]" >
  <option value="0">Sélectionnez la fonction : *</option>
  <option value="Administration - Services généraux"   >Administration - Services généraux</option>
  <option value="Audit" >Audit</option>
  <option value="Commercial - Vente" >Commercial - Vente</option>
  <option value="Communication - Création"    >Communication - Création</option>
  <option value="Conseil" >Conseil</option>
  <option value="Direction générale - Direction centre de profits" >Direction générale - Direction centre de profits</option>
  <option value="Etudes - Recherche" >Etudes - Recherche</option>
  <option value="Import - Export" >Import - Export</option>
  <option value="Gestion - Comptabilité - Finance" >Gestion - Comptabilité - Finance</option>
  <option value="Internet - e-Commerce" >Internet - e-Commerce</option>
  <option value="Juridique Fiscal" >Juridique Fiscal</option>
  <option value="Logistique - Achat - Stock - Transport" >Logistique - Achat - Stock - Transport</option>
  <option value="Marketing" >Marketing</option>
  <option value="Production - Maintenance - Qualité - Sécurité - Environnement" >Production - Maintenance - Qualité - Sécurité - Environnement</option>
  <option value="Ressources Humaines - Personnel - Formation" >Ressources Humaines - Personnel - Formation</option>
  <option value="Santé (Industrie)" >Santé (Industrie)</option>
  <option value="Santé (Médical) - Social" >Santé (Médical) - Social</option>
  <option value="Systèmes d'informations – Télécom" >Systèmes d'informations – Télécom</option>
  </select>
</div>



</div>
</div>

 <div class="col-lg-6 col-md-6 col-sm-12">
<div class="form-group">
<input class="wpcf7-form-control-wrap" type="text" name="salaire" placeholder="Salaire DZ" > 
</div>
</div>



 </div>


  <div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12">
  <div class="form-group">
    <select required="true" placeholder="Niveau *" class="chosen-select form-control wpcf7-form"  name="for" >
    <option value="">Niveau de formation *</option>
  <option value="Niveau secondaire">Niveau secondaire</option>
  <option value="Niveau terminal">Niveau terminal</option>
  <option value="BAC">BAC</option>
  <option value="BAC + 1">BAC + 1</option>
  <option value="BAC + 2">BAC + 2</option>
  <option value="BAC + 3">BAC + 3</option>
  <option value="BAC + 4">BAC + 4</option>
  <option value="BAC + 5">BAC + 5</option>
  <option value=">BAC + 5">>BAC + 5</option>
  </select>
  </div>


  </div>
    <div class="col-lg-6 col-md-6 col-sm-12">

  <div class="form-group">
    <select required="true" placeholder="Expérience *" class="chosen-select form-control wpcf7-form"  name="exp" >
    <option value="">Expérience *</option>
  <option value="Sans expérience">Sans expérience</option>
  <option value="Moins de un an">Moins de un an</option>
   <option value="1 à 2 ans">1 à 2 ans</option>
   <option value="3 à 5 ans">3 à 5 ans</option>
  <option value="6 à 10 ans">6 à 10 ans</option>
   <option value="Plus de 10 ans">Plus de 10 ans</option>




  </select>
</div>

  </div>
 </div>

  <div class="row" >
 <div class="col-sm-12" >
 <div class="form-group">
  <select required="true" placeholder="Sélectionnez la fonction : *" class="form-control wpcf7-form" name="civ" >
  <option value="0">Genre : </option>
  <option value="Homme"  >Homme</option>
  <option value="Femme"  >Femme</option>
   <option value="Homme / Femme"  >Homme / Femme</option>
  
  </select>
</div>
    </div>


    </div>    

  <div class="row" >
 <div class="col-sm-12" >
 <div class="form-group">
 Date d'experation de l'offre : 
<input class="wpcf7-form-control-wrap" type="date" name="expire" placeholder="Date d'experation de l'offre" >
</div>
    </div>


    </div>   

 <div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12">
  <div class="form-group">
  <input class="wpcf7-form-control-wrap" type="text"  value="Algérie" name="pays" placeholder="Pays *" required="true">
  </div>


  </div>
    <div class="col-lg-6 col-md-6 col-sm-12">

  <div class="form-group">
<div class="dropdown-mul-2">
  <select required="true" placeholder="Sélectionnez la wilaya : *" class="chosen-select form-control wpcf7-form" style="display:none"  multiple name="region[]" >

<option value="" >Wilaya *</option>
<option value="Adrar"  >Adrar</option>
<option value="Chlef"  >El-Chlef</option>
<option value="Laghouat"  >Laghouat</option>
<option value="Oum El Bouaghi"  >Oum El Bouaghi</option>
<option value="Batna"  >Batna</option>
<option value="Béjaïa"  >Béjaïa</option>
<option value="Biskra"  >Biskra</option>
<option value="Béchar"  >Béchar</option>
<option value="Blida"  >Blida</option>
<option value="Bouira"  >Bouira</option>
<option value="Tamanrasset"  >Tamanrasset</option>
<option value="Tébessa"  >Tébessa</option>
<option value="Tlemcen"  >Tlemcen</option>
<option value="Tiaret"  >Tiaret</option>
<option value="Tizi Ouzou"  >Tizi-Ouzou</option>
<option value="Alger"  >Alger</option>
<option value="Djelfa"  >Djelfa</option>
<option value="Jijel"  >Jijel</option>
<option value="Sétif"  >Sétif</option>
<option value="Saïda"  >Saïda</option>
<option value="Skikda"  >Skikda</option>
<option value="Sidi Bel Abbès"  >Sidi Bel Abbès</option>
<option value="Annaba"  >Annaba</option>
<option value="Guelma"  >Guelma</option>
<option value="Constantine"  >Constantine</option>
<option value="Médéa"  >Médéa</option>
<option value="Mostaganem"   >Mostaganem</option>
<option value="M'Sila"   >M'Sila</option>
<option value="Mascara"   >Mascara</option>
<option value="Ouargla"   >Ouargla</option>
<option value="Oran"  >Oran</option>
<option value="El Bayadh"  >El Bayadh</option>
<option value="Illizi"  >Illizi</option>
<option value="Bordj Bou Arreridj"  >Bordj Bou Arreridj</option>
<option value="Boumerdès"   >Boumerdès</option>
<option value="El Tarf"   >El Tarf</option>
<option value="Tindouf"   >Tindouf</option>
<option value="Tissemsilt"   >Tissemsilt</option>
<option value="El Oued"   >El Oued</option>
<option value="Khenchela"   >Khenchela</option>
<option value="Souk Ahras"   >Souk Ahras</option>
<option value="Tipaza"   >Tipaza</option>
<option value="Mila"   >Mila</option>
<option value="Aïn Defla"   >Aïn Defla</option>
<option value="Naâma"   >Naâma</option>
<option value="Aïn Témouchent"   >Aïn Témouchent</option>
<option value="Ghardaïa"   >Ghardaïa</option>
<option value="Relizane"   >Relizane</option></select>
</div>


</div>

  </div>
 </div>

   <div class="row" >
 <div class="col-sm-12" >
 <div class="form-group">
<textarea class="wpcf7-form-control-wrap" type="text" name="link" placeholder="Rediriger le candidat vers un lien pour postuler sur un autre site" >
  Rediriger le candidat vers un lien pour postuler sur un autre site
</textarea> 
</div>
    </div>
    </div>  


<div class="form-group">
<input type="submit" value="Publier l'offre" class="wpcf7-form-control wpcf7-submit btn ed_btn pull-right ed_orange" id="ed_submit"><span class="ajax-loader"></span>
</div>

</form>
<p>* Champs obligatoires</p>
























</div>


</div>






@endsection
@endsection