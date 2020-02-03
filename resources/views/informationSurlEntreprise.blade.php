@extends('layouts.navbarindex')
@section('content4')
@extends('layouts.headerindex')
@section('content5')

<section class="section">
    
        <div class="container">
        
            <div class="row">
            
                <div class="col-lg-12 mt-4 pt-2">
                    <h4>détaile d'offre  {{$offres->intitule}}:</h4>
                    <div class="rounded border p-4 mt-3">
                    <div class="img_side ">
     <img style="height:120px" src="{{asset('upload/logo/'.$offres->image_logo)}}" />
					
                        </div>
              <div class="info_div">
                       <div class="item">
                    <strong>
                                                Offre d'emploi :                                             </strong>
                    <span itemprop="title">    {{$offres->intitule}}                </span>
                </div>
                <div class="item">
                    <strong>
                                                Type de contrat :                                             </strong>
                    <span itemprop="title">    {{$offres->Type}}                </span>
                </div>
                <div class="item">
                    <strong>
                                                Durée de contrat :                                             </strong>
                    <span itemprop="title">    {{$offres->duréemploi}}                </span>
                </div>
                <div class="item">
                    <strong>
                                                domaine de contrat :                                             </strong>
                    <span itemprop="title">    {{$offres->domaine}}                </span>
                </div>
                <div class="item">
                    <strong>
                    Localisation :                                            </strong>
                    <span itemprop="title">    {{$offres->lieutravail}}                </span>
                </div>
                <div class="item">
                    <strong>
                    Année d'expérience requise  :                                             </strong>
                    <span itemprop="title">    {{$offres->annéeExperience}}                </span>
                </div>
                <div class="item">
                    <strong>
                    Compétence requise  :                                             </strong>
                    <span itemprop="title">    {{$offres->compétence}}                </span>
                </div>
                <div class="item">
                    <strong>
                    Formation requise  :                                             </strong>
                    <span itemprop="title">    {{$offres->niveau}}                </span>
                </div>
                <div class="item">
                    <strong>
                    Salaire  :                                             </strong>
                    <span itemprop="title">    {{$offres->prix}}                </span>
                </div>
                <div class="item">
                    <strong>
                    Date de fin de la demande des candidats  :                                             </strong>
                    <span itemprop="title">    {{$offres->datefin}}                </span>
                </div>
              
                </div>
                
                        <div><label><strong>description:</strong></label>
                        <p class="text-muted"><i class="mdi mdi-check text-success"></i> {{$offres->description}}</p>
                  
                      </div>
                        </div>
                       
                      <button type="button" class="btn btn-primary" style="margin-left:970px">Postulé</button>
              
                </div>
            
            </div>


            <div class="col-lg-9 col-md-8">
            <div class="section-title text-center mb-4 pb-2">
            <h4 class="title title-line pb-5">candidats ayant postulé</h4>
            </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="employers-list position-relative pb-3 pt-3 pl-2 pr-2 border rounded">
                    <img src="images/employers/img-1.jpg" alt="" class="mx-auto d-block shadow border rounded-circle" height="90">
                    <div class="grid-list-desc text-center mt-3">
                        <h5 class="mb-2"><a href="#" class="text-dark name">Kyle Jones</a></h5>
                        <p class="text-muted mb-0">Web Delveloper</p>
                        <p class="text-muted mb-0"><i class="mdi mdi-map-marker mr-2"></i>419 Lakeland Terrace Detroit, MI 48226</p>
                        <ul class="employers-icons list-inline mb-1">
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item badge badge-success text-white">4.9</li>
                        </ul>
                    </div>
                    <div class="apply-button text-center mt-3">
                        <a href="#" class="btn btn-primary btn-sm">View Profile</a>
                    </div>
                    <div class="fav-collection fav-icon">
                        <i class="mdi mdi-heart" title="Collect Now"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="employers-list position-relative pb-3 pt-3 pl-2 pr-2 border rounded">
                    <img src="images/employers/img-2.jpg" alt="" class="mx-auto d-block shadow border rounded-circle" height="90">
                    <div class="grid-list-desc text-center mt-3">
                        <h5 class="mb-2"><a href="#" class="text-dark name">Susan Roth</a></h5>
                        <p class="text-muted mb-0">PHP Delveloper</p>
                        <p class="text-muted mb-0"><i class="mdi mdi-map-marker mr-2"></i>2984 Woodhill Avenue Easton, MD 21601</p>
                        <ul class="employers-icons list-inline mb-1">
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star-half"></i></a></li>
                            <li class="list-inline-item badge badge-success text-white">4.5</li>
                        </ul>
                    </div>
                    <div class="apply-button text-center mt-3">
                        <a href="#" class="btn btn-primary btn-sm">View Profile</a>
                    </div>
                    <div class="fav-collection fav-icon">
                        <i class="mdi mdi-heart" title="Collect Now"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="employers-list position-relative pb-3 pt-3 pl-2 pr-2 border rounded">
                    <img src="images/employers/img-3.jpg" alt="" class="mx-auto d-block shadow border rounded-circle" height="90">
                    <div class="grid-list-desc text-center mt-3">
                        <h5 class="mb-2"><a href="#" class="text-dark name">Ricky Cash</a></h5>
                        <p class="text-muted mb-0">UI/UX Designer</p>
                        <p class="text-muted mb-0"><i class="mdi mdi-map-marker mr-2"></i>2683 Farland Street Chicago, IL 60631</p>
                        <ul class="employers-icons list-inline mb-1">
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star-outline"></i></a></li>
                            <li class="list-inline-item badge badge-success text-white">4.0</li>
                        </ul>
                    </div>
                    <div class="apply-button text-center mt-3">
                        <a href="#" class="btn btn-primary btn-sm">View Profile</a>
                    </div>
                    <div class="fav-collection fav-icon">
                        <i class="mdi mdi-heart" title="Collect Now"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="employers-list position-relative pb-3 pt-3 pl-2 pr-2 border rounded">
                    <img src="images/employers/img-4.jpg" alt="" class="mx-auto d-block shadow border rounded-circle" height="90">
                    <div class="grid-list-desc text-center mt-3">
                        <h5 class="mb-2"><a href="#" class="text-dark name">Kelly Perez</a></h5>
                        <p class="text-muted mb-0">Software Developer</p>
                        <p class="text-muted mb-0"><i class="mdi mdi-map-marker mr-2"></i>2120 County Line Road St George, FL 34683</p>
                        <ul class="employers-icons list-inline mb-1">
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star-half"></i></a></li>
                            <li class="list-inline-item badge badge-success text-white">4.5</li>
                        </ul>
                    </div>
                    <div class="apply-button text-center mt-3">
                        <a href="#" class="btn btn-primary btn-sm">View Profile</a>
                    </div>
                    <div class="fav-collection fav-icon">
                        <i class="mdi mdi-heart" title="Collect Now"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="employers-list position-relative pb-3 pt-3 pl-2 pr-2 border rounded">
                    <img src="images/employers/img-5.jpg" alt="" class="mx-auto d-block shadow border rounded-circle" height="90">
                    <div class="grid-list-desc text-center mt-3">
                        <h5 class="mb-2"><a href="#" class="text-dark name">Dale Gambill</a></h5>
                        <p class="text-muted mb-0">Graphic Designer</p>
                        <p class="text-muted mb-0"><i class="mdi mdi-map-marker mr-2"></i>3633 Cessna Drive Fort Wayne, IN 46802</p>
                        <ul class="employers-icons list-inline mb-1">
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star-half"></i></a></li>
                            <li class="list-inline-item badge badge-success text-white">4.7</li>
                        </ul>
                    </div>
                    <div class="apply-button text-center mt-3">
                        <a href="#" class="btn btn-primary btn-sm">View Profile</a>
                    </div>
                    <div class="fav-collection fav-icon">
                        <i class="mdi mdi-heart" title="Collect Now"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="employers-list position-relative pb-3 pt-3 pl-2 pr-2 border rounded">
                    <img src="images/employers/img-6.jpg" alt="" class="mx-auto d-block shadow border rounded-circle" height="90">
                    <div class="grid-list-desc text-center mt-3">
                        <h5 class="mb-2"><a href="#" class="text-dark name">Rita Guidry</a></h5>
                        <p class="text-muted mb-0">Ios Developer</p>
                        <p class="text-muted mb-0"><i class="mdi mdi-map-marker mr-2"></i>2797 Bartlett Avenue Southfield, MI 48075</p>
                        <ul class="employers-icons list-inline mb-1">
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item badge badge-success text-white">4.8</li>
                        </ul>
                    </div>
                    <div class="apply-button text-center mt-3">
                        <a href="#" class="btn btn-primary btn-sm">View Profile</a>
                    </div>
                    <div class="fav-collection fav-icon">
                        <i class="mdi mdi-heart" title="Collect Now"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="employers-list position-relative pb-3 pt-3 pl-2 pr-2 border rounded">
                    <img src="images/employers/img-7.jpg" alt="" class="mx-auto d-block shadow border rounded-circle" height="90">
                    <div class="grid-list-desc text-center mt-3">
                        <h5 class="mb-2"><a href="#" class="text-dark name">Matt Morgan</a></h5>
                        <p class="text-muted mb-0">Web Delveloper</p>
                        <p class="text-muted mb-0"><i class="mdi mdi-map-marker mr-2"></i>2639 Warner Street Casper, WY 82601</p>
                        <ul class="employers-icons list-inline mb-1">
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item badge badge-success text-white">5.0</li>
                        </ul>
                    </div>
                    <div class="apply-button text-center mt-3">
                        <a href="#" class="btn btn-primary btn-sm">View Profile</a>
                    </div>
                    <div class="fav-collection fav-icon">
                        <i class="mdi mdi-heart" title="Collect Now"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="employers-list position-relative pb-3 pt-3 pl-2 pr-2 border rounded">
                    <img src="images/employers/img-8.jpg" alt="" class="mx-auto d-block shadow border rounded-circle" height="90">
                    <div class="grid-list-desc text-center mt-3">
                        <h5 class="mb-2"><a href="#" class="text-dark name">Hattie Blaser</a></h5>
                        <p class="text-muted mb-0">Graphic Designer</p>
                        <p class="text-muted mb-0"><i class="mdi mdi-map-marker mr-2"></i>4883 Patterson Road Brooklyn, NY 11230</p>
                        <ul class="employers-icons list-inline mb-1">
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star-half"></i></a></li>
                            <li class="list-inline-item badge badge-success text-white">4.5</li>
                        </ul>
                    </div>
                    <div class="apply-button text-center mt-3">
                        <a href="#" class="btn btn-primary btn-sm">View Profile</a>
                    </div>
                    <div class="fav-collection fav-icon">
                        <i class="mdi mdi-heart" title="Collect Now"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="employers-list position-relative pb-3 pt-3 pl-2 pr-2 border rounded">
                    <img src="images/employers/img-9.jpg" alt="" class="mx-auto d-block shadow border rounded-circle" height="90">
                    <div class="grid-list-desc text-center mt-3">
                        <h5 class="mb-2"><a href="#" class="text-dark name">Robert Cole</a></h5>
                        <p class="text-muted mb-0">Web Delveloper</p>
                        <p class="text-muted mb-0"><i class="mdi mdi-map-marker mr-2"></i>2424 Lowland Drive Chicago, IL 60606</p>
                        <ul class="employers-icons list-inline mb-1">
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-success"><i class="mdi mdi-star-outline"></i></a></li>
                            <li class="list-inline-item badge badge-success text-white">4.2</li>
                        </ul>
                    </div>
                    <div class="apply-button text-center mt-3">
                        <a href="#" class="btn btn-primary btn-sm">View Profile</a>
                    </div>
                    <div class="fav-collection fav-icon">
                        <i class="mdi mdi-heart" title="Collect Now"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mt-4 pt-2">
                <nav aria-label="Page navigation example">
                    <ul class="pagination job-pagination mb-0 justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                <i class="mdi mdi-chevron-double-left"></i>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="mdi mdi-chevron-double-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
        </div>
    </section>
@endsection
@endsection
