@extends('default')
@section('content')
<div class="row">
    <div class="col-md-4 col-12">
       <div class="panel panel-default">
            <div class="panel-heading">Form Diagnostics</div>
            <div class="panel-body">
                {!! @Form::open(array('route' => route_save_diagnostic, 'class' => 'test-form')) !!}
                <div class="form-group">
                    {!! @Form::label('diagnostic_name *') !!}
                    {!! @Form::text('name', null,
                                    array('required',
                                            'class' => 'form-control',
                                            'placeholder' => ('') )) !!}
                </div>

             

                <div class="form-group">
                    {!! @Form::submit('Insert Diagnostic',
                                        array('class' => 'btn btn-primary')) !!}
                </div>
                
                {!! @Form::close() !!}
            </div>
        </div>
    </div>
    
    <div class="col-md-8 col-12">

        
        <div class="panel panel-default">
            <div class="panel-heading">List Diagnostics</div>
            <div class="panel-body">
                <table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th> 
                                            
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
                                
                                
                                
                                <th><a href="{{ route('route_edit_diagnostic', ['_id' => $data->id ]) }}">Edit</a>
                                   <a href="{{ route('route_delete_diagnostic', ['_id' => $data->id ]) }}" onclick="return confirm('Are you sure ?')">Delete</a>
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