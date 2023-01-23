<?php

use Illuminate\Support\Facades\Schema;
use Moloquent\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacients', function (Blueprint $table) {
            $table->index('id');
            $table->string('name');
            $table->string('cnp')->unique();
            $table->string('address');
            $table->string('email')->unique();
            $table->string('sex');     
            $table->string('birthdate'); 
            $table->string('bi');
            $table->string('occupation');   
            $table->string('workplace');   
            $table->string('retired_nr');  
            $table->string('blood_type');  
            $table->string('rh');  
            $table->string('allergic_to');         
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
        Schema::drop('pacients');
    }
}
