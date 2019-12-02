@extends('layouts.navbarprofile')
@extends('layouts.sidebar')
@section('content1')
@section('content')


<div class="content-wrapper"> 

            


<div class="content-header">
          <h3 class="col-sm-6"><span>Mon profil</span> </h3>
        </div>
        <div class="ed_contact_form ins">
<form method="post" action="" class="wpcf7-form inss"  enctype="multipart/form-data" style="
    padding: 20px 20px 60px 20px !important;">


 <div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 imgp">
<div id="uploadFile">
<img src="" class="img_url" alt="Logo">
<input type="file" name="imgprofil"  value="" id="img_file" onChange="img_pathUrl(this);">
</div>
  </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="form-group">
  <input class="wpcf7-form-control-wrap" type="text" name="nom" placeholder="Nom de la société *" value="" required="true">
  </div>
  <div class="form-group">
  <input class="wpcf7-form-control-wrap" type="text" name="mobile" value=""  placeholder="Numéro de téléphone *" required="true">
  </div>
    <div class="form-group">
<input class="wpcf7-form-control-wrap" type="email" name="email" value="" placeholder="Email" disabled>
</div>
  </div>
 </div>

 <div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12">


<div class="form-group">
<div class="dropdown-mul-2">
  <select required="true" placeholder="Sélectionnez le secteur : *" class="chosen-select form-control wpcf7-form" style="display:none"  multiple name="secteur[]" >
  <option value="0">Sélectionnez le secteur : *</option>
  <option value="Banque – Assurance – Finance"   >Banque – Assurance – Finance</option>
  <option value="Construction BTP" >Construction BTP</option>
  <option value="Distribution" >Distribution</option>
  <option value="Energies / Mines"    >Energies / Mines</option>
  <option value="Immobilier" >Immobilier</option>
  <option value="Industrie" >Industrie</option>
  <option value="Informatique – Télécom – Internet" >Informatique – Télécom – Internet</option>
  <option value="Media" >Media</option>
  <option value="Santé" >Santé</option>
  <option value="Services" >Services</option>
  <option value="Services publics – Administration" >Services publics – Administration</option>
  <option value="Tourisme / Hôtellerie" >Tourisme / Hôtellerie</option>
  </select>
</div>
</div>



  </div>
  <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="form-group">
  <input class="wpcf7-form-control-wrap" type="text" name="site" placeholder="Site internet" value="" >
  </div>
  </div>

    <div class="col-lg-12 col-md-12 col-sm-12">

<div class="form-group">

<textarea class="wpcf7-form-control-wrap" name="bureautique_description" placeholder="Description" value="" ></textarea>
</div>

  </div>
 </div>



 <div class="row">

<div class="col-lg-3 col-md-3 col-sm-12">
<div class="form-group">
<input class="wpcf7-form-control-wrap" type="text" name="facebook" value="" placeholder="Facebook" >
</div>
</div>

<div class="col-lg-3 col-md-3 col-sm-12">
<div class="form-group">
<input class="wpcf7-form-control-wrap" type="text" name="twitter" value="" placeholder="Twitter" > 
</div>
</div>

<div class="col-lg-3 col-md-3 col-sm-12">
<div class="form-group">
<input class="wpcf7-form-control-wrap" type="text" name="linkedin" value="" placeholder="LinkedIn" >
</div>
</div>

<div class="col-lg-3 col-md-3 col-sm-12">
<div class="form-group">
<input class="wpcf7-form-control-wrap" type="text" name="google" value="" placeholder="Google plus" >
</div>
</div>

 </div>


  <div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12">
  <div class="form-group">
  <input class="wpcf7-form-control-wrap" type="text" value="Algérie" name="pays" placeholder="Pays" >
  </div>
  <div class="form-group">
<select name="ville" class="wpcf7-form-control wpcf7-select  form-control" >
<option value="" >Wilaya</option>
<option value="Adrar"  >Adrar</option>
<option value="Chlef"  >Chlef</option>
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
<option value="Tizi Ouzou"  >Tizi Ouzou</option>
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
    <div class="col-lg-6 col-md-6 col-sm-12">

<div class="form-group">

<textarea class="wpcf7-form-control-wrap" name="adresse" value="" placeholder="Adresse complète" ></textarea>
</div>

  </div>
 </div>

  <div class="row" style="display:none;">
 <div class="col-sm-6" >
 <div class="form-group">
  <p class="gop">Saisissez votre adresse </p>
      <input class="goadrr" name="address" id="address" type="textbox"  value="Alger" placeholder="Alger" >
      <input class="gocode" type="button" value="Valider l’adresse" onclick="codeAddress()">
      <input type="hidden" name="lat"  value="" id="lat"/>
      <input type="hidden" name="lng"  value="" id="lng"/>
</div>
    </div>
 <div class="col-sm-6" >
 <div class="form-group">
<div id="map_canvas" style="height:200px;"></div>
</div>
    </div>



    </div>    





<div class="form-group">
<input type="submit" value="Modifier" class="wpcf7-form-control wpcf7-submit btn ed_btn pull-right ed_orange" id="ed_submit"><span class="ajax-loader"></span>
</div>

</form>
<p>* Champs obligatoires</p>
</div>

</div>



@endsection
@endsection