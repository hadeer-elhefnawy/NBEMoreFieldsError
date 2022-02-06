<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatchsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batchs', function (Blueprint $table) {
            $table->id();

            $table->foreignId('role_id')->references('id')->on('fc_access_matrix')
            ->onDelete('cascade');

            $table->string('role_function_batch', 10);
            $table->string('main_menu_batch', 50);
            $table->string('sub_menu1_batch', 50);
            $table->string('sub_menu2_batch', 50);
            $table->string('batch_description', 50);
            $table->tinyInteger('new_batch')->default(0);
            $table->tinyInteger('copy_batch')->default(0);
            $table->tinyInteger('delete_batch')->default(0);
            $table->tinyInteger('close_batch')->default(0);
            $table->tinyInteger('unlock_batch')->default(0);
            $table->tinyInteger('reopen_batch')->default(0);
            $table->tinyInteger('print_batch')->default(0);
            $table->tinyInteger('auth_batch')->default(0);
            $table->tinyInteger('reverse_batch')->default(0);
            $table->tinyInteger('rollover_batch')->default(0);
            $table->tinyInteger('confirm_batch')->default(0);
            $table->tinyInteger('liquidate_batch')->default(0);
            $table->tinyInteger('hold_batch')->default(0);
            $table->tinyInteger('template_batch')->default(0);
            $table->tinyInteger('view_batch')->default(0);
            $table->tinyInteger('generate_batch')->default(0);


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
        Schema::dropIfExists('batchs');
    }
}
