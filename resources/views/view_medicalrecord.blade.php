@extends('default')
@section('content')
<div class="row">
    <div class="col-md-4 col-12">
       <div class="panel panel-default">
            <div class="panel-heading">Form Medical Record View</div>
            <div class="panel-body">
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
                                            'placeholder' => '' )) !!}
                </div> 
                  
         

                <div class="form-group">
                    {!! @Form::label('Data Medical Record') !!}
                    {!! @Form::text('data_medicalrecord', $data->data_medicalrecord,
                                    array('required', 'readonly=true',
                                            'class' => 'form-control',
                                            'placeholder' => '' )) !!}
                </div>


                <div class="form-group">
                    {!! @Form::label('Admission Date') !!}
                    {!! @Form::text('data1', $data->data1,
                                    array('required', 'readonly=true',
                                            'class' => 'form-control',
                                            'placeholder' => '' )) !!}
                </div>


                <div class="form-group">
                    {!! @Form::label('Leaving Date') !!}
                    {!! @Form::text('data2', $data->data2,
                                    array('required', 'readonly=true',
                                            'class' => 'form-control',
                                            'placeholder' => '' )) !!}
                </div>
     
               <div class="form-group">
                    {!! @Form::label('Referral Diagnosis') !!}
                    {!! @Form::text('referraldiagnosis', $data->referraldiagnosis,
                                    array('required', 'readonly=true',
                                            'class' => 'form-control',
                                            'placeholder' => '' )) !!}
                </div>

                <div class="form-group">
                    {!! @Form::label('Diagnosis at Admission') !!}
                    {!! @Form::text('diagnosisatadmission', $data->diagnosisatadmission,
                                    array('required', 'readonly=true',
                                            'class' => 'form-control',
                                            'placeholder' => '' )) !!}
                </div>
                
                
                <div class="form-group">
                    {!! @Form::label('Diagnosis at diagnosisat72') !!}   
                    {!! @Form::text('diagnosisat72', $data->diagnosisat72,
                                    array('required', 'readonly=true',
                                            'class' => 'form-control',
                                            'placeholder' => '' )) !!}
                </div>
         


<div class="form-group">
                    {!! @Form::label('Reason') !!}
                    {!! @Form::textarea('reason', $data->reason,
                                    array('required', 'readonly=true',
                                            'class' => 'form-control',
                                            'placeholder' => '' )) !!}
                </div>


<div class="form-group">
                    {!! @Form::label('History') !!}
                    {!! @Form::textarea('history', $data->history,
                                    array(
                                            'class' => 'form-control', 'readonly=true',
                                            'placeholder' => '' )) !!}
                </div>                
            


<div class="form-group">
                    {!! @Form::label('Personal Phyhiological History') !!}
                    {!! @Form::textarea('personalphyhiologicalhist', $data->personalphyhiologicalhist,
                                    array(
                                            'class' => 'form-control', 'readonly=true',
                                            'placeholder' => '' )) !!}
                </div>


<div class="form-group">
                    {!! @Form::label('Personal Patological History') !!}
                    {!! @Form::textarea('personalpatologicalhist', $data->personalpatologicalhist,
                                    array(
                                            'class' => 'form-control', 'readonly=true',
                                            'placeholder' => '' )) !!}
                </div>

<div class="form-group">
                    {!! @Form::label('heredocollateral') !!}
                    {!! @Form::textarea('heredocollateral', $data->heredocollateral,
                                    array(
                                            'class' => 'form-control', 'readonly=true',
                                            'placeholder' => '' )) !!}
                </div>


    <div class="form-group">
                    {!! @Form::label('Apexian Pulse') !!}
                    {!! @Form::text('apexian', $data->apexian,
                                    array(
                                            'class' => 'form-control','readonly=true',
                                            'placeholder' => '' )) !!}
                </div>
                        
                <div class="form-group">
                    {!! @Form::label('Cardiac Volume') !!}
                    {!! @Form::text('cardiacvol', $data->cardiacvol,
                                    array(
                                            'class' => 'form-control','readonly=true',
                                            'placeholder' => '' )) !!}
                </div>
               

                <div class="form-group">
                    {!! @Form::label('Sounds') !!}
                    {!! @Form::text('sounds', $data->sounds,
                                    array(
                                            'class' => 'form-control','readonly=true',
                                            'placeholder' => '' )) !!}
                </div>

                 <div class="form-group">
                    {!! @Form::label('Murmurs') !!}
                    {!! @Form::text('murmurs', $data->murmurs,
                                    array(
                                            'class' => 'form-control','readonly=true',
                                            'placeholder' => '' )) !!}
                </div>

                <div class="form-group">
                    {!! @Form::label('Arrhythmias') !!}
                    {!! @Form::text('arrhythmias', $data->arrhythmias,
                                    array(
                                            'class' => 'form-control','readonly=true',
                                            'placeholder' => '' )) !!}
                </div>
                <div class="form-group">
                    {!! @Form::label('Carotid Pulse') !!}
                    {!! @Form::text('carotidpulse', $data->carotidpulse,
                                    array(
                                            'class' => 'form-control','readonly=true',
                                            'placeholder' => '' )) !!}
                </div>
                <div class="form-group">
                    {!! @Form::label('Radial Pulse') !!}
                    {!! @Form::text('radialpulse', $data->radialpulse,
                                    array(
                                            'class' => 'form-control','readonly=true',
                                            'placeholder' => '' )) !!}
                </div>
                <div class="form-group">
                    {!! @Form::label('Cubital Pulse') !!}
                    {!! @Form::text('cubitalpulse', $data->cubitalpulse,
                                    array(
                                            'class' => 'form-control','readonly=true',
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
                                            'class' => 'form-control','readonly=true',
                                            'placeholder' => '' )) !!}
                </div>
                <div class="form-group">
                    {!! @Form::label('Blood Pressure') !!}
                    {!! @Form::text('bloodpressure', $data->bloodpressure,
                                    array(
                                            'class' => 'form-control','readonly=true',
                                            'placeholder' => '' )) !!}
                </div>

                    <div class="form-group">
                        <!-- {!! @Form::submit('Update Medical Record',
                                            array('class' => 'btn btn-primary')) !!} -->
                        <a href="{{ route('route_medicalrecord') }}" class="btn btn-default">Cancel</a>
                    </div>
                    {!! @Form::close() !!}
                @endforeach
            </div>
        </div>
    </div>   

</div>
    
@stop