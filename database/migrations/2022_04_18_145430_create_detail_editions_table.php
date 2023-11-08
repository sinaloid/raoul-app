<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailEditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_editions', function (Blueprint $table) {
            $table->id();
            $table->string("artiste_invite");
            $table->string("date_debut");
            $table->string("parrain_marraine");
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
        Schema::dropIfExists('detail_editions');
    }
}
