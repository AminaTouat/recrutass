@extends('../layouts.navbarRecruteur')
@section('content4')


<div class="jobsearch-main-content">
    <div class="jobsearch-plugin-default-container">
        <div class="user-dashboard-loader" style="display: none;"></div>
        <div class="jobsearch-row">


            <!-- POST A JOB START -->
            <section class="section">
                <div class="container">
                    <div class="row">


                        <div class="col-12 mt-3">
                            <div class="custom-form p-4 border rounded">
                                <form action="{{route('edit1',$user->id)}}" method="post">
                                    @csrf
                                    <div class="row mt-4">

                                        <div class="col-md-4">
                                            <div class="form-group app-label">

                                                <label for="prenomrecru" class="text-muted">Prénom<span
                                                        class="text-danger">*</span> :</label>
                                                <input id="prenomrecru" name="prenomrecru" type="text" class="form-control resume"
                                                    value="{{$user->prenomrecru}}">

                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group app-label">
                                                <label for="nom" class="text-muted">Nom<span
                                                        class="text-danger">*</span> :</label>
                                                <input id="nom" name="name" type="text" class="form-control resume"
                                                    value="{{$user->name}}">
                                            </div>
                                        </div>

                                       
                                    </div>
                                   
                      <div class="row mt-4">

                                <div class="col-md-6">
                                  <div class="form-group app-label">
                                          <div class="form-group app-label">
                                                     <label for="emailrecru" class="text-muted">Email recruteur:<span class="text-danger">*</span>:</label>
                                                     <input value="{{$user->emailrecru}}" id="emailrecru" name="emailrecru"type="text"
                                          class="form-control resume">
                                          </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                            <div class="form-group app-label">
                                                <label class="text-muted">Sexe<span
                                                        class="text-danger">*</span>:</label>
                                                <div class="form-button">
                                                    <select class="nice-select rounded" name="Sexe" id="Sexe">
                                                        <option data-display="Sexe">{{$user->Sexe}}</option>
                                                        <option value="homme">Homme</option>
                                                        <option value="femme">Femme</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group app-label">
                                                <label class="text-muted">Civilite<span
                                                        class="text-danger">*</span>:</label>
                                                <div class="form-button">
                                                    <select class="nice-select rounded" name="Civilite" id="Civilite">
                                                        <option data-display="Civilite">{{$user->Civilite}}</option>
                                                        <option value="Mr ">Monsieur </option>
                                                        <option value="Mme">Madame</option>
                                                        <option value="Mmd">Mademoiselle </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <h3 class="text-center">Detail de l'entreprise</h3>
                                        <div class="row mt-4">
                                        <div class="col-md-6">
                                    <div class="form-group app-label">
                                        <label for="nomrecru" class="text-muted">Nom de l'entreprise:<span class="text-danger">*</span>:</label>
                                        <input value="{{$user->nomrecru}}" id="nomrecru" name="nomrecru"type="text"
                                          class="form-control resume">

                                    </div>
                                        </div>
                                        <div class="col-md-6">
                                         <img src="" class="rounded-circle w-100">
                                </div>
                       </div>
                       <div class="row mt-4">

                       <div class="col-md-6">
                                    <div class="form-group app-label">
                                     <label for="emailentre" class="text-muted">Email de l'entreprise:<span class="text-danger">*</span>:</label>
                                        <input value="{{$user->emailentre}}" id="emailentre" name="emailentre"type="text"
                                         class="form-control resume">
                                    </div>
                       </div>
                       <div class="col-md-6">
                                    <div class="form-group app-label">
                                        <label for="adresseentre" class="text-muted">l'adresse de l'entreprise:<span class="text-danger">*</span>:</label>
                                        <input value="{{$user->adresseentre}}" id="adresseentre" name="adresseentre"type="text"
                                         class="form-control resume">

                                    </div>
                        </div>
                        </div>
                        <div class="row mt-4">
                        <div class="col-md-6">
                                    <div class="form-group app-label">
                                        <label for="telephoneentre" class="text-muted">Numéro de téléphone de l'entreprise':<span class="text-danger">*</span>:</label>
                                        <input value="{{$user->telephoneentre}}" id="telephoneentre" name="telephoneentre"type="text"
                                        class="form-control resume">
                                    </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group app-label">
                          <label for="descriptionentre">Description sur l'entreprise:</label>
                            <textarea class="form-control" rows="1" id="descriptionentre"></textarea>
                              </div>
                            </div>
                        </div>

<<<<<<< HEAD

                        <h3 class="text-center">Réseaux sociaux</h3>
=======
                        <div class="col-md-6">
                            <div class="form-group app-label">
                          <label for="ville">ville:</label>
                          <input class="form-control resume" value="{{$user->ville}}"  rows="1" type="text" name="ville" id="ville">
                              </div>
                            </div>
                        </div>
                        <h3 class="text-center">social networks</h3>
>>>>>>> statistique

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group app-label">
                                            
                                                <label  class="text-muted"> Facebook<span
                                                        class="text-danger">*</span> :</label>
                                                <input id="facebook" name="facebook" type="url" class="form-control resume" value="{{$user->facebook}}">
                                              
        
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group app-label">
                                            
                                                <label  class="text-muted">Twitter<span
                                                        class="text-danger">*</span> :</label>
                                                <input id="twitter" name="twitter" type="url" class="form-control resume" value="{{$user->twitter}}">
                                              
        
                                            </div>
                                        </div>
                                    </div>
<div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group app-label">
                                            
                                                <label  class="text-muted">LinkedIn<span
                                                        class="text-danger">*</span> :</label>
                                                <input id="linkedin" name="linkedin" type="url" class="form-control resume" value="{{$user->linkedin}}">
                                              
        
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                    <div class="form-group app-label">
                                    
                                        <label  class="text-muted">Site de l'entreprise':<span
                                                class="text-danger">*</span> :</label>
                                        <input id="sitewebentre" name="sitewebentre" type="url" class="form-control resume" value="{{$user->sitewebentre}} placeholder="https://site.com/">
                                      

                                    </div>
                                </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary submitBnt" type="submit">Enregistrer</button>
                                </form>
                            </div>
                    
                    </div>



                </div>
        </div>



        </section>
    </div>
    @endsection
