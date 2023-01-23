@extends('layouts.app')

@section('content')

  



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registerw</div>

                <div class="panel-body">


 




                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}





                         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


                    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
                    <script type="text/javascript">



                   
                    
                    // alert("Test0");
   $(document).ready(function () {

    
   $("input[name='juridica_fizica']").click(function () {
      var value = this.value;
      if (value == '1') {
        $("#dvPassport").show();
        $("#dvCNP").hide();
        $("#dvCUI").show();
        localStorage.setItem('show', 'true');
        document.getElementById("idname").value = "";
        document.getElementById("idname").style.visibility = "visible";
        //alert("Test3");
    } 
    else{
        $("#dvPassport").hide();   
        $("#dvCUI").hide();
        $("#dvCNP").show();
        localStorage.setItem('show', 'false');          
        
        document.getElementById("idname").value = "FIZICA";
        document.getElementById("idname").style.visibility = "hidden";
    } 
});

     var show = localStorage.getItem('show')
     //alert(show);
      if (show === 'false'){
        $("#dvPassport").hide();   
        $("#dvCUI").hide();
        $("#dvCNP").show();
        $("#abc").prop("checked", false);
        $("#xyz").prop("checked", true);
        //document.getElementById("xyz").value = "0";
        //alert("Test1");
    } 
    else{
        
        $("#dvPassport").show();
        $("#dvCNP").hide();
        $("#dvCUI").show();
       //document.getElementById("abc").value = "1";
       $("#xyz").prop("checked", false);
       $("#abc").prop("checked", true);
 
            
    } 
});





</script>
            <div class="form-group">
           
              <div class="radio">
              <label class="col-md-4 control-label"></label>
                 <label>
                    <input type="radio" id="abc" name="juridica_fizica" value="1" checked = "checked" required value="1"  {{ (old('juridica_fizica') == '1') ? 'checked' : '' }} >
                    Persoana juridica      </label> 
                </div>
               
                <div class="radio">
                 <label class="col-md-4 control-label"></label>
                   <label>

                    <input type="radio" id="xyz" name="juridica_fizica"  value="0"   {{ (old('juridica_fizica') == '0') ? 'checked' : '' }}>
                    Persoana fizica </label>  
                </div>
            </div>
      


            <div >  

                <label>  </label>  
            </div>  

 <div id="dvPassport">  
                       <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">address</label>

                            <div class="col-md-6">
                                <input id="idname" type="text" class="form-control" name="address" value="{{ old('address') }}"  >

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

</div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                    <div class="form-group{{ $errors->has('cnp_cui') ? ' has-error' : '' }}">
                          <div id="dvCNP" style="display: none">   
                          <label for="cnp_cui" class="col-md-4 control-label">CNP</label>                      
                          </div>      
                           <div id="dvCUI">   
                          <label for="cnp_cui" class="col-md-4 control-label">CUI</label>                      
                          </div>    
                            <div class="col-md-6">
                                <input id="cnp_cui" type="text" class="form-control" name="cnp_cui" value="{{ old('cnp_cui') }}" >

                                @if ($errors->has('cnp_cui'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cnp_cui') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
               
                              

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>




                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
