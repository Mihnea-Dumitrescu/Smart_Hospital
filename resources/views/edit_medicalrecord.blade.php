@extends('default')
@section('content')
<div class="row">
    <div class="col-md-4 col-12">
       <div class="panel panel-default">
            <div class="panel-heading">Form Medicalrecord editb</div>
            <div class="panel-body">
               @foreach ($get_user as $data)
                    {!! @Form::open(array('route' => route_update_medicalrecord, 'class' => 'test-form')) !!}
                    {!! @Form::hidden('id', $data->id) !!}
                    <div class="form-group">
                        {!! @Form::label('name') !!}
                        {!! @Form::text('name', $data->name,
                                        array('required',
                                                'class' => 'form-control',
                                                'placeholder' => 'username' )) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! @Form::submit('Update Medicalrecord',
                                            array('class' => 'btn btn-primary')) !!}
                        <a href="{{ route('route_department') }}" class="btn btn-default">Cancel</a>
                    </div>
                    {!! @Form::close() !!}
                @endforeach
            </div>
        </div>
    </div>
    
    
</div>

@stop