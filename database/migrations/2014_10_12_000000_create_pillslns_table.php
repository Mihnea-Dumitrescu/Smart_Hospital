<?php

use Illuminate\Support\Facades\Schema;
use Moloquent\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePillslnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {     

         Schema::create('pillslns', function (Blueprint $table) {
            $table->index('id');
            $table->string('medicalrecords_id');
            $table->string('pills_id');
            $table->string('pills_name');
            $table->date('data_med'); 
            $table->string('details');                       
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
        Schema::drop('pillslns');
    }
}
