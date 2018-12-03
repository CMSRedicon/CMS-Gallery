<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryFilesThumb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery_files_thumb', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('gallery_file_id');
            $table->foreign('gallery_file_id')->references('id')->on('gallery_files')->onDelete('cascade');
            $table->string('src',1000);
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
        Schema::dropIfExists('gallery_files_thumb');
    }
}
