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
    <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Read message</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-read-info">
                <h3>{{ ucfirst($post->name) }}</h3>
                <h5>From: {{ ucfirst($post->email) }}
                  <span class="mailbox-read-time pull-right badge bg-green">{{ date('j M. Y h:i A', strtotime($post->created_at)) }}</span></h5>
              </div>
              <!-- /.mailbox-read-info -->
              
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                {!! $post->message !!}
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.box-footer -->
            <div class="box-footer">
              <button type="button" class="btn btn-warning"><i class="fa fa-trash-o"></i> Delete</button>
              <button type="button" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
    </div>
</div>
@endsection