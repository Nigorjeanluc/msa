<header class="header-area">
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Breaking News Area -->
                    <div class="col-12 col-md-10 col-sm-10 col-xs-10">
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
                    <div class="col-12 col-md-2 col-sm-2 col-xs-2">
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
                                        {{-- <a href="{{ route('GTC') }}">
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
                                        </a> --}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Middle Header Area -->
        <div class="middle-header  mh-100">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Logo Area -->
                    <div class="col-2 col-md-2 col-sm-2 col-xs-2 col-xs-2 mh-100">
                        <div class="logo-area">
                            <a href="{{ route('/') }}"><img style="height:120px;potision:right" src="img/core-img/logo.jpg" alt="logo"></a>
                        </div>
                    </div>
                    <!-- Header Advert Area -->
                    <div class="col-6 col-md-6 col-sm-6 col-xs-6 mh-100">
                        <div class="header-advert-area">
                            <h2 id="companyName">Minerals Supply Africa Ltd.</h2>
                        </div>
                    </div>
                    <!-- Logo Area -->
                    <div class="col-4 col-md-4 col-sm-4 col-xs-4 col-xs-4 mh-100">
                        <div class="logo-area">
                            <a href="http://www.cronimet-mining.com/" target="_blank"><img style="height:120px;width:100%" src="img/core-img/acron.jpg" alt="logo"></a>
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
                                        <li class="nav-item {{ Request::is('ITRI')||Request::is('corporate_gov')||Request::is('ethical_fundamentals')||Request::is('traceability') ? "active" : ""}} dropdown">
                                            <a class="nav-link dropdown-toggle pipDrop2" href="{{ route('sustainability') }}" id="navbarDropdownxx" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Policies</a>
                                            <div class="dropdown-menu pipDrop2" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item {{ Request::is('traceability') ? "active" : "" }}" href="{{ route('traceability') }}">Traceability</a>
                                                <a class="dropdown-item {{ Request::is('corporate_gov') ? "active" : "" }}" href="{{ route('corporate_gov') }}">Corporate Governance (Principles)</a>
                                                <a class="dropdown-item {{ Request::is('ITRI') ? "active" : "" }}" href="{{ route('ITRI') }}">ITRI</a>
                                                <a class="dropdown-item {{ Request::is('ethical_fundamentals') ? "active" : "" }}" href="{{ route('ethical') }}">Ethical Fundamental</a>
                                            </div>
                                        </li>
                                        {{--  <li class="nav-item {{ Request::is('/') ? "active" : ""}} dropdown">
                                            <a class="nav-link" href="{{ route('/') }}">News</a>
                                        </li>  --}}
                                        <li class="nav-item dropdown">
                                            <a class="nav-link {{ Request::is('publications') ? "active" : "" }}" href="{{ route('publications') }}">Publications</a>
                                        </li>
                                        <li class="nav-item {{ Request::is('vision_mission')||Request::is('management')||Request::is('team') ? "active" : ""}} dropdown">
                                            <a class="nav-link dropdown-toggle pipDrop3" href="#" id="navbarDropdownxxx" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">About Us</a>
                                            <div class="dropdown-menu pipDrop3" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item {{ Request::is('vision_mission') ? "active" : "" }}" href="{{ route('vision_mission') }}">Vision & Mission</a>
                                                {{-- <a class="dropdown-item {{ Request::is('management') ? "active" : "" }}" href="{{ route('management') }}">Management</a> --}}
                                                <a class="dropdown-item {{ Request::is('team') ? "active" : "" }}" href="{{ route('team') }}">Our team</a>
                                                <a class="dropdown-item {{ Request::is('contact_us') ? "active" : "" }}" href="{{ route('contact') }}">Contact Us</a>
                                            </div>
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