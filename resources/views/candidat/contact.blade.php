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
                        <li >
                            <a href="/cv">
                                <span class="icon ion-android-list"></span>
                                <span class="link">Resume</span>
                            </a>
                        </li>
                        <li>
                            <a href="/contact">
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
                        <li class="active">
                            <a href="#contacts-card">
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
			<!--	Card - Contacts
			-->
            <div class="card-inner animated active" id="contacts-card">
                <div class="card-wrap">
                    <!--
                            Conacts Info
                        -->
                    <div class="content contacts">
                        <!-- title -->
                        <div class="title">Get in Touch</div>
                        <!-- content -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group app-label">
                                    <label class="text-muted">Ville</label>
                                    <div style="font-size: 12px;">
                                        <select class="nice-select rounded" name="ville">
                                            <option data-display="Ville">{{$user->ville}}</option>
                                            <option value="Adrar">Adrar</option>
                                            <option value="chlef">chlef</option>
                                            <option value="Laghouat">Laghouat</option>
                                            <option value="Oum El Bouaghi">Oum El Bouaghi</option>
                                            <option value="Batna">Batna</option>
                                            <option value="Béjaia">Béjaia</option>
                                            <option value="Biskra">Biskra</option>
                                            <option value="Béchar">Béchar</option>
                                            <option value="Blida">Blida</option>
                                            <option value="Bouira">Bouira</option>
                                            <option value="Tamanrasset">Tamanrasset</option>
                                            <option value="Tébessa">Tébessa</option>
                                            <option value="Tlemcen">Tlemcen</option>
                                            <option value="Tiaret">Tiaret</option>
                                            <option value="Tizi Ouzou">Tizi Ouzou</option>
                                            <option value="Alger">Alger</option>
                                            <option value="Djelfa">Djelfa</option>
                                            <option value="jijel">jijel</option>
                                            <option value="Sétif">Sétif</option>
                                            <option value="Saida">Saida</option>
                                            <option value="Skikda">Skikda</option>
                                            <option value="Sidi Bel Abbes">Sidi Bel Abbes</option>
                                            <option value="Annaba">Annaba</option>
                                            <option value="Guelma">Guelma</option>
                                            <option value="Constantine">Constantine</option>
                                            <option value="Médéa">Médéa</option>
                                            <option value="Mostaganem">Mostaganem</option>
                                            <option value="M'Sila">M'Sila</option>
                                            <option value="Mascara">Mascara</option>
                                            <option value="Ouargla">Ouargla </option>
                                            <option value="Oran">Oran</option>
                                            <option value="El Bayadh">'El Bayadh</option>
                                            <option value="Illizi">Illizi</option>
                                            <option value="Bordj Bou Arreridj">Bordj Bou Arreridj</option>
                                            <option value="Boumerdès">Boumerdès</option>
                                            <option value="El Tarf">El Tarf</option>
                                            <option value="Tindouf">Tindouf</option>
                                            <option value="Tissemsilt">Tissemsilt</option>
                                            <option value="El Oued">El Oued </option>
                                            <option value="Khenchela">Khenchela</option>
                                            <option value="Souk Ahras">Souk Ahras</option>
                                            <option value="Tipaza">Tipaza</option>
                                            <option value="Mila">Mila</option>
                                            <option value="Defla">Defla</option>
                                            <option value="Naâma">Naâma</option>
                                            <option value="Aïn Témouchent">Aïn Témouchent </option>
                                            <option value="Ghardaïa">Ghardaïa </option>
                                            <option value="Relizane">Relizane</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group app-label">
                                    <label class="text-muted" >Phone</label>
                                    <input id="phone" type="number" class="form-control resume" name="phone" value="{{$user->phone}}">
                                </div>
                            </div>


                            <div class="clear"></div>
                        </div>
                    </div>
                    <!--
                            Contact Form
                        -->
                    <div class="content contacts">
                        <!-- title -->
                        <div class="title">Contact Form</div>
                        <!-- content -->
                        <div class="row">
                            <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                                <div class="contact_form">
                                    <form id="cform" method="post">
                                        <div class="row">
                                            <div class="col col-d-6 col-t-6 col-m-12">
                                                <div class="group-val">
                                                    <input type="text" name="name" placeholder="Full Name" />
                                                </div>
                                            </div>
                                            <div class="col col-d-6 col-t-6 col-m-12">
                                                <div class="group-val">
                                                    <input type="text" name="email" placeholder="Email Address" />
                                                </div>
                                            </div>
                                            <div class="col col-d-12 col-t-12 col-m-12">
                                                <div class="group-val">
                                                    <textarea name="message" placeholder="Your Message"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="align-left">
                                            <a href="#" class="button" onclick="$('#cform').submit(); return false;">
                                                <span class="text">Send Message</span>
                                                <span class="arrow"></span>
                                            </a>
                                        </div>
                                    </form>
                                    <div class="alert-success">
                                        <p>Thanks, your message is sent successfully.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
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
    