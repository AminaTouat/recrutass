@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="offres.create" class="btn btn-primary">Create Offre</a>
                    <h3>Your Blog Offres</h3>
                    @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$offre->intitule}}</td>
                                    <td><a href="/offres/{{$offre->id}}/edit" class="btn btn-default">Edit</a></td>
                                    <td>
                                        {!!Form::open(['action' => ['OffreController@destroy', $offre->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no offres</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
