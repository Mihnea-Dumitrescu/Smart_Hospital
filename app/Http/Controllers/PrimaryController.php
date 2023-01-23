<?php

namespace App\Http\Controllers;

use App\Models\PrimaryModels as Moloquent;
use App\Models\DepartmentModels as MoloquentDep;
use Illuminate\Http\Request;
use Faker\Factory as Faker;
use Input, Redirect;
use Mail;

class PrimaryController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        return Redirect::to('home_user/home_user');
    }

    function pages($template){
        $getAllData = Moloquent:: where('is_admin', '!=', 1)->get();                     
        return view($template, ['data_user' => $getAllData]);
    }



 

    function save(Request $request){
        $getTable = new Moloquent;
        $getTable->name = $request->input('name');
        $getTable->email = $request->input('email');
        $getTable->address = $request->input('address');
        $getTable->is_admin = 0;
        $getTable->practice = $request->input('formfunctie');

        $mystring = $request->input('department_id');

        

//  $hash = '$2y$10$RGxudlU2NlgZAadiKd963.yG44.tS8.O7upmSRehrxEHMowF5TNre';

// if (password_verify('medic12@medic12', $hash)) {
//     //echo 'Password is valid!';
//     dd('Password is valid!');
// } else {
//     //echo 'Invalid password.';
//     dd('Password is invalid!');
// }
       

        
        $findme   = 'xxxx';
        $pos = strpos($mystring, $findme);       


        $getTable->department_id = substr($mystring,0,$pos);

        $l1=strlen ($mystring);


        $getTable->department =   substr($mystring,$pos+4,$l1);



        $datamed = MoloquentDep::where('_id',$getTable->department_id)->get()->first();   
        //dd($datamed);
        $department=$datamed->name;
        $view_no=$datamed->view_no;
        $getTable->view_no =  $view_no;


        // str_random(60)
         
         $getTable->api_token = str_random(60);

        $getTable->save();

        return Redirect::to('home_user/home_user')
                ->with('success','You have been successfully insert data');
    }


   

        function add(){
        
        
        return view('home_user.add');
    }

    function update(Request $request){
        $id = $request->input('id');
        
        $getTable = Moloquent::find($id);
        $getTable->name = $request->input('name');
        $getTable->email = $request->input('email');
        $getTable->address = $request->input('address');
        $getTable->practice = $request->input('formfunctie');
        $mystring = $request->input('department_id');
//dd($mystring);
        $datamed = MoloquentDep::where('name',$mystring)->get()->first();   
        //dd($datamed);
        $department=$datamed->name;
        $view_no=$datamed->view_no;
        $department_id = $datamed->id;


        $getTable->password = bcrypt($request->input('password'));


       
        
        // $findme   = 'xxxx';
        // $pos = strpos($mystring, $findme);       


        // $getTable->department_id = substr($mystring,0,$pos);

        // $l1=strlen ($mystring);


        // $getTable->department =   substr($mystring,$pos+4,$l1);


        
        $getTable->department=$department;
        $getTable->department_id =  $department_id;


        $getTable->view_no =  $view_no;

        $getTable->api_token = str_random(60);

        $getTable->save();
        
        return Redirect::to('home_user/home_user')
                ->with('success','You have been successfully update data');

    }
    function getdata($id){
        $getData = Moloquent::where('_id', $id)
                            ->get();
        
        $getAllData = Moloquent::where('is_admin', '!=', 1)->get(); 
        
        return view('edit_user', ['get_user' => $getData, 'data_user' => $getAllData]);
    }

    function sendMailtoUser($id){

     $customer = Moloquent::where('_id', $id)
                            ->first();
    //dd($customer);
    //dd($customer['email']);

   
                               
        Mail::send(['text'=>'mail'],['name','office'],function($message)  use ($customer) {
 
  //$message->setContentType("text/html");
             $message->to($customer['email'],'office')->subject('test email 2018 mongo');
             $message->from('office@edasoft.ro','office');

             
            
         $token='xxxxxxxxxxxxxxxxxxxxxxxxxx';
         $link = 'http://192.168.1.10:27017/getapi/'.$customer['api_token'];
         $html = sprintf('Activate account <a href="%s">%s</a>', $link, $link);

         $message1 = sprintf('Activate account <a href="%s">%s</a>', $link, $link);

         $message->setBody($message1, 'text/html');




//              $message->setBody('<!DOCTYPE html>
// <html>
// <head>

// </head>

// <body>
// <a href="http://www.edasoft.ro">Sign in</a>
// </body>

// </html>', 'text/html');
             //$message->setBody($customer['email'], 'text');


            //  $message->setBody(    
  
            // '<a href="http://www.edasoft.ro">Sign in</a>'      
            // );



         });

   return Redirect::to('home_user/home_user')
                ->with('success','You have been successfully send mail');
    }





 function getapi($id){
        $getData = Moloquent::where('_id', $id)
                            ->get();
     //dd('5');
     $v1='xxxxxxxxxxxxxxxxxxxxxxxxxx';   
    //   return Redirect::to('resetapi');
 return view('resetapi', ['token' => $v1]);
    }






    function delete($id){
        
        $return = Moloquent::where('_id', $id)
                                ->delete();
        
        return Redirect::to('home_user/home_user')
                ->with('success','You have been successfully deleted data');

    }
    function deleteAll(){
        
        $return = Moloquent::where('_id','!=','')->delete();
        
        return Redirect::to('home_user/home_user');

    }


    
    
    function generateFake(Request $request){        


                // $user = new Moloquent;
                // $user->name = 'admin';
                // $user->email = 'admin@admin.com';
                // $user->password = bcrypt('admin@admin');
                // $user->is_admin = 1;
                // $user->practice = 'admin';
                // $user->save();

                $user = new Moloquent;
                $user->name = 'medic1';
                $user->email = 'medic1@medic1.com';
                $user->password = bcrypt('medic1@medic1');
                $user->is_admin = 1;
                $user->practice = 'medic';
                $user->department_id = '5aeca358532a3801a4006a52';
                $user->department = 'Cardiologie';
                $user->save();




                $user = new Moloquent;
                $user->name = 'medic2';
                $user->email = 'medic2@medic2.com';
                $user->password = bcrypt('medic2@medic2');
                $user->is_admin = 1;
                $user->practice = 'medic';
                $user->department_id = '5aeca358532a3801a4006a52';
                $user->department = 'Cardiologie';
                $user->save();
       






        $count = $request->input('fakedata');

        if($count < 1000){
        	$faker = Faker::create();
    		for ($i=1; $i <= $count; $i++) {
    			$user = new Moloquent;
    			$user->name = $faker->name;
    			$user->email = $faker->email;
                $user->address = $faker->address;
                //$user->is_admin ='0';
                $user->practice = $faker-> randomElement(['Doctor','Nurse','Assistent','Proffessor']);
                //$user->departments_id = $faker->randomElements($array = array ('Doctor','Nurse','Assistent','Proffessor'), $count = 1);

                $user->department = $faker->randomElement(['Cardiologie','Chirurgie','ORL','Psihiatrie']);

                //dd($user->departments_name);
                if ($user->department =='Cardiologie')
                    $user->department_id = '5b2010eb532a381b34004f56';

                if ($user->department =='Chirurgie')
                    $user->department_id = '5b2010eb532a381b34004f57';

                if ($user->department =='ORL')
                    $user->department_id = '5b2010eb532a381b34004f58';

                if ($user->department =='Psihiatrie')
                    $user->department_id = '5b2010eb532a381b34004f59';

//$faker->ssn;  social security number
// 'projectStatus' = $faker->randomElement(['active', 'completed', 'on hold']);
                //$user->practice = $faker->randomElements($array = array ('Doctor','Nurse','Assistent','Proffessor'), $count = 1);
    			$user->save();
    		}
        }
        return Redirect::to('home_user/home_user');
    }
    
}
