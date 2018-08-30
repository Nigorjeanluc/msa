<header class="header-area">
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Breaking News Area -->
                    <div class="col-12 col-md-8">
                        <div class="breaking-news-area">
                            <!--<h5 class="breaking-news-title">Breaking news</h5>-->
                            <!--<div id="breakingNewsTicker" class="ticker">
                                    <ul>
                                        <li><a href="#">Brexit breakthrough in Brussels comes after week of drama</a></li>
                                        <li><a href="#">Brexit breakthrough in Brussels</a></li>
                                        <li><a href="#">Brexit breakthrough in Brussels comes after week of drama</a></li>
                                        <li><a href="#">Brex comes after week of drama</a></li>
                                        <li><a href="#">Brexit breakthrough in Bweek of drama</a></li>
                                        <li><a href="#">Brexit bssels comes after week of drama</a></li>
                                    </ul>
                                </div>-->
                        </div>
                    </div>
                    <!-- Stock News Area -->
                    <div class="col-12 col-md-4">
                        <div class="stock-news-area">
                            <div class="ticker">
                                <ul>
                                    <li>
                                        <a href="{{ route('location') }}">
                                            <div style="margin-right:10px;" class="single-stock-report">
                                                <div class="stock-index">
                                                    <h4 style="font-size:0.9em">Location</h4>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="{{ route('application') }}">
                                            <div style="margin-right:10px" class="single-stock-report">
                                                <div class="stock-index">
                                                    <h4 style="font-size:0.9em">Application</h4>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="{{ route('GTC') }}">
                                            <div style="margin-right:10px" class="single-stock-report">
                                                <div class="stock-index">
                                                    <h4 style="font-size:0.9em">GTC</h4>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="{{ route('legal_notice') }}">
                                            <div style="margin-right:10px" class="single-stock-report">
                                                <div class="stock-index">
                                                    <h4 style="font-size:0.9em">Legal notice</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Middle Header Area -->
        <div class="middle-header">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Logo Area -->
                    <div class="col-12 col-md-2">
                        <div class="logo-area">
                            <a href="{{ route('/') }}"><img style="height:120px" src="img/core-img/logo.jpg" alt="logo"></a>
                        </div>
                    </div>
                    <!-- Header Advert Area -->
                    <div class="col-12 col-md-6">
                        <div class="header-advert-area">
                            <h1>Minerals Supply Africa Ltd.</h1>
                            <!--<a href="#"><img src="img/bg-img/top-advert.png" alt="header-add"></a>-->
                        </div>
                    </div>
                    <!-- Logo Area -->
                    <div class="col-12 col-md-4">
                        <div class="logo-area">
                            <a href="http://www.cronimet-mining.com/" target="_blank"><img style="height:120px" src="img/core-img/acron.jpg" alt="logo"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Header Area -->
        <div class="bottom-header">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="main-menu">
                            <nav class="navbar navbar-expand-lg">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#gazetteMenu" aria-controls="gazetteMenu" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i>
                                    Menu</button>
                                <div class="collapse navbar-collapse" id="gazetteMenu">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item {{ Request::is('/')||Request::is('prospection')||Request::is('operations')||Request::is('processing') ? "active" : ""}} dropdown">
                                            <a class="nav-link" href="{{ route('/') }}">Home</a>
                                            {{--  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item {{ Request::is('prospection') ? "active" : "" }}" href="{{ route('prospection') }}">Prospection and Sourcing</a>
                                                <a class="dropdown-item {{ Request::is('development') ? "active" : "" }}" href="{{ route('dev') }}">Development</a>
                                                <a class="dropdown-item {{ Request::is('operations') ? "active" : "" }}" href="{{ route('operations') }}">Operations</a>
                                            </div>  --}}
                                        </li>
                                        <li class="nav-item {{ Request::is('testing')||Request::is('tagging')||Request::is('processing_tech')||Request::is('packing')||Request::is('shipping') ? "active" : ""}} dropdown">
                                            <a class="nav-link dropdown-toggle pipDrop1" href="#" id="navbarDropdownx" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                                            <div class="dropdown-menu pipDrop1" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item  {{ Request::is('testing') ? "active" : "" }}" href="{{ route('testing') }}">Testing</a>
                                                <a class="dropdown-item {{ Request::is('tagging') ? "active" : "" }}" href="{{ route('tagging') }}">Tagging</a>
                                                <a class="dropdown-item {{ Request::is('processing_tech') ? "active" : "" }}" href="{{ route('processing_tech') }}">Processing</a>
                                                <a class="dropdown-item {{ Request::is('packing') ? "active" : "" }}" href="{{ route('packing') }}">Packing</a>
                                                <a class="dropdown-item {{ Request::is('shipping') ? "active" : "" }}" href="{{ route('shipping') }}">Shipping</a>
                                            </div>
                                        </li>
                                        <li class="nav-item {{ Request::is('quality')||Request::is('safety')||Request::is('env_sustainability')||Request::is('ITRI') ? "active" : ""}} dropdown">
                                            <a class="nav-link dropdown-toggle pipDrop2" href="{{ route('sustainability') }}" id="navbarDropdownxx" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Policies</a>
                                            <div class="dropdown-menu pipDrop2" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item {{ Request::is('quality') ? "active" : "" }}" href="{{ route('quality') }}">Quality</a>
                                                <a class="dropdown-item {{ Request::is('safety') ? "active" : "" }}" href="{{ route('safety') }}">Safety</a>
                                                <a class="dropdown-item {{ Request::is('env_sustainability') ? "active" : "" }}" href="{{ route('env_sustainability') }}">Environmental Sustainability</a>
                                                <a class="dropdown-item {{ Request::is('ITRI') ? "active" : "" }}" href="{{ route('ITRI') }}">ITRI</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link" href="#">Publications</a>
                                        </li>
                                        <li class="nav-item {{ Request::is('vision_mission')||Request::is('corporate_gov')||Request::is('management')||Request::is('team') ? "active" : ""}} dropdown">
                                            <a class="nav-link dropdown-toggle pipDrop3" href="#" id="navbarDropdownxxx" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">About Us</a>
                                            <div class="dropdown-menu pipDrop3" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item {{ Request::is('corporate_gov') ? "active" : "" }}" href="{{ route('corporate_gov') }}">Corporate Governance (Principles)</a>
                                                <a class="dropdown-item {{ Request::is('vision_mission') ? "active" : "" }}" href="{{ route('vision_mission') }}">Vision & Mission</a>
                                                <a class="dropdown-item {{ Request::is('management') ? "active" : "" }}" href="{{ route('management') }}">Management</a>
                                                <a class="dropdown-item {{ Request::is('team') ? "active" : "" }}" href="{{ route('team') }}">Our team</a>
                                                <a class="dropdown-item {{ Request::is('contact_us') ? "active" : "" }}" href="{{ route('contact') }}">Contact</a>
                                            </div>
                                        </li>
                                        <li class="nav-item {{ Request::is('contact_us') ? "active" : ""}} dropdown">
                                            <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    
                    </div>
                </div>
            </div>

        </div>
    </header>
    <script>
          
       $(".pipDrop").click( function(){
           alert(); 
       });
    </script>