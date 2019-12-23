@extends('layouts.navbarCandidat')
@section('content4')

<body class="sirius com_cv view-cv layout-cv no-task itemid-116" id="view0" style="">
    <div class="jobsearch-main-content">
        <div class="jobsearch-plugin-default-container">
            <div class="user-dashboard-loader" style="display: none;"></div>
            <div class="jobsearch-row">

                <aside class="jobsearch-column-3 jobsearch-typo-wrap">
                    <div class="jobsearch-typo-wrap">
                        <div class="jobsearch-employer-dashboard-nav">
                            <figure> <a href="javascript:void(0);" class="user-dashthumb-remove jobsearch-tooltipcon"
                                    title="Supprimer" data-uid="182340" style="display: none;"><i
                                        class="fa fa-times"></i></a> <a id="com-img-holder"
                                    href="https://marocemploi.net/user-dashboard/" class="employer-dashboard-thumb">
                                    <img src="https://secure.gravatar.com/avatar/d01d152e78a12c57fe8190f26087fb8f?s=132&d=mm&r=g"
                                        alt="" style="max-width: 132px;"> </a>
                                <figcaption> <span class="fileUpLoader"></span>
                                    <div class="jobsearch-fileUpload"> <span>
                                            Télécharger la photo</span> <input type="file" id="user_avatar"
                                            name="user_avatar" class="jobsearch-upload"></div>
                                    <h2><a href="/home">{{ Auth::user()->name }}</a></h2> <span
                                        class="jobsearch-dashboard-subtitle"></span>
                                </figcaption>
                            </figure>
                            <ul>

                                <li> <a href="/home"> <i class="fas fa-user"></i> Mon profil </a></li>
                                <li class="active"> <a href="cv"><i class="fas fa-file-alt"></i>Mon CV</a></li>
                                <li> <a href=""><i class="fas fa-briefcase"></i> Offres postulées </a></li>
                                <li> <a href=""><i class="fas fa-heart"></i> Favorite Jobs </a></li>
                                <li> <a href=""> <i class="fas fa-lock"></i> Modifier le mot de passe </a>
                                </li>
                                <li> <a href=""> <i class="fas fa-bell"></i> Alertes emploi </a></li>

                            </ul>
                        </div>

                    </div>
                </aside>
                <section class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 class="text-dark">Mon CV :</h5>
                            </div>
                        </div>
                        <section class="ember-view editable-container styled spaced-top experiences">
                            <header id="ember957" class="ember-view styled bg-color-a">
                                <h3>Expériences</h3>
                                <div id="ember965" class="ember-view cv-add-button active">


                                    <span data-ember-action="967" class="inner-label">Ajouter une Expérience</span>

                                    <i id="ember966" class="ember-view fa fa-plus"></i>
                                </div>
                            </header>

                        </section>

                    </div>


                </section>
</body>
<section id="ember737" class="ember-view editable-container styled spaced-top experiences">

    <header id="ember957" class="ember-view styled bg-color-a">
    <h3>Expériences</h3>
    <div id="ember965" class="ember-view cv-add-button active">

  
  <span data-ember-action="967" class="inner-label">Ajouter une Expérience</span>

  <i id="ember966" class="ember-view fa fa-plus"></i>
</div>
</header>

<ul id="ember953" class="ember-view editable-container-container"><li id="ember1491" class="ember-view editable-view separator-top has-radius-top has-radius-bot last first"><div id="ember1520" class="ember-view display-view">
<div class="active has-padding-cv" data-ember-action="1521">
    <div class="row-fluid">
        <div class="cv-color-text row-fluid" data-bindattr-1522="1522">
            <div class="pos-relative">
                <div><h6 class="span12">fgg</h6><div id="ember1524" class="ember-view cv-edit-button active">

  
  <span data-ember-action="1526" class="inner-label">Modifier</span>

  <i id="ember1525" class="ember-view fa fa-pencil"></i>
</div></div>
                <div class="contact row-fluid">
                    <div class="span10">
                        <div>
                            
                                <div class="row-fluid">
                                    <div class="span12 reset-height ellipsis"><i class="fa fa-building-o icon-padding-left"></i>jjjj</div>
                                </div>
                                
                            
                                <div class="row-fluid">
                                    <div class="span12 reset-height ellipsis"><i class="fa fa-map-marker icon-padding-left"></i>Non renseigné</div>            
                                </div>  
                             
                        </div>
                        
                            <div class="reset-height">
                                <div class="reset-height span12">
                                    <i class="fa fa-calendar icon-width"></i> De Janvier 1998 à Janvier 2019
                                </div>
                            </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    
    <div class="cv-color-text description ellipsis hidden-phone">jjjjjjjjjj</div>
</div>
</div></li></ul>

</section>
