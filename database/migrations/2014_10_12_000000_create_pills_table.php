<?php

use Illuminate\Support\Facades\Schema;
use Moloquent\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pills', function (Blueprint $table) {
            $table->index('id');
            $table->string('name');           
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
        Schema::drop('pills');
    }
}
