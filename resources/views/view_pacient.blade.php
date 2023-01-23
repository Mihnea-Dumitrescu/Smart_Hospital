@extends('default')
@section('content')
<div class="row">
    <div class="col-md-4 col-12">
       <div class="panel panel-default">
            <div class="panel-heading">Form Pacient</div>
            <div class="panel-body">
               @foreach ($get_user as $data)
                    {!! @Form::open(array('route' => route_update_pacient, 'class' => 'test-form')) !!}
                    {!! @Form::hidden('id', $data->id) !!}
                <div class="form-group">
                    {!! @Form::label('cnp') !!}
                    {!! @Form::text('cnp', $data->cnp,
                                    array('required', 'readonly=true',
                                            'class' => 'form-control',
                                            'placeholder' => 'CNP' )) !!}
                </div>
                <div class="form-group">
                    {!! @Form::label('name') !!}
                    {!! @Form::text('name', $data->name,
                                    array('required', 'readonly=true',
                                            'class' => 'form-control',
                                            'placeholder' => 'Pacient' )) !!}
                </div>
                <div class="form-group">
                        {!! @Form::label('email') !!}
                        {!! @Form::text('email',  $data->email,
                                        array('required', 'readonly=true',
                                                'class' => 'form-control',
                                                'placeholder' => 'email' )) !!}
                    </div>
               <div class="form-group">
                        {!! @Form::label('sex') !!}
                        {!! @Form::text('sex',  $data->sex,
                                        array('required', 'readonly=true',
                                                'class' => 'form-control',
                                                'placeholder' => 'sex' )) !!}
                    </div>

                <div class="form-group">
                    {!! @Form::label('Birthdate') !!}
                    {!! @Form::text('birthdate', $data->birthdate,
                                    array('required', 'readonly=true',
                                            'class' => 'form-control',
                                            'placeholder' => 'birthdate' )) !!}
                </div>
                <div class="form-group">
                    {!! @Form::label('Address') !!}
                    {!! @Form::text('address', $data->address,
                                    array('required', 'readonly=true',
                                            'class' => 'form-control',
                                            'placeholder' => 'Address' )) !!}
                </div>


               <div class="form-group">
                    {!! @Form::label('Card ID') !!}
                    {!! @Form::text('bi', $data->bi,
                                    array('required', 'readonly=true',
                                            'class' => 'form-control',
                                            'placeholder' => 'Card ID' )) !!}
                </div>
                <div class="form-group">
                    {!! @Form::label('occupation') !!}
                    {!! @Form::text('occupation', $data->occupation,
                                    array('required', 'readonly=true',
                                            'class' => 'form-control',
                                            'placeholder' => 'occupation' )) !!}
                </div>
                <div class="form-group">
                    {!! @Form::label('workplace') !!}
                    {!! @Form::text('workplace', $data->workplace,
                                    array('required', 'readonly=true',
                                            'class' => 'form-control',
                                            'placeholder' => 'workplace' )) !!}
                </div>
                <div class="form-group">
                    {!! @Form::label('retired_nr') !!}
                    {!! @Form::text('retired_nr', $data->retired_nr,
                                    array('required', 'readonly=true',
                                            'class' => 'form-control',
                                            'placeholder' => 'retired_nr' )) !!}
                </div>



                <div class="form-group">
                    {!! @Form::label('blood_type') !!}
                    {!! @Form::text('blood_type', $data->blood_type,
                                    array('required', 'readonly=true',
                                            'class' => 'form-control',
                                            'placeholder' => 'blood_type' )) !!}
                </div>
               <div class="form-group">
                        {!! @Form::label('rh') !!}
                        {!! @Form::text('rh',  $data->rh,
                                        array('required', 'readonly=true',
                                                'class' => 'form-control',
                                                'placeholder' => 'rh' )) !!}
                    </div>
                <div class="form-group">
                    {!! @Form::label('allergic_to') !!}
                    {!! @Form::text('allergic_to', $data->allergic_to,
                                    array('required', 'readonly=true',
                                            'class' => 'form-control',
                                            'placeholder' => 'allergic_to' )) !!}
                </div>
         
                    

             

 


 
                    <div class="form-group">
                 <!--        {!! @Form::submit('Update Pacient',
                                            array('class' => 'btn btn-primary')) !!} -->
                        <a href="{{ route('route_pacient') }}" class="btn btn-default">Cancel</a>
                    </div>
                    {!! @Form::close() !!}
                @endforeach
            </div>
        </div>
    </div>
    
    <div class="col-md-8 col-12"> 
        <!-- <div class="panel panel-default">
            <div class="panel-heading">Generate Fake Data <span class="label label-success pull-right">Bonus Function</span></div>
            <div class="panel-body">
                {!! @Form::open(array('route' => route_generate, 'class' => 'test-form form-inline')) !!}
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
                                        array('class' => 'btn btn-primary')) !!}
                    <a href="{{ route('route_deleteall') }}" class="btn btn-danger">Delete All Data</a>
                </div>
                {!! @Form::close() !!}
            </div>
        </div> -->
        <div class="panel panel-default">
            <div class="panel-heading">List User</div>
            <div class="panel-body">
                <table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                             <th>No</th>
                            <th>Pacient</th>
                           <!--  <th>Email</th> -->
                            <th>CNP</th>
                           <!--  <th>Age</th>
                            <th>Address</th>
                            <th>Sex</th>
                            <th>Action</th> -->
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1; ?>
                        @foreach ($data_user as $data)

                            <tr>
                                <th>{{ $i++ }}</th>
                                <th>{{ $data->name }}</th>
                                <!-- <th>{{ $data->email }}</th> -->
                                <th>{{ $data->cnp }}</th>                               
                                <!-- <th>{{ $data->age }}</th>
                                <th>{{ $data->address }}</th>
                                <th>{{ $data->sex }}</th>
                                <th><a href="{{ route('route_edit_pacient', ['_id' => $data->id ]) }}">Edit</a>
                                   <a href="{{ route('route_delete_pacient', ['_id' => $data->id ]) }}" onclick="return confirm('Are you sure ?')">Delete</a>
                                </th> -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    
@stop