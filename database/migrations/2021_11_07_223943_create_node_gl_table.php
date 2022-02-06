<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNodeGlTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('node_gl', function (Blueprint $table) {
            $table->id();

            $table->foreignId('role_id')->references('id')->on('fc_access_matrix')
            ->onDelete('cascade');

            $table->tinyInteger('gl_allowed_node')->default(0);
            $table->string('node_gl_node',15)->nullable();
            $table->string('node_gl_descripion_en_node',100)->nullable();
            $table->string('node_gl_descripion_ar_node',100)->nullable();


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
        Schema::dropIfExists('node_gl');
    }
}
