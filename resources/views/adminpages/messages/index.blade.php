@extends('layouts.dashboard2')

@section('title', 'All Messages')

@section('pageview')
<h1>
    Control board
    <small>All Messages</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Control</a></li>
    <li class="active">All Messages</li>
  </ol>
@endsection

@section('content')
<div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">All messages</h3>

              {{-- <div class="box-tools pull-right">
                <div class="has-feedback">
                  <input type="text" class="form-control input-sm" placeholder="Search Mail">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
              </div> --}}
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td class="mailbox-name"><b>{{ substr($post->name, 0, 30) }}{{ strlen($post->name) > 30 ? "..." : "" }}</b></td>
                        <td class="mailbox-subject">
                            <b>{{ $post->phone }}</b> - {{ substr(strip_tags($post->message), 0, 50) }}{{ strlen(strip_tags($post->message)) > 50 ? '...' : "" }}
                        </td>
                        <td>{{ substr($post->email, 0, 30) }}{{ strlen($post->email) > 30 ? "..." : "" }}</td>
                        <td class="mailbox-date">{{ date('M j, Y', strtotime($post->created_at)) }}</td>
                        <td>
                            <a style="color:#fff" href="{{ route('admin.messages.show', $post->id) }}" class="btn btn-info btn-flat btn-sm">View</a> 
                            @if(Auth::user()->job_title == 'admin')
                            <a style="color:#fff" href="{{ route('admin.messages.show', $post->id) }}" class="btn btn-danger btn-flat btn-sm">Delete</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <center>{!! $posts->links() !!}</center>
            </div>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->

</div>
@endsection