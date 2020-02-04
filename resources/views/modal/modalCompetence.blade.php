
<div class="modal fade" id="modalC" tabindex="-1" name="modalC" role="dialog"
aria-labelledby="modalCLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
           
            <h4 class="modal-title" id="modelHeading">Nouvelle Competence</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{route('formatC')}}" method="POST">
            {{ csrf_field() }}
            <div class="modal-body">
           
               
                <div class="form-group">
                    @foreach(\App\Competence::all() as $competence)
                  <input type="text" name="titre" id="titre" placeholder="Saisissez une compétence " list="competence">
                  <datalist id="competence">
                  <option value="{{$competence->titre}}">
                  </datalist>
                  @endforeach
                    <input type="text" name="percentage" id="percentage" placeholder="100%" >
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary submitBnt" type="submit">Ajouter</button>
            </div>
        </form>
    </div>
</div>
</div>