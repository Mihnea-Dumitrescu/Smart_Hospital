@extends('default')
@section('content')
<div class="row">
    <div class="col-md-4 col-sm-4 col-xs-4">
       <div class="panel panel-default">
            <div class="panel-heading">Form Drugs</div>
            <div class="panel-body">
               @foreach ($get_user as $data)
                    {!! @Form::open(array('route' => route_update_pill, 'class' => 'test-form')) !!}
                    {!! @Form::hidden('id', $data->id) !!}
                    <div class="form-group">
                        {!! @Form::label('name *') !!}
                        {!! @Form::text('name', $data->name,
                                        array('required',
                                                'class' => 'form-control',
                                                'placeholder' => '' )) !!}
                    </div>
                   
                    <div class="form-group">
                        {!! @Form::submit('Update Drug',
                                            array('class' => 'btn btn-primary')) !!}
                        <a href="{{ route('route_pills') }}" class="btn btn-default">Cancel</a>
                    </div>
                    {!! @Form::close() !!}
                @endforeach
            </div>
        </div>
    </div>
    
    <div class="col-md-8 col-sm-8 col-xs-8"> 

         <div class="panel panel-default">
            <div class="panel-heading">List Pills</div>
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
                        <?php $i = 1; ?>
                        @foreach ($data_user as $data)

                            <tr>
                                <th>{{ $i++ }}</th>
                                <th>{{ $data->name }}</th>
                              
                                <th><a href="{{ route('route_edit_pill', ['_id' => $data->id ]) }}">Edit</a>
                                   <a href="{{ route('route_delete_pill', ['_id' => $data->id ]) }}" onclick="return confirm('Are you sure ?')">Delete</a>
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