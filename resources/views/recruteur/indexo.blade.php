
<body>
    <div class="page">

        <!-- background -->
        <div class="background gradient">
            <ul class="bg-bubbles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <div class="container opened" data-animation-in="fadeInLeft" data-animation-out="fadeOutLeft">
            <header class="header">
                <!-- menu -->
                <div class="top-menu">
                    <ul>
                        <li class="active">
                            <a href="/recruteur">
                                <span class="icon ion-person"></span>
                                <span class="link">Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('recruteur.indexo') }}">
                                <span class="icon ion-android-list"></span>
                                <span class="link">Offre</span>
                            </a>
                        </li>
                        <li>
                            <a href="/contact">
                                <span class="icon ion-paintbrush"></span>
                                <span class="link">Works</span>
                            </a>
                        </li>
                        <li>
                            <a href="/recruteur/chartLine/year">
                                <span class="icon ion-chatbox-working"></span>
                                <span class="link">statistque (offre par an)</span>
                            </a>
                        </li>
                        <li>
                            <a href="/contact">
                                <span class="icon ion-at"></span>
                                <span class="link">Contact</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <span class="icon ion-person"></span>
                                <span class="link">Déconnection</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        
                        </li>
                    </ul>
                </div>
            </header>
            @extends('layouts.recruteur.header')
            @section('content')
            
            <!-- 
				Card - About
			-->
            <div class="card-inner animated active" id="about-card">
                <div class="card-wrap">
                    <!-- 
						About 
					-->
                    <div class="content about">
                        <!-- title -->
                        <div class="title">Offres</div>
                        <!-- content -->
						<form action="{{route('offres.store')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

                          
                    </div>

                    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Check all offres</h2>
            </div>
            <div class="pull-right">
              <button>  <a class="btn btn-success" href="{{ route('offres.create') }}"> Create </a></button>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Description</th>
            <th>date de création</th>
           
            <th width="250px">Action</th>
        </tr>
        @foreach ($offres as $offre)
        <tr>
            <td>{{ ++$i }}</td>
            <td><a href="{{ route('offres.show',$offre->id) }}">{{ $offre->intitule }}</a></td>
            <td>{{ $offre->description }}</td>
            <td>  <small>Written on {{$offre->created_at}}
            {{App\Offre::find($offre->id)->recruteur->name}}
            </small></td>
        
            <td>
                <form action="{{ route('offres.destroy',$offre->id) }}" method="POST">
   
                    <a class="btn btn-primary" href="{{url('/offres/edit/'.$offre->id) }}">Edit</a>
                    
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
       
        @endforeach
    </table>

  
    {!! $offres->links() !!}
      
    @endsection



    
    <script src="../vcard/js/scripts.min.js"></script>
</body>

</html>