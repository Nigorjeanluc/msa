@extends('layouts.weblayout')

@section('title', 'Tagging')

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
                                <a href="#">Tagging</a>
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
                        <h4 class="font-bold">Tagging</h4>
                    </div>
                    <div class="single-post-blockquote">
                        <blockquote>
                            <h6 class="font-pt mb-0">
                                    Reception of minerals tagged with tag  
                                    mine in presence of the GMD agent.
                            </h6>
                            <h6 class="font-pt mb-0">
                                    Quick processing of minerals (crushing, 
                                    separation) on our yard.
                            </h6>
                        </blockquote>
                        <div class="row imgs">
                            <div class="col-md-12"><center><img src="{{ asset('img/bg-img/tag.jpg') }}"></center></div>
                        </div>
                        <blockquote>
                            <h6 class="font-pt mb-0">
                                    It should be noted that all material arriving at our facility MUST be tagged. The <a class="link" href="https://www.itri.co.uk/itsci/itsci-project-overview/itsci-project-overview" target="_blank">iTSCi</a> Programme is a joint industry membership programme designed to assist companies with traceability, due diligence and audit requirements on purchases of minerals from high risk areas as recommended in the OECD Due Diligence Guidelines and UN recommendations. iTSCi activities are based around inclusivity and encouraging progressive improvement in the supply chain. The Programme aims to aid compliance with the US Dodd Frank Law, section 1502 on conflict minerals, in relation to the Rules published by the SEC but is not in itself a certification system. It also compliments other initiatives, including the CFSI's Conflict-Free Smelter audit programme (CFSP), the ICGLR's Regional Certification Initiative, and BGR's Certified Trading Chains Initiative (CTC)
                            </h6>
                        </blockquote>
                        <div class="row imgs">
                            <div class="col-md-12"><img src="{{ asset('img/bg-img/itsci.jpg') }}"></div>
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
                        <a class="btn btn-success btn-block btn-sm button active" href="{{ route('tagging') }}">Tagging</a>
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
                        <a class="btn btn-success btn-block btn-sm button" href="{{ route('shipping') }}">Shipping</a>
                    </div>
                </div>
            </div>
@endsection