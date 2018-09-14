@extends('layouts.dashboard2')

@section('title', 'Admin Control')

@section('pageview')
      <h1>
        Control board
        <small>Register new admin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Control</a></li>
        <li class="active">Register new admins</li>
      </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
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
    </div>
    <div class="col-md-10 col-md-offset-1">
        <!-- Default box -->
        <div class="box box-info">
            <div class="box-header with-border">
            <h3 class="box-title">Register a new admin here!</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
            </div>
            </div>
            <div class="box-body">
                {!! Form::open(['route' => 'admin.register.submit', 'data-parsley-validate' => 'true', 'files' => true]) !!}
                    <!-- text input -->
                    <div class="form-group">
                      {{ Form::label('name', 'Full name') }}
                      {{ Form::text('name',null,['class' => 'form-control', /*'required' => ''*/'data-parsley-required' => 'true']) }}
                    </div>

                    <div class="form-group">
                      {{ Form::label('email', 'Email') }}
                      {{ Form::email('email',null,['class' => 'form-control', /*'required' => ''*/'data-parsley-required' => 'true']) }}
                    </div>

                    
                    <div class="form-group">
                        {{ Form::label('job_title', 'Role title') }}
                        <select class="form-control" name="job_title">
                            <option value="admin">Administator</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            {{ Form::label('password', 'Password') }}
                            <input type="password" placeholder="Enter the password" class="form-control" name="password" data-parsley-required="true">
                        </div>
                        <div class="col-md-6">
                            {{ Form::label('password_confirmation', 'Confirm Password') }}
                            <input type="password" placeholder="Re-enter the password" class="form-control" name="password_confirmation" data-parsley-required="true">
                        </div>
                    </div>

                    
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                    {{ Form::submit('Submit', ['class' => 'btn btn-info btn-md btn-block'])}}
    
                {!! Form::close() !!}
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->
    </div>
</div>
@endsection