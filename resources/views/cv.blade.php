@extends('layouts.navbarCandidat')
@section('content4')
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
                                href="https://marocemploi.net/user-dashboard/" class="employer-dashboard-thumb"> <img
                                    src="https://secure.gravatar.com/avatar/d01d152e78a12c57fe8190f26087fb8f?s=132&d=mm&r=g"
                                    alt="" style="max-width: 132px;"> </a>
                            <figcaption> <span class="fileUpLoader"></span>
                                <div class="jobsearch-fileUpload"> <span><i class="jobsearch-icon jobsearch-add"></i>
                                        Télécharger la photo</span> <input type="file" id="user_avatar"
                                        name="user_avatar" class="jobsearch-upload"></div>
                                <h2><a href="/home">{{ Auth::user()->name }}</a></h2> <span
                                    class="jobsearch-dashboard-subtitle"></span>
                            </figcaption>
                        </figure>
                        <ul>

                            <li> <a href="/home"> <i class="jobsearch-icon jobsearch-user"></i> Mon profil </a></li>
                            <li class="active"> <a href="cv"> <i class="jobsearch-icon jobsearch-resume"></i> Mon CV
                                </a></li>
                            <li> <a href="https://marocemploi.net/user-dashboard/?tab=applied-jobs"> <i
                                        class="jobsearch-icon jobsearch-briefcase-1"></i> Offres postulées </a></li>
                            <li> <a href="https://marocemploi.net/user-dashboard/?tab=cv-manager"> <i
                                        class="jobsearch-icon jobsearch-id-card"></i> Manager de CV </a></li>
                            <li> <a href="https://marocemploi.net/user-dashboard/?tab=favourite-jobs"> <i
                                        class="jobsearch-icon jobsearch-heart"></i> Favorite Jobs </a></li>
                            <li> <a href="https://marocemploi.net/user-dashboard/?tab=change-password"> <i
                                        class="jobsearch-icon jobsearch-multimedia"></i> Modifier le mot de passe </a>
                            </li>
                            <li> <a href="https://marocemploi.net/user-dashboard/?tab=job-alerts"> <i
                                        class="jobsearch-icon jobsearch-alarm"></i> Alertes emploi </a></li>
                            <li> <a href=""> <i class="jobsearch-icon jobsearch-briefcase-1"></i>offres publiées</a>
                            </li>


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

                        <div class="col-12 mt-3">
                            <div class="custom-form p-4 border rounded">
                                <form>
                                <div class="custom-form p-4 border rounded">
                                    <div class="row mt-4">
                                        <div class="col-md-4">
                                            <div class="form-group app-label">
                                                <label class="text-muted"> <b> LETTRE DE MOTIVATION</b><span
                                                        class="text-danger">*</span> : </label>
                                                <textarea class="wp-editor-area" style="height: 150px"
                                                    autocomplete="off" cols="70"
                                                    name="jobsearch_field_resume_cover_letter"
                                                    id="jobsearch_field_resume_cover_letter">
                                         </textarea>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-form p-4 border rounded">
                                    <div class="row mt-4">
                                        <div class="col-md-6">
                                            <div class="form-group app-label">
                                                <label class="text-muted"> <b> COMPÉTENCES </b><span
                                                        class="text-danger">*</span> :</a> </label>
                                                <input type="text" class="form-control">

                                            </div>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="custom-form p-4 border rounded">
                                    <div class="row mt-4">
                                        <div class="col-md-4">
                                            <div class="form-group app-label">
                                                <label class="text-muted"> <b> FORMATION </b><span
                                                        class="text-danger">*</span>
                                                    :</a> </label>


                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group app-label">
                                                <button type="button" class="btn btn-primary submitBnt" data-toggle="modal"
                                                    data-target="#myModal">Ajouter une Formation</button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="myModal" role="dialog">
                                                    <div class="modal-dialog">

                                                    <div class="col-12 mt-3">
                    <div class="custom-form p-4 border rounded">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Graduation</label>
                                        <input id="graduation" type="text" class="form-control resume" placeholder="">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group app-label">
                                        <label class="text-muted">University/College</label>
                                        <input id="university/college" type="text" class="form-control resume" placeholder="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Degree/Certification</label>
                                        <input id="degree/certification" type="text" class="form-control resume" placeholder="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group app-label">
                                                <label class="text-muted">Level</label>
                                                <div class="form-button">
                                                    <select class="nice-select rounded">
                                                        <option data-display="Select">Select</option>
                                                        <option value="1">Level-1</option>
                                                        <option value="2">Level-2</option>
                                                        <option value="3">Level-3</option>
                                                        <option value="4">Level-4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group app-label">
                                                <label class="text-muted">Course Title</label>
                                                <input id="course-title" type="text" class="form-control resume" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary submitBnt" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>

                    @endsection
