<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string("title");
            $table->double("latitude")->nullable();
            $table->double("length")->nullable();
            $table->string("name");
            $table->text("information");
            $table->integer("type");
            //$table->string("start_point")->nullable();
            $table->double("radio")->nullable();
            $table->string("border_color")->nullable();
            $table->string("background_color")->nullable();
            $table->double("opacity")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('markers');
    }
}
