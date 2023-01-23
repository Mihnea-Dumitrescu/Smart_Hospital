@extends('default')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Upload Images</h2>
            </div>
           <!--  <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('upload-files.index') }}"> Back</a>
            </div> -->
        </div>
    </div>
     @foreach ($get_user as $data)
    {!! Form::open(array('route' => 'upload-files.store','method'=>'POST','files'=>true)) !!}
     


        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>MedicalRecordsNo:</strong>
                {!! Form::text('medicalrecords_no',$data->medicalrecords_no, array('placeholder' => '','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group hidden">
                <strong>MedicalRecordsID:</strong>
                {!! Form::text('medicalrecords_id',$data->id, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Image name:</strong>
                {!! Form::text('name',null, array('placeholder' => 'Name','class' => 'form-control','required'=> 'true')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Upload File:</strong>
                {!! Form::file('product_image', array('class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {!! Form::textarea('details', null, array('placeholder' => 'Details','class' => 'form-control','style'=>'height:100px','required'=> 'true')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}
    @endforeach
                </div>
        </div>
    </div>
@endsection
