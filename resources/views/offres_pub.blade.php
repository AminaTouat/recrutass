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
                                    
                                    <li> <a href="active"> <i class="jobsearch-icon jobsearch-briefcase-1"></i>offres publiées</a></li>
                                    <li> <a href="/post-jobs"> <i class="jobsearch-icon jobsearch-briefcase-1"></i>postuler une offres</a></li>
    
                                    <li> <a href="/favorite_condidat"> <i class="jobsearch-icon jobsearch-heart"></i> Favorite condidats </a></li>
                                    <li> <a href="/modifier_motdepass"> <i class="jobsearch-icon jobsearch-multimedia"></i> Modifier le mot de passe </a></li>
                                    <li> <a href="/condidats post leur cv"> <i class="jobsearch-icon jobsearch-alarm"></i> Condidats qui ont postulé pour une offre  </a></li>
                  
                                     </ul>
                            </div>
                        </div>
                    </aside>
                    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="jobsearch-profile-title"><h2>Offres postulées</h2></div><p>Aucun enregistrement trouvé.</p></div>
</div></div></div>
</div></div></div>
@endsection