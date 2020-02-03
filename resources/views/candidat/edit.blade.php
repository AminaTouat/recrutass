@extends('../layouts.navbarCandidat')
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
                                <form action="{{route('edit',$user->id)}}" method="post">
                                    @csrf
                                    <div class="row mt-4">

                                        <div class="col-md-4">
                                            <div class="form-group app-label">

                                                <label for="prenom" class="text-muted">Prénom<span
                                                        class="text-danger">*</span> :</label>
                                                <input id="prenom" name="prenom" type="text" class="form-control resume"
                                                    value="{{$user->prenom}}">

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

                                        <div class="col-md-4">
                                            <div class="form-group app-label">
                                                <label for="datenaiss" class="text-muted">Date de naissance<span
                                                        class="text-danger">*</span> :</label>
                                                <input id="datenaiss" name="datenaiss" type="date"
                                                    class="form-control resume" value="{{$user->datenaiss}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-md-4">
                                            <div class="form-group app-label">
                                                <label class="text-muted">Sexe<span
                                                        class="text-danger">*</span>:</label>
                                                <div class="form-button">
                                                    <select class="nice-select rounded" name="sexe">
                                                        <option data-display="sexe">{{$user->sexe}}</option>
                                                        <option value="homme">Homme</option>
                                                        <option value="femme">Femme</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group app-label">
                                                <label class="text-muted">Civilité<span
                                                        class="text-danger">*</span>:</label>
                                                <div class="form-button">
                                                    <select class="nice-select rounded" name="civilite">
                                                        <option data-display="civilité">{{$user->civilite}}</option>
                                                        <option value="Mr ">Monsieur </option>
                                                        <option value="Mme">Madame</option>
                                                        <option value="Mmd">Mademoiselle </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group app-label">
                                            
<<<<<<< HEAD
                                                <label  class="text-muted"> Facebook<span
                                                        class="text-danger">*</span> :</label>
                                                <input id="facebook" name="facebook" type="url" class="form-control resume" value="{{$user->facebook}}">
                                              
        
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group app-label">
                                            
                                                <label  class="text-muted">twitter<span
                                                        class="text-danger">*</span> :</label>
                                                <input id="twitter" name="twitter" type="url" class="form-control resume" value="{{$user->twitter}}">
                                              
        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group app-label">
                                            
=======
>>>>>>> deb640d7cf19806f57808c8d09a3b7c72bc2fed5
                                                <label  class="text-muted"> Github<span
                                                        class="text-danger">*</span> :</label>
                                                <input id="github" name="github" type="url" class="form-control resume" value="{{$user->github}}">
                                              
        
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group app-label">
                                            
                                                <label  class="text-muted">LinkedIn<span
                                                        class="text-danger">*</span> :</label>
                                                <input id="linkedin" name="linkedin" type="url" class="form-control resume" value="{{$user->linkedin}}">
                                              
        
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary submitBnt" type="submit">enregistrer</button>
                                </form>
                            </div>
                        </div>
                    </div>



                </div>
        </div>



        </section>
    </div>
    @endsection
