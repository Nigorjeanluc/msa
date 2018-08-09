@extends('layouts.weblayout')

@section('title', 'Contact Us')

@section('content')
<div class="row margin-vert-30">
        <!-- Main Column -->
        <div class="col-md-9">
            <!-- Main Content -->
            <div class="headline">
                <center><h2>Contact Us</h2></center>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <center>
                        @if (Session::has('success'))

                            <div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <strong>Success:</strong> {{ Session::get('success') }}
                            </div>

                        @endif

                        @if (count($errors) > 0)

                        <div class="alert alert-danger" role="alert">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <strong>Errors:</strong>
                                <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                            </div> 

                        @endif
                </center>
            </div>
            <br>
            <!-- Contact Form -->
            <form method="POST" action="{{ Request::is('tumenyeshe') ? route('contact') : route('tumenyeshe')}}">
                {{ csrf_field() }}
                @if(Request::is('tumenyeshe'))
                <div class="row margin-bottom-20">
                    <div class="col-md-8 col-md-offset-2">
                        <label>Name</label>
                        <input class="form-control" type="text" name="name" required>
                    </div>
                </div>
                <div class="row margin-bottom-20">
                    <div class="col-md-8 col-md-offset-2">
                        <label>Email
                            <span class="color-red">*</span>
                        </label>
                        <input class="form-control" type="text" name="email" required>
                    </div>
                </div>
                @else
                    <div class="row margin-bottom-20">
                        <div class="col-md-8 col-md-offset-2">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name" value="{{ Auth::user()->name }}" required>
                        </div>
                    </div>
                    <div class="row margin-bottom-20">
                        <div class="col-md-8 col-md-offset-2">
                            <label>Email
                                <span class="color-red">*</span>
                            </label>
                            <input class="form-control" type="text" name="email" value="{{ Auth::user()->email }}" required>
                        </div>
                    </div>
                @endif
                <div class="row margin-bottom-20">
                    <div class="col-md-8 col-md-offset-2">
                        <label>Phone Number
                            <span class="color-red">*</span>
                        </label>
                        <input class="form-control" type="text" name="phone" minlength="10" required>
                    </div>
                </div>
                <div class="row margin-bottom-20">
                    <div class="col-md-8 col-md-offset-2">
                        <label>Message</label>
                        <textarea rows="8" class="form-control" name="message"></textarea>
                    </div>
                </div>
                <div class="row margin-bottom-20">
                    <div class="col-md-8 col-md-offset-2">
                        <p>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </p>
                    </div>
                </div>
            </form>
            <!-- End Contact Form -->
            <!-- End Main Content -->
        </div>
        <!-- End Main Column -->
        <!-- Side Column -->
        <div class="col-md-3">
            <!-- Recent Posts -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Contact Info</h3>
                </div>
                <div class="panel-body">
                    <!--<p>Lorem ipsum dolor sit amet, no cetero voluptatum est, audire sensibus maiestatis vis et. Vitae audire prodesset an his. Nulla ubique omnesque in sit.</p>-->
                    <ul class="list-unstyled">
                        <li>
                            <i class="fa-phone color-primary"></i>+250781612954</li>
                        <li>
                            <i class="fa-envelope color-primary"></i>info@kundagusoma.com
                        </li>
                        <li>
                            <i class="fa-home color-primary"></i>www.kundagusoma.com
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End recent Posts -->
            <!-- About -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">About</h3>
                </div>
                <div class="panel-body">
                    Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.
                </div>
            </div>
            <!-- End About -->
        </div>
        <!-- End Side Column -->
    </div>
@endsection