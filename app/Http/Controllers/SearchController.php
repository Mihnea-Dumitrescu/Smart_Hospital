<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;
use DB;
use App\Models\PrimaryModels as Moloquent;
use Redirect;
class SearchController extends Controller
{
public function __construct()
    {
     //   $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        return view('search');
    }
 public function getapi($id)

    {
//$id='UXrJifhdaddJXMHhIL32dLt0sYHHgTvBlGuCGZLEn9VvD1Bxm3a4cepoUaVs';

     $medicines = DB::collection('users')
       ->project(['_id' => 0])->where('api_token', $id)->get();

//dd($medicines);
        $v1=$medicines[0]['api_token'];      

    return view('resetapi', ['token' => $v1]);
    }


     function updateapipass(Request $request){

        if ($request->input('password')!=$request->input('password_confirmation')){

            return Redirect::back()->withErrors(['Password not mach', 'Password not mach']);

        }

        $getTable = Moloquent::where('api_token',$request->input('token'))->get()->first();  
        $getTable->password = bcrypt($request->input('password'));
        //$getTable->address = $request->input('password');       
        $getTable->save();
        return Redirect::to('/login');
       
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function autocomplete(Request $request)
    {dd('ddd');
       // $data = PillsModels::select("name")->where("name","LIKE","%{$request->input('query')}%")->get();
        //$data = Moloquent::where('name', 'LIKE', '6%'.$request->q.'%')->get();
         //$data = Moloquent::all();
        //dd(response()->json($data));
       // return response()->json($data);
    }
}