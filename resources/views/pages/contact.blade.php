@extends('layouts.weblayout')

@section('title', 'Contact Us')

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
                                <a href="#">Contact Us</a>
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
                <div class="col-12 col-md-8">
                    <div class="gazette-heading">
                        <h4 class="font-bold">Contact Us</h4>
                    </div>

                
                        <center>
                                @if (Session::has('success'))

                                    <div class="alert alert-success" role="alert">
                                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        {{ Session::get('success') }}
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
                    <!-- Contact Form -->
                    <form action="{{ route('contact') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="contact-name" placeholder="Enter Your Full Name">
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="tel" name="phone" class="form-control" id="contact-email" placeholder="Phone number">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="email" class="form-control" id="contact-email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn contact-btn">SUBMIT <i class="fa fa-angle-right ml-2"></i></button>
                    </form>
                </div>
                <div class="col-12 col-md-4">
                    <div class="gazette-heading">
                        <h4 class="font-bold">Address</h4>
                    </div>
                    <div class="contact-address-info mb-50">
                        <p>
                            Kigali Rwanda<br>
                            GIKONDO-MAGERWA<br>
                            P.O Box : 6509<br>
                            KIGALI-RWANDA<br>
                        </p>
                    </div>
                    <div class="gazette-heading">
                        <h4 class="font-bold">Contact info</h4>
                    </div>
                    <div class="contact-address-info">
                        <p>Phone: +250788382423</p>
                        <p>Email: <a href="#">contact@msaltd.net</a></p>
                    </div>
                </div>
            </div>
@endsection