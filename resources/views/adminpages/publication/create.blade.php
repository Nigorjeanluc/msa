@extends('layouts.dashboard2')

@section('stylesheets')
    {!! Html::style('/css/parsley.min.css') !!}
    <script src="/js/tiny/tinymce.min.js"></script>

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'link lists code image imagetools',
            menubar: false,
              /*menu: {
                  view: {title: 'Edit', items: 'cut, copy, paste'}
              }*/
              /*toolbar: 'undo redo | cut copy paste'*/
        });
    </script>
@endsection

@section('title', 'Publish something')


@section('pageview')
      <h1>
        Control board
        <small>Publish something here!</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Control</a></li>
        <li class="active">Publish something here!</li>
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
                <h3 class="box-title">Publish something!</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box-body">
                {!! Form::open(['route' => 'publications.store', 'data-parsley-validate' => 'true', 'files' => true]) !!}
                    <!-- text input -->
                    <div class="form-group">
                      {{ Form::label('title', 'Title') }}
                      {{ Form::text('title',null,['class' => 'form-control', /*'required' => ''*/'data-parsley-required' => 'true']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('role', 'Role') }}
                        {{ Form::text('role', Auth::user()->job_title, ['class' => 'form-control', 'minlength' => '5', 'maxlength' => '100']) }}
                    </div>
                    
                    <div class="row">
                        <div class="form-group col-md-6">
                            {{ Form::label('featured_img', "Upload the cover Image:") }}
                            {{ Form::file('featured_img', null,['class' => 'form-control', 'required' => '']) }}
                        </div>
      
                        <div class="form-group col-md-6">
                          {{ Form::label('pdf', "Upload a PDF file:") }}
                          {{ Form::file('pdf', null,['class' => 'form-control']) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('description') }}
                        {{ Form::textarea('description', null,['class' => 'form-control','rows' => '5'/*, 'required' => ''*/]) }}
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

@section('scripts')

    {!! Html::script('/js/parsley.min.js') !!}
    {!! Html::script('/js/vue.js') !!}

@endsection