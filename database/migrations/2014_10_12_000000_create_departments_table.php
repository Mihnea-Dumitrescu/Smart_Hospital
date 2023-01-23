<?php

use Illuminate\Support\Facades\Schema;
use Moloquent\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->index('id');
            $table->string('name');  
            $table->string('address'); 
            $table->string('city');  
            $table->string('view_no');  
                   
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
        Schema::drop('departments');
    }
}
