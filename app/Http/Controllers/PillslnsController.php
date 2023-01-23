<?php

namespace App\Http\Controllers;

use App\Models\PillslnsModels as Moloquent;
use Illuminate\Http\Request;
use App\Models\PillsModels as MoloquentPill;
use App\Models\MedicalrecordModels as MoloquentMedRec;
use Input, Redirect;
use DB;

class PillslnsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        return Redirect::to('pillslns/pillslns');
    }

    function pages($template){
        $getAllData = Moloquent::all();
        return view($template, ['data_user' => $getAllData]);
    }


    public function store(Request $request) {
        
        // $this->validate($request, [
            
        //   //  'medicalrecords_id' => 'required',
        // ]);
        $getTable = new Moloquent ;         

            
            $getTable->pills_name = $request->input('pills_name');
            $getTable->details = $request->input('details');

            //$product->pills_id = get_id_from_name($request->input('pills_name'));// $request->input('pills_id');
 $name=$getTable->pills_name;
 $data = MoloquentPill::project(['_id' => 1])->where('name', $name)->get()->toArray();     
            // $data = DB::collection('pills')->where('name', $product->pills_name)->get();


 $id=$data[0]['_id'];

       // dd($id);
        $getTable->pills_id = $id;
        $getTable->medicalrecords_id= $request->input('medicalrecords_id');

        // dd($request->input('formfunctiemeddata'));

        $getTable->data_med = $request->input('formfunctiemeddata');

//dd($product->medicalrecords_id);
    //    $mystring = $request->input('pillscontrol_id');
    //     //dd($mystring);
    //     $findme   = 'xxxx';
    //     $pos = strpos($mystring, $findme);      
    //     $product->pills_id = substr($mystring,0,$pos);

    // //    dd($getTable->pills_id);

    //     $l1=strlen ($mystring);


    //     $product->pills_name =   substr($mystring,$pos+4,$l1);



        $idx=  $getTable->medicalrecords_id;
        $no=$request->input('pills_name1');
      
        $getTable->save() ;
         return redirect()->route('route_view_data_pills',  ['_id' =>$request->input('medicalrecords_id'),'no' =>$no]) 
                        ->with('success','You have successfully uploaded your pills')->with('title', $idx)->with('titleno',$no);
    }



    function save(Request $request){
         //dd('mystring');
        $getTable = new Moloquent;
        $getTable->pills_name = $request->input('pills_name');
        $getTable->medicalrecords_id = $request->input('medicalrecords_id');
        $getTable->pills_id = $request->input('pills_id');
        $getTable->pills_name = $request->input('pills_name');


        dd($request->input('formfunctiemeddata'));

        $getTable->data_med = $request->input('formfunctiemeddata');


        $getTable->details = $request->input('details');

        $idx = $request->input('medicalrecords_id');
        
        
        $getTable->save();

        return Redirect::to('pillslns/pillslns')
                ->with('success','You have been successfully insert data')->with('title', $idx);
    }

    function update(Request $request){


        $id = $request->input('id');
       
        $getTable = Moloquent::find($id);
        $getTable->name = $request->input('pills_name');
        $getTable->medicalrecords_id = $request->input('medicalrecords_id');
        $getTable->pills_id = $request->input('pills_id');
        $getTable->pills_name = $request->input('pills_name');

        $getTable->data_med = $request->input('formfunctiemeddata');
        $getTable->details = $request->input('details');

        $idx=$getTable->medicalrecords_id;
        
        $getTable->save();
      


      

         return redirect()->route('route_view_data_pills', ['_id' => $idx]);
 

    }
    function getdata($id){
        $getData = Moloquent::where('_id', $id)
                            ->get();
        $idx=$getData[0]['medicalrecords_id'];
         //dd( $id);                   
        
        $getAllData = Moloquent::where('medicalrecords_id', $idx)->get();


        //$datamed = MoloquentMedRec::where('_id',$idx)->get()->toArray();             

        //$idmd=$datamed[0]['medicalrecords_no'];

        $datamed = MoloquentMedRec::where('_id', $idx)->get()->first();    
           

        $idmd=$datamed->medicalrecords_no;//. ' ' . $datamed->pacient_name;
        $idmdname=$datamed->pacient_name;
        $released=$datamed->released;
        
        return view('edit_pillslns', ['get_user' => $getData, 'data_user' => $getAllData])->with('medicalrecords_no', $idmd)->with('pacient_name', $idmdname)->with('pacient_released', $released);
    }


     function get_id_from_name($name){
       // $getData = MoloquentPill::where('name', $name)->get();     
       
        $data = DB::collection('pills')->where('name', $name)
        ->get()
        ->toArray();
        //return $data; 
        return  response()->json($data);
    }

    function  view_data_pills($id){
        $getData = Moloquent::where('medicalrecords_id', $id)
                            ->get()->first();
       
        $getAllData = Moloquent::where('medicalrecords_id', $id)
                            ->get();     

        //$datamed = MoloquentMedRec::where('_id',$id)->get()->toArray();    
           

        //$idmd=$datamed[0]['medicalrecords_no'].['pacient_name'];


        $datamed = MoloquentMedRec::where('_id',$id)->get()->first();    
           

        $idmd=$datamed->medicalrecords_no;//. ' ' . $datamed->pacient_name;
        $idmdname=$datamed->pacient_name;
        $released=$datamed->released;
       
        return view('pillslns', ['get_user' => $getData, 'data_user' => $getAllData])->with('title', $id)->with('medicalrecords_no', $idmd)->with('pacient_name', $idmdname)->with('pacient_released', $released);
    

      


    }

    function delete($id){
        
        $return = Moloquent::where('_id', $id)
                                ->delete();
        
        return Redirect::to('pillslns/pillslns')
                ->with('success','You have been successfully deleted data');

    }
    function deleteAll(){
        
        $return = Moloquent::where('_id','!=','')->delete();
        
        return Redirect::to('pillslns/pillslns');

    }
    

    
}
