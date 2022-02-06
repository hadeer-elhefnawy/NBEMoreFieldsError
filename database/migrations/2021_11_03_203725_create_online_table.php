<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->references('id')->on('fc_access_matrix')
            ->onDelete('cascade');

            $table->string('role_function_online', 10);
            $table->string('main_menu_online', 50);
            $table->string('sub_menu1_online', 50);
            $table->string('sub_menu2_online', 50);
            $table->string('online_description', 50);
            $table->tinyInteger('new_online')->default(0);
            $table->tinyInteger('copy_online')->default(0);
            $table->tinyInteger('delete_online')->default(0);
            $table->tinyInteger('close_online')->default(0);
            $table->tinyInteger('unlock_online')->default(0);
            $table->tinyInteger('reopen_online')->default(0);
            $table->tinyInteger('print_online')->default(0);
            $table->tinyInteger('auth_online')->default(0);
            $table->tinyInteger('reverse_online')->default(0);
            $table->tinyInteger('rollover_online')->default(0);
            $table->tinyInteger('confirm_online')->default(0);
            $table->tinyInteger('liquidate_online')->default(0);
            $table->tinyInteger('hold_online')->default(0);
            $table->tinyInteger('template_online')->default(0);
            $table->tinyInteger('view_online')->default(0);
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
        Schema::dropIfExists('online');
    }
}
