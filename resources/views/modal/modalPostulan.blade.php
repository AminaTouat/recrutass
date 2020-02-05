@extends('layouts.navbarCandidat')
@section('content4')
<header class="masthead">
    <section class="vh-100" >
        <div class="home-center">
            <div class="home-desc-center">
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <form method="POST" action="{{url('postuler/'.$offre->id)}}" >
                        <input type="hidden" name="_method" value="PUT">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="hidden" name="offre_id" value="{{$offre->id}}">
                        
                                <label for="recipient-name" class="col-form-label">Niveau d'étude <span
                                        class="text-danger">*</span>:</label>
                                <input type="text" class="form-control" name="Niveau" id="Niveau" required>
                            </div>
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Dernier poste occupé
                                    <span class="text-danger">*</span>:</label>
                                <input type="text" class="form-control" name="dernier_post" id="dernier_post" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Type du poste<span
                                        class="text-danger">*</span>:</label>
                                <select id="type_post" name="type_post" class="form-control jform-chosen-validate"
                                    required aria-required="true" name="Type" data-placeholder="Choisir Contrat emploi">
                                    <option value="cdd" class="112">cdd</option>
                                    <option value="cdi" class="69">cdi</option>
                                    <option value="Stage" class="150">Stage</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Année expérience<span
                                        class="text-danger">*</span>:</label>
                                <input type="month" class="form-control" name="anne_experience" id="anne_experience"
                                    required>
                            </div>
                        </div>
                        <div class="row">
                            <button id="btnregistre" type="submit" class="btn btn-primary w-50"
                            id="btnregistre">{{ __('Postulé') }}</button>
                        </div>
                        
                                </form>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </div>
        </div>
    </section>
</header>
