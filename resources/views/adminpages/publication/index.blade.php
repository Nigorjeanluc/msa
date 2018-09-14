@extends('layouts.dashboard2')

@section('title', 'All Short Stories')

@section('pageview')
<h1>
    Control board
    <small>All Short Stories</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Control</a></li>
    <li class="active">All Short Stories</li>
  </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
            <h3 class="box-title">All Short Stories</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
            </div>
            </div>
            <div class="box-body no-padding">
                <table class="table">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Who sent this</th>
                        <th>Added at</th>
                        <th></th>
                    </tr>
                    @foreach ($posts as $post)
                        <tr>
                            <th>{{ $post->id }}</th>
                            <td><b>{{ substr($post->title, 0, 30) }}{{ strlen($post->title) > 30 ? "..." : "" }}</b></td>
                            <td>{{ substr($post->description, 0, 30) }}{{ strlen($post->description) > 30 ? "..." : "" }}</td>
                            <td><b>{{ substr($post->role, 0, 30) }}{{ strlen($post->role) > 30 ? "..." : "" }}</b></td>
                            <td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
                            <td>
                                <a style="color:#fff" href="{{ route('publications.show', $post->id) }}" class="btn btn-info btn-flat btn-sm">View</a> <a style="color:#fff" href="{{ route('publications.edit', $post->id )}}" class="btn btn-success btn-flat btn-sm">Edit</a>
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