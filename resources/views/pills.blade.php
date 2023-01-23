@extends('default')
@section('content')
<div class="row">

<div class="col-md-4 col-12">
       <div class="panel panel-default">
            <div class="panel-heading">Form Drugs</div>
            <div class="panel-body">
                {!! @Form::open(array('route' => route_save_pill, 'class' => 'test-form')) !!}
                <div class="form-group">
                    {!! @Form::label('name *') !!}
                    {!! @Form::text('name', null,
                                    array('required',
                                            'class' => 'form-control',
                                            'placeholder' => '' )) !!}
                </div>
                
                <div class="form-group">
                    {!! @Form::submit('Insert Drug',
                                        array('class' => 'btn btn-primary')) !!}
                </div>
                {!! @Form::close() !!}
            </div>
        </div>
    </div>
    
    <div class="col-md-8 col-12">

        <div class="panel panel-default">
            <div class="panel-heading">Generate Fake Data <span class="label label-success pull-right">Bonus Function</span></div>
            <div class="panel-body">
                {!! @Form::open(array('route' => route_generate_pills, 'class' => 'test-form form-inline')) !!}
                <div class="form-group">
                    {!! @Form::number('fakedata', null,
                                    array('required',
                                            'min' => '0',
                                            'max' => '1000',
                                            'style' => 'width: 200px;',
                                            'class' => 'form-control',
                                            'placeholder' => 'Example: 1000' )) !!}
                </div>
                <div class="form-group">
                    {!! @Form::submit('Generate',
                                        array('class' => 'btn btn-warning')) !!}
                    <a href="{{ route('route_deleteallpills') }}" class="btn btn-danger">Delete All Data</a>
                </div>
                {!! @Form::close() !!}
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">List Drugs</div>
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
