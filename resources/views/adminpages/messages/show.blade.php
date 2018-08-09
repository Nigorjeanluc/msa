@extends('layouts.dashboard2')

@section('title', 'Message from '. $post->name)

@section('pageview')
<h1>
    Control board
    <small>{{ ucfirst($post->name)."'s message" }}</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Control</a></li>
    <li class="active">{{ ucfirst($post->name)."'s message" }}</li>
  </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
                @if (Session::has('success'))
    
                    <div class="alert alert-info" role="alert">
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
    </div>
    <div class="col-md-6 col-md-offset-3">
        <!-- Widget: user widget style 1 -->
        <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua">
                <div class="widget-user-image">
                  <img class="img-circle" src="/admin/dist/img/userAvatar.png" alt="User Avatar">
                </div>
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">{{ ucfirst($post->name) }}</h3>
                <h5 class="widget-user-desc">Member since {{ date('M, Y', strtotime($post->created_at)) }}</h5>
            </div>
            <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  <li><a href="#">Books <span class="pull-right badge bg-green">0</span></a></li>
                  <li><a href="#">Email <span class="pull-right badge bg-aqua">{{ $post->email }}</span></a></li>
                  <li><a href="#">Added on <span class="pull-right badge bg-green">{{ date('M j, Y h:i A', strtotime($post->created_at)) }}</span></a></li>
                  @if(Auth::user()->job_title == 'admin')
                    <li><a href="#">{!! ucfirst($post->message) !!}</a></li>
                    <li><a href="{{ route('admin.admins.destroy', $post->id) }}"onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Delete {{ ucfirst($post->name)."'s message" }}<span class="pull-right badge bg-red">Delete</span></a>
                        {!! Form::open(['route' =>['admin.admins.destroy', $post->id], 'method' => 'DELETE', 'id' => 'logout-form']) !!}
                            {{ csrf_field() }}
                        {!! Form::close() !!}
                    </li>
                  @endif
                </ul>
            </div>
        </div>
        <!-- /.widget-user -->
        <div class="box box-danger collapsed-box">
            <div class="box-header with-border">
                <h3 class="box-title">{{ ucfirst($post->name)."'s recently book" }}</h3>
    
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Books">
                    <i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box-body">
                <img class="img-responsive pad" src="{{asset('images/news/'. $post->image) }}" alt="No Picture Available">
                <h3 class="text-center">{{ $post->name }}</h3>
                <p>{{ $post->email }}</p>
                <span class="description">Posted on - {{ date('M j, Y h:i A', strtotime($post->created_at)) }}</span>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                Footer
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->
    </div>
</div>
@endsection