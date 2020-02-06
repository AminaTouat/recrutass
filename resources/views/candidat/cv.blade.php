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
        <!--
				Header
			-->
        <div class="container opened" data-animation-in="fadeInLeft" data-animation-out="fadeOutLeft">
            <header class="header">
                <!-- menu -->
                <div class="top-menu">
                    <ul>
                        <li>
                            <a href="/home">
                                <span class="icon ion-person"></span>
                                <span class="link">About</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="/cv">
                                <span class="icon ion-android-list"></span>
                                <span class="link">Resume</span>
                            </a>
                        </li>
                        <li>
                            <a href="#contact">
                                <span class="icon ion-paintbrush"></span>
                                <span class="link">Works</span>
                            </a>
                        </li>
                        <li>
                            <a href="#blog-card">
                                <span class="icon ion-chatbox-working"></span>
                                <span class="link">Blog</span>
                            </a>
                        </li>
                        <li>
                            <a href="/contact">
                                <span class="icon ion-at"></span>
                                <span class="link">Contact</span>
                            </a>
                        </li>
                        <li>
                            <a  href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <span class="icon ion-person"></span>
                                <span class="link">Déconnection</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </header>
            @extends('layouts.candidat.header')
            @section('content')

            <!--
				Card - Resume
            -->
                
            <div class="card-inner animated active" id="resume-card">
                <div class="card-wrap">
                    <!--
						Resume
					-->
                    <div class="content resume">
                        <!-- title -->
                        <div class="title">Resume</div>
                        <!-- content -->
                        <div class="row">
                            <!-- experience -->
                            <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                                <div class="resume-title border-line-h">
                                    <div class="row">
                                        <div class="col col-d-9">
                                            <div class="icon"><i class="ion ion-briefcase"></i></div>
                                            <div class="name">Experience</div>
                                        </div>
                                        <div class="col col-d-3">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModal" name="create_record"
                                            id="create_record"><div class="icon"><i class="ion ion-plus"></i></div></button>  
                                        </div>
                                    </div>
                                </div>
                                <div class="resume-items">

                                    @foreach ($formations as $one)
                                    <div class="resume-item border-line-h active">
                                        <div class="row">
                                            <div class="col col-d-3">
                                                <div class=" date">{{$one->annee}}</div>
                                            </div>
                                            <div class="col col-d-5">
                                                <a  href="#"  data-toggle="modal" data-target="#modaledit">
                                                   <i class="fa fa-edit" id="modifie<?= $one->id?>"></i>
                                                </a>
                                                <a href="" >
                                                    <i class="fa fa-trash" id="supp"></i>
                                                </a>
                                            </div>
                                        </div>
                                            <div class="name">{{$one->titre}}</div>
                                            <div class="company">Wingssoft Co.</div>
                                    <p>
                                        {{$one->description}}.
                                    </p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- education -->
                        <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                            <div class="resume-title border-line-h">
                                <div class="row">
                                    <div class="col col-d-9">
                                        <div class="icon"><i class="ion ion-university"></i></div>
                                        <div class="name">Education</div>
                                    </div>
                                    <div class="col col-d-3">
                                     <div class="icon"><i class="ion ion-plus"></i></div>
                                        <!--********************--->
                                        
                                    </div>
                                </div>
                                
                                
                            </div>
                            <div class="resume-items">
                                <div class="resume-item border-line-h">
                                    <div class="date">2007-2011</div>
                                    <div class="name">Yarmouk University</div>
                                    <div class="company">Irbid</div>
                                    <p>
                                        Bachelor's Degree in Computer Science, Yarmouk University ,IT college.
                                    </p>
                                </div>
                                <div class="resume-item border-line-h">
                                    <div class="date">2016</div>
                                    <div class="name">Zend Certificate</div>
                                    <div class="company">Amman</div>
                                    <p>
                                        Zend Certified Engineer. <a target="_blank"
                                            href="https://www.zend.com/en/yellow-pages/ZEND029302">ZEND029302</a>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <!--
						Skills
					-->
                <div class="content skills">
                    <!-- title -->
                    <div class="title">My Skills</div>
                    <!-- content -->
                    <div class="row">
                        <!-- skill item -->
                        <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                            <div class="skills-list">

                                <input type="submit" name="" id="">
                            </div>
                        </div>
                        <!-- skill item -->
                        <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                            <div class="skills-list">
                                <!--<div class="skill-title border-line-h">
										<div class="icon"><i class="ion ion-code"></i></div>
										<div class="name">Coding</div>
									</div>-->
                                <ul>
                                    <li class="border-line-h">
                                        <div class="name">WordPress</div>
                                        <div class="progress">
                                            <div class="percentage" style="width:85%;"></div>
                                        </div>
                                    </li>
                                    <li class="border-line-h">
                                        <div class="name">Joomla</div>
                                        <div class="progress">
                                            <div class="percentage" style="width:85%;"></div>
                                        </div>
                                    </li>
                                    <li class="border-line-h">
                                        <div class="name"> MySQl / Microsoft SQL</div>
                                        <div class="progress">
                                            <div class="percentage" style="width:90%;"></div>
                                        </div>
                                    </li>
                                    <li class="border-line-h">
                                        <div class="name"> Bootstrap</div>
                                        <div class="progress">
                                            <div class="percentage" style="width:90%;"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="name">HTML / CSS </div>
                                        <div class="progress">
                                            <div class="percentage" style="width:90%;"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="name">SEO </div>
                                        <div class="progress">
                                            <div class="percentage" style="width:80%;"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="name">Photoshop </div>
                                        <div class="progress">
                                            <div class="percentage" style="width:70%;"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>

        <!--
				Card - Works
			-->
        <div class="card-inner" id="works-card">
            <div class="card-wrap">
                <!--
						Works
					-->
                <div class="content works">
                    <!-- title -->
                    <div class="title">Recent Works</div>
                    <!-- filters -->
                    <div class="filter-menu filter-button-group">
                        <!--<div class="f_btn active">
								<label><input type="radio" name="fl_radio" value="grid-item" />All</label>
							</div>
							<div class="f_btn">
								<label><input type="radio" name="fl_radio" value="applications" />Applications</label>
							</div>
							<div class="f_btn">
								<label><input type="radio" name="fl_radio" value="websites" />Websites</label>
							</div>-->
                    </div>
                    <!-- content -->
                    <div class="row grid-items">


                        <!-- work item Website -->
                        <div class="col col-d-12 col-t-12 col-m-12 grid-item websites">

                            <div class="box-item">
                                <div class="image">
                                    <a href="https://bikarji.com" class="has-popup-image">
                                        <img width="600" height="801" src="vcard/images/bikarji.jpg"
                                            sizes="(max-width: 600px) 100vw, 600px">
                                        <span class="info">
                                            <span class="ion ion-image"></span>
                                        </span>
                                    </a>
                                </div>
                                <div class="desc">
                                    <a href="https://bikarji.com" class="name">bikarji.com</a>
                                </div>
                            </div>

                            <div class="box-item">
                                <div class="image">
                                    <a href="http://websessions.net/" class="has-popup-image">
                                        <img width="600" height="801" src="vcard/images/websessions.jpg"
                                            sizes="(max-width: 600px) 100vw, 600px">
                                        <span class="info">
                                            <span class="ion ion-image"></span>
                                        </span>
                                    </a>
                                </div>
                                <div class="desc">
                                    <a href="http://websessions.net/" class="name">websessions.net</a>
                                </div>
                            </div>

                            <div class="box-item">
                                <div class="image">
                                    <a href="http://arizona-national.com" class="has-popup-image">
                                        <img width="600" height="801" src="vcard/images/arizona.jpg"
                                            sizes="(max-width: 600px) 100vw, 600px">
                                        <span class="info">
                                            <span class="ion ion-image"></span>
                                        </span>
                                    </a>
                                </div>
                                <div class="desc">
                                    <a href="http://arizona-national.com" class="name">arizona-national.com</a>
                                </div>
                            </div>

                            <div class="box-item">
                                <div class="image">
                                    <a href="https://www.alertiqaa.org/" class="has-popup-image">
                                        <img width="600" height="801" src="vcard/images/alertiqaa.jpg"
                                            sizes="(max-width: 600px) 100vw, 600px">
                                        <span class="info">
                                            <span class="ion ion-image"></span>
                                        </span>
                                    </a>
                                </div>
                                <div class="desc">
                                    <a href="https://www.alertiqaa.org/" class="name">alertiqaa.org</a>
                                </div>
                            </div>


                            <div class="box-item">
                                <div class="image">
                                    <a href="https://flowtechs.net" class="has-popup-image">
                                        <img width="600" height="801" src="vcard/images/floatech.jpg"
                                            sizes="(max-width: 600px) 100vw, 600px">
                                        <span class="info">
                                            <span class="ion ion-image"></span>
                                        </span>
                                    </a>
                                </div>
                                <div class="desc">
                                    <a href="https://flowtechs.net" class="name">flowtechs.net</a>
                                </div>
                            </div>

                            <div class="box-item">
                                <div class="image">
                                    <a href="https://www.mowathaq.com/" class="has-popup-image">
                                        <img width="600" height="801" src="vcard/images/mouathaq.jpg"
                                            sizes="(max-width: 600px) 100vw, 600px">
                                        <span class="info">
                                            <span class="ion ion-image"></span>
                                        </span>
                                    </a>
                                </div>
                                <div class="desc">
                                    <a href="https://www.mowathaq.com/" class="name">mowathaq.com</a>
                                </div>
                            </div>

                            <div class="box-item">
                                <div class="image">
                                    <a href="http://www.zebartech.com/" class="has-popup-image">
                                        <img width="600" height="801" src="vcard/images/zebartech.jpg"
                                            sizes="(max-width: 600px) 100vw, 600px">
                                        <span class="info">
                                            <span class="ion ion-image"></span>
                                        </span>
                                    </a>
                                </div>
                                <div class="desc">
                                    <a href="http://www.zebartech.com/" class="name">zebartech.com</a>
                                </div>
                            </div>
                        </div>

                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--
				Card - Blog
			-->
        <div class="card-inner blog" id="blog-card">
            <div class="card-wrap">
                <!--
						Blog
					-->
                <div class="content blog">
                    <!-- title -->
                    <div class="title">Latest Posts</div>
                    <!-- content -->
                    <div class="row border-line-v">

                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
        
    <!--
    
        Modal d'experience
-->
<div class="modal fade" id="exampleModal" tabindex="-1" name="exampleModal" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('updateF')}}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <span id="form_result"></span>
                    <div class="form-group">

                        <label for="recipient-name" class="col-form-label">Titre <span
                                class="text-danger">*</span>:</label>
                        <input type="text" class="form-control" name="titre" id="titre" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Année <span
                                    class="text-danger">*</span>:</label>
                            <input type="month" class="form-control" name="annee" id="annee" required>
                        </div>
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Établissement
                                <span class="text-danger">*</span>:</label>
                            <input type="text" class="form-control" name="etablissement" id="etablissement" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Description <span class="text-danger">*</span>:
                        </label>
                        <textarea class="form-control" name="description" id="description" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary submitBnt" type="submit">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--modal-->
<div class="modal fade" id="modaledit" tabindex="-1" name="modaledit" role="dialog"aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- <form action={{route('edit',$formations->id)}} method="POST"> --}}
                {{ csrf_field() }}
                <div class="modal-body">
                    <span id="form_result"></span>
                    <div class="form-group">

                        <label for="recipient-name" class="col-form-label">Titre <span
                                class="text-danger">*</span>:</label>
                        {{-- <input type="text" class="form-control" name="titre" id="titre" value="{{$formations->titre}}"> --}}
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Année <span
                                    class="text-danger">*</span>:</label>
                            <input type="month" class="form-control" name="annee" id="annee" required>
                        </div>
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Établissement
                                <span class="text-danger">*</span>:</label>
                            <input type="text" class="form-control" name="etablissement" id="etablissement" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Description <span class="text-danger">*</span>:
                        </label>
                        <textarea class="form-control" name="description" id="description" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary submitBnt" type="submit">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</div>

                                            

    @endsection
    <!--
		jQuery Scripts
	-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vcard/js/scripts.min.js"></script>
</body>

</html>