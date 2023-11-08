<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foires', function (Blueprint $table) {
            $table->id();
            $table->string("lien_fichier");
            $table->timestamps();

            $table->unsignedBigInteger('edition_id');
            $table->foreign('edition_id')
                    ->references('id')
                    ->on('editions')
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
        Schema::dropIfExists('foires');
    }
}
