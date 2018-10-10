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
                <div class="col-12 col-md-9">
                    <div class="gazette-heading">
                        <h4 class="font-bold">Our vision</h4>
                    </div>
                   <div class="single-post-blockquote">
                        <blockquote>
                            <h6 class="font-pt mb-0">
                                -	To consolidate our position as the leader in minerals processing and trading in the region<br/>
                                -	To provide quality minerals that meet the needs of our customers
                            </h6>
                        </blockquote>
                    </div>

                    <div class="gazette-heading corp">
                        <h4 class="font-bold">Our mission</h4>
                    </div>
                   <div class="single-post-blockquote">
                        <blockquote>
                            <h6 class="font-pt mb-0">
                                -	To drive the production of minerals in Rwanda and facilitate professional, timely, and transparent minerals supply chains<br/>
                                -	To build long-term relationships with customers and suppliers based on mutual trust and respect<br/>
                                -	To offer geological advice for an efficient and environmentally friendly mining sector
                            </h6>
                        </blockquote>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div>
                        <h4 class="font-bold">About Us</h4>
                    </div>
                    {{-- <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <a class="btn btn-success btn-block btn-sm button" href="{{ route('corporate_gov') }}">Corporate Governance</a>
                    </div> --}}
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <a class="btn btn-success btn-block btn-sm button active" href="{{ route('vision_mission') }}">Vision & Mission</a>
                    </div>
                    {{-- <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <a class="btn btn-success btn-block btn-sm button" href="{{ route('management') }}">Management</a>
                    </div> --}}
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <a class="btn btn-success btn-block btn-sm button" href="{{ route('team') }}">Our team</a>
                    </div>
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <a class="btn btn-success btn-block btn-sm button" href="{{ route('contact') }}">Contact Us</a>
                    </div>
                </div>
            </div>
@endsection