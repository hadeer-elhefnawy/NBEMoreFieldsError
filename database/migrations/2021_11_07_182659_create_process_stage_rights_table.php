<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessStageRightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('process_stage_rights', function (Blueprint $table) {
            $table->id();

            $table->foreignId('role_id')->references('id')->on('fc_access_matrix')
            ->onDelete('cascade');

            $table->string('role_function_Process_stage', 10);
            $table->string('main_menu_Process_stage', 50);
            $table->string('sub_menu1_Process_stage', 50);
            $table->string('sub_menu2_Process_stage', 50);
            $table->string('Process_stage_description', 50);
            $table->tinyInteger('editable')->default(0);

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
        Schema::dropIfExists('process_stage_rights');
    }
}
