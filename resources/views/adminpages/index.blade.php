@extends('layouts.dashboard2')

@section('title', 'Admin Control')

@section('pageview')
<h1>
    Control board
    <small>All controls</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Control</a></li>
    <li class="active">All controls</li>
  </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h4>All Admins</h4>
      
                <p>{{ $adminNum->count() }} Admins now</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="{{ route('admin.admins') }}" class="small-box-footer">More <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-purple">
            <div class="inner">
                <h4>Hiring</h4>
          
                <p>{{ $userNum->count() }} Users now</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-stalker"></i>
            </div>
            <a href="{{ route('admin.users') }}" class="small-box-footer">More <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h4>Applications</h4>
          
                <p>{{ $bookNum->count() }} Books now</p>
            </div>
            <div class="icon">
                <i class="ion ion-social-buffer"></i>
            </div>
            <a href="{{ route('books.index') }}" class="small-box-footer">More <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-gray">
            <div class="inner">
                <h4>News</h4>
          
                <p>{{ $serieNum->count() }} Series now</p>
            </div>
            <div class="icon">
                <i class="ion ion-calendar"></i>
            </div>
            <a href="{{ route('series.index') }}" class="small-box-footer">More <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
@endsection