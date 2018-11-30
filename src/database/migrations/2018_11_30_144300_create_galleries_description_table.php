<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleriesDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries_description', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('gallery_id');
            $table->foreign('gallery_id')->references('id')->on('galleries')->onDelete('cascade');
            $table->string('lang',3);
            $table->string('name',1000);
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('galleries_description');
    }
}
