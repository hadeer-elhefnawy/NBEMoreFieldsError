<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccClassRestrictionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acc_class_restriction', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->references('id')->on('fc_access_matrix')
            ->onDelete('cascade');
            $table->tinyInteger('acc_class_restriction')->default(0);
            $table->string('acc_class')->nullable();
            $table->string('acc_class_description',100)->nullable();
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
        Schema::dropIfExists('acc_class_restriction');
    }
}
