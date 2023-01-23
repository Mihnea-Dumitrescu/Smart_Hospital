<?php

use Illuminate\Database\Seeder;
//use App\Models\DepartmentModels as Moloquent;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     // $this->call(UsersTableSeeder::class);
    //     factory(App\User::class)->create();
    //     factory(App\User::class)->create(['email' => 'mail@mail.com']);
    // }



// public function run()
//     {
//          $this->call(UsersTableSeeder::class);
//         factory(App\User::class)->create();
//         factory(App\User::class)->create(['name' => 'admin2323']);
//         factory(App\User::class)->create(['email' => 'admin@admin2323.com']);
//         factory(App\User::class)->create(['password' => 'admin@admin2332']);
//         factory(App\User::class)->create(['is_admin' => 0]);
//     }


    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        //    factory(App\User::class)->create([
        //        'name' => 'admin',
        //        'email' => 'admin@admin.com',
        //        'password' => bcrypt('admin@admin'),
        //        'is_admin' => 1,
        //        'practice'=> 'admin',

        //           ]
        //            );
         


        // $getTable = new Moloquent;
        // $getTable->name = 'ORL';        
        // $getTable->save();

        // factory(App\Models\DepartmentModels::class)->create([
        //     'name' => 'Cardiologie',         

        //        ]
        //      );

        // factory(App\Models\DepartmentModels::class)->create([
        //     'name' => 'ORL',         

        //        ]
        //      );
        // factory(App\Models\DepartmentModels::class)->create([
        //     'name' => 'Psihiatrie',         

        //        ]
        //      );



        //    factory(App\User::class)->create([
        //        'name' => 'medic1',
        //         'email' => 'medic1@medic1.com',
        //        'password' => bcrypt('medic1@medic1'),
        //        'is_admin' => 0,
        //        'practice'=> 'doctor',
        //        'departments_id'=> '5b214cc3c5e6961d58001447',
        //        'departments'=> 'Cardiologie',
        //        'view_no'=> '1',
        //           ]
        //         );

           


        factory(App\User::class)->create([
            'name' => 'medic2',
            'email' => 'medic2@medic2.com',
            'password' => bcrypt('medic2@medic2'),
            'is_admin' => 0,
            'practice'=> 'doctor',
            'departments_id'=> '5b214cc3c5e6961d58001449',
            'departments'=> 'Psihiatrie',
             'view_no'=> '2',
               ]
             );


        //    factory(App\User::class)->create([
        //        'name' => 'nurse1',
        //        'email' => 'nurse1@nurse1.com',
        //        'password' => bcrypt('nurse1@nurse1'),
        //        'is_admin' => 0,
        //        'practice'=> 'nurse',
        //        'departments_id'=> '5b214cc3c5e6961d58001447',
        //        'departments'=> 'Cardiologie',
        //        'view_no'=> '1',
        //           ]
        //         );

        //    factory(App\User::class)->create([
        //        'name' => 'nurse2',
        //        'email' => 'nurse2@nurse2.com',
        //        'password' => bcrypt('nurse2@nurse2'),
        //        'is_admin' => 0,
        //        'practice'=> 'nurse',
        //        'departments_id'=> '5b214cc3c5e6961d58001449',
        //       'departments'=> 'Psihiatrie',
        //        'view_no'=> '2',
        //           ]
        //          );

       //  DB::table('departments')->insert([ 
       //      'name' =>  'Cardiologie',             
       //  ]);

       // DB::table('departments')->insert([ 
       //      'name' =>  'ORL',             
       //  ]);
       
       // DB::table('departments')->insert([ 
       //      'name' =>  'Psihiatrie',             
       //  ]);




       //  DB::table('pacients')->insert([ 
       //      'name' => 'Ionescu Ion',
       //      'cnp' => '1111111111111',
       //      'address' => 'Dolj Craiova Unirii 88',
       //      'email' => 'ionescu@yahoo.com',
       //      'password' => bcrypt('ionescu@yahoo.com'),
       //      'sex' => 'M',
       //      'birthdate' => '47',
       //      'is_admin' => 0,
       //      'id_card' => 'DK1010100',
       //      'occupation' => 'driver',
       //      'workplace' => 'IBM',
       //      'retirememt_nr' => '29-AQS-9090',
       //      'blood_type' => '0',
       //      'rh' => 'Negativ',
       //      'allergic_to' => 'no',     

       //         ]
       //       );

       //    DB::table('pacients')->insert([ 
       //      'name' => 'Popescu Ion',
       //      'cnp' => '11144444441111',
       //      'address' => 'Dolj Craiova Severinului 4',
       //      'email' => 'ipopescu@yahoo.com',
       //      'password' => bcrypt('ipopescu@yahoo.com'),
       //      'sex' => 'M',
       //      'birthdate' => '47',
       //      'is_admin' => 0,
       //      'id_card' => 'DK10888721',
       //      'occupation' => 'driver',
       //      'workplace' => 'IBM',
       //      'retirememt_nr' => '29-AQS-9090',
       //      'blood_type' => 'A',
       //      'rh' => 'Negativ',
       //      'allergic_to' => 'no',     

       //         ]
       //       );


         // factory(App\PacientModels::class)->create([
         //    'name' => 'Popescu Marin',
         //    'cnp' => '1111111111112',
         //    'address' => 'Dolj Craiova Desrobirii 12',
         //    'email' => 'popescu@yahoo.com',
         //    'password' => bcrypt('popescu@yahoo.com'),
         //    'sex' => 'M',
         //    'age' => '47',
         //    'is_admin' => 0,
         //       ]
         //     );

        
    }  

    //  public function run()
    // {

    //     if (User::where('email', '=', env('BASIC_AUTH_USERNAME'))->count() == 0) {

    //         DB::connection('mongodb')->table('users')->insert(
    //             [
    //                 'name' => 'seeded user',
    //                 'email' => env('BASIC_AUTH_USERNAME'),
    //                 'password' => bcrypt(env('BASIC_AUTH_PASSWORD')),
    //                 'is_admin' => 0,
    //             ]
    //         );
    //     }
    // }

    //  public function run()
    // {

     

            // DB::connection('mongodb')->table('departments')->insert(
            //     [
            //         'name' => 'ORL',
                  
            //     ]
            // );
       
    //}

}
