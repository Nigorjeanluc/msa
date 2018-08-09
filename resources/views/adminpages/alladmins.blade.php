@extends('layouts.dashboard2')

@section('title', 'All admins')

@section('pageview')
<h1>
    Control board
    <small>All admins</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Control</a></li>
    <li class="active">All admins</li>
  </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
            <h3 class="box-title">All Admins</h3>

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
                        <th>Job Title</th>
                        <th>Added at</th>
                        <th></th>
                    </tr>
                    @foreach ($posts as $post)
                        <tr>
                            <th>{{ $post->id }}</th>
                            <td><b>{{ substr($post->name, 0, 30) }}{{ strlen($post->name) > 30 ? "..." : "" }}</b></td>
                            <td>{{ substr($post->email, 0, 30) }}{{ strlen($post->email) > 30 ? "..." : "" }}</td>
                            <td><b>{{ substr($post->job_title, 0, 30) }}{{ strlen($post->job_title) > 30 ? "..." : "" }}</b></td>
                            <td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
                            <td>
                                <a style="color:#fff" href="{{ route('admin.admins.show', $post->id) }}" class="btn btn-info btn-flat btn-sm">View</a> <a style="color:#fff" href="{{ route('admin.admins.edit', $post->id )}}" class="btn btn-success btn-flat btn-sm">Edit</a>
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