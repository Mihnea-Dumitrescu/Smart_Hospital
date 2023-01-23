@extends('default')
@section('content')
<div class="row">
    <div class="col-md-4 col-12">
       <div class="panel panel-default">
            <div class="panel-heading">Form User00`1</div>
            <div class="panel-body">
                {!! @Form::open(array('route' => route_save_user, 'class' => 'test-form')) !!}
                <div class="form-group">
                    {!! @Form::label('name *') !!}
                    {!! @Form::text('name', null,
                                    array('required',
                                            'class' => 'form-control',
                                            'placeholder' => 'Username' )) !!}
                </div>
                <div class="form-group">
                    {!! @Form::label('email *') !!}
                    {!! @Form::text('email', null,
                                    array('required',
                                            'class' => 'form-control',
                                            'placeholder' => 'Email' )) !!}
                </div>
                <div class="form-group">
                    {!! @Form::label('Address *') !!}
                    {!! @Form::textarea('address', null,
                                    array('required',
                                            'class' => 'form-control',
                                            'placeholder' => 'Address' )) !!}
                </div>

               <div class="form-group{{ $errors->has('department_id') ? ' has-error' : '' }}">
                            <label for="departments_id" class="col-md-4 control-label">Department *</label>

                            <div class="col-md-6">

     
                            <select class="form-control" id="department_id" name="department_id" >

                            <?php
                             
                            echo '<option value=""></option>';

                            $country_optionsd = App\Models\DepartmentModels::all();
                           


                           //$country_optionsd = DB::table('departments')->orderBy('name', 'asc')->get();                          
                            foreach ($country_optionsd as $userd) {
                                   $user1d=   $userd->name;
                                    $id1d=   $userd->id;
                                       echo '<option value="'.$id1d.'">'.$user1d.'</option>';
                                }
                                            
                            ?>
                            
<input type="text" class="form-control" id="department" name="department" value={{ $user1d }}> 

                                </select>
                           </div>
                        </div>    

                        


                <div class="form-group">
                    {!! @Form::submit('Insert User',
                                        array('class' => 'btn btn-primary')) !!}
                </div>
                {!! @Form::close() !!}
            </div>
        </div>
    </div>
 </div>   
@stop