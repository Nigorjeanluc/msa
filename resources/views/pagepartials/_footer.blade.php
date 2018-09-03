<!-- Footer Area Start -->
    <footer class="footer-area bg-img1 background-overlay1" style="background-image: url(img/bg-img/4.jpg);">
        <!-- Top Footer Area -->
        <div class="top-footer-area section_padding_100_70">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="footer-widget-title">
                                <h4 class="font-pt">Services</h4>
                            </div>
                            <ul class="footer-widget-menu">
                                <li><a href="{{ route('testing') }}">Testing</a></li>
                                <li><a href="{{ route('tagging') }}">Tagging</a></li>
                                <li><a href="{{ route('processing_tech') }}">Processing Technologies</a></li>
                                <li><a href="{{ route('packing') }}">Packing</a></li>
                                <li><a href="{{ route('shipping') }}">Shipping</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="footer-widget-title">
                                <h4 class="font-pt">Policies</h4>
                            </div>
                            <ul class="footer-widget-menu">
                                <li><a href="{{ route('quality') }}">Quality</a></li>
                                <li><a href="{{ route('safety') }}">Safety</a></li>
                                <li><a href="{{ route('env_sustainability') }}">Environmental Sustainability</a></li>
                                <li><a href="{{ route('ITRI') }}">ITRI</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="footer-widget-title">
                                <h4 class="font-pt">About Us</h4>
                            </div>
                            <ul class="footer-widget-menu">
                                <li><a href="{{ route('corporate_gov') }}">Corporate Governance</a></li>
                                <li><a href="{{ route('vision_mission') }}">Vision & Mission</a></li>
                                <li><a href="{{ route('location') }}">Location</a></li>
                                <li><a href="{{ route('management') }}">Management</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="footer-widget-title">
                                <h4 class="font-pt">+More</h4>
                            </div>
                            <ul class="footer-widget-menu">
                                <li><a href="{{ route('location') }}">Location</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                <li><a href="{{ route('GTC') }}">GTC</a></li>
                                <li><a href="{{ route('legal_notice') }}">Legal notice</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12">
                        <div class="copywrite-text">
                            <p>
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved by MSA Ltd | <a href="{{ route('admin.login') }}" target="_blank">Admin</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->