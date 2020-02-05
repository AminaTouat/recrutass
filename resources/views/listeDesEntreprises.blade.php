@extends('layouts.navbarindex')
@section('content4')
@extends('layouts.headerindex')
@section('content5')
			
            <section class="section">
                    <div class="container">
                        <div class="row">
                        @foreach ($offres as $offre)
                            <div class="col-lg-4 col-md-6 mb-4 pb-2">
                                <div class="blog position-relative overflow-hidden shadow rounded">
                               
                                    <div class="position-relative overflow-hidden">
                                    <img class="img-fluid rounded-top" src="{{ asset('../upload/logo/'.$offre->image_logo) }}"style="margin-left:60px" >
                                        <div class="overlay rounded-top bg-dark"></div>
                                    </div>
                                    <div class="content p-4">
                                        <h4><a href="{{route('showoffre', ['id' => $offre->id])}}" class="title text-dark">{{$offre->intitule}}</a></h4>
                                        <p class="text-muted">{{$offre->description}}</p>
                                        <a href="{{route('showoffre', ['id' => $offre->id])}}" class="text-dark readmore">Read more <i class="mdi mdi-chevron-right"></i></a>
                                        <a href={{url('postuler/'.$offre->id)}} class="btn btn-primary " type="submit" style="margin-left:60px">Postulé</a>
                            </div>
                                    <div class="author">
                                        <p class=" mb-0"><i class="mdi mdi-account text-light"></i>by {{App\Offre::find($offre->id)->recruteur->name}}  <small>{{$offre->created_at->diffForHumans()}}</small> <a href="javascript:void(0)" class="text user"></a></p>
                                        <p class="text-light mb-0 date"><i class="mdi mdi-calendar-check"></i> </p>
                                    </div>
                                 
                                </div>
                            </div>
                            @endforeach
                 
                            <!--end col-->
            
                           
                           
                       
            
                           
                            
            
                           
                        </div>
                    </div>
                </section>
                <!-- blog end -->
            
            <div></div>
@endsection
@endsection
