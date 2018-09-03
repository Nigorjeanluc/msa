@extends('layouts.weblayout')

@section('title', 'Shipping')

@section('headSection')
    <section class="single-post-area">
        <!-- Single Post Title -->
        <div class="single-post-title bg-img background-overlay" style="background-image: url(img/bg-img/shipping.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-end">
                    <div class="col-12">
                        <div class="single-post-title-content">
                            <!-- Post Tag -->
                            <div style="font-size: 3.5em" class="gazette-post-tag">
                                <a href="#">Shipping</a>
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
                        <h4 class="font-bold">Services</h4>
                    </div>
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <h5><a href="{{ route('testing') }}" class="font-pt">Testing</a></h5>
                    </div>
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <h5><a href="{{ route('tagging') }}" class="font-pt">Tagging</a></h5>
                    </div>
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <h5><a href="{{ route('processing_tech') }}" class="font-pt">Processing technologies</a></h5>
                    </div>
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <h5><a href="{{ route('packing') }}" class="font-pt">Packing</a></h5>
                    </div>
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <h5><a href="{{ route('shipping') }}" class="font-pt">Shipping</a></h5>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="gazette-heading">
                        <h4 class="font-bold">Shipping</h4>
                    </div>
                   <div class="single-post-blockquote">
                        <blockquote>
                            <h6 class="font-pt mb-0">
                                The steel drums are loaded into 40 Foot Containers and leave for Dar-es-Salaam in Tanzania. The containers are loaded onboard the shipping vessel for their final destination.
                            </h6>
                            <h6 class="font-pt mb-0">
                                    For the route Kigali-Dar es Salaam, the average time spent on transit route was 71.98
                                    hours or 3 days for an average speed of 34.5km/hour and a daily travel distance of
                                    499.1km. The related transit cost for a 40 feet container is $4,800
                            </h6>
                        </blockquote>
                    </div>
                </div>
            </div>
@endsection