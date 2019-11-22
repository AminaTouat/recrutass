@extends('layouts.navbarprofile')
@extends('layouts.sidebar')
@section('content1')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Les offres d'emploi disponible </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">offres</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">


          
          <!-- /.card -->
        
        <!-- /.col -->
        <div class="col-md-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title col-md-3">Offres</h3>

              <div class="card-tools col-md-7">
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control" placeholder="Recherche domaine, région,fonction ...">
                  <div class="input-group-append">
                    <div class="btn btn-primary">
                      <i class="fas fa-search"></i>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
             
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                  <tr>
                    <td>
                      <div class="logo_recru">
					    <span class="float-left">
					  <img class="rounded float-left img-bordered-sm" src="img/Distribution,-Commerce.jpg" alt="recru logo">
					   </span>
                      </div>
                    </td>
                   
                    <td class="mailbox-name"><a href="{{url('read')}}">pour plus d'infos </a></td>
					<td class="mailbox-attachment"></td>
                    <td class="mailbox-subject"><b>Buiseness Analyste</b> Importante entreprise
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date"> <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fa fa-map-marker"></i>Alger, Algérie</a>
                        <a href="#" class="link-black text-sm"><i class="fa fa-clock mr-1"></i> </a>
						<a href="#" class="link-black text-sm"><i class="fa fa-bookmark mr-1"></i> Confirmé/Expérimenter (3 à 5ans)</a>
                        
                      </p></td>
					
                  </tr>
              <tr>
                    <td>
                      <div class="logo_recru">
					    <span class="float-left">
					  <img class="rounded float-left img-bordered-sm" src="img/Marriott.jpg" alt="recru logo">
					   </span>
                      </div>
                    </td>
                   
                    <td class="mailbox-name"><a href="{{url('read')}}">pour plus d'infos </a></td>
					<td class="mailbox-attachment"></td>
                    <td class="mailbox-subject"><b>Agent de nettoyage</b> Mariott Hotel & Residence Inn Bab Ezzouar
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date"> <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fa fa-map-marker"></i>Alger, Algérie</a>
                        <a href="#" class="link-black text-sm"><i class="fa fa-clock mr-1"></i> </a>
						<a href="#" class="link-black text-sm"><i class="fa fa-bookmark mr-1"></i> Debutant/Junior (1 à 2ans)</a>
                        
                      </p></td>
					
                  </tr>
                <tr>
                    <td>
                      <div class="logo_recru">
					    <span class="float-left">
					  <img class="rounded float-left img-bordered-sm" src="img/sheratonRec.jpg" alt="recru logo">
					   </span>
                      </div>
                    </td>
                   
                    <td class="mailbox-name"><a href="{{url('read')}}">pour plus d'infos </a></td>
					<td class="mailbox-attachment"></td>
                    <td class="mailbox-subject"><b>Réceptionniste</b> Sheraton Oran Hotel
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date"> <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fa fa-map-marker"></i>Oran, Algérie</a>
                        <a href="#" class="link-black text-sm"><i class="fa fa-clock mr-1"></i> </a>
						<a href="#" class="link-black text-sm"><i class="fa fa-bookmark mr-1"></i> Jeune diplômé (Moins d'un an)</a>
                        
                      </p></td>
					
                  </tr>
                   <tr>
                    <td>
                      <div class="logo_recru">
					    <span class="float-left">
					  <img class="rounded float-left img-bordered-sm" src="img/Industries.jpg" alt="recru logo">
					   </span>
                      </div>
                    </td>
                   
                    <td class="mailbox-name"><a href="{{url('read')}}">pour plus d'infos </a></td>
					<td class="mailbox-attachment"></td>
                    <td class="mailbox-subject"><b>PROMOTEUR EST (Constantine/Skikda)</b> Importante entreprise
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date"> <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fa fa-map-marker"></i>Skikda, Skikda, Algérie</a>
                        <a href="#" class="link-black text-sm"><i class="fa fa-clock mr-1"></i> </a>
						<a href="#" class="link-black text-sm"><i class="fa fa-bookmark mr-1"></i> Confirmé/Expérimenter (3 à 5ans)</a>
                        
                      </p></td>
					
                  </tr>
                  <tr>
                    <td>
                      <div class="logo_recru">
					    <span class="float-left">
					  <img class="rounded float-left img-bordered-sm" src="img/Sarl_Draco.jpg" alt="recru logo">
					   </span>
                      </div>
                    </td>
                   
                    <td class="mailbox-name"><a href="{{url('read')}}">pour plus d'infos </a></td>
					<td class="mailbox-attachment"></td>
                    <td class="mailbox-subject"><b>Field Sales Supervisor</b> Sarl Draco
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date"> <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fa fa-map-marker"></i>Bordj Bou Arreridj, Algérie</a>
                        <a href="#" class="link-black text-sm"><i class="fa fa-clock mr-1"></i> </a>
						<a href="#" class="link-black text-sm"><i class="fa fa-bookmark mr-1"></i> Responsable d'équipe (2 à 4ans) </a>
                        
                      </p></td>
					
                  </tr>
                   <tr>
                    <td>
                      <div class="logo_recru">
					    <span class="float-left">
					  <img class="rounded float-left img-bordered-sm" src="img/diam.png" alt="recru logo">
					   </span>
                      </div>
                    </td>
                   
                    <td class="mailbox-name"><a href="{{url('read')}}">pour plus d'infos </a></td>
					<td class="mailbox-attachment"></td>
                    <td class="mailbox-subject"><b>Contrôleur de gestion</b> Diam Grain
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date"> <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fa fa-map-marker"></i>Bejaia, Bejaia, Algérie</a>
                        <a href="#" class="link-black text-sm"><i class="fa fa-clock mr-1"></i> </a>
						<a href="#" class="link-black text-sm"><i class="fa fa-bookmark mr-1"></i> Manager/Responsable département (6 à 10ans)</a>
                        
                      </p></td>
					
                  </tr>
                  <tr>
                    <td>
                      <div class="logo_recru">
					    <span class="float-left">
					  <img class="rounded float-left img-bordered-sm" src="img/vendeur.jpg" alt="recru logo">
					   </span>
                      </div>
                    </td>
                   
                    <td class="mailbox-name"><a href="{{url('read')}}">pour plus d'infos </a></td>
					<td class="mailbox-attachment"></td>
                    <td class="mailbox-subject"><b>Vendeur(se)</b> Sarl Atelier du Chou
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date"> <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fa fa-map-marker"></i>Hydra, Alger, Algérie</a>
                        <a href="#" class="link-black text-sm"><i class="fa fa-clock mr-1"></i> </a>
						<a href="#" class="link-black text-sm"><i class="fa fa-bookmark mr-1"></i> Confirmé/Expérimenter (2 à 3ans)</a>
                        
                      </p></td>
					
                  </tr>
                   <tr>
                    <td>
                      <div class="logo_recru">
					    <span class="float-left">
					  <img class="rounded float-left img-bordered-sm" src="img/Algeofleet.jpg" alt="recru logo">
					   </span>
                      </div>
                    </td>
                   
                    <td class="mailbox-name"><a href="{{url('read')}}">pour plus d'infos </a></td>
					<td class="mailbox-attachment"></td>
                    <td class="mailbox-subject"><b>Technico-Commercial(Homme/femme)</b> Algeofleet
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date"> <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fa fa-map-marker"></i>Sétif, Algérie</a>
                        <a href="#" class="link-black text-sm"><i class="fa fa-clock mr-1"></i> </a>
						<a href="#" class="link-black text-sm"><i class="fa fa-bookmark mr-1"></i> Confirmé/Expérimenter (3 à 5ans)</a>
                        
                      </p></td>
					
                  </tr>
                  <tr>
                    <td>
                      <div class="logo_recru">
					    <span class="float-left">
					  <img class="rounded float-left img-bordered-sm" src="img/gala.png" alt="recru logo">
					   </span>
                      </div>
                    </td>
                   
                    <td class="mailbox-name"><a href="{{url('read')}}">pour plus d'infos </a></td>
					<td class="mailbox-attachment"></td>
                    <td class="mailbox-subject"><b>Délégué commercial de développement</b> Sarl Gala Oil
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date"> <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fa fa-map-marker"></i>Tlemcen, Algérie</a>
                        <a href="#" class="link-black text-sm"><i class="fa fa-clock mr-1"></i> </a>
						<a href="#" class="link-black text-sm"><i class="fa fa-bookmark mr-1"></i> Responsable d'équipe  (plus de 10ans)</a>
                        
                      </p></td>
					
                  </tr>
                <tr>
                    <td>
                      <div class="logo_recru">
					    <span class="float-left">
					  <img class="rounded float-left img-bordered-sm" src="img/Fransabank.jpg" alt="recru logo">
					   </span>
                      </div>
                    </td>
                   
                    <td class="mailbox-name"><a href="{{url('read')}}">pour plus d'infos </a></td>
					<td class="mailbox-attachment"></td>
                    <td class="mailbox-subject"><b>Adjoint Directeur d’Agence (Tlemcen)</b> Fransbank
                    </td>
                    
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->
           
            <div class="card-footer p-0">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                <div class="float-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b></b> 
    </div>
    <strong>Contactez nous &copy; 2019-2020 <a href="../index.html">Recrutass</a>.</strong> 
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
    

@endsection
@endsection
