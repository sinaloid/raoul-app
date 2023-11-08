<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailEvenementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_evenements', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('lieu');
            $table->string('date');
            $table->string('image_evenement');
            $table->timestamps();

            $table->unsignedBigInteger('categorie_evenement_id');
            $table->foreign('categorie_evenement_id')
                    ->references('id')
                    ->on('categorie_evenements')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->unsignedBigInteger('evenement_id');
            $table->foreign('evenement_id')
                    ->references('id')
                    ->on('evenements')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->unsignedBigInteger('lieu_evenement_id');
            $table->foreign('lieu_evenement_id')
                    ->references('id')
                    ->on('lieu_evenements')
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
        Schema::dropIfExists('detail_evenements');
    }
}
