@extends('default')
@section('content')


<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>  


<div class="row">
    <div class="col-md-4 col-12">
       <div class="panel panel-default">

  

 @if (($pacient_released=='No')  AND  (Auth::user()->practice!='Nurse'))                               
                       

            <div class="panel-heading"><H2>Form Medication</H2></div>
             <!-- <div class="panel-heading"><h3>Medical Record No  {{$medicalrecords_no}}</h3></div> -->
            <div class="panel-body">
                {!! @Form::open(array('route' => route_store_pillslns, 'class' => 'test-form')) !!}
             






                <div class="form-group">
                    {!! @Form::label('Drug_name *') !!}
                    {!! @Form::text('pills_name', null,
                                    array('required',
                                            'class' => 'typeahead form-control','autocomplete' => 'off',
                                            'placeholder' => ('') )) !!}

                <!--     <input class="typeahead form-control" style="margin:0px auto;" type="text" id="pills_name"  name="pills_name"  autocomplete="off"> -->                        
                </div>



                  <div class="form-group">
                    {!! @Form::label('Medication date') !!}
                    
                </div>
                 <div class="form-group">


                    <input class="date form-control" type="text" name="formfunctiemeddata">
                    

                </div>

                <script type="text/javascript">

                    $('.date').datepicker({  

                       format: 'mm-dd-yyyy'

                     });  

                </script> 




                <div class="form-group hidden",>
                    {!! @Form::label('medicalrecords_id') !!}
                    {!! @Form::text('medicalrecords_id', $title,
                                    array('required',
                                            'class' => 'form-control',
                                            'placeholder' => ('') )) !!}
                </div>



   

<br></br>

                <div class="form-group">
                    {!! @Form::label('details *') !!}
                    {!! @Form::textarea('details', null,
                                    array('required',
                                            'class' => 'form-control',
                                            'placeholder' => ('') )) !!}
                </div>




                <div class="form-group">
                    {!! @Form::submit('Insert Drug',
                                        array('class' => 'btn btn-primary')) !!}
                </div>



                
                {!! @Form::close() !!}
            </div>

               @endif
        </div>
    </div>
   
    <div class="col-md-8 col-12">

        
        <div class="panel panel-default">
            <div class="panel-heading"><h4> List Medication for Medical record no {{$medicalrecords_no}} - {{$pacient_name}} </h4></div>
            <div class="panel-body">
                <table class="table table-striped table-bordered datatable" id="sortview" name="sortview" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <!-- <th>No</th> -->
                            <th>Drug Name</th> 
                         <!--    <th>medicalrecords_id</th>        -->
                            <th>Date</th>
                            <th>Details</th>                                      
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- {{--*/ $i = 1 /*--}} -->
                        <?php $i = 1; ?>
                        @foreach ($data_user as $data)

                            <tr>
                                <!-- <th>{{ $i++ }}</th> -->
                                <th>{{ $data->pills_name }}</th>
                                <!-- <th>{{ $data->medicalrecords_id }}</th> -->
                                <th>{{ $data->data_med }}</th>
                                <th>{{ $data->details }}</th>
                                                 
                                <th>

                                   @if (($pacient_released=='No')  AND  (Auth::user()->practice!='Nurse'))   
                                      <a href="{{ route('route_edit_pillslns', ['_id' => $data->id ]) }}">Edit</a>
                                   @endif        
                             <!--    <a href="{{ route('route_edit_medicalrecord1', ['_id' => $data->id ]) }}">View</a>  -->

                                   
                                   <a href="{{ route('route_delete_pillslns', ['_id' => $data->id ]) }}" onclick="return confirm('Are you sure ?')">Delete</a>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <script type="text/javascript">
      $("#nameid").select2();
   </script>     -->


   <script>
function myFunction() { 
v1 = $('#nameid :selected').text(); 
document.getElementById("pills_id").value=v1;


var e = document.getElementById("nameid");
//var strUser = e.options[e.selectedIndex].value;
//v2 = $('#nameid:selected').text(); 
//var strUser = e.options[e.selectedIndex].text;
//document.getElementById("pills_id").value=v2;
//alert(v1);
window.location.href = "http://localhost:8000//"+ v1;

}

</script>

<script type="text/javascript">
 
// $('#search').on('keyup',function(){
 
// $value=$(this).val();
//  alert($value);
// window.location.href = "http://localhost:8000//"+ v1;
 
// })


// $(function()
// {
//      $( "#q" ).autocomplete({
//       source: "search/autocomplete",
//       minLength: 3,
//       select: function(event, ui) {
//         $('#q').val(ui.item.value);
//       }
//     });
// });
 
</script>


<script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
    //alert(path);
    $('input.typeahead').typeahead({
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });
</script>

<script type="text/javascript">

    $(document).ready(function() {
    $('#sortview').DataTable( {
        "order": [[ 1, "desc" ]]
    } );

     });  

</script> 

@stop