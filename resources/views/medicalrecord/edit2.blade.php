@extends('default')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">
                <div class="panel-heading">Form Medical Record Edit</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            @foreach ($get_user as $data)
                                {!! @Form::open(array('route' => route_update_medicalrecord, 'class' => 'test-form')) !!}
                                {!! @Form::hidden('id', $data->id) !!}


                                <div class="form-group hidden">
                                    {!! @Form::label('pacient_id') !!}
                                    {!! @Form::text('pacient_id', $data->pacient_id,
                                                    array('required', 'readonly=true',
                                                            'class' => 'form-control',
                                                            'placeholder' => 'pacient_id' )) !!}
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
                                    {!! @Form::text('pacient_name', $data->pacient_name,
                                                    array('required','readonly=true',
                                                            'class' => 'form-control',
                                                            'placeholder' => 'pacient_name' )) !!}
                                </div>
                                <div class="form-group">
                                    {!! @Form::label('email') !!}
                                    {!! @Form::text('email',  $data->email,
                                                    array('required', 'readonly=true',
                                                            'class' => 'form-control',
                                                            'placeholder' => 'email' )) !!}
                                </div>
                                <div class="form-group">
                                    {!! @Form::label('Sex') !!}
                                    {!! @Form::text('sex',  $data->sex,
                                                    array('required', 'readonly=true',
                                                            'class' => 'form-control',
                                                            'placeholder' => 'email' )) !!}
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
                                    {!! @Form::label('RH') !!}
                                    {!! @Form::text('rh', $data->rh,
                                                    array('required', 'readonly=true',
                                                            'class' => 'form-control',
                                                            'placeholder' => 'blood_type' )) !!}
                                </div>
                                <div class="form-group">
                                    {!! @Form::label('allergic_to') !!}
                                    {!! @Form::text('allergic_to', $data->allergic_to,
                                                    array('required', 'readonly=true',
                                                            'class' => 'form-control',
                                                            'placeholder' => 'allergic_to' )) !!}
                                </div>
                                <div class="form-group">
                                    {!! @Form::label('Medical Record Nr') !!}
                                    {!! @Form::text('medicalrecords_no',  $data->medicalrecords_no,
                                                    array('required', 'readonly=true',
                                                            'class' => 'form-control',
                                                            'placeholder' => 'mmm' )) !!}
                                </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                {!! @Form::label('Data Medical Record *') !!}

                            </div>
                            <div class="form-group">

                                <input class="date form-control" type="text" name="formfunctiedmr"  value=" {{$data->data_medicalrecord}}" required>
                            </div>

                            <script type="text/javascript">
                                $('.date').datepicker({ format: 'mm-dd-yyyy'});
                            </script>
                            <div class="form-group">
                                {!! @Form::label('Admission Date *') !!}

                            </div>
                            <div class="form-group">
                                <input class="date form-control" type="text" name="formfunctieadm"  value=" {{$data->data1}}" required>
                            </div>

                            <script type="text/javascript">
                                $('.date').datepicker({format: 'mm-dd-yyyy'});
                            </script>

                            {!! @Form::label('Referral Diagnosis') !!}
                            <div class="form-group{{ $errors->has('diagnostics_id1') ? ' has-error' : '' }}">

                                <div class="col-md-10">

                                    <select class="form-control" id="diagnostics_id1" name="diagnostics_id1" >
                                        <?php
                                        echo  '<option value="'.$data->referraldiagnosis.'">'.$data->referraldiagnosis.'</option>';
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

                                        echo  '<option value="'.$data->diagnosisatadmission.'">'.$data->diagnosisatadmission.'</option>';

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

                            {!! @Form::label('Diagnosis at 72') !!}
                            <div class="form-group{{ $errors->has('diagnostics_id3') ? ' has-error' : '' }}">

                                <div class="col-md-10">

                                    <select class="form-control" id="diagnostics_id3" name="diagnostics_id3" >

                                        <?php

                                        echo  '<option value="'.$data->diagnosisat72.'">'.$data->diagnosisat72.'</option>';

                                        $country_optionsd3 = App\Models\DiagnosticsModels::all();
                                        foreach ($country_optionsd3 as $userd3) {
                                            $user1d3=   $userd3->name;
                                            $id1d3=   $userd3->id;
                                            echo '<option value="'.$id1d3.'xxxx'.$user1d3.'">'.$user1d3.'</option>';

                                            $user1d223 = $user1d3;
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
                            <div class="form-group">
                                {!! @Form::label('Personal Phyhiological History') !!}
                                {!! @Form::textarea('personalphyhiologicalhist', $data->personalphyhiologicalhist,
                                                array(
                                                        'class' => 'form-control',
                                                        'placeholder' => '' )) !!}
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
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
                                {!! @Form::label('Premorbid Personality') !!}
                                {!! @Form::textarea('premorbidpersonality', $data->premorbidpersonality,
                                                array(
                                                        'class' => 'form-control',
                                                        'placeholder' => '' )) !!}
                            </div>
                            <div class="form-group">
                                {!! @Form::label('Mental Examination') !!}
                                {!! @Form::textarea('mentalexamination', $data->mentalexamination,
                                                array(
                                                        'class' => 'form-control',
                                                        'placeholder' => '' )) !!}
                            </div>
                            <div class="form-group">
                                {!! @Form::label('Leaving Date') !!}

                            </div>
                            <div class="form-group">
                                <input class="date form-control" type="text" name="formfunctielea"  value=" {{$data->data2}}">
                            </div>

                            <script type="text/javascript">
                                $('.date').datepicker({format: 'mm-dd-yyyy'});
                            </script>

                            <div class="form-group">
                                {!! @Form::label('Released') !!}
                                <input type="checkbox" name="formexternat" value="Yes" />
                            </div>
                            <div class="form-group">
                                {!! @Form::submit('Update Medical Record',
                                                    array('class' => 'btn btn-primary')) !!}
                                <a href="{{ route('route_medicalrecord') }}" class="btn btn-default">Cancel</a>
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