@extends('layouts.navbarCandidat')
@section('content4')
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
                      <a href={{url('postuler/'.$offres->id)}} class="btn btn-primary " type="submit" style="margin-left: 654px;">Postulé</a>
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
