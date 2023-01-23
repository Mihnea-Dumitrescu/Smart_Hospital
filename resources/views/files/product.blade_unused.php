@extends('default')
@section('content')
<div class="row">
    
    <div class="col-md-12 col-12">      

        <div class="panel panel-default">
            <div class="panel-heading">List Products  </div>
                    <div class="panel-body">
                <table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
                    <thead>
                         <tr>
                           <th>No</th>
                             <th>Name</th>
                             <th>Details</th>
                             <th>Your File</th>
                        </tr>
                    </thead>

                    <tbody>
                       
                      <?php $i = 1; ?>
                        @foreach ($data_user as $data)

                            <tr>
                               <td>{{ ++$i }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->details }}</td>
                                <td>
                                 <a href='{{ route('home')  }}'>{{ $product->product_image }}</a>
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