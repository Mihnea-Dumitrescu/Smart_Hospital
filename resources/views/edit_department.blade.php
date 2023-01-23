@extends('default')
@section('content')
<div class="row">
    <div class="col-md-4 col-12">
       <div class="panel panel-default">
            <div class="panel-heading">Form Department</div>
            <div class="panel-body">
               @foreach ($get_user as $data)
                    {!! @Form::open(array('route' => route_update_department, 'class' => 'test-form')) !!}
                    {!! @Form::hidden('id', $data->id) !!}
                    <div class="form-group">
                        {!! @Form::label(' Department name ') !!}
                        {!! @Form::text('name', $data->name,
                                        array('required',
                                                'class' => 'form-control',
                                                'placeholder' => 'username' )) !!}
                    </div>
                     <div class="form-group">
                    {!! @Form::label('department_city *') !!}
                    {!! @Form::text('city', $data->city,
                                    array('required',
                                            'class' => 'form-control',
                                            'placeholder' => ('city') )) !!}
                </div>
                <div class="form-group">
                    {!! @Form::label('department_address *') !!}
                    {!! @Form::text('address', $data->address,
                                    array('required',
                                            'class' => 'form-control',
                                            'placeholder' => ('address11') )) !!}
                </div>

                <div class="form-group">
                    {!! @Form::label('view_no *') !!}
                    {!! @Form::text('view_no',  $data->view_no,
                                    array(
                                            'class' => 'form-control',
                                            'placeholder' => ('') )) !!}
                </div>

                    
                    <div class="form-group">
                        {!! @Form::submit('Update Department',
                                            array('class' => 'btn btn-primary')) !!}
                        <a href="{{ route('route_department') }}" class="btn btn-default">Cancel</a>
                    </div>
                    {!! @Form::close() !!}
                @endforeach
            </div>
        </div>
    </div>
    
    <div class="col-md-8 col-12"> 
     
        <div class="panel panel-default">
            <div class="panel-heading">List Department</div>
            <div class="panel-body">
                <table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th> 
                            <th>City</th>       
                            <th>Address</th>                                  
                            <th>Action</th>
                            
                        </tr>
                    </thead>

                    <tbody>
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