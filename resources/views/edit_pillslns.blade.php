@extends('default')
@section('content')
<div class="row">
    <div class="col-md-4 col-12">
       <div class="panel panel-default">
            <div class="panel-heading">Form Medication Medical Record No {{$medicalrecords_no}} -  {{$pacient_name}} </div>
            <div class="panel-body">
               @foreach ($get_user as $data)
                    {!! @Form::open(array('route' => route_update_pillslns, 'class' => 'test-form')) !!}
                    {!! @Form::hidden('id', $data->id) !!}
                   <div class="form-group">
                    {!! @Form::label('Drug Name *') !!}
                    {!! @Form::text('pills_name',  $data->pills_name,
                                    array('required',
                                            'class' => 'typeahead form-control','autocomplete' => 'off',
                                            'placeholder' => ('') )) !!}

                                   
                </div>




                <div class="form-group hidden" >
                    {!! @Form::label('medicalrecords_id') !!}
                    {!! @Form::text('medicalrecords_id',  $data->medicalrecords_id,
                                    array('required',
                                            'class' => 'form-control',
                                            'placeholder' => ('') )) !!}
                </div>



<br></br>

                <div class="form-group">
                    {!! @Form::label('details *') !!}
                    {!! @Form::textarea('details',  $data->details,
                                    array('required',
                                            'class' => 'form-control',
                                            'placeholder' => ('') )) !!}
                </div>



                    
                    <div class="form-group">
                        {!! @Form::submit('Update Drug',
                                            array('class' => 'btn btn-primary')) !!}
                    
  <a href="{{ route('route_view_data_pills',  ['_id' => $data->medicalrecords_id ]) }}" class="btn btn-default">Cancel</a>
                        
                    </div>
                    {!! @Form::close() !!}
                @endforeach
            </div>
        </div>
    </div>
    
    <div class="col-md-8 col-12"> 
     
        <div class="panel panel-default">
            <div class="panel-heading">List Medication</div>
            <div class="panel-body">
                <table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Drug Name</th> 
                            <!-- <th>medicalrecords_id</th> -->       
                            <th>Details</th>                                  
                            <th>Action</th>
                            
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1; ?>
                        @foreach ($data_user as $data)

                            <tr>
                                <th>{{ $i++ }}</th>
                                <th>{{ $data->pills_name }}</th>
                                <!-- <th>{{ $data->medicalrecords_id }}</th> -->
                                <th>{{ $data->details }}</th>
                               
                                <th><a href="{{ route('route_edit_pillslns', ['_id' => $data->id ]) }}">Edit</a>
                                   <a href="{{ route('route_delete_pillslns', ['_id' => $data->id ]) }}" onclick="return confirm('Are you sure ?')">Delete</a>
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