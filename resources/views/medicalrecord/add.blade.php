@extends('default')
@section('content')
    <div class="row">
        <div class="col-md-4 col-12">
            <div class="panel panel-default">

                <div class="panel-heading">Form Medical record</div>

                <div class="form-group">
                    <div class="form-group{{ $errors->has('nameid') ? ' has-error' : '' }}">

                        {!! @Form::label('Cnp') !!}
                        <div class="form-group" >
                            <div class="col-md-6>


                            <select class="form-control" id="nameid" name="nameid" onChange="javascript:myFunction();">

                            <?php

                            echo '<option value="">Select...</option>';

                            $country_optionsd = App\Models\PacientModels::all();//->take(10)
                            foreach ($country_optionsd as $userd) {
                                $user1d=   $userd->cnp;
                                $id1d=   $userd->id;
                                echo '<option value="'.$id1d.'xxxx'.$user1d.'">'.$user1d.'</option>';

                                $user1d22 = $user1d;
                            }


                            ?>



                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <p>
                    <label for="formfunctie" class="col-md-4 control-label">Sex</label>

                <div class="form-group" >
                    <select class="form-control" name="formfunctie"  id="nameid1"   onChange="javascript:myFunction();">
                        <option value="">Select...</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                </p>
            </div>

            <div class="panel-body">
                {!! @Form::open(array('route' => route_save_medicalrecord, 'class' => 'test-form')) !!}
                <div class="form-group" >
                    {!! @Form::label('name') !!}
                    {!! @Form::text('name',  $data->name,
                                    array('required',
                                            'class' => 'form-control',
                                            'placeholder' => 'Username' )) !!}
                </div>
                <div class="form-group">
                    {!! @Form::label('data') !!}
                    {!! @Form::text('data_medicalrecord',  $data->data_medicalrecord,
                                    array('required',
                                            'class' => 'form-control',
                                            'placeholder' => 'data' )) !!}
                </div>
                <div class="form-group">
                    {!! @Form::label('Observatii') !!}
                    {!! @Form::textarea('observatii', $data->observatii,
                                    array('required',
                                            'class' => 'form-control',
                                            'placeholder' => 'Observatii' )) !!}
                </div>

                <div class="form-group">
                    {!! @Form::label('Poza') !!}
                    {!! @Form::text('poza', $data->poza,
                                    array('required',
                                            'class' => 'form-control',
                                            'placeholder' => 'Poza' )) !!}
                </div>
                <div class="form-group">
                    {!! @Form::submit('Insert Medicalrecord',
                                        array('class' => 'btn btn-primary')) !!}
                </div>
                {!! @Form::close() !!}

            </div>
        </div>
    </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <script type="text/javascript">
        $("#nameid").select2();
    </script>


    <script type="text/javascript">

    </script>

    <script>
        function myFunction() {

            v1 = $('#nameid :selected').text();

            window.location.href = "http://localhost:8000/medicalrecord/populate_medicalrecord/"+ v1;
        }

    </script>
@stop