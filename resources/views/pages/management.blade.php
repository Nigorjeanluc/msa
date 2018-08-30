@extends('layouts.weblayout')

@section('title', 'Management')

@section('headSection')
    <section class="single-post-area">
        <!-- Single Post Title -->
        <div class="single-post-title bg-img background-overlay" style="background-image: url(img/bg-img/4.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-end">
                    <div class="col-12">
                        <div class="single-post-title-content">
                            <!-- Post Tag -->
                            <div style="font-size: 3.5em" class="gazette-post-tag">
                                <a href="#">Management</a>
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
                        <h4 class="font-bold">Management</h4>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="single-team-area">
                                <img src="img/bg-img/ceo.jpg" alt="">
                                <div class="team-member-data">
                                    <h4 class="font-pt">Director Manager</h4>
                                    <div class="team-member-designation-social-info d-flex align-items-cente justify-content-between">
                                        {{--  <h5 class="font-pt mb-0">Her name</h5>  --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--  <div class="col-12 col-sm-6 col-md-3">
                            <div class="single-team-area">
                                <img src="img/bg-img/cc1.jpg" alt="">
                                    <div class="team-member-data">
                                        <h4 class="font-pt">Chief of Marketing</h4>
                                        <div class="team-member-designation-social-info d-flex align-items-cente justify-content-between">
                                            <h5 class="font-pt mb-0">Name</h5>
                                        </div>
                                    </div>
                            </div>
                        </div>  --}}
                    </div>

                    <div class="single-post-blockquote">
                        <blockquote>
                            <h6 class="font-pt mb-0">Minerals Supply Africa (MSA) is a Rwanda-based company owned by CRONIMET Central Africa AG (CCA). It deals in Procurement, Processing & Exporting of Coltan, Cassiterite and Wolfram minerals.
Established in 2008, The Company trade with local miners, mining cooperatives and mining companies as well as financially support miners in order to increase the mining production of Rwanda.
Following the Dodd Frank Act US legislation on conflict minerals, MSA Ltd has played a major role in the initiation and implementation of the iTSCi traceability scheme together with the Rwandan Government</h6>
                        </blockquote>
                    </div>
                </div>
            </div>
@endsection