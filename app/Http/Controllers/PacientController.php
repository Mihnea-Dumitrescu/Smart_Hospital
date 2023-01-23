<?php

namespace App\Http\Controllers;

use App\Models\PacientModels as Moloquent;
use Illuminate\Http\Request;
use Auth;
use Faker\Factory as Faker;
use Input, Redirect;

class PacientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    function index(){
        return Redirect::to('pacient/pacient');
    }

    function pages($template){
        $getAllData = Moloquent::orderby('created_at', 'DESC')->get();
        return view($template, ['data_user' => $getAllData]);
    }

    function save(Request $request){
        $getTable = new Moloquent;
        $getTable->name = $request->input('name');
        $getTable->cnp = $request->input('cnp');
        $getTable->address = $request->input('address');        
        $getTable->sex = $request->input('formfunctie');
        $getTable->rh = $request->input('formfunctie_rh');
        $getTable->email = $request->input('email');
        $getTable->birthdate = $request->input('formfunctiebt');
        $getTable->bi = $request->input('bi');
        $getTable->occupation = $request->input('occupation');
        $getTable->retired_nr = $request->input('retired_nr');
        $getTable->blood_type = $request->input('blood_type');
        
        $getTable->allergic_to = $request->input('allergic_to');
        $getTable->workplace = $request->input('workplace');
        $getTable->department_id = Auth::user()->department_id;

        // $mystring = $request->input('department_id');
        // $findme   = 'xxxx';
        // $pos = strpos($mystring, $findme);
        


        // $getTable->department_id = substr($mystring,0,$pos);

        // $l1=strlen ($mystring);


        // $getTable->department =   substr($mystring,$pos+4,$l1);
        $getTable->save();

        return Redirect::to('pacient/pacient')
                ->with('success','You have been successfully insert data');
    }

     function saveandaddrec(Request $request){
        $getTable = new Moloquent;
        $getTable->name = $request->input('name');
        $getTable->cnp = $request->input('cnp');
        $getTable->address = $request->input('address');        
        $getTable->sex = $request->input('formfunctie');
        $getTable->rh = $request->input('formfunctie_rh');
        $getTable->email = $request->input('email');
        $getTable->birthdate = $request->input('formfunctiebt');
        $getTable->bi = $request->input('bi');
        $getTable->occupation = $request->input('occupation');
        $getTable->retired_nr = $request->input('retired_nr');
        $getTable->blood_type = $request->input('blood_type');
        
        $getTable->allergic_to = $request->input('allergic_to');
        $getTable->workplace = $request->input('workplace');

        $getTable->department_id = Auth::user()->department_id;

        // $mystring = $request->input('department_id');
        // $findme   = 'xxxx';
        // $pos = strpos($mystring, $findme);
        


        // $getTable->department_id = substr($mystring,0,$pos);

        // $l1=strlen ($mystring);

       $lcnp= $request->input('cnp');
        // $getTable->department =   substr($mystring,$pos+4,$l1);medicalrecord/populate_medicalrecord/'. $data->cnp }}
        $getTable->save();

        return Redirect::to('medicalrecord/populate_medicalrecord/'.$lcnp)
                ->with('success','You have been successfully insert data');
    }

    function update(Request $request){
        $id = $request->input('id');
        
        $getTable = Moloquent::find($id);
        $getTable->name = $request->input('name');
        $getTable->cnp = $request->input('cnp');
        $getTable->address = $request->input('address');
        $getTable->age = $request->input('age');
        $getTable->sex = $request->input('formfunctie');
        $getTable->rh = $request->input('formfunctie_rh');
        $getTable->email = $request->input('email');
        $getTable->birthdate = $request->input('formfunctiebt');
        $getTable->bi = $request->input('bi');
        $getTable->occupation = $request->input('occupation');
        $getTable->retired_nr = $request->input('retired_nr');
        $getTable->blood_type = $request->input('blood_type');
       
        $getTable->allergic_to = $request->input('allergic_to');
        $getTable->workplace = $request->input('workplace');
        $getTable->department_id = Auth::user()->department_id;
        $getTable->save();
        
        return Redirect::to('pacient/pacient')
                ->with('success','You have been successfully update data');

    }
    function getdata($id){
        $getData = Moloquent::where('_id', $id)
                            ->get();
        
        $getAllData = Moloquent::all();
        
        return view('edit_pacient',  ['get_user' => $getData, 'data_user' => $getAllData]);
}
   function getdata1($id){
        $getData = Moloquent::where('_id', $id)
                            ->get();
        
        $getAllData = Moloquent::all();
        
        return view('view_pacient',  ['get_user' => $getData, 'data_user' => $getAllData]);


    }
    function delete($id){
        
        $return = Moloquent::where('_id', $id)
                                ->delete();
        
        return Redirect::to('pacient/pacient')
                ->with('success','You have been successfully deleted data');

    }
    function deleteAll(){
        
        $return = Moloquent::where('_id','!=','')->delete();
        
        return Redirect::to('pacient/pacient');

    }
    
    function generateFake(Request $request){
        $count = $request->input('fakedata');

        if($count < 1000){
            $faker = Faker::create();
            for ($i=1; $i <= $count; $i++) {
                $user = new Moloquent;
                $a=$faker->numberBetween($min = 11245678, $max = 912456789);



                $user->cnp = strval($a);

                $user->name = $faker->name;
                $user->email = $faker->email;
                $user->address = $faker->address;
                $user->sex = $faker-> randomElement(['M','F']);
                
                $user->age = $faker->numberBetween($min = 1, $max = 99);
                $user->occupation = $faker->randomElement(['Engineer','Worker','Proffessor','Plummer']);
                $user->workplace = $faker->address;

                $user->blood_type = $faker->randomElement(['0','A','B','AB']);

                $user->rh=$faker->randomElement(['Negativ','Positiv']);

                $user->birthdate =$faker->dateTimeInInterval($startDate = '-70 years', $interval = '+ 5 days', $timezone = null);


//$faker->ssn;  social security number


                $user->save();

 

      
            }
        }
        return Redirect::to('pacient/pacient');
    }
    
}
