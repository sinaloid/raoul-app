<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmSelectionnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film_selectionnes', function (Blueprint $table) {
            $table->id();
            $table->string('film_competion');
            $table->timestamps();

            $table->unsignedBigInteger('edition_id');
            $table->foreign('edition_id')
                    ->references('id')
                    ->on('editions')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->unsignedBigInteger('film_id');
            $table->foreign('film_id')
                    ->references('id')
                    ->on('films')
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
        Schema::dropIfExists('film_selectionnes');
    }
}
