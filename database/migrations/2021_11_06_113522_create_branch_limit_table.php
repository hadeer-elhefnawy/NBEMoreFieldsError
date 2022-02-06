<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchLimitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_limit', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('role_id')->references('id')->on('fc_access_matrix')
            ->onDelete('cascade');

            $table->tinyInteger('authorizer_role')->default(0);
            $table->string('limit_currency')->nullable();
            $table->integer('user_limit')->nullable();



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
        Schema::dropIfExists('branch_limit');
    }
}
