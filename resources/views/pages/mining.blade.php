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
                    <div class="editorial-post-slides owl-carousel">

                        <!-- Editorial Post Single Slide -->
                        <div class="editorial-post-single-slide">
                            <div class="row">
                                <div class="col-12 col-md-5">
                                    <div class="editorial-post-thumb">
                                        <img src="img/bg-img/01.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <div class="editorial-post-content">
                                        <!-- Post Tag -->
                                        <div class="gazette-post-tag">
                                            <a href="#">Processing</a>
                                        </div>
                                        {{--  <h2><a href="#" class="font-pt mb-15">Move over, bitcoin. <br>Here comes litecoin</a></h2>
                                        <p class="editorial-post-date mb-15">March 29, 2016</p>  --}}
                                        <p style="text-align:justify">Minerals Supply Africa (MSA) is a Rwanda-based company owned by CRONIMET Central Africa AG (CCA). It deals in Procurement, Processing & Exporting of Coltan, Cassiterite and Wolfram minerals.
                                        Established in 2008, The Company trade with local miners, mining cooperatives and mining companies as well as financially support miners in order to increase the mining production of Rwanda.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Editorial Post Single Slide -->
                        <div class="editorial-post-single-slide">
                            <div class="row">
                                <div class="col-12 col-md-5">
                                    <div class="editorial-post-thumb">
                                        <img src="img/bg-img/04.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <div class="editorial-post-content">
                                        <!-- Post Tag -->
                                        <div class="gazette-post-tag">
                                            <a href="#">Procurement</a>
                                        </div>
                                        {{--  <h2><a href="#" class="font-pt mb-15">Move over, bitcoin. <br>Here comes litecoin</a></h2>
                                        <p class="editorial-post-date mb-15">March 29, 2016</p>  --}}
                                        <p style="text-align:justify">
                                            Minerals Supply Africa (MSA) 
                                            is a Rwanda-based company 
                                            owned by CRONIMET Central 
                                            Africa AG (CCA). It deals in 
                                            Procurement, Processing & Exporting
                                            of Coltan, Cassiterite and Wolfram minerals.
                                            Established in 2008, the Company’s goal 
                                            is to increase mineral production, so it 
                                            partners and supports individual miners, 
                                            cooperatives and companies involved in the 
                                            sector to make this a reality
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Editorial Post Single Slide -->
                        <div class="editorial-post-single-slide">
                            <div class="row">
                                <div class="col-12 col-md-5">
                                    <div class="editorial-post-thumb">
                                        <img src="img/bg-img/03.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <div class="editorial-post-content">
                                        <!-- Post Tag -->
                                        <div class="gazette-post-tag">
                                            <a href="#">Exporting</a>
                                        </div>
                                        {{--  <h2><a href="#" class="font-pt mb-15">Move over, bitcoin. <br>Here comes litecoin</a></h2>
                                        <p class="editorial-post-date mb-15">March 29, 2016</p>  --}}
                                        
                                        <p style="text-align:justify">
                                            Minerals Supply Africa (MSA) 
                                            is a Rwanda-based company 
                                            owned by CRONIMET Central 
                                            Africa AG (CCA). It deals in 
                                            Procurement, Processing & Exporting
                                            of Coltan, Cassiterite and Wolfram minerals.
                                            Established in 2008, the Company’s goal 
                                            is to increase mineral production, so it 
                                            partners and supports individual miners, 
                                            cooperatives and companies involved in the 
                                            sector to make this a reality
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Editorial Post Single Slide -->
                        {{--  <div class="editorial-post-single-slide">
                            <div class="row">
                                <div class="col-12 col-md-5">
                                    <div class="editorial-post-thumb">
                                        <img  src="img/bg-img/02.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <div class="editorial-post-content">
                                        <!-- Post Tag -->
                                        <div class="gazette-post-tag">
                                            <a href="#">Editorial</a>
                                        </div>
                                        <h2><a href="#" class="font-pt mb-15">Move over, bitcoin. <br>Here comes litecoin</a></h2>
                                        <p class="editorial-post-date mb-15">March 29, 2016</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ultrices egestas nunc, quis venenatis orci tincidunt id. Fusce commodo blandit eleifend. Nullam viverra tincidunt dolor, at pulvinar dui. Nullam at risus ut ipsum viverra posuere. Aliquam quis convallis enim. Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis...</p>
                                    </div>
                                </div>
                            </div>
                        </div>  --}}
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
                    <div>
                        <h4 class="font-bold">Activities</h4>
                    </div>
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <h5><a href="#" class="font-pt">Prospection and Sourcing</a></h5>
                    </div>
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <h5><a href="#" class="font-pt">Development</a></h5>
                    </div>
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <h5><a href="#" class="font-pt">Operations</a></h5>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="gazette-heading">
                        <h4 class="font-bold">Mining</h4>
                    </div>
                   <div class="single-post-blockquote">
                        <blockquote>
                            <h6 class="font-pt mb-0">“With our specialists all over the world, we discover and develop new deposits, design tailored solutions and implement efficient production methods.”</h6>
                        </blockquote>
                        <blockquote>
                            <h6 class="font-pt mb-0">“We are your reliable partner in the mining industry – from mine exploration and development right through to the sale of high-quality products.”</h6>
                        </blockquote>
                    </div>
                </div>
            </div>
@endsection