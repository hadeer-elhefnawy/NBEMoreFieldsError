<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductPostingAllowedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_posting_allowed', function (Blueprint $table) {
            $table->id();

            $table->foreignId('role_id')->references('id')->on('fc_access_matrix')
            ->onDelete('cascade');

            $table->tinyInteger('product_allowed')->default(0);
            $table->string('product_code_posting')->nullable();
            $table->string('product_desc_posting',100)->nullable();

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
        Schema::dropIfExists('product_posting_allowed');
    }
}
