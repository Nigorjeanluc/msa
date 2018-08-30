@extends('layouts.weblayout')

@section('title', 'Vision & Mission')

@section('headSection')
    <section class="single-post-area">
        <!-- Single Post Title -->
        <div class="single-post-title bg-img background-overlay" style="background-image: url(img/bg-img/005.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-end">
                    <div class="col-12">
                        <div class="single-post-title-content">
                            <!-- Post Tag -->
                            <div style="font-size: 3.5em" class="gazette-post-tag">
                                <a href="#">Our vision & mission</a>
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
                        <h4 class="font-bold">About Us</h4>
                    </div>
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <h5><a href="{{ route('corporate_gov') }}" class="font-pt">Corporate Governance</a></h5>
                    </div>
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <h5><a href="{{ route('vision_mission') }}" class="font-pt">Vision & Mission</a></h5>
                    </div>
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <h5><a href="{{ route('management') }}" class="font-pt">Management</a></h5>
                    </div>
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <h5><a href="{{ route('location') }}" class="font-pt">Location</a></h5>
                    </div>
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <h5><a href="{{ route('contact') }}" class="font-pt">Contact Us</a></h5>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="team-area mt-50">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="font-pt mb-50">Our Team</h3>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-3">
                                    <div class="single-team-area">
                                        <img src="img/bg-img/ceo.jpg" alt="">
                                        <div class="team-member-data">
                                            <h4 class="font-pt">Director Manager</h4>
                                            <div class="team-member-designation-social-info d-flex align-items-cente justify-content-between">
                                                <h5 class="font-pt mb-0">Her name</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-3">
                                    <div class="single-team-area">
                                        <img src="img/bg-img/cc1.jpg" alt="">
                                        <div class="team-member-data">
                                            <h4 class="font-pt">Chief of Marketing</h4>
                                            <div class="team-member-designation-social-info d-flex align-items-cente justify-content-between">
                                                <h5 class="font-pt mb-0">Name</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="gazette-heading">
                        <h4 class="font-bold">Operations</h4>
                    </div>
                   <div class="single-post-blockquote">
                        <blockquote>
                            <h6 class="font-pt mb-0">“CRONIMET Mining has several operational and strategic investments as well as its own mines. We mine copper, molybdenum, chrome and platinum in Africa before selling these to leading raw materials processors around the world. Thanks to systematic investment, we are currently able to mine 20 million tons of ore per year.”</h6>
                        </blockquote>
                    </div>
                </div>
            </div>
@endsection