<?php

namespace App\Http\Controllers;

use App\Models\MedicalrecordModels as Moloquent;
use App\Models\PacientModels as MoloquentPacient;
use Illuminate\Http\Request;
use Input, Redirect;
use Auth;
use Response;


class MedicalrecordController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        return Redirect::to('medicalrecord/medicalrecord');
    }



    function pages($template){

  

        if (Auth::user()->practice=='Doctor') {
          $getAllData = Moloquent::where('user_id', Auth::user()->_id)->orderby('medicalrecords_no', 'DESC')->get();    
         } else
         if (Auth::user()->practice=='Nurse') {   
          $getAllData = Moloquent::where('department_id', Auth::user()->department_id)->orderby('medicalrecords_no', 'DESC')->get(); 
         }  else 
         
        $getAllData = Moloquent::orderby('medicalrecords_no', 'DESC')->get();   

       // $getAllData = Moloquent::where('department_id', Auth::user()->department_id)->orderby('created_at', 'DESC')->get(); 
        
        return view($template, ['data_user' => $getAllData]);
    }

    function save(Request $request){
        $getTable = new Moloquent;
        $getTable->medicalrecords_no =Moloquent::max('medicalrecords_no')+1;
       $getTable->pacient_id =  $request->input('pacient_id');
            $getTable->pacient_name = $request->input('pacient_name');
            $getTable->cnp = $request->input('cnp');
            $getTable->address = $request->input('address');
            $getTable->email = $request->input('email');
            $getTable->sex = $request->input('sex');     
            $getTable->birthdate = $request->input('birthdate'); 
            $getTable->bi = $request->input('bi');
            $getTable->occupation = $request->input('occupation');   
            $getTable->workplace = $request->input('workplace');   
            $getTable->retired_nr = $request->input('retired_nr');  
            $getTable->blood_type = $request->input('blood_type');  
            $getTable->rh = $request->input('rh');  
            $getTable->allergic_to = $request->input('allergic_to'); 


        $getTable->data_medicalrecord= $request->input('formfunctiedmr'); 

        $getTable->data1= $request->input('formfunctieadm'); 
        $getTable->data2= $request->input('formfunctielea'); 
        




         $mystring1 = $request->input('diagnostics_id1');
         $findme1   = 'xxxx';
         $pos1 = strpos($mystring1, $findme1);   
         $getTable->referraldiagnosis_id = substr($mystring1,0,$pos1);
         $l1=strlen ($mystring1);
         $getTable->referraldiagnosis =   substr($mystring1,$pos1+4,$l1);

         $mystring2 = $request->input('diagnostics_id2');
         $findme2   = 'xxxx';
         $pos2 = strpos($mystring2, $findme2);   
         $getTable->diagnosisatadmission_id = substr($mystring2,0,$pos2);
         $l2=strlen ($mystring2);
         $getTable->diagnosisatadmission =   substr($mystring2,$pos2+4,$l2);

         $mystring3 = $request->input('diagnostics_id3');
         $findme3   = 'xxxx';
         $pos3 = strpos($mystring3, $findme3);   
         $getTable->diagnosisat72_id = substr($mystring3,0,$pos3);
         $l3=strlen ($mystring3);
         $getTable->diagnosisat72 =   substr($mystring3,$pos3+4,$l3);


            $getTable->reason = $request->input('reason'); 
            $getTable->history = $request->input('history'); 
            $getTable->personalphyhiologicalhist = $request->input('personalphyhiologicalhist'); 
            $getTable->personalpatologicalhist = $request->input('personalpatologicalhist'); 
            $getTable->heredocollateral = $request->input('heredocollateral'); 
            $getTable->apexian= $request->input('apexian'); 
            $getTable->cardiacvol=$request->input('cardiacvol'); 
            $getTable->sounds= $request->input('sounds'); 
            $getTable->murmurs= $request->input('murmurs'); 
            $getTable->arrhythmias=$request->input('arrhythmias');
            $getTable->carotidpulse=$request->input('carotidpulse'); 
            $getTable->radialpulse=$request->input('radialpulse');
            $getTable->cubitalpulse=$request->input('cubitalpulse');
            $getTable->capillarypulse=$request->input('capillarypulse');
            $getTable->femoralpulse=$request->input('femoralpulse'); 
            $getTable->bloodpressure=$request->input('bloodpressure'); 

            $getTable->premorbidpersonality=$request->input('premorbidpersonality'); 
            $getTable->mentalexamination=$request->input('mentalexamination'); 
            
            
            $getTable->released = 'No'; 

            $getTable->department_id = Auth::user()->department_id;
            $getTable->department_name = Auth::user()->department;
            $getTable->user_id = Auth::user()->_id;
            $getTable->user_name = Auth::user()->name;  
        
        $getTable->save();

        return Redirect::to('medicalrecord/medicalrecord')
                ->with('success','You have been successfully insert data');
    }


public function api_update_med_rec(Request $request)
    {
        $no = (int)$request->input('med_rec_no');       //"5b26843dc5e69619f8003a0f";// 

        $getTable1 =Moloquent::where('medicalrecords_no', $no)->first();      


        $id = $getTable1->_id;       //"5b26843dc5e69619f8003a0f";// 
        $getTable = Moloquent::find($id);                    
        $getTable->personalphyhiologicalhist = $request->input('perhist'); 
        $getTable->personalpatologicalhist = $request->input('perpat'); 
        $getTable->save();
        //return response()->json($id);

        return response()->json(['id' => $no, 'state' => 'OK']);
        


           // return $getTable;
        
    }
     

    function update(Request $request){
        $id = $request->input('id');
        
        $getTable = Moloquent::find($id);
        $getTable->medicalrecords_no = $request->input('medicalrecords_no');
        $getTable->pacient_name = $request->input('pacient_name');
        $getTable->pacient_id =  $request->input('pacient_id');
        $getTable->cnp = $request->input('cnp');
        $getTable->address = $request->input('address');
        $getTable->email = $request->input('email');
        $getTable->sex = $request->input('sex');     
        $getTable->birthdate = $request->input('birthdate'); 
        $getTable->bi = $request->input('bi');
        $getTable->occupation = $request->input('occupation');   
        $getTable->workplace = $request->input('workplace');   
        $getTable->retired_nr = $request->input('retired_nr');  
        $getTable->blood_type = $request->input('blood_type');  
        $getTable->rh = $request->input('rh');  
        $getTable->allergic_to = $request->input('allergic_to'); 


        $getTable->data_medicalrecord= $request->input('formfunctiedmr'); 
        $getTable->data1= $request->input('formfunctieadm'); 
        $getTable->data2= $request->input('formfunctielea'); 
        $getTable->prescription = $request->input('prescription');




         $mystring1 = $request->input('diagnostics_id1');
         //dd($mystring1);
         $findme1   = 'xxxx';
         $pos1 = strpos($mystring1, $findme1);   

         if ($pos1 > 0 ){
         $getTable->referraldiagnosis_id = substr($mystring1,0,$pos1);
         $l1=strlen ($mystring1);
         $getTable->referraldiagnosis =   substr($mystring1,$pos1+4,$l1);
            } 

         $mystring2 = $request->input('diagnostics_id2');
         $findme2   = 'xxxx';
         $pos2 = strpos($mystring2, $findme2);  
         if ($pos2 > 0 ){ 
         $getTable->diagnosisatadmission_id = substr($mystring2,0,$pos2);
         $l2=strlen ($mystring2);
         $getTable->diagnosisatadmission =   substr($mystring2,$pos2+4,$l2);
         }

         $mystring3 = $request->input('diagnostics_id3');
         $findme3   = 'xxxx';
         $pos3 = strpos($mystring3, $findme3);  
         if ($pos3 > 0 ){ 
         $getTable->diagnosisat72_id = substr($mystring3,0,$pos3);
         $l3=strlen ($mystring3);
         $getTable->diagnosisat72 =   substr($mystring3,$pos3+4,$l3);
            }
           
            $getTable->reason = $request->input('reason'); 
            $getTable->history = $request->input('history'); 
            $getTable->personalphyhiologicalhist = $request->input('personalphyhiologicalhist'); 
            $getTable->personalpatologicalhist = $request->input('personalpatologicalhist'); 
            $getTable->heredocollateral = $request->input('heredocollateral'); 

            $getTable->apexian= $request->input('apexian'); 
            $getTable->cardiacvol=$request->input('cardiacvol'); 
            $getTable->sounds= $request->input('sounds'); 
            $getTable->murmurs= $request->input('murmurs'); 
            $getTable->arrhythmias=$request->input('arrhythmias');
            $getTable->carotidpulse=$request->input('carotidpulse'); 
            $getTable->radialpulse=$request->input('radialpulse');
            $getTable->cubitalpulse=$request->input('cubitalpulse');
            $getTable->capillarypulse=$request->input('capillarypulse');
            $getTable->femoralpulse=$request->input('femoralpulse'); 
            $getTable->bloodpressure=$request->input('bloodpressure'); 

            $getTable->premorbidpersonality=$request->input('premorbidpersonality'); 
            $getTable->mentalexamination=$request->input('mentalexamination'); 
            

            if ($request->input('formexternat')==null) {
                $getTable->released = 'No'; 
            } else
           { $getTable->released =  $request->input('formexternat'); 

           }



            $getTable->department_id = Auth::user()->department_id;
            $getTable->department_name = Auth::user()->department;
            $getTable->user_id = Auth::user()->_id;
            $getTable->user_name = Auth::user()->name;  
        
        
        $getTable->save();
      
        return Redirect::to('medicalrecord/medicalrecord')
                ->with('success','You have been successfully update data');

    }
    function getdata($id){
        $getData = Moloquent::where('_id', $id)
                            ->get();
        //return response()->json($getData);   
        $getAllData = Moloquent::all();
         //dd('asdsfdasdfasdf');
        // return response()->json($getAllData); 
       
        if (Auth::user()->view_no=='1'){

            return view('medicalrecord.edit', ['get_user' => $getData, 'data_user' => $getAllData]);
        }  


        else


       if (Auth::user()->view_no=='2'){

           return view('medicalrecord.edit2', ['get_user' => $getData, 'data_user' => $getAllData]);
        }   
    }


    function getdata1($id){
        $getData = Moloquent::where('_id', $id)
                            ->get();
        //return response()->json($getData);   
        $getAllData = Moloquent::all();
         //dd('asdsfdasdfasdf');
        // return response()->json($getAllData); 
        



 if (Auth::user()->view_no=='1'){

            return view('view_medicalrecord', ['get_user' => $getData, 'data_user' => $getAllData]);
        }  


        else


       if (Auth::user()->view_no=='2'){

           return view('view_medicalrecord2', ['get_user' => $getData, 'data_user' => $getAllData]);
        }   
       



    }

    function populate_medicalrecord($id){
        $getData = MoloquentPacient::where('cnp', $id)->get();        
       // $getAllData = MoloquentPacient::where('user_id', Auth::user()->_id)->orderby('created_at', 'DESC')->get(); 




        if (Auth::user()->practice=='Doctor') {
          $getAllData = MoloquentPacient::where('user_id', Auth::user()->_id)->orderby('medicalrecords_no', 'DESC')->get();    
         } else
         if (Auth::user()->practice=='Nurse') {   
          $getAllData = MoloquentPacient::where('department_id', Auth::user()->department_id)->orderby('medicalrecords_no', 'DESC')->get(); 
         }  else 
         
        $getAllData = MoloquentPacient::orderby('medicalrecords_no', 'DESC')->get();












        if (Auth::user()->view_no=='1'){

             return view('medicalrecord.addwithpacient', ['get_user' => $getData, 'data_user' => $getAllData]);
        }  


        else


       if (Auth::user()->view_no=='2'){

             return view('medicalrecord.addwithpacient2', ['get_user' => $getData, 'data_user' => $getAllData]);
        }   
       


    }

       
//$encrypted = my_simple_crypt( 'Hello World!', 'e' );

//$decrypted = my_simple_crypt( 'RTlOMytOZStXdjdHbDZtamNDWFpGdz09', 'd' );


    function my_simple_crypt( $string, $action = 'e' ) {
    // you may change these values to your own
    $secret_key = '346dtsdh5678kc';
    $secret_iv = '8955dddd35463s';
 
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $key = hash( 'sha256', $secret_key );
    $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
 
    if( $action == 'e' ) {
        $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
    }
    else if( $action == 'd' ){
        $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
    }
 
    return $output;
}


    function delete($id){
        
        $return = Moloquent::where('_id', $id)
                                ->delete();
        
        return Redirect::to('medicalrecord/medicalrecord')
                ->with('success','You have been successfully deleted data');

    }
    function deleteAll(){
        
        $return = Moloquent::where('_id','!=','')->delete();
        
        return Redirect::to('medicalrecord/medicalrecord');

    }
    
    function generateFake(Request $request){
        $count = $request->input('fakedata');

        if($count < 1000){
            $faker = Faker::create();
            for ($i=1; $i <= $count; $i++) {
                $user = new Moloquent;
                $user->name = $faker->name;
                $user->email = $faker->email;
                $user->address = $faker->address;
                $user->save();
            }
        }
        return Redirect::to('medicalrecord/medicalrecord');
    }
    
}
