@extends('default')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">
                <div class="panel-heading">Form Medical Record Add</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            @foreach ($get_user as $data)

                                {!! @Form::open(array('route' => route_save_medicalrecord, 'class' => 'test-form')) !!}


                                <div class="form-group">
                                    {!! @Form::label('Departament') !!}
                                    {!! @Form::text('departament_name', Auth::user()->department,
                                                    array('required', 'readonly=true',
                                                            'class' => 'form-control',
                                                            'placeholder' => 'Department' )) !!}
                                </div>
                                <div class="form-group">
                                    {!! @Form::label('Doctor name') !!}
                                    {!! @Form::text('user_name', Auth::user()->name,
                                                    array('required', 'readonly=true',
                                                            'class' => 'form-control',
                                                            'placeholder' => 'Doctor Name' )) !!}
                                </div>

                                <div class="form-group hidden">
                                    {!! @Form::label('Pacient id') !!}
                                    {!! @Form::text('pacient_id', $data->_id,
                                                    array('required', 'readonly=true',
                                                            'class' => 'form-control',
                                                            'placeholder' => 'pacient id' )) !!}
                                </div>

                                <div class="form-group">
                                    {!! @Form::label('cnp') !!}
                                    {!! @Form::text('cnp', $data->cnp,
                                                    array('required', 'readonly=true',
                                                            'class' => 'form-control',
                                                            'placeholder' => 'CNP' )) !!}
                                </div>
                                <div class="form-group">
                                    {!! @Form::label('pacient Name') !!}
                                    {!! @Form::text('pacient_name', $data->name,
                                                    array('required', 'readonly=true',
                                                            'class' => 'form-control',
                                                            'placeholder' => 'pacient_name' )) !!}
                                </div>
                                <div class="form-group">
                                    {!! @Form::label('email') !!}
                                    {!! @Form::text('email',  $data->email,
                                                    array('required', 'readonly=true',
                                                            'class' => 'form-control',
                                                            'placeholder' => '' )) !!}
                                </div>

                                <div class="form-group">
                                    {!! @Form::label('sex') !!}
                                    {!! @Form::text('sex',  $data->sex,
                                                    array('required', 'readonly=true',
                                                            'class' => 'form-control',
                                                            'placeholder' => '' )) !!}
                                </div>


                                <div class="form-group">
                                    {!! @Form::label('Birthdate') !!}
                                    {!! @Form::text('birthdate', $data->birthdate,
                                                    array('required', 'readonly=true',
                                                            'class' => 'form-control',
                                                            'placeholder' => '' )) !!}
                                </div>
                                <div class="form-group">
                                    {!! @Form::label('Address') !!}
                                    {!! @Form::text('address', $data->address,
                                                    array('required', 'readonly=true',
                                                            'class' => 'form-control',
                                                            'placeholder' => '' )) !!}
                                </div>
                                <div class="form-group">
                                    {!! @Form::label('Card ID') !!}
                                    {!! @Form::text('bi', $data->bi,
                                                    array('required', 'readonly=true',
                                                            'class' => 'form-control',
                                                            'placeholder' => '' )) !!}
                                </div>
                                <div class="form-group">
                                    {!! @Form::label('occupation') !!}
                                    {!! @Form::text('occupation', $data->occupation,
                                                    array('required', 'readonly=true',
                                                            'class' => 'form-control',
                                                            'placeholder' => '' )) !!}
                                </div>
                                <div class="form-group">
                                    {!! @Form::label('workplace') !!}
                                    {!! @Form::text('workplace', $data->workplace,
                                                    array('required', 'readonly=true',
                                                            'class' => 'form-control',
                                                            'placeholder' => '' )) !!}
                                </div>
                                <div class="form-group">
                                    {!! @Form::label('retired_nr') !!}
                                    {!! @Form::text('retired_nr', $data->retired_nr,
                                                    array('required', 'readonly=true',
                                                            'class' => 'form-control',
                                                            'placeholder' => '' )) !!}
                                </div>
                                <div class="form-group">
                                    {!! @Form::label('blood_type') !!}
                                    {!! @Form::text('blood_type', $data->blood_type,
                                                    array('required', 'readonly=true',
                                                            'class' => 'form-control',
                                                            'placeholder' => '' )) !!}
                                </div>
                                <div class="form-group">
                                    {!! @Form::label('RH') !!}
                                    {!! @Form::text('rh', $data->rh,
                                                    array('required', 'readonly=true',
                                                            'class' => 'form-control',
                                                            'placeholder' => '' )) !!}
                                </div>
                                <div class="form-group">
                                    {!! @Form::label('allergic_to') !!}
                                    {!! @Form::textarea('allergic_to', $data->allergic_to,
                                                    array('required', 'readonly=true',
                                                            'class' => 'form-control',
                                                            'placeholder' => '' )) !!}
                                </div>
                                <div class="form-group">
                                    {!! @Form::label('Medical record Nr') !!}
                                    {!! @Form::text('medicalrecords_no',  $data->medicalrecords_no,
                                                    array('required', 'readonly=true',
                                                            'class' => 'form-control',
                                                            'placeholder' => '' )) !!}
                                </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                {!! @Form::label('Data Medical Record *') !!}

                            </div>
                            <div class="form-group">
                                <input class="date form-control" type="text" name="formfunctiedmr" required>
                            </div>

                            <script type="text/javascript">
                                $('.date').datepicker({ format: 'mm-dd-yyyy'});

                            </script>

                            <div class="form-group">
                                {!! @Form::label('Admission Date *') !!}

                            </div>
                            <div class="form-group">
                                <input class="date form-control" type="text" name="formfunctieadm" required>
                            </div>

                            <script type="text/javascript">
                                $('.date').datepicker({format: 'mm-dd-yyyy'});

                            </script>

                            {!! @Form::label('Referral Diagnosis') !!}
                            <div class="form-group{{ $errors->has('diagnostics_id1') ? ' has-error' : '' }}">

                                <div class="col-md-10">
                                    <select class="form-control" id="diagnostics_id1" name="diagnostics_id1" >
                                        <?php

                                        echo '<option value="">Select...</option>';
                                        $country_optionsd1 = App\Models\DiagnosticsModels::all();
                                        foreach ($country_optionsd1 as $userd1) {
                                            $user1d1=   $userd1->name;
                                            $id1d1=   $userd1->id;
                                            echo '<option value="'.$id1d1.'xxxx'.$user1d1.'">'.$user1d1.'</option>';
                                            $user1d221 = $user1d1;
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <br><br>

                            {!! @Form::label('Diagnosis at Admission') !!}
                            <div class="form-group{{ $errors->has('diagnostics_id2') ? ' has-error' : '' }}">

                                <div class="col-md-10">

                                    <select class="form-control" id="diagnostics_id2" name="diagnostics_id2" >
                                        <?php
                                        echo '<option value="">Select...</option>';
                                        $country_optionsd2 = App\Models\DiagnosticsModels::all();
                                        foreach ($country_optionsd2 as $userd2) {
                                            $user1d2=   $userd2->name;
                                            $id1d2=   $userd2->id;
                                            echo '<option value="'.$id1d2.'xxxx'.$user1d2.'">'.$user1d2.'</option>';

                                            $user1d222 = $user1d2;
                                        }

                                        ?>


                                    </select>
                                </div>
                            </div>
                            <br><br>

                            <div class="form-group">
                                {!! @Form::label('Reason *') !!}
                                {!! @Form::textarea('reason', $data->reason,
                                                array('required',
                                                        'class' => 'form-control',
                                                        'placeholder' => '' )) !!}
                            </div>


                            <div class="form-group">
                                {!! @Form::label('History') !!}
                                {!! @Form::textarea('history', $data->history,
                                                array(
                                                        'class' => 'form-control',
                                                        'placeholder' => '' )) !!}
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                {!! @Form::label('Personal Phyhiological History') !!}
                                {!! @Form::textarea('personalphyhiologicalhist', $data->personalphyhiologicalhist,
                                                array(
                                                        'class' => 'form-control',
                                                        'placeholder' => '' )) !!}
                            </div>
                            <div class="form-group">
                                {!! @Form::label('Personal Patological History') !!}
                                {!! @Form::textarea('personalpatologicalhist', $data->personalpatologicalhist,
                                                array(
                                                        'class' => 'form-control',
                                                        'placeholder' => '' )) !!}
                            </div>

                            <div class="form-group">
                                {!! @Form::label('heredocollateral') !!}
                                {!! @Form::textarea('heredocollateral', $data->heredocollateral,
                                                array(
                                                        'class' => 'form-control',
                                                        'placeholder' => '' )) !!}
                            </div>
                            <div class="form-group">
                                {!! @Form::label('Apexian Pulse') !!}
                                {!! @Form::text('apexian', $data->apexian,
                                                array(
                                                        'class' => 'form-control',
                                                        'placeholder' => '' )) !!}
                            </div>
                            <div class="form-group">
                                {!! @Form::label('Cardiac Volume') !!}
                                {!! @Form::text('cardiacvol', $data->cardiacvol,
                                                array(
                                                        'class' => 'form-control',
                                                        'placeholder' => '' )) !!}
                            </div>
                            <div class="form-group">
                                {!! @Form::label('Sounds') !!}
                                {!! @Form::text('sounds', $data->sounds,
                                                array(
                                                        'class' => 'form-control',
                                                        'placeholder' => '' )) !!}
                            </div>
                            <div class="form-group">
                                {!! @Form::label('Sounds') !!}
                                {!! @Form::text('sounds', $data->sounds,
                                                array(
                                                        'class' => 'form-control',
                                                        'placeholder' => '' )) !!}
                            </div>
                            <div class="form-group">
                                {!! @Form::label('Murmurs') !!}
                                {!! @Form::text('murmurs', $data->murmurs,
                                                array(
                                                        'class' => 'form-control',
                                                        'placeholder' => '' )) !!}
                            </div>
                            <div class="form-group">
                                {!! @Form::label('Arrhythmias') !!}
                                {!! @Form::text('arrhythmias', $data->arrhythmias,
                                                array(
                                                        'class' => 'form-control',
                                                        'placeholder' => '' )) !!}
                            </div>
                            <div class="form-group">
                                {!! @Form::label('Carotid Pulse') !!}
                                {!! @Form::text('carotidpulse', $data->carotidpulse,
                                                array(
                                                        'class' => 'form-control',
                                                        'placeholder' => '' )) !!}
                            </div>
                            <div class="form-group">
                                {!! @Form::label('Radial Pulse') !!}
                                {!! @Form::text('radialpulse', $data->radialpulse,
                                                array(
                                                        'class' => 'form-control',
                                                        'placeholder' => '' )) !!}
                            </div>
                            <div class="form-group">
                                {!! @Form::label('Cubital Pulse') !!}
                                {!! @Form::text('cubitalpulse', $data->cubitalpulse,
                                                array(
                                                        'class' => 'form-control',
                                                        'placeholder' => '' )) !!}
                            </div>
                            <div class="form-group">
                                {!! @Form::label('Capillary Pulse') !!}
                                {!! @Form::text('capillarypulse', $data->capillarypulse,
                                                array(
                                                        'class' => 'form-control',
                                                        'placeholder' => '' )) !!}
                            </div>
                            <div class="form-group">
                                {!! @Form::label('Femoral Pulse') !!}
                                {!! @Form::text('femoralpulse', $data->femoralpulse,
                                                array(
                                                        'class' => 'form-control',
                                                        'placeholder' => '' )) !!}
                            </div>
                            <div class="form-group">
                                {!! @Form::label('Blood Pressure') !!}
                                {!! @Form::text('bloodpressure', $data->bloodpressure,
                                                array(
                                                        'class' => 'form-control',
                                                        'placeholder' => '' )) !!}
                            </div>
                            <div class="form-group">
                                {!! @Form::submit('Insert Medical Record',
                                                    array('class' => 'btn btn-primary')) !!}
                            </div>
                            {!! @Form::close() !!}
                            @endforeach
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
@stop