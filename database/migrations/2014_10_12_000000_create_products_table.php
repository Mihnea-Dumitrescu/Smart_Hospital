<?php

use Illuminate\Support\Facades\Schema;
use Moloquent\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {     

         Schema::create('products', function (Blueprint $table) {
            $table->index('id');
            $table->string('medicalrecords_id');
            $table->string('name');
            $table->string('details');
            $table->string('product_image');           
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
        Schema::drop('products');
    }
}
