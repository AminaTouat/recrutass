<<!DOCTYPE html>
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
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> 
    
     
            <div class="col-md-12 mt-5">
                <div class="rounded border jobs-wrap">
                    @if (count($offres)>0)
                    @foreach($offres as $offre)
                    <a href="{{url('index'.$offre->id)}}" class="job-item d-block d-md-flex align-items-center  border-bottom fulltime">
              <!-- <div class="company-logo blank-logo text-center text-md-left pl-3">
                <img src="{{asset('images/company_logo_blank.png')}}" alt="Image" class="img-fluid mx-auto">
              </div> -->
              <div class="job-details h-100">
                <div class="p-3 align-self-center">
                  <h3>{{$offre->intitule}}</h3>
                  <div class="d-block d-lg-flex">
                    <div class="mr-3"><span class="icon-suitcase mr-1"></span> {{$offre->lieutravail}}</div>
                    <div><span class="icon-money mr-1"></span> {{$offre->prix}} </div>
                    <div>&nbsp;<span class="fas fa-clock mr-1"></span> {{$offre->created_at->diffForHumans()}}</div>
                  </div>
                </div>
              </div>
              <div class="job-category align-self-center">
                <div class="p-3">
                  <span class="text-info p-2 rounded border border-info">{{$offre->Type}}</span>
                </div>
              </div>  
            </a>
                    @endforeach
                        @else
                        <td>
                            Aucune offre trouvée
                        </td>
                    @endif
                </div>
            </div>

            <div class="col-md-3 mt-5">
                {{ $offres->appends(Illuminate\Support\Facades\Request::except('page'))->links() }}
            </div>

        </div>

    </div>
    <!-- Recherche -->

    <!-- Recent job -->
    
    <!-- Recent job -->
    
    <!-- Question -->

    <!-- Question -->

    <!-- Footer -->
    
    
  </div>
  <!-- Script -->
  

  </body>
</html>