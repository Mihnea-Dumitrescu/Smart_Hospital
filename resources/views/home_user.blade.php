@extends('default')
@section('content')
<div class="row">
    <div class="col-md-4 col-12">
       <div class="panel panel-default">
            <div class="panel-heading">Form User</div>
            <div class="panel-body">
                {!! @Form::open(array('route' => route_save_user, 'class' => 'test-form')) !!}
                <div class="form-group">
                    {!! @Form::label('name *') !!}
                    {!! @Form::text('name', null,
                                    array('required',
                                            'class' => 'form-control',
                                            'placeholder' => '' )) !!}
                </div>
                <div class="form-group">
                    {!! @Form::label('email*') !!}
                    {!! @Form::text('email', null,
                                    array('required',
                                            'class' => 'form-control',
                                            'placeholder' => '' )) !!}
                </div>
                <div class="form-group">
                    {!! @Form::label('Address *') !!}
                    {!! @Form::textarea('address', null,
                                    array('required',
                                            'class' => 'form-control',
                                            'placeholder' => '' )) !!}
                </div>

                  <div class="form-group{{ $errors->has('department_id') ? ' has-error' : '' }}">
                            <label for="departments_id" class="col-md-4 control-label">Department*</label>

                            <div class="col-md-6">

     
                            <select class="form-control" id="department_id" name="department_id" >

                            <?php
                             
                            echo '<option value="">Select...</option>';

                            $country_optionsd = App\Models\DepartmentModels::all();
                           


                           //$country_optionsd = DB::table('departments')->orderBy('name', 'asc')->get();                          
                            foreach ($country_optionsd as $userd) {
                                   $user1d=   $userd->name;
                                    $id1d=   $userd->id;
                                       echo '<option value="'.$id1d.'xxxx'.$user1d.'">'.$user1d.'</option>';

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

  <option value="">Select...</option>

  <option value="Doctor">Doctor</option>

  <option value="Nurse">Nurse</option>

</select>
</div>
</p>
 </div>  


                <div class="form-group">
                    {!! @Form::submit('Insert User',
                                        array('class' => 'btn btn-primary')) !!}
                </div>
                {!! @Form::close() !!}
            </div>
        </div>
    </div>
    
     <div class="col-md-8 col-12">

    <!--    <div class="panel panel-default">
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
                                        array('class' => 'btn btn-warning')) !!}
                    <a href="{{ route('route_deleteall') }}" class="btn btn-danger">Delete All Data</a>
                </div>
                {!! @Form::close() !!}
            </div>
        </div> -->
        <div class="panel panel-default">
      <!--   <a href="/home_user/home_user.add" class="btn btn-primary  pull-right">Add sesizare</a> -->
            <div class="panel-heading">List User


            </div>

            <div class="panel-body">
                <table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>User name</th>
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
                                   <a href="{{ route('sendMailtoUser', ['_id' => $data->id ]) }}">mail</a>
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
