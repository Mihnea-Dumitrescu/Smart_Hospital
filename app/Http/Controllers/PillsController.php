<?php

namespace App\Http\Controllers;

use App\Models\PillsModels as Moloquent;
use Illuminate\Http\Request;
use Faker\Factory as Faker;
use Input, Redirect;
use DB;

class PillsController extends Controller
{
 

 public function __construct()
    {
        $this->middleware('auth');
    }

    
public function search()
    {
        return view('search');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function autocomplete(Request $request)
    {
        //dd('x');
        //$data = Moloquent::where('name', 'LIKE', '%'.$request->q.'%')->get();
        $data = Moloquent::select("name")->where("name","LIKE","%{$request->input('query')}%")->get();

        return response()->json($data);
    }
 

    function index(){
        return Redirect::to('pill/pills');
    }

    function pages($templatepills){
        $getAllData = Moloquent::all();
        return view($templatepills, ['data_user' => $getAllData]);
    }

    function save(Request $request){
        $getTable = new Moloquent;
        $getTable->name = $request->input('name');        
        $getTable->save();

        return Redirect::to('pill/pills')
                ->with('success','You have been successfully insert data');
    }

    function update(Request $request){
        $id = $request->input('id');
        
        $getTable = Moloquent::find($id);
        $getTable->name = $request->input('name');        
        $getTable->save();
        
        return Redirect::to('pill/pills')
                ->with('success','You have been successfully update data');

    }
    function getdata($id){
        $getData = Moloquent::where('_id', $id)
                            ->get();
        
        $getAllData = Moloquent::all();
        
        return view('pill.edit', ['get_user' => $getData, 'data_user' => $getAllData]);
    }
    function delete($id){
        
        $return = Moloquent::where('_id', $id)
                                ->delete();
        
        return Redirect::to('pill/pills')
                ->with('success','You have been successfully deleted data');

    }
    function deleteAll(){
        
        $return = Moloquent::where('_id','!=','')->delete();
        
        return Redirect::to('pill/pills');

    }



     function generateFake(Request $request){

                $user = new Moloquent;
                $user->name = 'Nizoxone';                          
                $user->save();
                $user = new Moloquent;
                $user->name = 'Tacrovac';                          
                $user->save();
                $user = new Moloquent;
                $user->name = 'Travoneva';                          
                $user->save();
                $user = new Moloquent;
                $user->name = 'Hydroletra';                          
                $user->save();
                $user = new Moloquent;
                $user->name = 'Diaronate';                          
                $user->save();
                $user = new Moloquent;
                $user->name = 'Rosinazole';                          
                $user->save();
                $user = new Moloquent;
                $user->name = 'Actebamol';                          
                $user->save();
                $user = new Moloquent;
                $user->name = 'Clinolestid';                          
                $user->save();
                $user = new Moloquent;
                $user->name = 'Methipril';                          
                $user->save();
                $user = new Moloquent;
                $user->name = 'Alosemulin';                          
                $user->save();
                $user = new Moloquent;
                $user->name = 'Gluatamine';                          
                $user->save();
                $user = new Moloquent;
                $user->name = 'Hyaluloride';                          
                $user->save();
                $user = new Moloquent;
                $user->name = 'Xenanone';                          
                $user->save();
                $user = new Moloquent;
                $user->name = 'Aldedenu';                          
                $user->save();
                $user = new Moloquent;
                $user->name = 'Doctonium';                          
                $user->save();
                $user = new Moloquent;
                $user->name = 'Evolofen';                          
                $user->save();
                
        return Redirect::to('pill/pills');
    }



   public function api_go_ral(Request $request)
    {
        $name=$request->pill;       
        //$serial=$request->serial;
        //$version_id=$request->versionid;

        $getTable = new Moloquent;
        $getTable->name = $name;        
        $getTable->save();

         
        $name=$request->MyVar2;       
        //$serial=$request->serial;
        //$version_id=$request->versionid;

        $getTable = new Moloquent;
        $getTable->name = $name;        
        $getTable->save();


        //$id = $request->input('min_posts');
        //$id = $request->all();
        //$post = User::create(array('body' => $id['name'],'title' => $id['api_token']));
        return response()->json( $name);
        
    }


    

    public function api_ral_auth(Request $request)

    {

        $username=$request->user; 
        $password=$request->pass; 


      //  $users = DB::collection('users')
      // ->project(['_id' => 0,'password' => 0])->where('name', $username)->where('password', $api_key)->get();

       $users = DB::collection('users')
       ->project(['_id' => 0])->where('email', $username)->get();

      // dd($users[0]['password']);

        $hash = $users[0]['password'];// '$2y$10$RGxudlU2NlgZAadiKd963.yG44.tS8.O7upmSRehrxEHMowF5TNre';

        if (password_verify($password, $hash)) {
            //echo 'Password is valid!';
            //dd('Password is valid!');
        //dd($username);

          $users1 = DB::collection('users')
          ->project(['_id' => 0,'password' => 0])->where('email', $username)->get()->toArray();
//dd(json_decode($users1));
         //$users2  =   json_decode($users1);  

         $object = (object) $users1;   //trec array in object
//dd($object);

          //dd($object-> email);
          //return response()->json(['state' => 'OK']);
         return  $users1;

           //return response()->json(['api_token' => $object->api_token, 'state' => 'OK']);
        } else {
            //echo 'Invalid password.';
            //dd('Password is invalid!');
            return '0';
        }


       // if ($users[0]['name']== $username){
       //   return $users;

       //  //return $users[0]['practice'];
       // // return response()->json( $users[0]['name']);
       // } else
       // {
       //  return 'No';

       // }


//return response()->json( $users);
        
      // return $users;
    }

 public function api_ral_view_medicine(Request $request)

    {

    $id=$request->medicalrecords_id; 

     $medicines = DB::collection('pillslns')
       ->project(['_id' => 0])->where('medicalrecords_id', $id)->get();

     return $medicines;
       //return $medicines->updated_at->format('d-m-Y');

    }

    public function api_go_ral_read(Request $request)


    {



        $id=$request->id_pacient;       
        //$getData = Moloquent::where('_id', $id)->get();

        //$getAllData = Moloquent::all();
        //$id='444'; 
        //$getData = Moloquent::where('name', '=', '444')->get();
        //$getData = Moloquent::where('name', $id)->get();

        //$getData1=$getData->name;


       //$getData = DB::collection('pacients')->where('cnp', '7865789678')->first();
       //$getData = DB::collection('pacients')->where('cnp', $id)->first();
       //return response()->json($getData);

       // $pacients = DB::collection('pacients')
       //  ->project(['_id' => 0])
       //  ->get()
       //  ->toArray();
       //  return $pacients;

        // $pacients = DB::collection('pacients')
        // ->project(['_id' => 0])->where('cnp', '7865789678')
        // ->get()
        // ->toArray();
        // return $pacients;


      //   $pacients = DB::collection('medicalrecords')
      //  ->project(['_id' => 0])->where('cnp', $id)
      //  ->get()
       // ->toArray();
        //return $pacients;


      $pacients = DB::collection('medicalrecords')
       ->project(['_id' => 0])->where('cnp', $id)->where('released', 'No')->take(1)
      ->get();
     


// $pacients = DB::collection('medicalrecords')
//         ->project(['_id' => ,$ifNull [ '$workplace' , 'Unspecified' ]])->where('cnp', $id)->take(1)
//        ->get();



//       $pacients =  DB::collection('medicalrecords').aggregate(
//    [
//       {
//          $project: {
//             item: 1,
//             workplace: { $ifNull: [ "$workplace", "Unspecified" ] }
//          }
//       }
//    ]
// )

        //$pacients[0]['workplace'] = 'unspecified';
       // $pacients[0]['workplace'].value='unspecified';
       // dd($pacients[0]['workplace']);
        return $pacients;


//description: { $ifNull: [ "$description", "Unspecified" 

//         app.get('/api/locals', function(req, res) {
//   Local.aggregate({
//     $project: {
//       value: {
//         $ifNull: ["$" + req.query.language , "$en"]
//       }
//     }
//   }).exec(function(err, data) {
//     res.json(data);
//   });
// });





//  $y = '';

// foreach ($getData as $key => $val) {
//     $y =  array_shift($getData[$key]);  
// }

// var_dump($y);

// return $y;



// $cursor = DB::raw()->aggregate([
//     ['$group' =>
//         ['_id' => '$name', 'count' => ['$sum' => 1]]
//     ],
//     ['$sort' => ['count' => -1]],
//     ['$limit' => 30],
//     ['$project' => ['_id' => 0,
//                    'text' => '$_id',
//                    'size' => '$count',
//                    ]
//     ],
// ]);








// do {
//     //echo $current; //Process each element
// } while (!($current =$getData->next()));
// return $current;
          // return response()->json($current);
      //return $current;

//       // $result = \YOURMODEL::raw(function($collection) {
//       $getData = DB::raw(function($getData) {
//         return $collection->aggregate(
// [
// '$group' => [
// '_id' => [
// '_id' => '$web_proxy_site',
// ]
// 'count' => [
// '$sum' => 1
// ]
// ]
// ],
// );
// });

// $result = \YOURMODEL::raw(function($collection) {
// return $collection->aggregate(
// [
// '$group' => [
// '_id' => [
// '_id' => '$web_proxy_site',
// ]
// 'count' => [
// '$sum' => 1
// ]
// ]
// ],
// );
// });
      
   
        
    
       //return collect($getData)->toArray();
       // return response()->json($getData);
        //return response()->json($getData->name);
        //$getTable = Moloquent::find($id);


        //return response()->json( $getTable->name);
        
    }
    
}

