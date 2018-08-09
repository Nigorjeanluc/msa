<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    @include('pagepartials._head')
    <body>
        <div id="body_bg">
            @include('pagepartials._headerbuttons')
            <div class="primary-container-group">
                <!-- Background -->
                <div class="primary-container-background">
                    <div class="primary-container"></div>
                    <div class="clearfix"></div>
                </div>
                <!--End Background -->
                <div class="primary-container">
                    @include('pagepartials._navigation')
                    <div class="container no-padding">
                        <!-- === END HEADER === -->
                        <!-- === BEGIN CONTENT === -->
                        @yield('content')
                        <!-- === END CONTENT === -->
                    </div>
                    @include('pagepartials._mainfooter')
                </div>
            </div>
            @include('pagepartials._footer')
        </div>
        @include('pagepartials._scripts')
    </body>
</html>
<!-- === END FOOTER === -->