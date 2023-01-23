@extends('default')
@section('content')
<div class="row">  
    <div class="col-md-4 col-sm-4 col-xs-4">
       <div class="panel panel-default">
            <div class="panel-heading">Form Medicalrecord</div>
            <div class="panel-body">
                {!! @Form::open(array('route' => route_save_department, 'class' => 'test-form')) !!}
                <div class="form-group">
                    {!! @Form::label('department_name') !!}
                    {!! @Form::text('name', null,
                                    array('required',
                                            'class' => 'form-control',
                                            'placeholder' => ('department_name') )) !!}
                </div>

                

                <div class="form-group">
                    {!! @Form::submit('Insert Medicalrecord',
                                        array('class' => 'btn btn-primary')) !!}
                </div>
                
                {!! @Form::close() !!}
            </div>
        </div>
    </div>




    <div class="col-md-8 col-sm-8 col-xs-8">        
        <div class="panel panel-default">  
            <div class="panel-heading">List Medicalrecord</div>
            <div class="panel-body">
                <table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Medicalrecord</th>
                            <th>CNP</th>
                            <th>data_medicalrecord</th>
                            <th>observatii</th>  
                            <th>poza</th>  
                                                      
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- {{--*/ $i = 1 /*--}} -->
                        <?php $i = 1; ?>
                        @foreach ($data_user as $data)

                            <tr>
                                <th>{{ $i++ }}</th>
                                <th>{{ $data->name }}</th>
                                <th>{{ $data->cnp }}</th>
                                <th>{{ $data->data_medicalrecord }}</th>
                                <th>{{ $data->observatii }}</th>   
                                <th>{{ $data->poza }}</th>                            



                                <th><a href="/images/{{ $data->poza }}">Image</a></th>
                                <th><a href="{{ route('route_edit_medicalrecord', ['_id' => $data->id ]) }}">Edit</a>
                                   <a href="{{ route('route_delete_medicalrecord', ['_id' => $data->id ]) }}" onclick="return confirm('Are you sure ?')">Delete</a>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    
@stop

