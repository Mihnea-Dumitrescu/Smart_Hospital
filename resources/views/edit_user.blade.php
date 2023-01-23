@extends('default')
@section('content')
<div class="row">
    <div class="col-md-4 col-12">
       <div class="panel panel-default">
            <div class="panel-heading">Form User</div>
            <div class="panel-body">
               @foreach ($get_user as $data)
                    {!! @Form::open(array('route' => route_update_user, 'class' => 'test-form')) !!}
                    {!! @Form::hidden('id', $data->id) !!}
                    <div class="form-group">
                        {!! @Form::label('name *') !!}
                        {!! @Form::text('name', $data->name,
                                        array('required',
                                                'class' => 'form-control',
                                                'placeholder' => '' )) !!}
                    </div>
                    <div class="form-group">
                        {!! @Form::label('email *') !!}
                        {!! @Form::text('email',  $data->email,
                                        array('required',
                                                'class' => 'form-control',
                                                'placeholder' => '' )) !!}
                    </div>
                    <div class="form-group">
                        {!! @Form::label('Address *') !!}
                        {!! @Form::textarea('address',  $data->address,
                                        array('required',
                                                'class' => 'form-control',
                                                'placeholder' => '' )) !!}
                    </div>

                    <div class="form-group">
                        {!! @Form::label('password *') !!}
                        {!! @Form::text('password',  $data->password,
                                        array('required',
                                                'class' => 'form-control',
                                                'placeholder' => '' )) !!}
                    </div>

     <div class="form-group{{ $errors->has('department_id') ? ' has-error' : '' }}">
                            <label for="departments_id" class="col-md-4 control-label">Department*</label>

                            <div class="col-md-6">

     
                            <select class="form-control" id="department_id" name="department_id" >

                            <?php
                             
                            

                           
                           // $dep1 = App\Models\PrimaryModels:: where('department_id', '=', $data->department_id)->get();       

                           echo  '<option value="'.$data->department.'">'.$data->department.'</option>';



                            $country_optionsd = App\Models\DepartmentModels::all();

                           //$country_optionsd = DB::table('departments')->orderBy('name', 'asc')->get();  



                            foreach ($country_optionsd as $userd) {
                                   $user1d=   $userd->name;
                                    $id1d=   $userd->id;
                                       // echo '<option value="'.$id1d.'xxxx'.$user1d.'">'.$user1d.'</option>';
                                        echo '<option value="'.$user1d.'">'.$user1d.'</option>';
                                   $user1d22 = $user1d;     
                                }
                                           
                            ?>                          


                              </select>
                           </div>
                        </div>  

<br></br>

 <div>  
<p>

   <label for="formfunctie" class="col-md-4 control-label">Practice *</label>

                            <div class="col-md-6">
<select class="form-control" name="formfunctie">
<?php
echo  '<option value="'.$data->practice.'">'.$data->practice.'</option>';
?>

    <!-- <option value=" {{$data->practice}} ">Select...</option> -->

  <option value="Doctor">Doctor</option>

  <option value="Nurse">Nurse</option>

</select>
</div>
</p>
 </div>  



                    <div class="form-group">
                        {!! @Form::submit('Update User',
                                            array('class' => 'btn btn-primary')) !!}
                        <a href="{{ route('route_home_user') }}" class="btn btn-default">Cancel</a>
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
                            <th>Name</th>
                            <th>Practice</th>
                            <th>Department</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1; ?>
                        @foreach ($data_user as $data)

                            <tr>
                                <th>{{ $i++ }}</th>
                                <th>{{ $data->name }}</th>
                                <th>{{ $data->practice }}</th>
                                <th>{{ $data->department }}</th>
                                <th><a href="{{ route('route_edit_user', ['_id' => $data->id ]) }}">Edit</a>
                                   <a href="{{ route('route_delete_user', ['_id' => $data->id ]) }}" onclick="return confirm('Are you sure ?')">Delete</a>
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