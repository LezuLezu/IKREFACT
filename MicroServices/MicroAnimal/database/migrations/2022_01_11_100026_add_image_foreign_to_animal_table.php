<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageForeignToAnimalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('animal', function (Blueprint $table) {
            $table->foreign('image')->references('image')->on('images');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('animal', function (Blueprint $table) {
            $table->dropForeign('animal_image_foreign');

        });
    }
}
