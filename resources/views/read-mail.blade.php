
@extends('layouts.sidebar')
@extends('layouts.navbarprofile')

@section('content1')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Détaille sur l'offres</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Détailles</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        
          <!-- /.col -->
        <div class="col-md-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
                <img class="rounded float-left " src="img/Distribution,-Commerce.jpg" alt="recru logo">
              <h1 class="card-title">Business Analyste</h1><br>
              <p>Importante entreprise Alger, Algérie</p>
              
              

              <div class="card-tools">
                <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Previous"><i class="fas fa-chevron-left"></i></a>
                <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Next"><i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-read-info">
               
                <table class="table table-striped">
                    <thead>
                        <tr>
                          <th scope="col">Secteur d'activité <br>
                              Date d'expiration<br>
                              Nombre de postes</th>
                          <th scope="col">Distribution, Commerce<br>
                              17 Janvier 2020<br>
                              01 poste ouvert</th>
                          <th scope="col">Niveau de poste<br>
                              Niveau d'étude (diplome)</th>
                          <th scope="col">Confirmé / Expérimenté<br>
                               (diplome)Master 2, Ingéniorat, Bac + 5</th>
                        </tr>
                      </thead>

                </table>
                        
                      
              </div>
              <!-- /.mailbox-read-info -->
           
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                <h2>Mission Générale du poste :</h2>

                <p>- Valorisation de l’ensemble des données business de l’activité pour en faire un levier de création de valeur pour l’entreprise.<br>
                  - Récolte et analyse de masses de données hétérogènes, éventuellement non structurées, pour en extraire de la connaissance utile à l’optimisation de l’activité de l’entreprise.</p>

                <h2>Profil recherché :</h2>

                <p>- Formation de base : Diplôme universitaire Bac +5 (Master en statistiques, statistique et informatique décisionnelle, économétrie, mathématiques,  modélisation des données, informatique générale) Formation complémentaire : dans le domaine d’activité.<br>
                  - Expérience : 3 années dans la même l’activité en milieu pharmaceutique est fortement recommandée. <br>
                  -  Maitrise parfaite des langues : Arabe, Français et anglais.</p>

                  <h2>Avantages du poste :</h2>

                  <p>- Cadre de travail agréable.<br>
                    - Rémunération attractive. <br>
                    - Accompagnement et formation selon plan de formation.</p>

                
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.card-body -->
            
            <!-- /.card-footer -->
           
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
    
<!-- jQuery -->


@endsection
  
  @endsection