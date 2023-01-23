<?php

namespace App\Http\Controllers;

use App\Models\ProductModels as Moloquent;
use Illuminate\Http\Request;
use App\Models\MedicalrecordModels as MoloquentMedicalRec;

use Input, Redirect;

class FileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        return Redirect::to('product/product');
    }

    function pages($template){
        $getAllData = Moloquent::all();
        return view($template, ['data_user' => $getAllData]);
    }


   function  getdataimage($id){
        $getData = MoloquentMedicalRec::where('_id', $id)
                            ->get();
        
       // $getAllData = MoloquentMedicalRec::all();
       // dd($id);
        return view('files.create', ['get_user' => $getData]);
    }

    function  view_data_image($id,$no){
        $getData = Moloquent::where('medicalrecords_id', $id)
                            ->get()->first();
        
        $getAllData = Moloquent::where('medicalrecords_id', $id)
                            ->get();

        $datamed = MoloquentMedicalRec::where('_id',$id)->get()->first();    
           

        $idmd=$datamed->medicalrecords_no;//. ' ' . $datamed->pacient_name;
        $idmdname=$datamed->pacient_name;
        $released=$datamed->released;
                       
       
        return view('product', ['get_user' => $getData, 'data_user' => $getAllData])->with('title', $id)->with('titleno',$no)->with('pacient_released', $released);
    }


    public function create(){

    	
        return view('files.create');
    }
    public function store(Request $request) {
        
        $this->validate($request, [
            'name' => 'required',
            'details' => 'required',
            'product_image' => 'required',
        ]);
        $product = new Moloquent ;
     
         if($file = $request->hasFile('product_image')) {            
            $file = $request->file('product_image') ;            
            $fileName = $file->getClientOriginalName() ;           
            $destinationPath = public_path().'/images/' ;
            $file->move($destinationPath,$fileName);
            $product->product_image = $fileName ;


            $product->name = $request->input('name');
            $product->details = $request->input('details');
            $product->product_image = $fileName ;
            $product->medicalrecords_id= $request->input('medicalrecords_id');
            $idx = $product->medicalrecords_id;
            $no = $request->medicalrecords_no;

 

     }
        $product->save() ;
         return redirect()->route('route_view_data_image',  ['_id' =>$request->input('medicalrecords_id'),'no' =>$no]) 
                        ->with('success','You have successfully uploaded your files')->with('title', $idx)->with('titleno', $no);
    }


    //  function populate_images($id){
    //     $getData = MoloquentPacient::where('cnp', $id)->get();        
    //     $getAllData = MoloquentPacient::all();        
    //     return view('medicalrecord.addwithpacient', ['get_user' => $getData, 'data_user' => $getAllData]);
    // }


    // function save(Request $request){
    //     $getTable = new Moloquent;
    //     $getTable->name = $request->input('name');
    //     $getTable->city = $request->input('city');
    //     if ($request->input('address')!=null)
    //     $getTable->address = $request->input('address');
        
    //     $getTable->save();

    //     return Redirect::to('department/department')
    //             ->with('success','You have been successfully insert data');
    // }

    // function update(Request $request){
    //     $id = $request->input('id');
        
    //     $getTable = Moloquent::find($id);
    //     $getTable->name = $request->input('name');
    //     $getTable->city = $request->input('city');
    //     if ($request->input('address')!=null)
    //     $getTable->address = $request->input('address');
        
        
    //     $getTable->save();
        
    //     return Redirect::to('department/department')
    //             ->with('success','You have been successfully update data');

    // }
    
    // function delete($id){
        
    //     $return = Moloquent::where('_id', $id)
    //                             ->delete();
        
    //     return Redirect::to('department/department')
    //             ->with('success','You have been successfully deleted data');

    // }
    // function deleteAll(){
        
    //     $return = Moloquent::where('_id','!=','')->delete();
        
    //     return Redirect::to('department/department');

    // }
    

    
}
