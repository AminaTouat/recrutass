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
                                    
                                    <li class="active"> <a href="/profilerecruteur"> <i class="jobsearch-icon jobsearch-user"></i> Mon profil(modifier) </a></li>
                                    
                                    <li> <a href="offres_publier"> <i class="jobsearch-icon jobsearch-briefcase-1"></i>offres publiées</a></li>
                                    <li> <a href="/post-jobs"> <i class="jobsearch-icon jobsearch-briefcase-1"></i>postuler une offres</a></li>
    
                                    <li> <a href=""> <i class="jobsearch-icon jobsearch-heart"></i> Favorite condidats </a></li>
                                    <li> <a href="modifier_motdepass"> <i class="jobsearch-icon jobsearch-multimedia"></i> Modifier le mot de passe </a></li>
                                    <li> <a href="condidats post leur cv"> <i class="jobsearch-icon jobsearch-alarm"></i> les condidats postulées leur cv à une offre </a></li>
                  
                                    <li class="profile-del-btnlink">
                                    <a class="jobsearch-userdel-profilebtn"><i class="fa fa-trash-o"></i>Déconnexion </a></li>
                                </ul>
                            </div>
                        </div>
                    </aside>

    <!-- POST A JOB START -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="rounded shadow bg-white p-4">
                        <div class="custom-form">
                            <div id="message3"></div>
                            <form method="post" action="php/contact.php" name="contact-form" id="contact-form3">
                                <h4 class="text-dark mb-3">Publier une offres :</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Profession</label>
                                            <input id="company-name" type="text" class="form-control resume" placeholder="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Type d'emploi</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded">
                                                    <option data-display="Job Type">Type d'emploi</option>
                                                    <option value="1">À plein temps</option>
                                                    <option value="2">À temps partiel</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">catégorie d'emploi</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded">
                                                    <option data-display="Category">Catégorie</option>
                                                    <option value="1">Développeur web</option>
                                                    <option value="2">Développeur PHP</option>
                                                    <option value="3">Concepteur web</option>
                                                    <option value="4">Designer graphique</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Ville</label>
                                            <input id="city" type="text" class="form-control resume" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Pays</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded">
                                                    <option data-display="Country">Country</option>
                                                    <option value="1">Afghanistan</option>
                                                    <option value="2">Bangladesh</option>
                                                    <option value="3">Canada</option>
                                                    <option value="4">Dominica</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Salaire minimum</label>
                                            <input id="minimum-salary" type="text" class="form-control resume" placeholder="$8000">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Salaire Maximum</label>
                                            <input id="maximum-salary" type="text" class="form-control resume" placeholder="$20000">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">niveau d'éducation</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded">
                                                    <option data-display="Level">niveau</option>
                                                    <option value="1">niveau-1</option>
                                                    <option value="2">niveau-2</option>
                                                    <option value="3">niveau-3</option>
                                                    <option value="4">niveau-4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Année d'expérience</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded">
                                                    <option data-display="Experience">Experience</option>
                                                    <option value="1">1 année</option>
                                                    <option value="2">2 année</option>
                                                    <option value="3">3 année</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Site Internet</label>
                                            <input id="url" type="url" class="form-control resume" placeholder="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Adresse e-mail</label>
                                            <input id="email-address" type="text" class="form-control resume" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Numéro de téléphone</label>
                                            <input id="number" type="text" class="form-control resume" placeholder="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Le genre</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded">
                                                    <option data-display="Gender">Le genre</option>
                                                    <option value="1">Mâle</option>
                                                    <option value="2">Femelle</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Décalage</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded">
                                                    <option data-display="Shift">Décalage</option>
                                                    <option value="1">Matin</option>
                                                    <option value="2">Soir</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Description de l'emploi</label>
                                            <textarea id="description" rows="6" class="form-control resume" placeholder=""></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <div class="input-group mt-2 mb-2">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                        <label class="custom-file-label rounded"><i class="mdi mdi-cloud-upload mr-1"></i> Télécharger des fichiers</label>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="list-inline-item">
                                                <h6 class="text-muted mb-0">Télécharger des images ou des documents.</h6>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 mt-2">
                                        <a href="#" class="btn btn-primary">Post a Job</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- POST A JOB END -->


</div>
    @endsection

