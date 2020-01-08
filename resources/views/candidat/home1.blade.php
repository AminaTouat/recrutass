@extends('../layouts.navbarCandidat')
@section('content4')


<div class="jobsearch-main-content">
    <div class="jobsearch-plugin-default-container">
        <div class="user-dashboard-loader" style="display: none;"></div>
        <div class="jobsearch-row">
            <aside class="jobsearch-column-3 jobsearch-typo-wrap">
                <div class="jobsearch-typo-wrap">
                    <div class="jobsearch-employer-dashboard-nav">
                       <figure>
                           <img src="/uploads/avatar/{{ $user->avatar }}"
                               style="max-width: 132px; border-radius: 50%; margin-right: 25px;">
                           <form  action="{{route('updateM')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <span> Modifier la photo</span>

                               <input type="file" onchange="this.form.submit()" name="avatar" class="jobsearch-upload">
                               <input type="hidden" name="_token" value="{{csrf_token()}}">

                           </form>
                           <h2>{{ $user->name }}</h2>
                       </figure>

                        <ul>

                            <li class="active"> <a href="/home"> <i class="fas fa-user"></i> Mon profil </a></li>
                            <li> <a href="cv"><i class="fas fa-file-alt"></i>Mon CV</a></li>
                            <li> <a href=""><i class="fas fa-briefcase"></i>  Offres postulées </a></li>
                            <li> <a href=""><i class="fas fa-heart"></i> Favorite Jobs </a></li>
                            <li> <a href=""> <i class="fas fa-lock"></i> Modifier le mot de passe </a>
                            </li>
                            <li> <a href=""> <i class="fas fa-bell"></i> Alertes emploi </a></li>

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
                                    {{ csrf_field() }}
                                        
                                                <div class="row mt-4">
                                                    @if($user->prenom!=null)
                                                    <div class="col-md-4">
                                                        <div class="form-group app-label">
                                                                
                                                            <label for="prenom" class="text-muted">Prénom<span
                                                                    class="text-danger">*</span> :</label>
                                                            <input id="prenom" name="prenom" type="text" class="form-control resume"
                                                                 value="{{$user->prenom}}" disabled="disabled">
                                                               
                                                        </div>
                                                    </div>
                                                
                                                    @else
                                                    <div class="col-md-4">
                                                        <div class="form-group app-label">
                                                                
                                                            <label for="prenom" class="text-muted">Prénom<span
                                                                    class="text-danger">*</span> :</label>
                                                            <input id="prenom" name="prenom" type="text" class="form-control resume"
                                                                placeholder="Prénom" >
                                                               
                                                        </div>
                                                    </div>
                                                    @endif
                                                    <div class="col-md-4">
                                                        <div class="form-group app-label">
                                                            <label for="nom" class="text-muted">Nom<span
                                                                    class="text-danger">*</span> :</label>
                                                            <input id="nom" name="name" type="text" class="form-control resume"
                                                                 value ="{{$user->name}}" disabled="disabled" >
                                                        </div>
                                                    </div>
                                           
                                                    @if($user->datenaiss!=null)
                                                    <div class="col-md-4">
                                                        <div class="form-group app-label">
                                                            <label for="datenaiss" class="text-muted">Date de naissance<span
                                                                    class="text-danger">*</span> :</label>
                                                            <input id="datenaiss" name="datenaiss" type="date"
                                                                class="form-control resume"  value="{{$user->datenaiss}}" disabled="disabled">
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
                                                @if($user->ville!=null)
                                                <div class="col-md-4">
                                                    <div class="form-group app-label">
                                                        <label class="text-muted">Ville</label>
                                                        <div class="form-button">
                                                            <select class="nice-select rounded" name="ville" disabled="disabled">
                                                                <option data-display="Ville">{{$user->ville}}</option>
                                                                <option value="Adrar">Adrar</option>
                                                                <option value="chlef">chlef</option>
                                                                <option value="Laghouat">Laghouat</option>
                                                                <option value="Oum El Bouaghi">Oum El Bouaghi</option>
                                                                <option value="Batna">Batna</option>
                                                                <option value="Béjaia">Béjaia</option>
                                                                <option value="Biskra">Biskra</option>
                                                                <option value="Béchar">Béchar</option>
                                                                <option value="Blida">Blida</option>
                                                                <option value="Bouira">Bouira</option>
                                                                <option value="Tamanrasset">Tamanrasset</option>
                                                                <option value="Tébessa">Tébessa</option>
                                                                <option value="Tlemcen">Tlemcen</option>
                                                                <option value="Tiaret">Tiaret</option>
                                                                <option value="Tizi Ouzou">Tizi Ouzou</option>
                                                                <option value="Alger">Alger</option>
                                                                <option value="Djelfa">Djelfa</option>
                                                                <option value="jijel">jijel</option>
                                                                <option value="Sétif">Sétif</option>
                                                                <option value="Saida">Saida</option>
                                                                <option value="Skikda">Skikda</option>
                                                                <option value="Sidi Bel Abbes">Sidi Bel Abbes</option>
                                                                <option value="Annaba">Annaba</option>
                                                                <option value="Guelma">Guelma</option>
                                                                <option value="Constantine">Constantine</option>
                                                                <option value="Médéa">Médéa</option>
                                                                <option value="Mostaganem">Mostaganem</option>
                                                                <option value="M'Sila">M'Sila</option>
                                                                <option value="Mascara">Mascara</option>
                                                                <option value="Ouargla">Ouargla </option>
                                                                <option value="Oran">Oran</option>
                                                                <option value="El Bayadh">'El Bayadh</option>
                                                                <option value="Illizi">Illizi</option>
                                                                <option value="Bordj Bou Arreridj">Bordj Bou Arreridj</option>
                                                                <option value="Boumerdès">Boumerdès</option>
                                                                <option value="El Tarf">El Tarf</option>
                                                                <option value="Tindouf">Tindouf</option>
                                                                <option value="Tissemsilt">Tissemsilt</option>
                                                                <option value="El Oued">El Oued </option>
                                                                <option value="Khenchela">Khenchela</option>
                                                                <option value="Souk Ahras">Souk Ahras</option>
                                                                <option value="Tipaza">Tipaza</option>
                                                                <option value="Mila">Mila</option>
                                                                <option value="Defla">Defla</option>
                                                                <option value="Naâma">Naâma</option>
                                                                <option value="Aïn Témouchent">Aïn Témouchent </option>
                                                                <option value="Ghardaïa">Ghardaïa </option>
                                                                <option value="Relizane">Relizane</option>
            
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                @else 

            
                                                     <div class="col-md-4">
                                                    <div class="form-group app-label">
                                                        <label class="text-muted">Ville</label>
                                                        <div class="form-button">
                                                            <select class="nice-select rounded" name="ville">
                                                                <option value="Adrar">Adrar</option>
                                                                <option value="chlef">chlef</option>
                                                                <option value="Laghouat">Laghouat</option>
                                                                <option value="Oum El Bouaghi">Oum El Bouaghi</option>
                                                                <option value="Batna">Batna</option>
                                                                <option value="Béjaia">Béjaia</option>
                                                                <option value="Biskra">Biskra</option>
                                                                <option value="Béchar">Béchar</option>
                                                                <option value="Blida">Blida</option>
                                                                <option value="Bouira">Bouira</option>
                                                                <option value="Tamanrasset">Tamanrasset</option>
                                                                <option value="Tébessa">Tébessa</option>
                                                                <option value="Tlemcen">Tlemcen</option>
                                                                <option value="Tiaret">Tiaret</option>
                                                                <option value="Tizi Ouzou">Tizi Ouzou</option>
                                                                <option value="Alger">Alger</option>
                                                                <option value="Djelfa">Djelfa</option>
                                                                <option value="jijel">jijel</option>
                                                                <option value="Sétif">Sétif</option>
                                                                <option value="Saida">Saida</option>
                                                                <option value="Skikda">Skikda</option>
                                                                <option value="Sidi Bel Abbes">Sidi Bel Abbes</option>
                                                                <option value="Annaba">Annaba</option>
                                                                <option value="Guelma">Guelma</option>
                                                                <option value="Constantine">Constantine</option>
                                                                <option value="Médéa">Médéa</option>
                                                                <option value="Mostaganem">Mostaganem</option>
                                                                <option value="M'Sila">M'Sila</option>
                                                                <option value="Mascara">Mascara</option>
                                                                <option value="Ouargla">Ouargla </option>
                                                                <option value="Oran">Oran</option>
                                                                <option value="El Bayadh">'El Bayadh</option>
                                                                <option value="Illizi">Illizi</option>
                                                                <option value="Bordj Bou Arreridj">Bordj Bou Arreridj</option>
                                                                <option value="Boumerdès">Boumerdès</option>
                                                                <option value="El Tarf">El Tarf</option>
                                                                <option value="Tindouf">Tindouf</option>
                                                                <option value="Tissemsilt">Tissemsilt</option>
                                                                <option value="El Oued">El Oued </option>
                                                                <option value="Khenchela">Khenchela</option>
                                                                <option value="Souk Ahras">Souk Ahras</option>
                                                                <option value="Tipaza">Tipaza</option>
                                                                <option value="Mila">Mila</option>
                                                                <option value="Defla">Defla</option>
                                                                <option value="Naâma">Naâma</option>
                                                                <option value="Aïn Témouchent">Aïn Témouchent </option>
                                                                <option value="Ghardaïa">Ghardaïa </option>
                                                                <option value="Relizane">Relizane</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
            
                   
                                                @if($user->phone!=null) 
                                                 <div class="col-md-4">
                                                    <div class="form-group app-label">
                                                        <label class="text-muted" >Phone</label>
                                                        <input id="phone" type="number" class="form-control resume" name="phone"
                                                        disabled="disabled" value="{{$user->phone}}">
                                                    </div>
                                                </div>
                                                @else
                                                 <div class="col-md-4">
                                                    <div class="form-group app-label">
                                                        <label class="text-muted">Phone</label>
                                                        <input id="phone" type="number" class="form-control resume" name="phone"
                                                            placeholder="Phone No. :">
                                                    </div>
                                                </div>
                                                @endif
                                                @if($user->emailT!=null)
                                                <div class="col-md-4">
                                                    <div class="form-group app-label">
                                                        <label class="text-muted">{{$user->emailT}}E-mail</label>
                                                        <input id="e-mail" type="email" name="emailT" class="form-control resume"
                                                        disabled="disabled" value="{{$user->emailT}}" >
                                                    </div>
                                                </div>
                                                @else
                                                <div class="col-md-4">
                                                    <div class="form-group app-label">
                                                        <label class="text-muted">E-mail</label>
                                                        <input id="e-mail" type="email" name="emailT" class="form-control resume"
                                                            placeholder="Email ID :">
                                                    </div>
                                                </div>
                                                @endif
                                                @if($user->linkedIN!=null)
                                                <div class="col-md-4">
                                                    <div class="form-group app-label">
                                                        <label class="text-muted">LinkedIn</label>
                                                        <input id="linkedin" type="url" name="linkedIN" class="form-control resume"
                                                        disabled="disabled" value="{{$user->linkedIN}}">
                                                    </div>
                                                </div>
                                                @else
            
                                                <div class="col-md-4">
                                                    <div class="form-group app-label">
                                                        <label class="text-muted">LinkedIn</label>
                                                        <input id="linkedin" type="url" name="linkedIN" class="form-control resume"
                                                            placeholder="LinkedIn :">
                                                    </div>
                                                </div>
                                                @endif

                                                @if($user->adress!=null)
                                                <div class="col-lg-12">
                                                    <div class="form-group app-label">
                                                        <label>Address :</label>
                                                        <textarea id="address" rows="4" class="form-control resume"
                                                            name="adress">{{$user->adress}}</textarea>
                                                    </div>
                                                </div>
                                                @else
                                                <div class="col-lg-12">
                                                    <div class="form-group app-label">
                                                        <label>Address :</label>
                                                        <textarea id="address" rows="4" class="form-control resume"
                                                            name="adress"></textarea>
                                                    </div>
                                                </div>
                                                @endif
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
