@extends('layouts.weblayout')

@section('title', 'Services')

@section('headSection')
    <section class="single-post-area">
        <!-- Single Post Title -->
        <div class="single-post-title bg-img background-overlay" style="background-image: url(img/bg-img/1.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-end">
                    <div class="col-12">
                        <div class="single-post-title-content">
                            <!-- Post Tag -->
                            <div style="font-size: 3.5em" class="gazette-post-tag">
                                <a href="#">Services</a>
                            </div>
                            {{--  <h2 class="font-pt">Active in Rwanda</h2>
                            <p>To sustainably supply raw materials of the highest quality, we use the latest technologies and production methods.</p>  --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
            <div class="row">
                <div class="col-12 col-md-4">
                    <div>
                        <h4 class="font-bold">Trading</h4>
                    </div>
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <h5><a href="{{ route('product_port') }}" class="font-pt">Product Portofolio</a></h5>
                    </div>
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <h5><a href="{{ route('services') }}" class="font-pt">Services</a></h5>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="gazette-heading">
                        <h4 class="font-bold">Services</h4>
                    </div>
                   <div class="single-post-blockquote">
                        <blockquote>
                            <h6 class="font-pt mb-0">“CRONIMET Mining has several operational and strategic investments as well as its own mines. We mine copper, molybdenum, chrome and platinum in Africa before selling these to leading raw materials processors around the world. Thanks to systematic investment, we are currently able to mine 20 million tons of ore per year.”</h6>
                        </blockquote>
                    </div>
                </div>
            </div>
@endsection