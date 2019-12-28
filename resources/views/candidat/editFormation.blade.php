@extends('../layouts.navbarCandidat')
@section('content4')


<div class="jobsearch-main-content">
    <div class="jobsearch-plugin-default-container">
        <div class="user-dashboard-loader" style="display: none;"></div>
        <div class="jobsearch-row">


            <!-- POST A JOB START -->
            <section class="section">
                <div class="container">
                    <div class="row">


                        <div class="col-12 mt-3">
                            <div class="custom-form p-4 border rounded">
                                <form action="{{route('edit',$formations->id)}}" method="post">
                                    @csrf
                                    <div class="row mt-4">

                                        <div class="col-md-4">
                                            <div class="form-group">

                                                <label for="recipient-name"
                                                    class="col-form-label">Titre <span
                                                        class="text-danger">*</span>:</label>
                                            <input type="text" class="form-control" name="titre" id="titre" value="{{$formations->titre}}">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="recipient-name"
                                                        class="col-form-label">Année <span
                                                            class="text-danger">*</span>:</label>
                                                    <input type="month" class="form-control" name="annee" id="annee" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="recipient-name"
                                                        class="col-form-label">Établissement
                                                        <span class="text-danger">*</span>:</label>
                                                    <input type="text" class="form-control" name="etablissement" id="etablissement" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text"
                                                    class="col-form-label">Description <span
                                                        class="text-danger">*</span>: </label>
                                                <textarea class="form-control" name="description" id="description" required></textarea>
                                            </div>
                                    </div>

                                    <button class="btn btn-primary submitBnt" type="submit">enregistrer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    


                </div>
        </div>



        </section>
    </div>
    @endsection
