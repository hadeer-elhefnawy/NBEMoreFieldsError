<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExceptionalLeafGlTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exceptional_leaf_gl', function (Blueprint $table) {
            $table->id();

            $table->foreignId('role_id')->references('id')->on('fc_access_matrix')
            ->onDelete('cascade');

            $table->tinyInteger('gl_allowed_exceptional')->default(0);
            $table->string('node_gl_exceptional',15)->nullable();
            $table->string('node_gl_descripion_en_exceptional',100)->nullable();
            $table->string('node_gl_descripion_ar_exceptional',100)->nullable();
            $table->string('exceptional_leaf_gl',15)->nullable();
            $table->string('leaf_gl_description_en_exceptional',100)->nullable();
            $table->string('leaf_gl_description_ar_exceptional',100)->nullable();


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
        Schema::dropIfExists('exceptional_leaf_gl');
    }
}
