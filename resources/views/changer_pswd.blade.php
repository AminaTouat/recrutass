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
                                        <h2><a href="/profilerecruteur">recruteur.technalab</a></h2> <span class="jobsearch-dashboard-subtitle"></span></figcaption>
                                </figure>
                                <ul>
                                    
                                    <li class="/profilerecruteur"> <a href="/profilerecruteur"> <i class="jobsearch-icon jobsearch-user"></i> Mon profil(modifier) </a></li>
                                    
                                    <li> <a href="/offres_publier"> <i class="jobsearch-icon jobsearch-briefcase-1"></i>offres publiées</a></li>
                                    <li> <a href="/post-jobs"> <i class="jobsearch-icon jobsearch-briefcase-1"></i>postuler une offres</a></li>
    
                                    <li> <a href="/favorite_condidat"> <i class="jobsearch-icon jobsearch-heart"></i> Candidats Sélectionnés </a></li>
                                    <li> <a href="active"> <i class="jobsearch-icon jobsearch-multimedia"></i> Modifier le mot de passe </a></li>
                                    <li> <a href="/condidats post leur cv"> <i class="jobsearch-icon jobsearch-alarm"></i>Condidats qui ont postulé pour une offre </a></li>
                  
                                    </ul>
                            </div>
                        </div>
                    </aside>
                    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                            <div class="jobsearch-typo-wrap">
                                <form class="jobsearch-employer-dasboard" method="post" action="https://marocemploi.net/user-dashboard/?tab=change-password">
                                    <div class="jobsearch-employer-box-section">
                                        <div class="jobsearch-profile-title">
                                            <h2>Modifier le mot de passe</h2>
                                        </div>
                                        <ul class="jobsearch-row jobsearch-employer-profile-form">
                                            <li class="jobsearch-column-6"> <label>Ancien mot de passe*</label> <input value="Password" type="password" name="old_pass"></li>
                                            <li class="jobsearch-column-6"> <label>Nouveau mot de passe *</label> <input value="Password" class="jobsearch_chk_passfield" type="password" name="new_pass"> <span class="passlenth-chk-msg"></span></li>
                                        </ul>
                                    </div> <input type="hidden" name="user_password_change_form" value="1"> <input type="submit" class="jobsearch-employer-profile-submit jobsearch-regpass-frmbtn jobsearch-disable-btn" disabled value="Mettre à jour le mot de passe"></form>
                            </div>
                        </div>
                    </div>
                    </div>
                        </div>
                    </div>
                    </div>
                        </div>
                    </div>
                                </div>


@endsection