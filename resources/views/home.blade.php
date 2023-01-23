@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">



        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Menu {{Auth::user()->department}}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
    
                </div>


                        <!-- Portfolio -->
    <section id="portfolio0" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-6">
               
<!--                     <div class="col-md-1">
                            <div class="portfolio-item">
                                <a href="#enterprise_apps">
                                   
                                </a>
                            </div>
                    </div> -->

                        @if (Auth::user()->is_admin=='1')

                             <div class="col-md-12">
                            <div class="portfolio-item">
                                <a href="{{ url('department/department') }}">
                                     <h4>Departments </h4> 
                                </a>
                            </div>
                        </div> 
                          <div class="col-md-12">
                            <div class="portfolio-item">
                                <a href="{{ url('home_user/home_user') }}">
                                    <h4>Staff </h4> 
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="portfolio-item">
                                <a href="{{ url('pill/pills') }}">
                                     <h4>Drugs </h4> 
                                </a>
                            </div>
                        </div>                       
                         
                      <div class="col-md-12">
                            <div class="portfolio-item">
                                <a href="{{ url('diagnostic/diagnostics') }}">
                                     <h4>Diagnostics </h4> 
                                </a>
                            </div>
                        </div>           
                    </div>

                    @endif
                    <!-- /  <a href="#" class="btn btn-dark">View More Items</a>.row (nested) -->
                    <!-- <div class="col-md-6">
                     <a href="#">
                                    <img class="img-full-width" src="/images/home-menu.jpg"/>
                                </a>
                </div> -->
                </div>
                  </div>
                </div>

            </div>


            <!-- /.row -->
            </section>

            <section id="portfolio1" class="portfolio">
        <div class="container">
            <div class="row">
               
<!--                     <div class="col-md-1">
                            <div class="portfolio-item">
                                <a href="#enterprise_apps">
                                   
                                </a>
                            </div>
                    </div> -->

                     @if (Auth::user()->is_admin<='1')
                   
                      
                  

                          <div class="col-md-12">
                            <div class="portfolio-item">
                                <a href="{{ url('pacient/pacient') }}">
                                    <h4>Pacients</h4> 
                                </a>
                            </div>
                        </div>

                       <!--  <div class="col-md-2">
                            <div class="portfolio-item">
                                <a href="{{ url('pacient/pacientaddmedical') }}">
                                    <h4>Pacient Add Medicalrecord </h4> 
                                </a>
                            </div>
                        </div> -->
                        <div class="col-md-12">
                            <div class="portfolio-item">
                                <a href="{{ url('medicalrecord/medicalrecord') }}">
                                     <h4>Medical records</h4> 
                                </a>
                            </div>
                        </div>                       
                       <!--  <div class="col-md-2">
                            <div class="portfolio-item">
                                <a href="{{ url('pillslns/pillslns') }}">
                                     <h4>pillslns </h4> 
                                </a>
                            </div>
                        </div>    

                        <div class="col-md-2">
                            <div class="portfolio-item">
                                <a href="{{ url('product/product') }}">
                                     <h4>Images </h4> 
                                </a>
                            </div>
                        </div>     -->

                         @endif


                      
                    </div>
                    <!-- /  <a href="#" class="btn btn-dark">View More Items</a>.row (nested) -->
                  

            </div>

            
            <!-- /.row -->
            </section>

               
  
              
            </div>
        </div>
    </div>
</div>
@endsection
