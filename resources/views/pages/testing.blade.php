@extends('layouts.weblayout')

@section('title', 'Testing')

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
                                <a href="#">Testing</a>
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
                        <h4 class="font-bold">Testing & Analysis</h4>
                    </div>
                   <div class="single-post-blockquote">
                        <blockquote>
                            <h6 class="font-pt mb-0">
                                Using our Spectrum Analyzer we produce an Analysis Certificate showing the type of material received, the number of bags and their weight and also if the material has been mixed or milled.
                            </h6>
                        </blockquote>
                        <div class="row imgs">
                            <div class="col-md-6"><img src="{{ asset('img/bg-img/msa8.jpg') }}"></div>
                            <div class="col-md-6"><img src="{{ asset('img/bg-img/msa1.jpg') }}"></div>
                        </div>
                        <blockquote>
                            <h6 class="font-pt mb-0">
                                The Lab Test also gives the breakdown of the various elements in the sample and the Bq Radiation (The Becquerel (symbol Bq) is the SI derived unit of radioactivity. One Becquerel is defined as the activity of a quantity of radioactive material in which one nucleus decays per second. This is to ensure that no harmful radiation is present in the material.
                            </h6>
                        </blockquote>
                    </div>
                </div>
            </div>
@endsection