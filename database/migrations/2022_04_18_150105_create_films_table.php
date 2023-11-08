<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('auteur');
            $table->string('duree');
            $table->string('date_sortie');
            $table->string('description');
            $table->string('lien_extrait_film');
            $table->string('image_film');
            $table->timestamps();

            $table->unsignedBigInteger('categorie_film_id');
            $table->foreign('categorie_film_id')
                    ->references('id')
                    ->on('categorie_films')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
}
