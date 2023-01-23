@extends('default')
@section('content')
<div class="row">
    <div class="col-md-4 col-12">
       <div class="panel panel-default">
            <div class="panel-heading">Form Department</div>
            <div class="panel-body">
                {!! @Form::open(array('route' => route_save_department, 'class' => 'test-form')) !!}
                <div class="form-group">
                    {!! @Form::label('department_name *') !!}
                    {!! @Form::text('name', null,
                                    array('required',
                                            'class' => 'form-control',
                                            'placeholder' => ('') )) !!}
                </div>

                <div class="form-group">
                    {!! @Form::label('department_city *') !!}
                    {!! @Form::text('city', null,
                                    array('required',
                                            'class' => 'form-control',
                                            'placeholder' => ('') )) !!}
                </div>
                <div class="form-group">
                    {!! @Form::label('department_address *') !!}
                    {!! @Form::text('address', null,
                                    array(
                                            'class' => 'form-control',
                                            'placeholder' => ('') )) !!}
                </div>
                <div class="form-group">
                    {!! @Form::label('view_no *') !!}
                    {!! @Form::text('view_no', null,
                                    array(
                                            'class' => 'form-control',
                                            'placeholder' => ('') )) !!}
                </div>

                

                <div class="form-group">
                    {!! @Form::submit('Insert Department',
                                        array('class' => 'btn btn-primary')) !!}
                </div>
                
                {!! @Form::close() !!}
            </div>
        </div>
    </div>

    <div class="col-md-8 col-12">


        <div class="panel panel-default">
            <div class="panel-heading">List Deoartment</div>
            <div class="panel-body">
                <table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th width="auto">No</th>
                            <th width="auto" >Name</th> 
                            <th width="auto">City</th>       
                            <th width="auto">Address</th>                                  
                            <th width="auto">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- {{--*/ $i = 1 /*--}} -->
                        <?php $i = 1; ?>
                        @foreach ($data_user as $data)

                            <tr>
                                <th>{{ $i++ }}</th>
                                <th>{{ $data->name }}</th>
                                <th>{{ $data->city }}</th>
                                <th>{{ $data->address }}</th>
                                
                                
                                <th><a href="{{ route('route_edit_department', ['_id' => $data->id ]) }}">Edit</a>
                                   <a href="{{ route('route_delete_department', ['_id' => $data->id ]) }}" onclick="return confirm('Are you sure ?')">Delete</a>
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