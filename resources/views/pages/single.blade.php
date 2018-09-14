@extends('layouts.weblayout')

@section('title', ucfirst($post->title))

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
                                <a href="#">{{ ucfirst($post->title) }}</a>
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
<div class="row justify-content-center">
    <div class="col-12 col-md-10">
        <div class="single-post-blockquote">
            <blockquote>
                <h6 class="font-pt mb-0">{!! strip_tags($post->description) !!}</h6>
            </blockquote>
        </div><br>
    </div>
    <div class="col-12">
        <div class="single-post-thumb">
            <center><img src="{{ asset('img/'.$post->img) }}" alt=""></center>
        </div>
    </div>
    <div class="col-12 col-md-8">
        <div class="single-post-text">
            <p><a href="{{ asset('ibitabo/'.$post->pdf) }}" target="_blank">Download the attached document</a></p>
        </div>
    </div>
</div>
@endsection