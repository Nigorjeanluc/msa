    <!-- === BEGIN FOOTER === -->
                    <div id="base" class="container padding-vert-30">
                        <div class="row">
                            <!-- Disclaimer -->
                            <div class="col-md-6">
                                <h3 class="margin-bottom-10">About Us</h3>
                                <p>All stock images on this template demo are for presentation purposes only, intended to represent a live site and are not included with this template.</p>
                                <p>Most of the images used here are available from
                                    <a class="nobold" href="http://www.shutterstock.com/" target="_blank">shutterstock.com</a>. Links are provided if you wish to purchase them from their copyright owners.</p>
                                <div class="clearfix"></div>
                            </div>
                            <!-- End Disclaimer -->
                            <!-- Contact Details -->
                            <div class="col-md-3">
                                <h3 class="margin-bottom-10">Contact</h3>
                                <p>Gikondo, Kicukiro,
                                    <br />Kigali, Rwanda,
                                    <br />Phone number: +250781612954
                                </p>
                                <p>Email:
                                    <a href="mailto:info@website.com">info@kundagusoma.com</a>
                                    <br />Website:
                                    <a href="http://www.kundagusoma.com">www.kundagusoma.com</a>
                                </p>
                            </div>
                            <!-- End Contact Details -->
                            <!-- Sample Menu -->
                            <div class="col-md-3">
                                <h3 class="margin-bottom-10">Menu</h3>
                                <ul class="menu">
                                    <li>
                                        <a class="fa-tasks" href="#">Placerat facer possim</a>
                                    </li>
                                    <li>
                                        <a class="fa-users" href="#">Quam nunc putamus</a>
                                    </li>
                                    <li>
                                        <a class="fa-signal" href="#">Velit esse molestie</a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <!-- End Sample Menu -->
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- Footer Menu -->
                    <div id="footermenu" class="container">
                        <div class="row">
                            <ul class="list-unstyled list-inline">
                                @if(isset(Auth::user()->name))
                                <li>
                                    <a class="fa-reply-all" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Profile</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">History</a>
                                </li>
                                @endif
                                <li>
                                    <a class="fa-user" href="{{ route('admin.login') }}" target="_blank">Administrator</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- End Footer Menu -->