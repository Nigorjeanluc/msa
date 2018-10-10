@extends('layouts.weblayout')

@section('title', 'Processing technologies')

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
                                <a href="#">Processing technologies</a>
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
                        <h4 class="font-bold">Reception of minerals</h4>
                    </div>
                   <div class="single-post-blockquote">
                        <blockquote>
                            <h6 class="font-pt mb-0">
                                    •	Quick processing of minerals (crushing, separation) at our yard
                            </h6>
                        </blockquote>
                        <blockquote>
                            <h6 class="font-pt mb-0">
                                    •	Analysis of samples in a modern laboratory.
                            </h6>
                        </blockquote>
                        <div class="row imgs">
                            <div class="col-md-6">
                                <center>
                                    <img src="{{ asset('img/bg-img/msa7.jpg') }}">
                                    <p style="color:rgba(0,0,0,0.8)"><b>Ruler crusher</b></p>
                                </center>
                            </div>
                            <div class="col-md-6">
                                <center>
                                    <img src="{{ asset('img/bg-img/msa1.jpg') }}">
                                    <p style="color:rgba(0,0,0,0.8)"><b>Electrical separator</b></p>
                                </center>
                            </div>
                        </div>
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
                        <a class="btn btn-success btn-block btn-sm button active" href="{{ route('processing_tech') }}">Processing technologies</a>
                    </div>
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <a class="btn btn-success btn-block btn-sm button" href="{{ route('packing') }}">Packing</a>
                    </div>
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <a class="btn btn-success btn-block btn-sm button" href="{{ route('shipping') }}">Shipping</a>
                    </div>
                </div>
            </div>
@endsection