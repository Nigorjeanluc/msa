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
                <div class="col-12 col-md-9">
                    <div class="gazette-heading">
                        <h4 class="font-bold">Shipping</h4>
                    </div>
                   <div class="single-post-blockquote">
                        <blockquote>
                            <h5 class="font-pt mb-0">
                                •	Onboarding minerals into containers for international shipping
                            </h5><br/>
                            <h5 class="font-pt mb-0">
                                •	Coordinating shipping logistics to ports in Mombasa and Dar es Salaam
                            </h5>
                        </blockquote>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div>
                        <h4 class="font-bold">Services</h4>
                    </div>
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <a class="btn btn-success btn-block btn-sm button" href="{{ route('testing') }}">Testing</a>
                    </div>
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <a class="btn btn-success btn-block btn-sm button" href="{{ route('tagging') }}">Tagging</a>
                    </div>
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <a class="btn btn-success btn-block btn-sm button" href="{{ route('processing_tech') }}">Processing technologies</a>
                    </div>
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <a class="btn btn-success btn-block btn-sm button" href="{{ route('packing') }}">Packing</a>
                    </div>
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <a class="btn btn-success btn-block btn-sm button active" href="{{ route('shipping') }}">Shipping</a>
                    </div>
                </div>
            </div>
@endsection