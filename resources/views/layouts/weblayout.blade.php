<!DOCTYPE html>
<html lang="en">

<head>
    @include('pagepartials._head')

</head>

<body>
    <!-- Header Area Start -->
    @include('pagepartials._header')
    <!-- Header Area End -->
    @yield('headSection')

    <section class="gazette-contact-area section_padding_100">
        <div class="container">
            @yield('content')
        </div>
    </section>


    <!-- Footer Area Start -->
    @include('pagepartials._footer')
    <!-- Footer Area End -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    @include('pagepartials._scripts')

</body>

</html>