<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->double("latitude");
            $table->double("length");
            $table->string("name");
            $table->text("information");
            $table->integer("type",["marker","circle","polygon"]);
            $table->double("start_point");
            $table->double("radio");
            $table->string("border_color");
            $table->string("background_color");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marks');
    }
}
