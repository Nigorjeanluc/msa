<div id="container_hornav" class="container no-padding">
    <!-- Logo -->
    <div class="logo">
        <a href="{{ isset(Auth::user()->name) ? route('home') : route('/') }}">
            <img style="width:400px;height:60px" src="/img/transparency.png" alt="Logo" />
        </a>
    </div>
    <!-- End Logo -->
    <!-- Slogan -->
    <p class="site-slogan">{{ isset(Auth::user()->name) ? 'Ikaze '.Auth::user()->name : 'SOMA UTYAZE UBWENGE' }}</p>
    <!-- End Slogan -->
    <!-- Top Menu -->
    <div class="row">
        <div class="hornav-block">
            <div id="hornav" class="pull-right">
                <ul id="hornavmenu" class="nav navbar-nav">
                    <li class="{{ Request::is('/')||Request::is('home') ? "active" : ""}}">
                        <a href="{{ isset(Auth::user()->name) ? route('home') : route('/') }}">Home</a>
                    </li>
                    <li>
                        <span>Books</span>
                        <ul>
                            <li class="{{ Request::is('abana')||Request::is('children') ? "active" : ""}}">
                                <a href="{{ isset(Auth::user()->name) ? route('abana') : route('children') }}">Children Books</a>
                            </li>
                            <li class="{{ Request::is('urukundo')||Request::is('love') ? "active" : ""}}">
                                <a href="{{ isset(Auth::user()->name) ? route('urukundo') : route('love') }}">Love Story Books</a>
                            </li>
                            <li class="{{ Request::is('inganzo')||Request::is('inspiration') ? "active" : ""}}">
                                <a href="{{ isset(Auth::user()->name) ? route('inganzo') : route('inspiration') }}">Inspirational Books</a>
                            </li>
                            <li class="{{ Request::is('iterambere')||Request::is('personal') ? "active" : ""}}">
                                <a href="{{ isset(Auth::user()->name) ? route('iterambere') : route('personal') }}">Personal Development Books</a>
                            </li>
                            <li class="{{ Request::is('iyobokamana')||Request::is('religion') ? "active" : ""}}">
                                <a href="{{ isset(Auth::user()->name) ? route('iyobokamana') : route('religion') }}">Religious Books</a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ Request::is('amaseries')||Request::is('series') ? "active" : ""}}">
                        <a href="{{ isset(Auth::user()->name) ? route('amaseries') : route('series') }}">Series Stories</a>
                    </li>
                    <li class="{{ Request::is('short_stories')||Request::is('inkuru_nto') ? "active" : ""}}">
                        <a href="{{ isset(Auth::user()->name) ? route('inkuru_nto') : route('short') }}">Short Stories</a>
                    </li>
                    <li class="{{ Request::is('contact_us')||Request::is('tumenyeshe') ? "active" : ""}}">
                        <a href="{{ isset(Auth::user()->name) ? route('tumenyeshe') : route('contact') }}">Contact</a>
                    </li>
                    @if(!isset(Auth::user()->name))
                    <li>
                        <a href="{{ route('login') }}" title="Login">Login</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- End Top Menu -->
</div>