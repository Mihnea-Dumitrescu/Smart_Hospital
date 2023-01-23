@extends('default')
@section('content')


<div class="row">
    <div class="col-md-4 col-12">
       <div class="panel panel-default">
            <div class="panel-heading">Form Pacient</div>
            <div class="panel-body">
                {!! @Form::open(array('route' => route_save_pacient, 'class' => 'test-form')) !!}




                       


                 <div class="form-group">
                    {!! @Form::label('cnp *') !!}
                    {!! @Form::text('cnp', null,
                                    array('required','onchange'=>"myFunction(this.value);",
                                            'class' => 'form-control', 'id'=>'cnp'  , 'name'=>'cnp'  ,
                                            'placeholder' => 'CNP' )) !!}
                </div>
                <div class="form-group">
                    {!! @Form::label('name *') !!}
                    {!! @Form::text('name', null,
                                    array('required',
                                            'class' => 'form-control',
                                            'placeholder' => 'Name' )) !!}
                </div>
                <div class="form-group">
                        {!! @Form::label('email') !!}
                        {!! @Form::text('email',  $data->email,
                                        array(  'class' => 'form-control',
                                                'placeholder' => 'email' )) !!}
                    </div>
               <div>  
<p>

   <label for="formfunctie" class="col-md-4 control-label">Sex *</label>

                            <div class="col-md-6">
<select class="form-control" name="formfunctie">

  <option value="">Select...</option>

  <option value="Male">Male</option>

  <option value="Female">Female</option>

</select>
</div>
</p>
 </div>  

                <div class="form-group">
                    {!! @Form::label('Birthdate') !!}
                    
                </div>
 <div class="form-group">


    <input class="date form-control" type="text" name="formfunctiebt">
    

</div>

<script type="text/javascript">

    $('.date').datepicker({  

       format: 'mm-dd-yyyy'

     });  

</script> 

                <div class="form-group">
                    {!! @Form::label('Address') !!}
                    {!! @Form::text('address', null,
                                    array(  'class' => 'form-control',
                                            'placeholder' => 'Address' )) !!}
                </div>


               <div class="form-group">
                    {!! @Form::label('Card ID *') !!}
                    {!! @Form::text('bi', null,
                                    array('required',
                                            'class' => 'form-control',
                                            'placeholder' => 'Card ID' )) !!}
                </div>
<div class="form-group">
                    {!! @Form::label('occupation') !!}
                    {!! @Form::text('occupation', null,
                                    array(
                                            'class' => 'form-control',
                                            'placeholder' => 'Occupation' )) !!}
                </div>
                <div class="form-group">
                    {!! @Form::label('workplace') !!}
                    {!! @Form::text('workplace', null,
                                    array(
                                            'class' => 'form-control',
                                            'placeholder' => 'Workplace' )) !!}
                </div>
                <div class="form-group">
                    {!! @Form::label('retired_nr') !!}
                    {!! @Form::text('retired_nr', null,
                                    array(
                                            'class' => 'form-control',
                                            'placeholder' => 'Retired nr' )) !!}
                </div>



                <div class="form-group">
                    {!! @Form::label('blood_type') !!}
                    {!! @Form::text('blood_type', null,
                                    array(
                                            'class' => 'form-control',
                                            'placeholder' => 'Blood type' )) !!}
                </div>
                <div>  
<p>

   <label for="formfunctie_rh" class="col-md-4 control-label">RH</label>

                            <div class="col-md-6">
<select class="form-control" name="formfunctie_rh">

  <option value="">Select...</option>

  <option value="Positiv">Positiv</option>

  <option value="Negativ">Negativ</option>

</select>
</div>
</p>
 </div>  
                <div class="form-group">
                    {!! @Form::label('allergic_to') !!}
                    {!! @Form::textarea('allergic_to', null,
                                    array(
                                            'class' => 'form-control',
                                            'placeholder' => 'Allergic to' )) !!}
                </div>
         
                    

             

 


                <div class="form-group">
                    {!! @Form::submit('Insert Pacient',
                                        array('class' => 'btn btn-primary')) !!}
                </div>
                {!! @Form::close() !!}
            </div>
        </div>
    </div>
    
    <div class="col-md-8 col-12">

        <!-- <div class="panel panel-default">
            <div class="panel-heading">Generate Fake Data <span class="label label-success pull-right">Bonus Function</span></div>
            <div class="panel-body">
                {!! @Form::open(array('route' => route_generate_pacient, 'class' => 'test-form form-inline')) !!}
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
                    <a href="{{ route('route_deleteallpacient') }}" class="btn btn-danger">Delete All Data</a>
                </div>
                {!! @Form::close() !!}
            </div>
        </div> -->
        <div class="panel panel-default">
      <!--   <a href="/home_user/home_user.add" class="btn btn-primary  pull-right">Add sesizare</a> -->
            <div class="panel-heading">List Pacient


            </div>

            <div class="panel-body">
                <table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pacient</th>
                          <!--   <th>Email</th> -->
                            <th>CNP</th>
                            <!-- <th>Age</th>
                            <th>Address</th>
                            <th>Sex</th> -->
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- {{--*/ $i = 1 /*--}} -->
                        <?php $i = 1; ?>
                        @foreach ($data_user as $data)

                            <tr>
                                <th>{{ $i++ }}</th>
                                <th>{{ $data->name }}</th>
                              <!--   <th>{{ $data->email }}</th> -->
                                <th>{{ $data->cnp }}</th>                               
                               <!--  <th>{{ $data->age }}</th>
                                <th>{{ $data->address }}</th>
                                <th>{{ $data->sex }}</th> -->
                                <th><a href="{{ route('route_edit_pacient1', ['_id' => $data->id ]) }}">View</a>
                                <a href="{{ route('route_edit_pacient', ['_id' => $data->id ]) }}">Edit</a>

                                   <a href="{{ route('route_delete_pacient', ['_id' => $data->id ]) }}" onclick="return confirm('Are you sure ?')">Delete</a>
                                   <!-- <a href="{{ 'http://localhost:8000/medicalrecord/populate_medicalrecord/'. $data->cnp }}">Fisa</a> -->
                                <!-- <a href="{{ 'http://localhost:8000/medicalrecord/populate_medicalrecord/'. $data->cnp }}" class="btn btn-primary btn-sm">New Med Rec</a> -->
                                  @if  (strtolower(Auth::user()->practice)!='nurse') 
                                <a href="{{route('route_edit_populate_medicalrecord',  ['_id' => $data->cnp ]) }}" class="btn btn-primary btn-sm">New Med Rec</a>
                                @endif
                               
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <script type="text/javascript">
      $("#nameid").select2();
</script>   
<!-- <script src="/assets/js/valcnp.js"></script> -->
<!-- <script src="/assets/js/valcnp.js"></script> -->

<script>

function validateCNP (value) {
    var re = /^\d{1}\d{2}(0[1-9]|1[0-2])(0[1-9]|[12]\d|3[01])(0[1-9]|[1-4]\d| 5[0-2]|99)\d{4}$/,
        bigSum = 0,
        rest = 0,
        ctrlDigit = 0,
        control = '279146358279',
        i = 0;
    if (re.test(value)) {
        for (i = 0; i < 12; i++) {
            bigSum += value[i] * control[i];
        }
        ctrlDigit = bigSum % 11;
        if (ctrlDigit === 10) {
            ctrlDigit = 1;
        }
 
        if (ctrlDigit !== parseInt(value[12], 10)) {
            return false;
        } else {
            return true;
        }
    }
    return false;
};    


function myFunction(v1) { 
//var v1 =  document.getElementById("cnp").value;
if (validateCNP(v1)) {

 //alert(v1);   
}
else
{
alert('Invalid CNP'); 
//document.getElementById('cnp').value='';

}




//var e = document.getElementById("nameid");
//var strUser = e.options[e.selectedIndex].value;
//v2 = $('#nameid:selected').text(); 
//var strUser = e.options[e.selectedIndex].text;
//document.getElementById("pills_id").value=v2;
////alert(v1);
//window.location.href = "http://localhost:8000//"+ v1;

}

</script> 
@stop
