
<div class="modal fade" id="modaledit<?= $one->id?>"  name="modaledit" style="width: 165%; position: absolute;">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
           
            <h4 class="modal-title" id="modelHeading">Modifier Formation</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{url('editFormation/'.$one->id)}}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <label for="recipient-name" class="col-form-label">Titre de la formation <span
                                class="text-danger">*</span>:</label>
                        <input type="text" class="form-control" name="TitreFormation" id="TitreFormation" value="{{$one->TitreFormation}}">
                    </div>
                    <div class="col-md-6">
                        <label for="recipient-name" class="col-form-label">Nom de l'établissement 
                            <span class="text-danger">*</span>:</label>
                        <input type="text" class="form-control" name="etablissement" id="etablissement" value="{{$one->etablissement}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="recipient-name" class="col-form-label">Date de début <span
                                class="text-danger">*</span>:</label>
                        <input type="month" class="form-control" name="Date_debut" id="Date_debut" value="{{$one->Date_debut}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <label for="recipient-name" class="col-form-label">Date de fin  <span
                        class="text-danger">*</span>:</label>
                <input type="month" class="form-control" name="Date_fin" id="Date_fin" value="{{$one->Date_fin}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Description <span class="text-danger">*</span>:
                    </label>
                    <textarea class="form-control" name="Description" id="Description" >{{$one->Description}}"</textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="recipient-name" class="col-form-label">Lieu <span
                                class="text-danger">*</span>:</label>
                        <input type="text" class="form-control" name="Lieu" id="Lieu" value="{{$one->Lieu}}">
                    </div>
                    <div class="col-md-6">
                        <label for="recipient-name" class="col-form-label">Type d'établissement<span
                                class="text-danger">*</span>:</label>
                        <input type="text" class="form-control" name="Type_etablissement" id="Type_etablissement" value="{{$one->Type_etablissement}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="recipient-name" class="col-form-label">Niveau d'études<span
                                class="text-danger">*</span>:</label>
                        <input type="text" class="form-control" name="Niveau" id="Niveau" value="{{$one->Niveau}}">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary submitBnt" type="submit">Modifier</button>
            </div>
        </form>
    </div>
</div>
</div>