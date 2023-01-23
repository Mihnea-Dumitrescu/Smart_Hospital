@extends('default')
@section('content')

<div class="row">


    
    <div class="col-md-12 col-12">

       <!--  <div class="panel panel-default">
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
                {!! @Form::close() !!}Auth::user()->practice    Auth::user()->department 
            </div>
        </div> -->

        <div class="panel panel-default">

             <div class="panel-heading">List Medical Records    {{ Auth::user()->name   }} {{ Auth::user()->practice   }} {{ Auth::user()->department   }}</div>
            <div class="panel-body">
                <table class="table table-striped table-bordered datatable"  id="sortview" name="sortview" cellspacing="0" width="100%">
                    <thead>
                         <tr>
                            <!-- <th width="5%">No</th> -->
                            <th width="auto">Medical Record Nr</th>
                            <th width="auto">Medical Record Date</th>
                            <th width="auto">CNP</th>
                            <th width="auto">Pacient Name</th>    
                            <th width="auto">Released</th>                       
                            <th width="auto">Action</th>                      
                            <th width="auto">Medication Action</th>
                        </tr>
                    </thead>

                    <tbody>
                       
                        <?php $i = 1; ?>
                        @foreach ($data_user as $data)

                           
                            <tr>
                                <!-- <th>{{ $i++ }}</th> -->
                                <th>{{ $data->medicalrecords_no }}</th>
                                                               
                                <th>{{ $data->data_medicalrecord }}</th>
                                 <th>{{ $data->cnp }}</th>
                                 <th>{{ $data->pacient_name }}</th>
                                 <th>{{ $data->released }}</th>
                                <!-- <th>{{ $data->observatii }}</th>    -->
                                                        

                           <!-- <th> <a href="{{ 'http://localhost:8000/images/'. $data->poza }}">Image</a></th> -->

                          @if (($data->released=='No')  AND (strtolower(Auth::user()->practice)=='doctor')) 

                          <th><a href="{{ route('route_edit_medicalrecord1', ['_id' => $data->id ]) }}">View</a>                          
                               <a href="{{ route('route_edit_medicalrecord', ['_id' => $data->id ]) }}">Edit</a>  
                                   <a href="{{ route('route_delete_medicalrecord', ['_id' => $data->id ]) }}" onclick="return confirm('Are you sure ?')">Delete</a></th>

 <!--   <a href="{{ route('upload-files.create',  ['_id' => $data->id ]) }}" class="btn btn-primary btn-sm">New Image</a> -->
 <!--   <a href="{{ route('route_get_data_image',  ['_id' => $data->id ]) }}" class="btn btn-primary btn-sm">New ImageWithID</a> -->
  
  <th><a href="{{ route('route_view_data_image',  ['_id' => $data->id,'no' => $data->medicalrecords_no ]) }}" class="btn btn-primary btn-sm">Images</a>
  <a href="{{ route('route_view_data_pills',      ['_id' => $data->id,'no' => $data->medicalrecords_no  ]) }}" class="btn btn-primary btn-sm">Medication</a>
 <!--  <a href="{{ 'http://localhost:8000/images/testpils.html'  }}" class="btn btn-primary btn-sm">test pills</a>     -->                             
                          </th>
                          @endif


                          @if (($data->released=='No')  AND (strtolower(Auth::user()->practice)=='nurse')) 

                          
                                  <th><a href="{{ route('route_delete_medicalrecord', ['_id' => $data->id ]) }}" onclick="return confirm('Are you sure ?')">Delete</a></th>

 <!--   <a href="{{ route('upload-files.create',  ['_id' => $data->id ]) }}" class="btn btn-primary btn-sm">New Image</a> -->
 <!--   <a href="{{ route('route_get_data_image',  ['_id' => $data->id ]) }}" class="btn btn-primary btn-sm">New ImageWithID</a> -->
  
  <th><a href="{{ route('route_view_data_pills',      ['_id' => $data->id,'no' => $data->medicalrecords_no  ]) }}" class="btn btn-primary btn-sm">Medication</a></th>
 
                          @endif


                         @if (($data->released=='Yes')  AND (strtolower(Auth::user()->practice)=='doctor')) 

                          <th><a href="{{ route('route_edit_medicalrecord1', ['_id' => $data->id ]) }}">View</a>                          
                              <a href="{{ route('route_delete_medicalrecord', ['_id' => $data->id ]) }}" onclick="return confirm('Are you sure ?')">Delete</a></th>

  
  <th><a href="{{ route('route_view_data_image',  ['_id' => $data->id,'no' => $data->medicalrecords_no ]) }}" class="btn btn-primary btn-sm">Images</a>
  <a href="{{ route('route_view_data_pills',      ['_id' => $data->id,'no' => $data->medicalrecords_no  ]) }}" class="btn btn-primary btn-sm">Medication</a>
 
                          </th>
                          @endif



                         @if (($data->released=='Yes')  AND (strtolower(Auth::user()->practice)=='nurse')) 

                          <th><a href="{{ route('route_delete_medicalrecord', ['_id' => $data->id ]) }}" onclick="return confirm('Are you sure ?')">Delete</a></th>

  
  <th></th>
                          @endif







      



                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">

    $(document).ready(function() {
    $('#sortview').DataTable( {
        "order": [[ 4, "asc" ,2,"desc"]]
    } );

     });  

</script> 

 
@stop
