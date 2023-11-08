<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_photos', function (Blueprint $table) {
            $table->id();
            $table->string('lien_photo');
            $table->timestamps();

            $table->unsignedBigInteger('photo_id');
            $table->foreign('photo_id')
                    ->references('id')
                    ->on('photos')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_photos');
    }
}
