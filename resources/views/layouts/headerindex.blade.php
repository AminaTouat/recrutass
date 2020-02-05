
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="shortcut icon" href="img/logo.png">
  <title>Emploi</title>
  <!-- Bootstrap core CSS -->
  <link href="vendor/jquery/jquery.js" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/Recrutass.css" rel="stylesheet">
  <!-- Bootstrap core Ajax JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

<!-- Header -->
<header class="masthead">
    <div class="container  h-100 align-items-center ">
      <div class="row">
          <div class="mx-auto text-center">
              <h1 class="mx-auto my-0 text-uppercase">A dieux le chômage</h1>
              <h2 class="text-white-50 mx-auto mt-2 mb-5">& Bienvenue a la vie professionnelle</h2>
          
          </div>
      </div>
      <div class="row">
      <form class="header-job-search" method="get" action="{{route('live_search')}}">
          <div class="row">
            <div class="col-lg-5">
              <input id="input1" type="text" name="search" class="form-control" placeholder="&#xf002; Rechercher une offre ...">
            </div>
            <div class="col-lg-5 ">
              <input id="input2" type="text" name="ad" class="form-control" placeholder="&#xf041; Région, wilaya ...">
            </div>
            <div class="col-lg-2 ">
              <button type="submit" id="chercher" class="btn btn-primary">Chercher</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    
    <!--<script>
       $(document).ready(function(){
        $('#input1').keyup(function(){
            var offre = $(this).val();
            if(offre!=""){
              $.ajax({
                  type:'GET',
                  url: 'Controllers/LiveSearch.php',
                  data: 'offres='  +encodeURIComponent (offre),
                  success: function(data){
                    if(data!=""){
                       $('#result-search').append(data);
                    }
                    else {
                       document.getElemenbyId('result-search').inner.HTML= "<div 'font-size: 20px; text-align: center; margin-top: 10px'> Aucune offre </div>"
                    }
                  }
                
              });
              
             }
        });
       });
    </script>-->

  </header>
  @yield('content5')