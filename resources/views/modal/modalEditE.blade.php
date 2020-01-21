<div class="modal fade" id="modaledit<?= $one->id?>" tabindex="-1" name="modaledit" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 161%;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
               
                <h4 class="modal-title" id="modelHeading">Modifier expérience</h4>
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
                            <label for="recipient-name" class="col-form-label">Titre <span
                                    class="text-danger"></span>:</label>
                            <input type="text" class="form-control" name="Titre" id="Titre" value="{{$one->Titre}}">
                        </div>
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Nom de l'entreprise
                                <span class="text-danger">*</span>:</label>
                            <input type="text" class="form-control" name="Entreprise" id="Entreprise" value="{{$one->Entreprise}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Date de début <span
                                    class="text-danger">*</span>:</label>
                            <input type="month" class="form-control" name="Date_debut" id="Date_debut" value="{{$one->Date_debut}}">
                        </div>
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Date de fin  <span
                                    class="text-danger">*</span>:</label>
                            <input type="month" class="form-control" name="Date_fin" id="Date_fin" value="{{$one->Date_fin}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Description <span class="text-danger">*</span>:
                        </label>
                        <textarea class="form-control" name="Description" id="Description" value="{{$one->Description}}">{{$one->Description}}</textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Lieu <span
                                    class="text-danger">*</span>:</label>
                            <input type="text" class="form-control" name="Lieu" id="Lieu" value="{{$one->Lieu}}">
                        </div>
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Type d'entreprise<span
                                    class="text-danger">*</span>:</label>
                            <input type="text" class="form-control" name="Type_entreprise" id="Type_entreprise" value="{{$one->Type_entreprise}}" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Secteur d'activité <span
                                    class="text-danger">*</span>:</label>
                            <input type="text" class="form-control" name="Secteur" id="Secteur" value="{{$one->Secteur}}" >
                        </div>
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Métier<span
                                    class="text-danger">*</span>:</label>
                            <input type="text" class="form-control" name="Fonction" id="Fonction" value="{{$one->Fonction}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Niveau de poste <span
                                    class="text-danger">*</span>:</label>
                            <input type="text" class="form-control" name="Niveau" id="Niveau" value="{{$one->Niveau}}">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary submitBnt" type="submit" value="Modifier">Modifier</button>
                </div>
            </form>
        </div>
    </div>
</div>