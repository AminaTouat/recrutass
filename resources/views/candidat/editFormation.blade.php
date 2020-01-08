<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <!--
		Basic
	-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{-- <title>{{ $user->name }}</title> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="vcard, resume, personal, card, cv, cards, portfolio,web developer,php developer,laravel,wordpress,joomal" />
    <meta name="google-site-verification" content="KRu7rdDZusMhg5DeiFq4vNJTqwiaY-Aqdruv9pE9J_8" />

    <!--
		Load Fonts
    -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="../releases/v5-0-9/css/all.css">
    <link rel="stylesheet" href="../vcard/css/styles.min.css" />
    <link rel="stylesheet" href="../vcard/css/template-colors/green.css" />
    <link href="../vendor/jquery/jquery.js" rel="stylesheet">
    

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
                                                {{-- <div class="col-md-6">
                                                    <label for="recipient-name"
                                                        class="col-form-label">Année <span
                                                            class="text-danger">*</span>:</label>
                                                    <input type="month" class="form-control" name="annee" id="annee" required>
                                                </div>
                                                <div class="col-md-6"> --}}
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
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    </html>
