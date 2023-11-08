<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBilanEditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bilan_editions', function (Blueprint $table) {
            $table->id();
            $table->string('description');
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
        Schema::dropIfExists('bilan_editions');
    }
}
