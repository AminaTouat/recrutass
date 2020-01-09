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
                                <form action="{{route('editr',$user->id)}}" method="post">
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
                                        <div class="col-md-4">
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

                                        <div class="col-md-4">
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

                                    </div>
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
                                            
                                                <label  class="text-muted">twitter<span
                                                        class="text-danger">*</span> :</label>
                                                <input id="twitter" name="twitter" type="url" class="form-control resume" value="{{$user->twitter}}">
                                              
        
                                            </div>
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
