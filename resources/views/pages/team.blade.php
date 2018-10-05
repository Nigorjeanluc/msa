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
                    {{-- <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <a class="btn btn-success btn-block btn-sm button" href="{{ route('corporate_gov') }}">Corporate Governance</a>
                    </div> --}}
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <a class="btn btn-success btn-block btn-sm button" href="{{ route('vision_mission') }}">Vision & Mission</a>
                    </div>
                    {{-- <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <a class="btn btn-success btn-block btn-sm button" href="{{ route('management') }}">Management</a>
                    </div> --}}
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <a class="btn btn-success btn-block btn-sm button active" href="{{ route('team') }}">Our team</a>
                    </div>
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <a class="btn btn-success btn-block btn-sm button" href="{{ route('contact') }}">Contact Us</a>
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
                            </h6>
                            <h6 class="font-pt mb-0">
                                Established in 2008, The Company trade with local miners, mining cooperatives and mining companies as well as financially support miners in order to increase the mining production of Rwanda.
                            </h6>
                            <h6 class="font-pt mb-0">
                                Following the Dodd Frank Act US legislation on conflict minerals, MSA Ltd has played a major role in the initiation and implementation of the iTSCi traceability scheme together with the Rwandan Government.
                            </h6>
                        </blockquote>
                    </div>
                </div>
            </div>
@endsection