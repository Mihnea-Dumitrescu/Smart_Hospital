@extends('default')
@section('content')
<div class="row">
    
    <div class="col-md-12 col-12">      

        <div class="panel panel-default">

         <div class="col-md-2  pull-right" >


        @if (($pacient_released=='No')  AND  (Auth::user()->practice!='Nurse'))  
                           
                          
                    
                <a class="btn btn-primary pull-right" href="{{  route('route_get_data_image',  ['_id' => $title ])  }}">Upload New File</a>

         @endif
      
               
            </div>
            <div class="panel-heading">List Files for Medical Record No {{$titleno}}</div>
           
                        </div>    

                    <div class="panel-body">
                <table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
                    <thead>
                         <tr>
                           <th>No</th>
                             <th>Image Name</th>
                             <th>Details</th>
                             <th>File Name</th>
                        </tr>
                    </thead>

                    <tbody>
                       
                      <?php $i = 1; ?>
                        @foreach ($data_user as $data)

                            <tr>
                               <td>{{ ++$i }}</td>
                              
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->details }}</td>
                                <td>
                                 <a href='{{ 'http://localhost:8000/images/'. $data->product_image }}'>{{ $data->product_image }}</a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>     
    
@stop
