<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("species");
            $table->string("breed");
            $table->foreign("species")->references("species")->on("kind_of_animal");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::Table("animal", function(Blueprint $table){
            $table->dropForeign("animal_species_foreign");
        });
        Schema::dropIfExists('animal');
    }
}
