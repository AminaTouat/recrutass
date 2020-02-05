
<div class="modal fade" id="modalE" tabindex="-1" name="modalE" role="dialog"
    aria-labelledby="modalELabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
               
                <h4 class="modal-title" id="modelHeading">Nouvelle expérience</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('formatE')}}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Titre <span
                                    class="text-danger">*</span>:</label>
                            <input type="text" class="form-control" name="Titre" id="Titre" required>
                        </div>
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Nom de l'entreprise
                                <span class="text-danger">*</span>:</label>
                            <input type="text" class="form-control" name="Entreprise" id="Entreprise" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Date de début <span
                                    class="text-danger">*</span>:</label>
                            <input type="month" class="form-control" name="Date_debut" id="Date_debut" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <label for="recipient-name" class="col-form-label">Date de fin  <span
                            class="text-danger">*</span>:</label>
                    <input type="month" class="form-control" name="Date_fin" id="Date_fin" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Description <span class="text-danger">*</span>:
                        </label>
                        <textarea class="form-control" name="Description" id="Description" required></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Lieu <span
                                    class="text-danger">*</span>:</label>
                            <input type="text" class="form-control" name="Lieu" id="Lieu" >
                        </div>
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Type d'entreprise<span
                                    class="text-danger">*</span>:</label>
                            <input type="text" class="form-control" name="Type_entreprise" id="Type_entreprise" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Secteur d'activité <span
                                    class="text-danger">*</span>:</label>
                            <input type="text" class="form-control" name="Secteur" id="Secteur" >
                        </div>
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Métier<span
                                    class="text-danger">*</span>:</label>
                            <input type="text" class="form-control" name="Fonction" id="Fonction" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Niveau de poste <span
                                    class="text-danger">*</span>:</label>
                            <input type="text" class="form-control" name="Niveau" id="Niveau" >
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary submitBnt" type="submit">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</div>