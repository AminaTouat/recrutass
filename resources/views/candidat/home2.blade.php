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
        <div class="container opened" data-animation-in="fadeInLeft" data-animation-out="fadeOutLeft">
    <header class="header">
        <!-- menu -->
        <div class="top-menu">
            <ul>
                <li class="active">
                    <a href="/home">
                        <span class="icon ion-person"></span>
                        <span class="link">About</span>
                    </a>
                </li>
                <li>
                    <a href="/cv">
                        <span class="icon ion-android-list"></span>
                        <span class="link">Resume</span>
                    </a>
                </li>
                <li>
                    <a href="#works-card">
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
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>
    </header>
@extends('layouts.candidat.header')
@section('content')

 <!-- 
				Card - About
			-->
            <div class="card-inner animated active" id="about-card">
                <div class="card-wrap">
                    <!-- 
						About 
					-->
                    <div class="content about">
                        <!-- title -->
                        <div class="title">About Me</div>
                        <!-- content -->
                        <div class="row">
                            <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                                <div class="text-box">
                                    <p>
                                        I am Jalal Alomari, web developer from Jordan, Amman. I have rich experience in web site developer and building and customization web application, also I am good at wordpress and joomla CMS. I love to talk with you about our unique.
                                    </p>
                                </div>
                                <div class="info-list">
                                    <ul>
                                        <li><strong>Age . . . . . . . . . . . .</strong> 30</li>
                                        <li><strong>Residence . . . . . .</strong> Jordan</li>
                                        <li><strong>Company . . . . .</strong> Menaitech</li>
                                        <li><strong>Address . . . . . . . . </strong> Amman, Jordan</li>
                                    </ul>
                                </div>
                            </div>
            
                                           
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!--
						Services
					-->
                    <div class="content services">
                        <!-- title -->
                        <div class="title">My Services</div>
                        <!-- content -->
                        <div class="row service-items border-line-v">
                            <!-- service item -->
                            <div class="col col-d-6 col-t-6 col-m-12 border-line-h">
                                <div class="service-item">
                                    <div class="icon"><span class="ion ion-code"></span></div>
                                    <div class="name">Web Application Development</div>
                                    <p>
                                        I provide best solution for any custom system or application, eg: ERP, CMS, SMS ...etc.
                                    </p>
                                </div>
                            </div>
                            <!-- service item -->
                            <div class="col col-d-6 col-t-6 col-m-12 border-line-h">
                                <div class="service-item">
                                    <div class="icon"><span class="ion ion-earth"></span></div>
                                    <div class="name">Web site Development</div>
                                    <p>
                                        Modern and mobile-ready website that will help you reach all of your marketing.
                                    </p>
                                </div>
                            </div>
                            <!-- service item -->
                            <div class="col col-d-6 col-t-6 col-m-12">
                                <div class="service-item">
                                    <div class="icon"><span class="ion ion-cloud"></span></div>
                                    <div class="name">Domain and Hosting</div>
                                    <p>
                                        I provide booking domain and hosting with minimum price, also provide Email hosting for the business with 365 office or Gmail.
                                    </p>
                                </div>
                            </div>
                            <!-- service item -->
                            <div class="col col-d-6 col-t-6 col-m-12">
                                <div class="service-item">
                                    <div class="icon"><span class="ion ion-search"></span></div>
                                    <div class="name">SEO</div>
                                    <p>
                                        I have good experience to make your website in the top ranking using SEO website.
                                    </p>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>

                </div>
            </div>
            @endsection
            <!--
                jQuery Scripts
            -->
        
            <script src="../vcard/js/scripts.min.js"></script>
        </body>
        
        </html>