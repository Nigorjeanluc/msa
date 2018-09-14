@extends('layouts.weblayout')

@section('title', 'Publications')

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
                                <a href="#">Publications</a>
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
                <div class="col-12 col-md-12">
                    <div class="gazette-todays-post">
                        <div class="gazette-heading">
                            <h4 class="font-bold">Publications</h4>
                        </div>
                        @forelse($posts as $post)

                        <!-- Single Today Post -->
                        <div class="gazette-single-todays-post d-md-flex align-items-start mb-50">
                            <div class="todays-post-thumb">
                                <a href="{{ url($post->id) }}"><img src="{{ asset('img/'.$post->img) }}" alt=""></a>
                            </div>
                            <div class="todays-post-content">
                                <h3><a href="{{ url($post->id) }}" class="font-pt mb-2">{{ ucfirst(substr($post->title, 0, 150)) }}{{ ucfirst(strlen($post->title) > 150 ? '...' : "") }}</a></h3>
                                <span class="gazette-post-date mb-2">{{ date('D jS, M h:ia', strtotime($post->updated_at)) }}</span>
                                <p>{{ substr(strip_tags($post->description), 0, 250) }}{{ strlen(strip_tags($post->description)) > 250 ? '...' : "" }}</p>
                            </div>
                        </div>

                        @empty

                        <!-- Single Today Post -->
                        <div class="gazette-single-todays-post d-md-flex align-items-start mb-50">
                            <div class="todays-post-content">
                                <h3><a href="#" class="font-pt mb-2">Sorry, no publications available! </a></h3>
                            </div>
                        </div>

                        @endforelse
                    </div>
                </div>
            </div>
@endsection