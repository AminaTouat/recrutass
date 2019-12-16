@extends('../layouts.navbarCandidat')
@section('content4')


<div class="jobsearch-main-content">
    <div class="jobsearch-plugin-default-container">
        <div class="user-dashboard-loader" style="display: none;"></div>
        <div class="jobsearch-row">
            <aside class="jobsearch-column-3 jobsearch-typo-wrap">
                <div class="jobsearch-typo-wrap">
                    <div class="jobsearch-employer-dashboard-nav">
    

                        <h2><a href="/home">{{ $user->name }}</a></h2> <span
                            class="jobsearch-dashboard-subtitle"></span></figcaption>

                        <ul>

                            <li class="active"> <a href="/home"> <i class="jobsearch-icon jobsearch-user"></i> Mon
                                    profil </a></li>
                            <li> <a href="cv"> <i class="jobsearch-icon jobsearch-resume"></i> Mon CV </a></li>
                            <li> <a href="https://marocemploi.net/user-dashboard/?tab=applied-jobs"> <i
                                        class="jobsearch-icon jobsearch-briefcase-1"></i> Offres postulées </a></li>
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

            <!-- POST A JOB START -->
            <section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10">
                            <h5 class="text-dark">Informations générales: </h5>
                        </div>
                        <div class="col-lg-2">
                            
                        </div>

                        <div class="col-12 mt-3">
                            <div class="custom-form p-4 border rounded">
                                <form action="{{route('updateC')}}" method="post">
                                        @csrf
                                                <div class="row mt-4">
                                                    @if($user->prenom!=null)
                                                    <div class="col-md-4">
                                                        <div class="form-group app-label">
                                                                
                                                            <label for="prenom" class="text-muted">Prénom<span
                                                                    class="text-danger">*</span> :</label>
                                                            <input id="prenom" name="prenom" type="text" class="form-control resume"
                                                                placeholder="" value="{{$user->prenom}}" disabled="disabled">
                                                               
                                                        </div>
                                                    </div>
                                                
                                                    @else
                                                    <div class="col-md-4">
                                                        <div class="form-group app-label">
                                                                
                                                            <label for="prenom" class="text-muted">Prénom<span
                                                                    class="text-danger">*</span> :</label>
                                                            <input id="prenom" name="prenom" type="text" class="form-control resume"
                                                                placeholder="" >
                                                               
                                                        </div>
                                                    </div>
                                                    @endif
                                                    <div class="col-md-4">
                                                        <div class="form-group app-label">
                                                            <label for="nom" class="text-muted">Nom<span
                                                                    class="text-danger">*</span> :</label>
                                                            <input id="nom" name="name" type="text" class="form-control resume"
                                                                placeholder="Surname :" value ="{{$user->name}}" disabled="disabled" >
                                                        </div>
                                                    </div>
                                           
                                                    @if($user->datenaiss!=null)
                                                    <div class="col-md-4">
                                                        <div class="form-group app-label">
                                                            <label for="datenaiss" class="text-muted">Date de naissance<span
                                                                    class="text-danger">*</span> :</label>
                                                            <input id="datenaiss" name="datenaiss" type="date"
                                                                class="form-control resume" placeholder="13-02-1999" value="{{$user->datenaiss}}" disabled="disabled">
                                                        </div>
                                                    </div>
                                                    @else 
                                                    <div class="col-md-4">
                                                        <div class="form-group app-label">
                                                            <label for="datenaiss" class="text-muted">Date de naissance<span
                                                                    class="text-danger">*</span> :</label>
                                                            <input id="datenaiss" name="datenaiss" type="date"
                                                                class="form-control resume" placeholder="13-02-1999">
                                                        </div>
                                                    </div>
                                                    @endif


                                                    @if($user->sexe!=null)
                                                    <div class="col-md-4">
                                                        <div class="form-group app-label">
                                                            <label class="text-muted">Sexe<span class="text-danger">*</span>:</label>
                                                            <div class="form-button">
                                                                <select class="nice-select rounded" name="sexe" disabled="disabled">
                                                                <option data-display="sexe">{{$user->sexe}}</option>
                                                                    <option value="homme">Homme</option>
                                                                    <option value="femme">Femme</option>
            
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @else
                                                    <div class="col-md-4">
                                                        <div class="form-group app-label">
                                                            <label class="text-muted">Sexe<span class="text-danger">*</span>:</label>
                                                            <div class="form-button">
                                                                <select class="nice-select rounded" name="sexe">
                                                                    <option data-display="sexe" >Sexe</option>
                                                                    <option value="homme">Homme</option>
                                                                    <option value="femme">Femme</option>
            
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    
                                                    @if($user->civilite!=null)
                                                    <div class="col-md-4">
                                                        <div class="form-group app-label">
                                                            <label class="text-muted">Civilité<span class="text-danger">*</span>:</label>
                                                            <div class="form-button">
                                                                <select class="nice-select rounded" name="civilite" disabled="disabled">
                                                                    <option data-display="civilité">{{$user->civilite}}</option>
                                                                    <option value="Mr ">Monsieur </option>
                                                                    <option value="Mme">Madame</option>
                                                                    <option value="Mmd">Mademoiselle </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @else
                                                    <div class="col-md-4">
                                                        <div class="form-group app-label">
                                                            <label class="text-muted">Civilité<span class="text-danger">*</span>:</label>
                                                            <div class="form-button">
                                                                <select class="nice-select rounded" name="civilite">
                                                                    <option data-display="civilité">Civilité</option>
                                                                    <option value="Mr ">Monsieur </option>
                                                                    <option value="Mme">Madame</option>
                                                                    <option value="Mmd">Mademoiselle </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    
                                                </div>

                                                    <a href={{url('edit/'.$user->id)}}>
                                                        <i class="far fa-edit"></i></a>
                                                   
                                        </div>
                                    </div>
                                    
                                </div>
            
                                <div class="row mt-5">
                                    <div class="col-12">
                                        <h5 class="text-dark">Informations de contact :</h5>
                                    </div>
            
                                    <div class="col-12 mt-3">
                                        <div class="custom-form p-4 border rounded">
            
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group app-label">
                                                        <label class="text-muted">Ville</label>
                                                        <div class="form-button">
                                                            <select class="nice-select rounded">
                                                                <option data-display="Ville">Ville</option>
                                                                <option value="1">Adrar</option>
                                                                <option value="2">chlef</option>
                                                                <option value="3">Laghouat</option>
                                                                <option value="4">Oum El Bouaghi</option>
                                                                <option value="5">Batna</option>
                                                                <option value="6">Béjaia</option>
                                                                <option value="7">Biskra</option>
                                                                <option value="8">Béchar</option>
                                                                <option value="9">Blida</option>
                                                                <option value="10">Bouira</option>
                                                                <option value="11">Tamanrasset</option>
                                                                <option value="12">Tébessa</option>
                                                                <option value="13">Tlemcen</option>
                                                                <option value="14">Tiaret</option>
                                                                <option value="15">Tizi Ouzou</option>
                                                                <option value="16">Alger</option>
                                                                <option value="17">Djelfa</option>
                                                                <option value="18">jijel</option>
                                                                <option value="19">Sétif</option>
                                                                <option value="20">Saida</option>
                                                                <option value="21">Skikda</option>
                                                                <option value="22">Sidi Bel Abbes</option>
                                                                <option value="23">Annaba</option>
                                                                <option value="24">Guelma</option>
                                                                <option value="25">Constantine</option>
                                                                <option value="26">Médéa</option>
                                                                <option value="27">Mostaganem</option>
                                                                <option value="28">M'Sila</option>
                                                                <option value="29">Mascara</option>
                                                                <option value="30">Ouargla </option>
                                                                <option value="31">Oran</option>
                                                                <option value="32">'El Bayadh</option>
                                                                <option value="33">Illizi</option>
                                                                <option value="34">Bordj Bou Arreridj</option>
                                                                <option value="35">Boumerdès</option>
                                                                <option value="36">El Tarf</option>
                                                                <option value="37">Tindouf</option>
                                                                <option value="38">Tissemsilt</option>
                                                                <option value="39">El Oued </option>
                                                                <option value="40">Khenchela</option>
                                                                <option value="41">Souk Ahras</option>
                                                                <option value="42">Tipaza</option>
                                                                <option value="43">Mila</option>
                                                                <option value="44">Defla</option>
                                                                <option value="45">Naâma</option>
                                                                <option value="46">Aïn Témouchent </option>
                                                                <option value="47">Ghardaïa </option>
                                                                <option value="48">Relizane</option>
            
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
            
            
            
            
            
                                                <div class="col-md-4">
                                                    <div class="form-group app-label">
                                                        <label class="text-muted">Phone</label>
                                                        <input id="phone" type="number" class="form-control resume"
                                                            placeholder="Phone No. :">
                                                    </div>
                                                </div>
            
                                                <div class="col-md-4">
                                                    <div class="form-group app-label">
                                                        <label class="text-muted">E-mail</label>
                                                        <input id="e-mail" type="email" name="email" class="form-control resume"
                                                            placeholder="Email ID :">
                                                    </div>
                                                </div>
            
                                                <div class="col-md-4">
                                                    <div class="form-group app-label">
                                                        <label class="text-muted">LinkedIn</label>
                                                        <input id="linkedin" type="url" name="url" class="form-control resume"
                                                            placeholder="LinkedIn :">
                                                    </div>
                                                </div>
            
                                                <div class="col-lg-12">
                                                    <div class="form-group app-label">
                                                        <label>Address :</label>
                                                        <textarea id="address" rows="4" class="form-control resume"
                                                            placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary submitBnt" type="submit">enregistrer</button>
                                </form>
                               
                        </div>
                    </div>



            </section>

            <!-- CREATE RESUME END -->

            <!-- subscribe start -->
            {{-- <section class="section bg-light">
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
                                        <input name="email" id="email" type="email" class="form-control"
                                            placeholder="Your email :" required="" aria-describedby="newssubscribebtn">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary submitBnt" type="submit"
                                                id="newssubscribebtn">Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </section> --}}
        </div>
        @endsection
