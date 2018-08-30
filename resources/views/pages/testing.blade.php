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
                        <h4 class="font-bold">Who we are</h4>
                    </div>
                   <div class="single-post-blockquote">
                        <blockquote>
                            <h6 class="font-pt mb-0">CRONIMET Mining, based in Germany, consists of four interrelated business units, specifically focused on mining, processing, trading and energy. While operations span the globe, CRONIMET Mining Processing Business Unit is situated in Switzerland and active in Africa, Europe, North America and expanding into new regions. As specialists in the extraction of metals and minerals, we pride ourselves on maximising the recovery of valuable materials from mining, industrial and municipal waste. Be it low grade waste rock, base metal refinery waste, smelter slag material, mine tailings or municipal and industrial waste streams, our experienced team is always more than capable of meeting the challenge.</h6>
                        </blockquote>
                        <blockquote>
                            <h6 class="font-pt mb-0">Armed with sought-after skillsets and industry experience, our team is ready and willing to rise to the occasion, consistently implementing projects over a broad range of applications and commodities. In fact, we have extensive experience in an array of commodities, including:</h6>
                        </blockquote>
                        <div style="margin-top:10px" class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" align="center"><tbody><tr><td>copper</td><td> nickel</td><td>chrome</td><td>cobalt</td><td>zinc</td></tr><tr><td>lithium</td><td> molybdenum </td><td>manganese</td><td>tungsten</td><td>tantalum</td></tr><tr><td>tin</td><td> coal</td><td>kimberlite</td><td>alluvial diamonds </td><td>gold</td></tr><tr><td>silver</td><td> PGMs</td><td>rare earth elements</td><td>municipal waste</td><td>industrial waste</td></tr></tbody></table>
                        </div>
                        <blockquote>
                            <h6 class="font-pt mb-0">As far as our technologies and processing methods go, our team possesses a wealth of experience in the following fields:</h6><br />
                            <div class="col-md-12">
                                <ul style="text-align:justify">
                                    <li>hydrometallurgy, including leaching, solution concentration &amp; purification and metal compound recovery</li>
                                    <li>filtration</li><li>flotation</li><li>minerals processing</li>
                                    <li>engineering, procurement and construction management</li>
                                    <li>project financing</li>
                                </ul>
                            </div><br>
                            <h6 class="font-pt mb-0">At CRONIMET Mining Processing, one of our core values is leading industry innovation. It is for this reason that we remain at the forefront when it comes to the application of niche technologies for the processing of low grade waste materials. Our progressive approaches include sensor-based sorting and specialised ultra-fine gravity separation technologies. It is always our intention to stay ahead of the game, where research and development proves invaluable in this regard. As a powerhouse in the field of processing materials, our research and development extends to advancements in the hydrometallurgical treatment of slag material and electronic waste. Of course, every project opens up opportunity for further growth and expansion, as we pledge to lead the way in the recovery of metals and minerals.</h6>
                        </blockquote>
                    </div>
                </div>
            </div>
@endsection