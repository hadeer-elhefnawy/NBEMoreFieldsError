<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFcFunctionDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fc_function_description', function (Blueprint $table) {
            $table->id();
            $table->string('FUNCTION_ID', 10);
            $table->string('MAIN_MENU', 50);
            $table->string('SUB_MENU_1', 50);
            $table->string('SUB_MENU_2', 50);
            $table->string('DESCRIPTION', 50);
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fc_function_description');
    }
}
