<?php

use Illuminate\Support\Facades\Schema;
use Moloquent\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalrecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicalrecords', function (Blueprint $table) {
            $table->index('id'); 
            $table->integer('medicalrecords_no');           
            $table->date('data_medicalrecord'); 
            $table->date('data1'); 
            $table->date('data2'); 
            $table->string('prescription');
            $table->string('poza'); 
            $table->string('referraldiagnosis'); 
            $table->string('diagnosisatadmission'); 
            $table->string('diagnosisat72'); 
            $table->string('reason'); 
            $table->string('history'); 
            $table->string('personalphyhiologicalhist'); 
            $table->string('personalpatologicalhist'); 
            $table->string('heredocollateral'); 
            $table->string('apexian'); 
            $table->string('cardiacvol'); 
            $table->string('sounds'); 
            $table->string('murmurs'); 
            $table->string('arrhythmias');
            $table->string('carotidpulse'); 
            $table->string('radialpulse');
            $table->string('cubitalpulse');
            $table->string('capillarypulse');
            $table->string('femoralpulse'); 
            $table->string('bloodpressure'); 

            $table->string('premorbidpersonality'); 
            $table->string('mentalexamination'); 



            $table->integer('pacient_id');
            $table->string('pacient_name');
            $table->string('cnp');
            $table->string('address');
            $table->string('email');
            $table->string('sex');     
            $table->string('birthdate'); 
            $table->string('bi');
            $table->string('occupation');   
            $table->string('workplace');   
            $table->string('retired_nr');  
            $table->string('blood_type');  
            $table->string('rh');  
            $table->string('allergic_to'); 

            $table->integer('department_id');
            $table->integer('department_name');
            $table->integer('user_id');
            $table->string('user_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('medicalrecords');
    }
}
