<table border=1>
        <tr>
                <td>id</td>
                <td>prenom</td>
                <td>description</td>
                <td>modifier</td> <td>supprimer</td></tr>
           @foreach ($candidats as $candidat)
                <tr>
                <td>{{$candidat->id}}</td>
                <td>{{$candidat->prenom}}</td>
                <td><a href="">modifier</a></td>
                <td><a href="">supprimer</a></td>
                </tr>
            
            @endforeach
               
            
        </table>