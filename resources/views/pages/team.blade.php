@extends('layouts.weblayout')

@section('title', 'Our team')

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
                                <a href="#">Our team</a>
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
                    <div class="gazette-heading">
                        <h4 class="font-bold">Our team</h4>
                    </div>

                    

                   <div class="single-post-blockquote">
                       <p><img src="/img/bg-img/team.jpg"></p>
                        <blockquote>
                            <h6 class="font-pt mb-0">
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
                            </h6>
                        </blockquote>
                    </div>
                </div>
            </div>
@endsection