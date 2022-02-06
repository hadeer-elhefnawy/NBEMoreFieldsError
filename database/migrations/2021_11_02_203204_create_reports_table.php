<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();

            $table->foreignId('role_id')->references('id')->on('fc_access_matrix')
            ->onDelete('cascade');

            
            $table->foreignId('fc_function')->references('id')->on('fc_access_matrix')
            ->onDelete('cascade')->nullable();

            $table->string('role_function_report', 10);
            $table->string('main_menu_report', 50);
            $table->string('sub_menu1_report', 50);
            $table->string('sub_menu2_report', 50);
            $table->string('report_description', 50);
            $table->tinyInteger('print_report')->default(0);
            $table->tinyInteger('generate_report')->default(0);
            
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
        Schema::dropIfExists('reports');
    }
}
