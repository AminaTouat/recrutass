@extends('layouts.navbarCandidat')
@section('content4')
<section class="section">
    
        <div class="container">
            <div class="row">
<<<<<<< HEAD
                <div class="col-lg-12">
                    <div class="text-sm-center">
                        <img src="images/featured-job/img-3.png" alt="" class="img-fluid mx-md-auto d-block">
                        <h4 class="mt-3"><a href="#" class="text-dark">Themes code Pvt.Ltd</a></h4>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item mr-3">
                                <p class="text-muted mb-0"><i class="mdi mdi-map-marker mr-2"></i>4102 Aviation Way Los Angeles, CA 90017</p>
                            </li>

                            <li class="list-inline-item">
                                <p class="text-success mb-0"><i class="mdi mdi-bookmark-check mdi-18px mr-2"></i>Verified</p>
                            </li>
=======
            
                <div class="col-lg-12 mt-4 pt-2">
                    <h4>détaile d'offre  {{$offres->intitule}}:</h4>
                    <div class="rounded border p-4 mt-3">
                    <div class="img_side ">
     <img style="height:120px" src="{{asset('upload/logo/'.$offres->image_logo)}}" />
     <div class="row" style="padding-left: 15px;">
    <a href="#"> <small>by {{App\Offre::find($offres->id)->recruteur->name}}</small></a>
    
					</div>
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
                </div >
                <div class="item"><label><strong>description:</strong></label>
                        <p class="text-muted"><i class="mdi mdi-check text-success"></i> {{$offres->description}}</p>
                  
                      </div>
                </div>
                <small><br/>il ya : {{$offres->created_at->diffForHumans()}}  par l'entreprise :{{App\Offre::find($offres->id)->recruteur->nomrecru}}</small>
                       
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
>>>>>>> statistique
                        </ul>

                        <ul class="list-inline mb-2">
                            <li class="list-inline-item mr-3 ">
                                <p class="text-muted"><i class="mdi mdi-earth mr-2"></i>Themescodeltd.co.in</p>
                            </li>

                            <li class="list-inline-item mr-3">
                                <p class="text-muted"><i class="mdi mdi-email mr-2"></i>Themescodeltd2018@gmail.com</p>
                            </li>

                            <li class="list-inline-item">
                                <p class="text-muted"><i class="mdi mdi-cellphone-iphone mr-2"></i>123 456 7890</p>
                            </li>
                        </ul>
                    </div>
                </div>
<<<<<<< HEAD
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="border-top border-bottom pt-4 pb-4">
                        <div class="row justify-content-sm-center">
                            <div class="col-lg-2 col-md-3 col-6">
                                <div class="text-sm-center m-14">
                                    <h5 class="text-dark mb-2">Employer</h5>
                                    <p class="text-muted mb-0">5540 +</p>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-3 col-6">
                                <div class="text-sm-center m-14">
                                    <h5 class="text-dark mb-2">Type</h5>
                                    <p class="text-muted mb-0">Create Website</p>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-3 col-6">
                                <div class="text-sm-center m-14">
                                    <h5 class="text-dark mb-2">Experience</h5>
                                    <p class="text-muted mb-0">4 Years + Exp.</p>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-3 col-6">
                                <div class="text-sm-center m-14">
                                    <h5 class="text-dark mb-2">Salary</h5>
                                    <p class="text-muted mb-0">$700 - $2000/month</p>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-3 col-6">
                                <div class="text-sm-center m-14">
                                    <h5 class="text-dark mb-2">Followers</h5>
                                    <p class="text-muted mb-0">584230 +</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <h4>Company Overview :</h4>
                    <div class="rounded border p-4 mt-3">
                        <p class="text-muted">At t.</p>
                        
                    </div>
=======
                
                        <div><label><strong>description:</strong></label>
                        <p class="text-muted"><i class="mdi mdi-check text-success"></i> {{$offres->description}}</p>
                  
                      </div>
                      <a href={{url('postuler/'.$offres->id)}} class="btn btn-primary " type="submit" style="margin-left: 654px;">Postulé</a>
                    </div>
              
>>>>>>> b16f5555377372c24ab0a78bc92a3df929d6cf59
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <h4>Services :</h4>
                    <div class="rounded border p-4 mt-3">
                        <p class="text-muted"> elit.</p>
                        <h6 class="text-dark">Details :</h6>
                        <p class="text-muted"><i class="mdi mdi-check text-success"></i> Morbi mattis ullamcorper velit hasellus gravida semper nisi nullam vel sem.</p>
                        <p class="text-muted"><i class="mdi mdi-check text-success"></i> Phasellus viverra nulla ut metus varius laoreet uisque rutrum enean imperdiet.</p>
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-8">
            <div class="section-title text-center mb-4 pb-2">
            <h4 class="title title-line pb-5">candidats ayant postulé</h4>
            </div>
        <div class="row">
            {{-- <table style="width: 100%">
                    <tr>
                    <th width="40%">Nom Prenom</th>
                    <th width="25%">Niveau</th>
                    <th width="25%">Action</th>
                </tr>
                <tr>
                </tr>
                    @foreach ($postulant as $postulant)
                    <tr>
                        <td>
                             <a href="javascript:void(0)"><img src="{{asset('../uploads/avatar/'.$postulant->candidat->avatar)}}" alt="user" width="40" class=" rounded-circle"/>
                            {{$postulant->candidat->name}} {{$postulant->candidat->prenom}} 
                            </a>
                        </td>
                    <td >{{$postulant->Niveau}}</td>
                    <td>
                        <a  class="text-muted mb-0 " href="#">View CV</a>
                    </td>
                    </tr>  
                    @endforeach
            </table> --}}
            @foreach ($postulant as $postulant)
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="employers-list position-relative pb-3 pt-3 pl-2 pr-2 border rounded">
                    <a href="javascript:void(0)"><img src="{{asset('../uploads/avatar/'.$postulant->candidat->avatar)}}" alt="user" class="mx-auto d-block shadow border rounded-circle" height="90">
                    <div class="grid-list-desc text-center mt-3">
                        <h5 class="mb-2">{{$postulant->candidat->name}} {{$postulant->candidat->prenom}}</h5></a>
                        <p class="text-muted mb-0">{{$postulant->candidat->cv->titre}}</p>
                        <p class="text-muted mb-0"><i class="mdi mdi-map-marker mr-2"></i></p>
                    </div>
                    <div class="apply-button text-center mt-3">
                        <a href="#" class="btn btn-primary btn-sm">View CV</a>
                    </div>
                    <div class="fav-collection fav-icon">
                        <i class="mdi mdi-heart" title="Collect Now"></i>
                    </div> 
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
        </div>
    </section>
@endsection
