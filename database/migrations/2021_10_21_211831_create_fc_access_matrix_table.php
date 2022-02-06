<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFcAccessMatrixTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fc_access_matrix', function (Blueprint $table) {
            $table->id();
            $table->string('group_name', 50);
            $table->string('role_id', 15);
            $table->string('role_description', 50);
            $table->tinyInteger('centralizaton_role');
            $table->tinyInteger('status');
            $table->string('home_branch_no', 15);
            $table->string('version_no', 15);
            $table->tinyInteger('completed')->default(0);

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
        Schema::dropIfExists('fc_access_matrix');
    }
}
