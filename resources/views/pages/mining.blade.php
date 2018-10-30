@extends('layouts.weblayout')

@section('title', 'Home')

@section('headSection')
    {{--  <section class="single-post-area">
        <!-- Single Post Title -->
        <div class="single-post-title bg-img background-overlay" style="background-image: url(img/bg-img/1.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-end">
                    <div class="col-12">
                        <div class="single-post-title-content">
                            <!-- Post Tag -->
                            <div class="gazette-post-tag">
                                <a href="#">Mining</a>
                            </div>
                            <h2 class="font-pt">Processing, Procurement and Exporting</h2>
                            <p>At our location in Rwanda we mine raw materials of the highest quality and make an active contribution to securing the global raw materials supply</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  --}}

    <section class="gazatte-editorial-area section_padding_100 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {{--  <div id="slider">
                        <img src="/img/bg-img/01.jpg" data-src-2x="img/1@2x.jpg" alt="Slide 1" />
                        <span>IKIBUNO</span>
                        <img data-src="/img/bg-img/03.jpg" data-src-2x="img/2@2x.jpg" src="" alt="Slide 2" />
                        <img data-src="/img/bg-img/04.jpg" data-src-2x="img/3@2x.jpg" src="" alt="Slide 3" />
                    </div>  --}}
                    <div class="editorial-post-slides owl-carousel">

                        <!-- Editorial Post Single Slide -->
                        <div class="editorial-post-single-slide">
                            <div class="row">
                                <div class="col-12 col-md-5">
                                    <div class="editorial-post-thumb">
                                        <img style="height:250px"  src="img/bg-img/02.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <div class="editorial-post-content">
                                        <!-- Post Tag -->
                                        <div class="gazette-post-tag">
                                            <a style="font-size: 1.5em" href="#">Welcome to Minerals Supply Africa LTD.</a>
                                        </div>
                                        <br/>
                                        <h5 style="text-align:justify;">
                                            <a style="color:white;" href="#" class="font-pt mb-15">
                                                Minerals Supply Africa (MSA) is a Rwanda-based company owned by CRONIMET Central Africa AG (CCA). It deals in Procurement, Processing & Exporting of Coltan, Cassiterite and Wolfram minerals.
                                                Established in 2008, The Company trade with local miners, mining cooperatives and mining companies as well as financially support miners in order to increase the mining production of Rwanda.
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="editorial-post-single-slide">
                            <div class="row">
                                <div class="col-12 col-md-5">
                                    <div class="editorial-post-thumb">
                                        <img style="height:250px" src="img/bg-img/01.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <div class="editorial-post-content">
                                        <!-- Post Tag -->
                                        <div class="gazette-post-tag">
                                            <a href="#">Processing</a>
                                        </div>
                                        <br/>
                                        <h5 style="text-align:justify;">
                                            <a style="color:white;" href="#" class="font-pt mb-15">
                                                Minerals Supply Africa (MSA) is a Rwanda-based company owned by CRONIMET Central Africa AG (CCA). It deals in Procurement, Processing & Exporting of Coltan, Cassiterite and Wolfram minerals.
                                                Established in 2008, The Company trade with local miners, mining cooperatives and mining companies as well as financially support miners in order to increase the mining production of Rwanda.
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Editorial Post Single Slide -->
                        <div class="editorial-post-single-slide">
                            <div class="row">
                                <div class="col-12 col-md-5">
                                    <div class="editorial-post-thumb">
                                        <img style="height:250px" src="img/bg-img/04.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <div class="editorial-post-content">
                                        <!-- Post Tag -->
                                        <div class="gazette-post-tag">
                                            <a href="#">Procurement</a>
                                        </div>
                                        <br/>
                                        <h5 style="text-align:justify;">
                                            <a style="color:white;" href="#" class="font-pt mb-15">
                                                Minerals Supply Africa (MSA) is a Rwanda-based company owned by CRONIMET Central Africa AG (CCA). It deals in Procurement, Processing & Exporting of Coltan, Cassiterite and Wolfram minerals.
                                                Established in 2008, The Company trade with local miners, mining cooperatives and mining companies as well as financially support miners in order to increase the mining production of Rwanda.
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Editorial Post Single Slide -->
                        <div class="editorial-post-single-slide">
                            <div class="row">
                                <div class="col-12 col-md-5">
                                    <div class="editorial-post-thumb">
                                        <img style="height:250px" src="img/bg-img/03.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <div class="editorial-post-content">
                                        <!-- Post Tag -->
                                        <div class="gazette-post-tag">
                                            <a href="#">Exporting</a>
                                        </div>
                                        <br/>
                                        <h5 style="text-align:justify;">
                                            <a style="color:white;" href="#" class="font-pt mb-15">
                                                Minerals Supply Africa (MSA) is a Rwanda-based company owned by CRONIMET Central Africa AG (CCA). It deals in Procurement, Processing & Exporting of Coltan, Cassiterite and Wolfram minerals.
                                                Established in 2008, The Company trade with local miners, mining cooperatives and mining companies as well as financially support miners in order to increase the mining production of Rwanda.
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Editorial Area End -->
@endsection

@section('content')
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="row">
                        <a href="{{ route('traceability') }}"><img class="img-responsive" src="{{ asset('img/itsci_tag.jpg') }}" alt="traceability"></a>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="gazette-heading">
                        <h4 class="font-bold">Welcome to Minerals Supply Africa LTD.</h4>
                    </div>
                   <div class="single-post-blockquote">
                        <p><iframe allowfullscreen="" mozallowfullscreen="" src="http://player.vimeo.com/video/44573283" webkitallowfullscreen="" scrolling="no" width="100%" frameborder="0" height="234"></iframe></p>
                    </div>
                </div>
            </div>
@endsection