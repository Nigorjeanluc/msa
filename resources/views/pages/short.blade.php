@extends('layouts.weblayout')

@section('title', 'Short stories')

@section('content')
<div class="row margin-vert-30">
    <!-- Main Column -->
    <div class="col-md-9">
        @foreach($shorts as $short)
        <!-- Blog Post -->
        <div class="blog-post">
            <!-- Blog Item Header -->
            <div class="blog-item-header">
                <!-- Date -->
                <div class="blog-post-date pull-left">
                    <span class="day">{{ date('j', strtotime($short->created_at)) }}</span>
                    <span class="month">{{ date('M', strtotime($short->created_at)) }}</span>
                </div>
                <!-- End Date -->
                <!-- Title -->
                <h2>
                    <a href="#">
                        {{ ucfirst($short->title) }}
                    </a>
                </h2>
                <!-- End Title -->
                <div class="blog-post-details">
                    <!-- Author Name -->
                    <div class="blog-post-details-item blog-post-details-item-left user-icon">
                        <i class="fa fa-user"></i>
                        <a href="#">{{ ucfirst($short->author) }}</a>
                    </div>
                    <!-- End Author Name -->
                    <!-- Tags -->
                    <!--<div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags tags-icon">
                        <i class="fa fa-tag"></i>
                        <a href="#">HTML</a>,
                        <a href="#">CSS</a>,
                        <a href="#">Grunt</a>
                    </div>-->
                    <!-- End Tags -->
                    <!-- # of Comments -->
                    <!--<div class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last comments-icon">
                        <a href="">
                            <i class="fa fa-comments"></i>
                            3 Comments
                        </a>
                    </div>-->
                    <!-- End # of Comments -->
                </div>
            </div>
            <!-- End Blog Item Header -->
            <!-- Blog Item Body -->
            <div class="blog">
                <div class="clearfix"></div>
                <div class="blog-post-body row margin-top-15">
                    <div class="col-md-5">
                        <img class="pull-left" src="{{ asset('images/'.$short->image) }}" alt="thumb1">
                    </div>
                    <div class="col-md-7">
                        <p>{{ substr(strip_tags($short->description), 0, 450) }}{{ strlen(strip_tags($short->description)) > 450 ? '...' : "" }}</p>
                    </div>
                </div>
                <div class="blog-item-footer">
                    <div class="row">
                        <div class="col-md-10">
                            <hr>
                        </div>
                        <div class="col-md-2">
                            <!-- Read More -->
                            <div class="blog-post-details-item blog-post-details-item-right pull-right">
                                <a href="{{ route('seriesStories', $short->id) }}" class="btn btn-primary">
                                    Read More
                                    <i class="icon-chevron-right readmore-icon"></i>
                                </a>
                            </div>
                            <!-- End Read More -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Blog Item Body -->
        </div>
        <!-- End Blog Item -->
        @endforeach
        
        <!-- Pagination -->
        <center>{!! $shorts->links() !!}</center>
        <!-- End Pagination -->
    </div>
    <!-- End Main Column -->
    <!-- Side Column -->
    <div class="col-md-3 margin-top-30">
        <!-- Recent Posts -->
        <div class="recent-posts">
            <h3>Ibitabo biheruka</h3>
            <ul class="posts-list margin-top-10">
                @foreach($asides as $aside)
                <li>
                    <div class="recent-post">
                        <a href="{{ route('single', $aside->id) }}">
                            <img style="width:100px;height:54px" class="pull-left" src="{{ asset('images/'.$aside->image) }}" alt="thumb3">
                        </a>
                        <a href="{{ route('single', $aside->id) }}" class="posts-list-title">{{ ucfirst($aside->title) }}</a>
                        <br>
                        <span class="recent-post-date">
                            {{ date('M j, Y h:i A', strtotime($aside->created_at)) }}
                        </span>
                    </div>
                    <div class="clearfix"></div>
                </li>
                @endforeach
            </ul>
        </div>
        <!-- End Recent Posts -->
        <!-- Blog Tags -->
        <div class="blog-tags">
            <h3>Advertisement</h3>
            <!--<ul class="blog-tags">
                <li>
                    <a href="#" class="blog-tag">HTML</a>
                </li>
                <li>
                    <a href="#" class="blog-tag">CSS</a>
                </li>
                <li>
                    <a href="#" class="blog-tag">JavaScript</a>
                </li>
                <li>
                    <a href="#" class="blog-tag">jQuery</a>
                </li>
                <li>
                    <a href="#" class="blog-tag">PHP</a>
                </li>
                <li>
                    <a href="#" class="blog-tag">Ruby</a>
                </li>
                <li>
                    <a href="#" class="blog-tag">CoffeeScript</a>
                </li>
                <li>
                    <a href="#" class="blog-tag">Grunt</a>
                </li>
                <li>
                    <a href="#" class="blog-tag">Bootstrap</a>
                </li>
                <li>
                    <a href="#" class="blog-tag">HTML5</a>
                </li>
            </ul>-->
        </div>
        <!-- End Blog Tags -->
    </div>
    <!-- End Side Column -->
</div>
<!-- === END CONTENT === -->
@endsection