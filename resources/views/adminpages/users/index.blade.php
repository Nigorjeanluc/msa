@extends('layouts.dashboard2')

@section('title', 'All users')

@section('pageview')
<h1>
    Control board
    <small>All Users</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Control</a></li>
    <li class="active">All Users</li>
  </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
            <h3 class="box-title">All Users</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
            </div>
            </div>
            <div class="box-body no-padding">
                <table class="table">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Signed Up at</th>
                        <th>Control</th>
                    </tr>
                    @foreach ($posts as $post)
                        <tr>
                            <th>{{ $post->id }}</th>
                            <td><b>{{ substr($post->name, 0, 30) }}{{ strlen($post->name) > 30 ? "..." : "" }}</b></td>
                            <td>{{ substr($post->email, 0, 30) }}{{ strlen($post->email) > 30 ? "..." : "" }}</td>
                            <td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
                            <td>
                                <a style="color:#fff" href="{{ route('admin.users.show', $post->id) }}" class="btn btn-info btn-flat btn-sm">View</a> 
                                @if(Auth::user()->job_title == 'admin')
                                <a style="color:#fff" href="{{ route('admin.users.show', $post->id) }}" class="btn btn-danger btn-flat btn-sm">Delete</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <center>{!! $posts->links() !!}</center>
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->
    </div>
</div>
@endsection