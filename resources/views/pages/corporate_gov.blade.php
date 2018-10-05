@extends('layouts.weblayout')

@section('title', 'Corporate Governance')

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
                                <a href="#">Corporate Governance</a>
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
                        <h4 class="font-bold">Policies</h4>
                    </div>
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <a class="btn btn-success btn-block btn-sm button active" href="{{ route('corporate_gov') }}">Corporate Governance</a>
                    </div>
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <a class="btn btn-success btn-block btn-sm button" href="{{ route('ITRI') }}">ITRI</a>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="gazette-heading">
                        <h4 class="font-bold">WE TREAT OTHERS THE WAY WE WANT TO BE TREATED OURSELVES</h4>
                    </div>
                    <div class="single-post-blockquote">
                        <blockquote>
                            <h6 class="font-pt mb-0">
                                We understand this to mean, more particularly:
                            </h6>
                        </blockquote>
                        <blockquote>
                            <h6 class="font-pt mb-0">
                                •	Friendliness & helpfulness
                            </h6>
                        </blockquote>
                        <blockquote>
                            <h6 class="font-pt mb-0">
                                •	Open Communication
                            </h6>
                        </blockquote>
                        <blockquote>
                            <h6 class="font-pt mb-0">
                                •	Reliability
                            </h6>
                        </blockquote>
                        <blockquote>
                            <h6 class="font-pt mb-0">
                                •	Trustful & respectful relationships 
                            </h6>
                        </blockquote>
                        <blockquote>
                            <center>
                                <h6 class="font-pt mb-0">
                                    “We do not tolerate any discrimination”
                                </h6>
                            </center>
                        </blockquote>
                    </div>
                    <div class="gazette-heading corp">
                        <h4 class="font-bold">Safety/ Environment</h4>
                    </div>
                    <div class="single-post-blockquote">
                        <blockquote>
                            <h6 class="font-pt mb-0">
                                We are aware of our social & ecological responsibility for the community
                            </h6>
                        </blockquote>
                        <blockquote>
                            <h6 class="font-pt mb-0">
                                •	Conservation of natural resources
                            </h6>
                            <h6 class="font-pt mb-0">
                                •	Preservation of the basis of life for future generation
                            </h6>
                            <h6 class="font-pt mb-0">
                                •	Support of ecological, social and culture
                            </h6>
                            <h6 class="font-pt mb-0">
                                •	Awareness of our responsibility beyond legal regulations
                            </h6>
                        </blockquote>
                    </div>
                    <div class="gazette-heading corp">
                        <h4 class="font-bold">WE THINK & ACT ENTRENEURIALLY</h4>
                    </div>
                    <div class="single-post-blockquote">
                        <blockquote>
                            <h6 class="font-pt mb-0">
                                We understand this to mean more particularly:
                            </h6>
                        </blockquote>
                        <blockquote>
                            <h6 class="font-pt mb-0">
                                •	Open to new ideas & Flexibility in their executions
                            </h6>
                            <h6 class="font-pt mb-0">
                                •	Readiness to take reasonable risks
                            </h6>
                            <h6 class="font-pt mb-0">
                                •	Quick & Flexible responses to market situations
                            </h6>
                            <h6 class="font-pt mb-0">
                                •	Determination to perform & readiness to be measured against goals
                            </h6>
                        </blockquote>
                        <blockquote>
                            <center>
                                <h6 class="font-pt mb-0">
                                    “We are amongst the best in our field of activity “
                                </h6>
                            </center>
                        </blockquote>
                    </div>
                    <div class="gazette-heading corp">
                        <h4 class="font-bold">WE ARE THE MOST IMPORTANT CONTACT FOR OUR BUSINESS PARTNERS</h4>
                    </div>
                    <div class="single-post-blockquote">
                        <blockquote>
                            <h6 class="font-pt mb-0">
                                We understand this to mean more particularly:
                            </h6>
                        </blockquote>
                        <blockquote>
                            <h6 class="font-pt mb-0">
                                •	Development of joint solutions
                            </h6>
                            <h6 class="font-pt mb-0">
                                •	Quick responses to requests of our business partners
                            </h6>
                            <h6 class="font-pt mb-0">
                                •	Fulfillment of the highest quality standards
                            </h6>
                            <h6 class="font-pt mb-0">
                                •	Fairness in our interactions with each other
                            </h6>
                        </blockquote>
                        <blockquote>
                            <center>
                                <h6 class="font-pt mb-0">
                                    “We expect the same from our business partners.”
                                </h6>
                            </center>
                        </blockquote>
                    </div>
                </div>
            </div>
@endsection