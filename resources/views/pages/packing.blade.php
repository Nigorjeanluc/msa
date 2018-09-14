@extends('layouts.weblayout')

@section('title', 'Packing')

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
                                <a href="#">Packing</a>
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
                        <a class="btn btn-success btn-block btn-sm button active" href="{{ route('packing') }}">Packing</a>
                    </div>
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <a class="btn btn-success btn-block btn-sm button" href="{{ route('shipping') }}">Shipping</a>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="gazette-heading">
                        <h4 class="font-bold">Packing</h4>
                    </div>
                   <div class="single-post-blockquote">
                        <div class="row imgs">
                            <div class="col-md-6"><img src="{{ asset('img/bg-img/msa4.jpg') }}"></div>
                            <div class="col-md-6"><img src="{{ asset('img/bg-img/msa2.jpg') }}"></div>
                        </div>
                        <blockquote>
                            <h6 class="font-pt mb-0">
                                Before Packing in Steel Drums for Export, all drums must be issued with a Tag conforming to the iTSCi Programme. Resources Authority/Geology and Mines Department (GMD) have an office at our facility and they are the government body responsible for checking the incoming mineral Tags and also for issuing the final export tag for the processed minerals.
                            </h6>
                        </blockquote>
                    </div>
                </div>
            </div>
@endsection