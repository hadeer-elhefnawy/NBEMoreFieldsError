<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenance', function (Blueprint $table) {
            $table->id();

            // $table->integer(id)->unsigned();
            $table->foreignId('role_id')->references('id')->on('fc_access_matrix')
            ->onDelete('cascade');

            $table->foreignId('fc_function')->references('id')->on('fc_access_matrix')
            ->onDelete('cascade')->nullable();


            $table->string('role_function', 10);
            $table->string('main_menu', 50);
            $table->string('sub_menu1', 50);
            $table->string('sub_menu2', 50);
            $table->string('maint_description', 50);
            $table->tinyInteger('new')->default(0);
            $table->tinyInteger('copy')->default(0);
            $table->tinyInteger('delete')->default(0);
            $table->tinyInteger('close')->default(0);
            $table->tinyInteger('unlock')->default(0);
            $table->tinyInteger('reopen')->default(0);
            $table->tinyInteger('print')->default(0);
            $table->tinyInteger('auth')->default(0);
            $table->tinyInteger('reverse')->default(0);
            $table->tinyInteger('rollover')->default(0);
            $table->tinyInteger('confirm')->default(0);
            $table->tinyInteger('liquidate')->default(0);
            $table->tinyInteger('hold')->default(0);
            $table->tinyInteger('template')->default(0);
            $table->tinyInteger('view')->default(0);

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
        Schema::dropIfExists('maintenance');
    }
}
