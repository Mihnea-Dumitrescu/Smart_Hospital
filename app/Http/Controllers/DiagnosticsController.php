<?php

namespace App\Http\Controllers;

use App\Models\DiagnosticsModels as Moloquent;
use Illuminate\Http\Request;

use Input, Redirect;

class DiagnosticsController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        return Redirect::to('diagnostic/diagnostics');
    }

    function pages($template){
        $getAllData = Moloquent::all();
        return view($template, ['data_user' => $getAllData]);
    }

    function save(Request $request){
        $getTable = new Moloquent;
        $getTable->name = $request->input('name');
      
        $getTable->save();

        return Redirect::to('diagnostic/diagnostics')
                ->with('success','You have been successfully insert data');
    }

    function update(Request $request){
        $id = $request->input('id');
        
        $getTable = Moloquent::find($id);
        $getTable->name = $request->input('name');
       
        
        $getTable->save();
        
        return Redirect::to('diagnostic/diagnostics')
                ->with('success','You have been successfully update data');

    }
    function getdata($id){
        $getData = Moloquent::where('_id', $id)
                            ->get();
        
        $getAllData = Moloquent::all();
        
        return view('edit_diagnostic', ['get_user' => $getData, 'data_user' => $getAllData]);
    }
    function delete($id){
        
        $return = Moloquent::where('_id', $id)
                                ->delete();
        
        return Redirect::to('diagnostic/diagnostics')
                ->with('success','You have been successfully deleted data');

    }
    function deleteAll(){
        
        $return = Moloquent::where('_id','!=','')->delete();
        
        return Redirect::to('diagnostic/diagnostics');

    }
    

    
}
