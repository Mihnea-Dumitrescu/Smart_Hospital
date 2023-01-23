<?php

namespace App\Http\Controllers;

use App\Models\DepartmentModels as Moloquent;
use Illuminate\Http\Request;
use Faker\Factory as Faker;
use Input, Redirect;

class DepartmentController extends Controller
{

public function __construct()
    {
        $this->middleware('auth');
    }
    
    function index(){
        return Redirect::to('department/department');
    }

    function pages($template){
        $getAllData = Moloquent::all();
        return view($template, ['data_user' => $getAllData]);
    }

    function save(Request $request){
        $getTable = new Moloquent;
        $getTable->name = $request->input('name');
        $getTable->city = $request->input('city');
        if ($request->input('address')!=null)
        $getTable->address = $request->input('address');
        $getTable->view_no = $request->input('view_no');
        $getTable->save();

        return Redirect::to('department/department')
                ->with('success','You have been successfully insert data');
    }

    function update(Request $request){
        $id = $request->input('id');
        
        $getTable = Moloquent::find($id);
        $getTable->name = $request->input('name');
        $getTable->city = $request->input('city');
        if ($request->input('address')!=null)
        $getTable->address = $request->input('address');
        
        $getTable->view_no = $request->input('view_no');
        $getTable->save();
        
        return Redirect::to('department/department')
                ->with('success','You have been successfully update data');

    }
    function getdata($id){
        $getData = Moloquent::where('_id', $id)
                            ->get();
        
        $getAllData = Moloquent::all();
        
        return view('edit_department', ['get_user' => $getData, 'data_user' => $getAllData]);
    }
    function delete($id){
        
        $return = Moloquent::where('_id', $id)
                                ->delete();
        
        return Redirect::to('department/department')
                ->with('success','You have been successfully deleted data');

    }
    function deleteAll(){
        
        $return = Moloquent::where('_id','!=','')->delete();
        
        return Redirect::to('department/department');

    }


    function generateFake(Request $request){

$faker = Faker::create();
                $user = new Moloquent;
                $user->name = 'Cardiologie';
                $user->address = $faker->address;
                $user->city = $faker->randomElement(['Chicago','Montreal','New York','Boston']);                
                $user->save();

                $user = new Moloquent;
                $user->name = 'Chirurgie';
                $user->address = $faker->address;
                $user->city = $faker->randomElement(['Chicago','Montreal','New York','Boston']);                
                $user->save();

                $user = new Moloquent;
                $user->name = 'ORL';
                $user->address = $faker->address;
                $user->city = $faker->randomElement(['Chicago','Montreal','New York','Boston']);                
                $user->save();

                $user = new Moloquent;
                $user->name = 'Psihiatrie';
                $user->address = $faker->address;
                $user->city = $faker->randomElement(['Chicago','Montreal','New York','Boston']);                
                $user->save();


//         $count = $request->input('fakedata');

//         if($count < 1000){
//             $faker = Faker::create();
//             for ($i=1; $i <= $count; $i++) {
//                 $user = new Moloquent;
//                 $user->name =  $faker->randomElement(['Cardiologie','Chirurgie','ORL','Psihiatrie']);              
//                 $user->address = $faker->address;
//                 $user->city = $faker->randomElement(['Chicago','Montreal','New York','Boston']);
// //$faker->ssn;  social security number
// // 'projectStatus' = $faker->randomElement(['active', 'completed', 'on hold']);
//                 //$user->practice = $faker->randomElements($array = array ('Doctor','Nurse','Assistent','Proffessor'), $count = 1);
//                 $user->save();
//             }
       // }
        return Redirect::to('department/department');
    }
    

    
}
