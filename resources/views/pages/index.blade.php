@extends('layouts.weblayout')

@section('title', 'Home')

@section('content')
<div class="row">
    <!-- Tabs -->
    <div class="tabs-dark" style="padding:0;">
        <!-- Tab Navigation -->
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#children" data-toggle="tab">Children</a>
            </li>
            <li>
                <a href="#love" data-toggle="tab">Love Stories</a>
            </li>
            <li>
                <a href="#inspirational" data-toggle="tab">Inspirational</a>
            </li>
            <li>
                <a href="#personal" data-toggle="tab">Personal Development</a>
            </li>
            <li>
                <a href="#religious" data-toggle="tab">Religious</a>
            </li>
        </ul>
        <!-- End Tab Navigation -->
        <!-- Tab Panes -->
        <div class="tab-content">
            <div class="tab-pane fade in active" id="children">
                @foreach ($children as $child)
                <div class="row">
                    <img style="float: left; margin-right: 25px; margin-bottom: 10px;" src="{{ asset('images/'.$child->image) }}" alt="filler image">
                    <h3>{{ ucfirst($child->title) }}</h3>
                    <p style="text-align:justify">
                        {{ substr(strip_tags($child->description), 0, 450) }}{{ strlen(strip_tags($child->description)) > 450 ? '...' : "" }}
                        <a href="{{ $child->id }}" class="btn btn-xs btn-aqua">Read more...</a>
                    </p>
                </div>
                @endforeach
            </div>
            <div class="tab-pane fade" id="love">
                @foreach ($loves as $love)
                    <div class="row">
                        <img style="float: left; margin-right: 25px; margin-bottom: 10px;" src="{{ asset('images/'.$love->image) }}" alt="filler image">
                        <h3>{{ ucfirst($love->title) }}</h3>
                        <p style="text-align:justify">
                            {{ substr(strip_tags($love->description), 0, 450) }}{{ strlen(strip_tags($love->description)) > 450 ? '...' : "" }}
                            <a href="{{ $love->id }}" class="btn btn-xs btn-aqua">Read more...</a>
                        </p>
                    </div>
                @endforeach
            </div>
            <div class="tab-pane fade" id="inspirational">
                @foreach ($inspis as $inspi)
                    <div class="row">
                        <img style="float: left; margin-right: 25px; margin-bottom: 10px;" src="{{ asset('images/'.$inspi->image) }}" alt="filler image">
                        <h3>{{ ucfirst($inspi->title) }}</h3>
                        <p style="text-align:justify">
                            {{ substr(strip_tags($inspi->description), 0, 450) }}{{ strlen(strip_tags($inspi->description)) > 450 ? '...' : "" }}
                            <a href="{{ $inspi->id }}" class="btn btn-xs btn-aqua">Read more...</a>
                        </p>
                    </div>
                @endforeach
            </div>
            <div class="tab-pane fade" id="personal">
                @foreach ($people as $person)
                    <div class="row">
                        <img style="float: left; margin-right: 25px; margin-bottom: 10px;" src="{{ asset('images/'.$person->image) }}" alt="filler image">
                        <h3>{{ ucfirst($person->title) }}</h3>
                        <p style="text-align:justify">
                            {{ substr(strip_tags($person->description), 0, 450) }}{{ strlen(strip_tags($person->description)) > 450 ? '...' : "" }}
                            <a href="{{ $person->id }}" class="btn btn-xs btn-aqua">Read more...</a>
                        </p>
                    </div>
                @endforeach
            </div>
            <div class="tab-pane fade" id="religious">
                @foreach ($religions as $religion)
                    <div class="row">
                        <img style="float: left; margin-right: 25px; margin-bottom: 10px;" src="{{ asset('images/'.$religion->image) }}" alt="filler image">
                        <h3>{{ ucfirst($religion->title) }}</h3>
                        <p style="text-align:justify">
                            {{ substr(strip_tags($religion->description), 0, 450) }}{{ strlen(strip_tags($religion->description)) > 450 ? '...' : "" }}
                            <a href="{{ $religion->id }}" class="btn btn-xs btn-aqua">Read more...</a>
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- End Tab Panes -->
    </div>
    <!-- End Tabs -->
</div>
</div>
<div class="container no-padding gridgallery">
<!-- Portfolio Header Text -->
<div class="row">
    <div class="col-md-12 padding-vert-30">
        <h2 class="subtitle text-center">Series Stories</h2>
        <h3 class="subtitle text-center">Gusoma birwanya ubujiji.</h3>
    </div>
</div>
<!-- End Portfolio Header Text -->
<!-- Portfolio Images -->
<div class="portfolio-group">
    @foreach ($series as $serie)
    <!-- Portfolio Item -->
    <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
        <div class="image-hover">
            <a href="{{ route('seriesStories', $serie->id) }}">
                <figure>
                    <img src="{{ asset('images/'.$serie->image) }}" alt="image1">
                    <figcaption>
                        <h3>{{ ucfirst($serie->title) }}</h3>
                        <span>{{ substr(strip_tags($serie->description), 0, 50) }}{{ strlen(strip_tags($serie->description)) > 50 ? '...' : "" }}</span>
                    </figcaption>
                </figure>
            </a>
        </div>
    </div>
    <!-- End Portfolio Item -->
    @endforeach
    <div class="clearfix"></div>
</div>
<!-- End Portfolio Images -->
<!-- Portfolio Header Text -->
<div class="row">
    <div class="col-md-12 padding-vert-30">
        <h2 class="subtitle text-center">Short Stories</h2>
        <h3 class="subtitle text-center">Gusoma birwanya ubujiji.</h3>
    </div>
</div>
<!-- End Portfolio Header Text -->
<!-- Portfolio Images -->
<div class="portfolio-group">
    @foreach ($shorts as $short)
    <!-- Portfolio Item -->
    <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
        <div class="image-hover">
            <a href="{{ route('shortStories', $short->id) }}">
                <figure>
                    <img src="{{ asset('images/'.$short->image) }}" alt="image1">
                    <figcaption>
                        <h3>{{ ucfirst($short->title) }}</h3>
                        <span>{{ substr(strip_tags($short->description), 0, 50) }}{{ strlen(strip_tags($short->description)) > 50 ? '...' : "" }}</span>
                    </figcaption>
                </figure>
            </a>
        </div>
    </div>
    <!-- End Portfolio Item -->
    @endforeach
    <div class="clearfix"></div>
</div>
<!-- Portfolio Footer Text -->
<!--<div class="row">
    <div class="col-12-md">
        <p class="text-center padding-bottom-30" style="max-width:690px; margin:0 auto;">Mirum est notare quam littera gothica, quam nunc putamus. Cras non sem sem, at eleifend mi. Vivamus sit amet ante est, sit amet rutrum augue. Cras non sem sem, at eleifend mi. Nam liber tempor cum soluta nobis eleifend
            option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
    </div>
</div>-->
<!-- End Portfolio Footer Text -->
@endsection