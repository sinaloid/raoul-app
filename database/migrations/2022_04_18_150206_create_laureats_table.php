<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaureatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laureats', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('film_selectionne_id');
            $table->foreign('film_selectionne_id')
                    ->references('id')
                    ->on('film_selectionnes')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->unsignedBigInteger('mention_id');
            $table->foreign('mention_id')
                    ->references('id')
                    ->on('mentions')
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
        Schema::dropIfExists('laureats');
    }
}
