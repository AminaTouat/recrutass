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
            <h1>Profile Condidat</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
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

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="img/user.png"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Amina Touat</h3>

                <p class="text-muted text-center">Software Engineer</p>
				

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Facebook </b> 
                        <a href="#" class="link-black text-sm float-right"><i class="fa fa-facebook">  </i></a>
                  </li>
                  <li class="list-group-item">
                    <b>Google</b> <a href="#" class="link-black text-sm float-right"><i class="fa fa-google">  </i></a>
                  </li>
                  <li class="list-group-item">
                    <b>in</b> <a href="#" class="link-black text-sm float-right"><i class="fa fa-linkedin">  </i></a>
                  </li>
				    <li class="list-group-item">
                    <b>mes cv </b> <a class="float-right"> 
                   
                        <a href="#" class="link-black text-sm float-right"><i class="fa fa-plus">  </i></a>
						                     
						   
						<a href="#" class="link-black text-sm float-right"><i class="fas fa-pencil-alt mr-1"> </i></a>
                        
                      </a>
                  </li>
				
				   
				  <div>
             
			 <input class="form-control form-control-navbar" type="à définir" placeholder="à définir" aria-label="Search">
			 </div>
              <!-- /.card-body -->
           
            <!-- /.card -->

            <!-- About Me Box -->
			
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">informations sur Amina Touat</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  G.L. en informatique de l'université de tlemcen abou bakr belkaid 
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Adresse</strong>

                <p class="text-muted">oujlida, tlemcen</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">php</span>
                  <span class="tag tag-success">java</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">laravel</span>
                  <span class="tag tag-primary">design</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">toht mal bus ta3 la fac hhhhhhhhhh</p>
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



