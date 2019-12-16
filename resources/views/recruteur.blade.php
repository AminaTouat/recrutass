@extends('layouts.navbarRecruteur')
@section('content4')
<div class="jobsearch-main-content">
            <div class="jobsearch-plugin-default-container">
                <div class="user-dashboard-loader" style="display: none;"></div>
                <div class="jobsearch-row">
                    <aside class="jobsearch-column-3 jobsearch-typo-wrap">
                        <div class="jobsearch-typo-wrap">
                            <div class="jobsearch-employer-dashboard-nav">
                                <figure> <a href="javascript:void(0);" class="user-dashthumb-remove jobsearch-tooltipcon" title="Supprimer" data-uid="182340" style="display: none;"><i class="fa fa-times"></i></a> <a id="com-img-holder" href="https://marocemploi.net/user-dashboard/"
                                        class="employer-dashboard-thumb"> <img src="https://secure.gravatar.com/avatar/d01d152e78a12c57fe8190f26087fb8f?s=132&d=mm&r=g" alt="" style="max-width: 132px;"> </a>
                                    <figcaption> <span class="fileUpLoader"></span>
                                        <div class="jobsearch-fileUpload"> <span><i class="jobsearch-icon jobsearch-add"></i> Télécharger la photo</span> <input type="file" id="user_avatar" name="user_avatar" class="jobsearch-upload"></div>
                                        <h2><a href="/profilerecruteur"> {{$user->name}}  </a></h2> <span class="jobsearch-dashboard-subtitle"></span></figcaption>
                                </figure>
                                <ul>
                                    
                                    <li class="active"> <a href="/profilerecruteur"> <i class="jobsearch-icon jobsearch-user"></i> Mon profil(modifier) </a></li>
                                    
                                    <li> <a href="/offres_publier"> <i class="jobsearch-icon jobsearch-briefcase-1"></i>offres publiées</a></li>
                                    <li> <a href="/post-jobs"> <i class="jobsearch-icon jobsearch-briefcase-1"></i>postuler une offres</a></li>
    
                                    <li> <a href="/favorite_condidat"> <i class="jobsearch-icon jobsearch-heart"></i> Candidats Sélectionnés </a></li>
                                    <li> <a href="/modifier_motdepass"> <i class="jobsearch-icon jobsearch-multimedia"></i> Modifier le mot de passe </a></li>
                                    <li> <a href="/condidats post leur cv"> <i class="jobsearch-icon jobsearch-alarm"></i> Condidats qui ont postulé pour une offre </a></li>
                  
                                    
                                </ul>
                            </div>
                        </div>
                    </aside>
                    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                                        <div class="jobsearch-profile-title">
                                            <h2>Informations de base</h2>
                                        </div>
                                        <div class="jobsearch-employer-cvr-img">
                                            <figure>
                                                <div class="img-cont-sec" style="display: none;"> <a href="javascript:void(0);" class="candidate-remove-coverimg"><i class="fa fa-times"></i> Supprimer la couverture</a> <a id="com-cvrimg-holder" class="employer-dashboard-cvr"> <span style="background:url() no-repeat center/cover;"></span> </a></div>
                                                <figcaption>
                                                <span class="file-loader"></span>
                                                   </figcaption>
                                            </figure>
                                        </div>
                                   
                                               </div>
 <div class="jobsearch-employer-box-section">
                          
 <form action="{{route('updateR')}}" method="post">
                                        @csrf         
                        <div class="jobsearch-employer-box-section">
                            <div class="jobsearch-profile-title">
                                <h2>information génerales sur l'entreprise :</h2>
                            </div>
                            <ul class="jobsearch-row jobsearch-employer-profile-form" action="" method="post">
                            
                                            <li class="jobsearch-column-6"> <label>Nom:</label> <input type="text" id="name" name="name" value ="{{$user->name}}" /></li>
                                            <li class="jobsearch-column-6">    <img src="" class="img-thumbnail" alt="Cinque Terre">
                                           </li>
                                            <li class="jobsearch-column-12"> <label>Adresse</label> <input type="text" id="adresseentre" name="adresseentre" class="" placeholder="Entrer la localisation" value="{{$user->adresseentre}}"> <input id="check_loc_addr_41574973" type="hidden"
                                        value=""></li>  <li class="jobsearch-column-12"> <label>site web:</label>
                                                <div class="jobsearch-userprofile-url"> <span>https://recrutass.net/recruteur/</span><strong>mansri-sihem</strong> <input type="text" id="sitewebentre" name="sitewebentre" class="profile-slug-field" style="display: none;" name="user_profile_slug" value="{{$user->sitewebentre}}"> <a href="javascript:void(0);"
                                                        class="updte-profile-slugbtn">Modifier</a> <a href="javascript:void(0);" class="ok-profile-slugbtn" style="display: none;">Ok</a> <span class="slugchng-loder"></span></div>
                                            </li>
                                            <li class="jobsearch-column-6"> <label>email:</label>
                                            <input type="text" id="emailentre" name="emailentre" value="{{$user->emailentre}}" /> </li>
                                            <li class="jobsearch-column-6"> <label>état de l'entreprise:</label>
                                             

                               <div class="form-check form-check-inline">
                                                 <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                 <label class="form-check-label" for="inlineRadio1">publique</label>
                                                </div>
                                            <div class="form-check form-check-inline">
                                         <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                          <label class="form-check-label" for="inlineRadio2">privé</label>
                                         </div> 
                            </li>
                            <li class="jobsearch-column-6"> <label>Téléphone</label> <input value="{{$user->telephoneentre}}" onkeyup="javascript:jobsearch_is_valid_phone_number(this)" type="tel" id="telephoneentre" name="telephoneentre"></li>
                        
                           
                         
                                <li class="jobsearch-column-6"> <label>Pays*</label>
                                    <div id="jobsearch-gdapilocs-contrycon" data-val="" class="jobsearch-profile-select"> <select name="jobsearch_field_location_location1" class="countries" id="countryId"><option value="">Sélectionnez un pays</option> </select></div>
                                </li>
                                  
                              
                                <li class="jobsearch-column-6"> <label>Ville*</label>
                                    <div id="jobsearch-gdapilocs-citycon" data-val="" class="jobsearch-profile-select"> <select name="jobsearch_field_location_location3" class="cities order-alpha" id="cityId"><option value="">Sélectionnez une ville</option> </select></div>
                                </li>
                                <li class="jobsearch-column-6"> <label>Linkedin</label> <input value="" name="jobsearch_field_user_linkedin_url" type="text"></li>
                                <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label>description sur notre entreprise  :</label>
                                        <textarea id="discriptionentre" name="discriptionentre" rows="4" class="form-control resume" placeholder="" value="{{$user->discriptionentre}}"></textarea>
                                    </div>
                                </div>
                            </ul>
                            <div class="row justify-content-center">
                <div class="col-lg-10">
                                        <div class="jobsearch-profile-title">
                                            <h2>Contact Recruteur</h2>
                                        </div>
                            <ul class="jobsearch-row jobsearch-employer-profile-form">
                            <li class="jobsearch-column-6"> <label>Nom Recruteur</label> <input value="{{$user->nomrecru}}" id="nomrecru" name="nomrecru" type="text"></li>
                            <li class="jobsearch-column-6"> <label>Prenom Recruteur</label> <input value="{{$user->prenomrecru}}" id="prenomrecru" name="prenomrecru" type="text"></li>
                         
                            <li class="jobsearch-column-6"> <label>email Recruteur:</label> <input value="{{$user->emailrecru}}" id="emailrecru" name="emailrecru" type="text"></li>
                            <li class="jobsearch-column-6"> <label>Telephone Recruteur:</label> <input value="{{$user->telephonerecru}}" id="telephonerecru" name="telephonerecru" type="text"></li>
                            <li class="jobsearch-column-6"> <label>Sexe:</label> 
                            <div class="form-button">
                                                                <select class="nice-select rounded">
                                                                    <option data-display="sexe">Sexe</option>
                                                                    <option value="homme">Homme</option>
                                                                    <option value="femme">Femme</option>
            
                                                                </select>
                                                            </div>
                            </li>
                            <li class="jobsearch-column-3"> <label>Civilité:</label> 
                            <div class="form-button">
                            <div class="form-button">
                                                                <select class="nice-select rounded">                                                                   <option data-display="civilité">Civilité</option>
                                                                    <option value="Mr ">Monsieur </option>
                                                                    <option value="Mme">Madame</option>
                                                                    <option value="Mmd">Mademoiselle </option>
                                                                </select>
                                                            </div>
                            </li>
                           
                                   </ul>
                                   <button class="btn btn-primary submitBnt" type="submit">enregistrer</button>
                                        
            
                        </div>   </div>
                        </div>
                     
                     </form>   
                </div>
              
            </div>
        </div>
        @endsection