@extends('layouts.navbarCandidat')
@section('content4')
<div class="jobsearch-main-content">
    <div class="jobsearch-plugin-default-container">
        <div class="user-dashboard-loader" style="display: none;"></div>
        <div class="jobsearch-row">

            <aside class="jobsearch-column-3 jobsearch-typo-wrap">
                <div class="jobsearch-typo-wrap">
                    <div class="jobsearch-employer-dashboard-nav">
                        <figure>
                            <img src="/uploads/avatar/{{ Auth::user()->avatar }}"
                                style="max-width: 132px; border-radius: 50%; margin-right: 25px;">
                            <h2>{{ $user->name }}</h2>

                        </figure>

                        <ul>

                            <li> <a href="/home"> <i class="fas fa-user"></i> Mon profil </a></li>
                            <li class="active"> <a href="cv"><i class="fas fa-file-alt"></i>Mon CV</a></li>
                            <li> <a href=""><i class="fas fa-briefcase"></i> Offres postulées </a></li>
                            <li> <a href=""><i class="fas fa-heart"></i> Favorite Jobs </a></li>
                            <li> <a href=""> <i class="fas fa-lock"></i> Modifier le mot de passe </a>
                            </li>
                            <li> <a href=""> <i class="fas fa-bell"></i> Alertes emploi </a></li>

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
                            <form action="" method="post">
                                {{ csrf_field() }}
                                <div class="custom-form p-4 border rounded">
                                    <div class="row mt-4">

                                        <div class="col-md-4">
                                            <div class="form-group app-label">
                                                <a class="text-muted" data-toggle="collapse" href="#collapseExample"> <b><i class="fas fa-graduation-cap"></i>FORMATION</b> <span
                                                        class="text-danger">*</span>:</a>

                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModal" name="create_record"
                                                id="create_record">Ajouter une formation </button>
                                        </div>
                                    </div>
                                    <div class="collapse" id="collapseExample">

                                        <div class="row">
                                            @foreach ($formations as $one)
                                            <div class="col-lg-4">
                                                
                                                <h6>{{$one->titre}}</h6>
                                            </div>
                                            <div class="col-lg-8">
                                                <a id="modifier" href={{url('editFormation/'.$one->id)}}>Modifier <i class="fas fa-pen"></i></a>
                                                
                                            </div>
                                            @endforeach
                                        </div>
                                       
                                    </div>
                                </div>
                            </form>
                            
                            
                           
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" name="exampleModal"
role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <form action="{{route('updateF')}}"  method="POST">
        {{ csrf_field() }}
        <div class="modal-body">
            <span id="form_result"></span>
                <div class="form-group">

                    <label for="recipient-name"
                        class="col-form-label">Titre <span
                            class="text-danger">*</span>:</label>
                    <input type="text" class="form-control" name="titre" id="titre" required>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="recipient-name"
                            class="col-form-label">Année <span
                                class="text-danger">*</span>:</label>
                        <input type="month" class="form-control" name="annee" id="annee" required>
                    </div>
                    <div class="col-md-6">
                        <label for="recipient-name"
                            class="col-form-label">Établissement
                            <span class="text-danger">*</span>:</label>
                        <input type="text" class="form-control" name="etablissement" id="etablissement" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message-text"
                        class="col-form-label">Description <span
                            class="text-danger">*</span>: </label>
                    <textarea class="form-control" name="description" id="description" required></textarea>
                </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary submitBnt"
                type="submit">Ajouter</button>
        </div>
    </form>
    </div>
</div>
</div>





@endsection