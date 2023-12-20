<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            $table->string("demandeur_nom");
            $table->string("demandeur_email");
            $table->string("demandeur_entreprise");
            $table->string("demandeur_telephone");
            $table->string("demandeur_adresse");

            $table->string("exportateur_nom");
            $table->string("exportateur_adresse");
            $table->string("exportateur_telephone");
            $table->string("exportateur_email");
            $table->string("exportateur_passport");

            $table->string("receveur_nom");
            $table->string("receveur_adresse");
            $table->string("receveur_telephone");
            $table->string("receveur_email");
            $table->string("receveur_pays");


            $table->string("type_expedition");
            $table->string("assurance");
            $table->string("douane");

            $table->longText("description");


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
        Schema::dropIfExists('demandes');
    }
}
