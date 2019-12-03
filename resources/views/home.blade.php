@extends('layouts.navbarCandidat')
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
                                        <h2><a href="/home">{{ Auth::user()->name }}</a></h2> <span class="jobsearch-dashboard-subtitle"></span></figcaption>
                                </figure>
                                <ul>
                                    
                                 <li class="active"> <a href="/home"> <i class="jobsearch-icon jobsearch-user"></i> Mon profil </a></li>
                                        <li> <a href="cv"> <i class="jobsearch-icon jobsearch-resume"></i> Mon CV </a></li>
                                        <li> <a href="https://marocemploi.net/user-dashboard/?tab=applied-jobs"> <i class="jobsearch-icon jobsearch-briefcase-1"></i> Offres postulées </a></li>
                                        <li> <a href="https://marocemploi.net/user-dashboard/?tab=cv-manager"> <i class="jobsearch-icon jobsearch-id-card"></i> Manager de CV </a></li>
                                        <li> <a href="https://marocemploi.net/user-dashboard/?tab=favourite-jobs"> <i class="jobsearch-icon jobsearch-heart"></i> Favorite Jobs </a></li>
                                        <li> <a href="https://marocemploi.net/user-dashboard/?tab=change-password"> <i class="jobsearch-icon jobsearch-multimedia"></i> Modifier le mot de passe </a></li>
                                        <li> <a href="https://marocemploi.net/user-dashboard/?tab=job-alerts"> <i class="jobsearch-icon jobsearch-alarm"></i> Alertes emploi </a></li>
                                    <li> <a href=""> <i class="jobsearch-icon jobsearch-briefcase-1"></i>offres publiées</a></li>
                                
                               
                            </ul>
                            </div>
                        </div>
                    </aside>

    <!-- POST A JOB START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="text-dark">General Information :</h5>
                </div>

                <div class="col-12 mt-3">
                    <div class="custom-form p-4 border rounded">
                        <form>
                            <div class="row mt-4">
                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">First Name<span class="text-danger">*</span> :</label>
                                        <input id="first-name" type="text" name="name" class="form-control resume" placeholder="First Name :">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Middle Name<span class="text-danger">*</span> :</label>
                                        <input id="middle-name" type="text" class="form-control resume" placeholder="Middle Name :">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                    <label class="text-muted">Surname<span class="text-danger">*</span> :</label>
                                        <input id="surname-name" type="text" class="form-control resume" placeholder="Surname :">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Date Of Birth<span class="text-danger">*</span> :</label>
                                        <input id="date-of-birth" type="text" class="form-control resume" placeholder="13-02-1999">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Sex<span class="text-danger">*</span> :</label>
                                        <div class="form-button">
                                            <select class="nice-select rounded">
                                                <option data-display="sex">Sex</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Marital Status</label>
                                        <div class="form-button">
                                            <select class="nice-select rounded">
                                                <option data-display="Status">Status</option>
                                                <option value="1">Unmarried</option>
                                                <option value="2">Married</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <h5 class="text-dark">Contact Information :</h5>
                </div>

                <div class="col-12 mt-3">
                    <div class="custom-form p-4 border rounded">
                        <form>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">City</label>
                                        <div class="form-button">
                                            <select class="nice-select rounded">
                                                <option data-display="City">City</option>
                                                <option value="1">Abilene</option>
                                                <option value="2">Babbitt</option>
                                                <option value="3">Cape Coral</option>
                                                <option value="4">Dallas</option>
                                                <option value="5">Eloy</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">State</label>
                                        <div class="form-button">
                                            <select class="nice-select rounded">
                                                <option data-display="State">State</option>
                                                <option value="1">Alabama</option>
                                                <option value="3">Hawaii</option>
                                                <option value="4">Maine</option>
                                                <option value="5">Oregon</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Country</label>
                                        <div class="form-button">
                                            <select class="nice-select rounded">
                                                <option data-display="Country">Country</option>
                                                <option value="1">Alabama</option>
                                                <option value="2">Delaware</option>
                                                <option value="3">Iowa</option>
                                                <option value="4">Missouri</option>
                                                <option value="5">New York</option>
                                                <option value="6">Utah</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Phone</label>
                                        <input id="phone" type="number" class="form-control resume" placeholder="Phone No. :">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">E-mail</label>
                                        <input id="e-mail" type="email" name="email" class="form-control resume" placeholder="Email ID :">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Website</label>
                                        <input id="website" type="url" name="url" class="form-control resume" placeholder="www.example.com">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label>Address :</label>
                                        <textarea id="address" rows="4" class="form-control resume" placeholder=""></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

           

    </section>
    
    <!-- CREATE RESUME END -->

    <!-- subscribe start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="float-left position-relative notification-icon mr-2">
                        <i class="mdi mdi-bell-outline text-primary"></i>
                        <span class="badge badge-pill badge-danger">1</span>
                    </div>
                    <h5 class="mt-2 mb-0">Your Job Notification</h5>
                </div>
                <div class="col-lg-8 col-md-7 mt-4 mt-sm-0">
                    <form>
                        <div class="form-group mb-0">
                            <div class="input-group mb-0">
                                <input name="email" id="email" type="email" class="form-control" placeholder="Your email :" required="" aria-describedby="newssubscribebtn">
                                <div class="input-group-append">
                                    <button class="btn btn-primary submitBnt" type="submit" id="newssubscribebtn">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
</div>
    @endsection

