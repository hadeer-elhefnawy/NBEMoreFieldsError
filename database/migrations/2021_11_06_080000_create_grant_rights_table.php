<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrantRightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grant_rights', function (Blueprint $table) {
            $table->id();

            $table->foreignId('role_id')->references('id')->on('fc_access_matrix')
            ->onDelete('cascade');

            $table->tinyInteger('cancel');
            $table->tinyInteger('change_node')->default(0);
            $table->tinyInteger('release')->default(0);
            $table->tinyInteger('change_media')->default(0);
            $table->tinyInteger('branch_move')->default(0);
            $table->tinyInteger('hold_branch_rights')->default(0);
            $table->tinyInteger('test_input')->default(0);
            $table->tinyInteger('change_address')->default(0);
            $table->tinyInteger('reinstate')->default(0);
            $table->tinyInteger('change_priority')->default(0);
            $table->tinyInteger('auth_cancel')->default(0);
            $table->tinyInteger('auth_change_node')->default(0);
            $table->tinyInteger('release2')->default(0);
            $table->tinyInteger('change_media2')->default(0);
            $table->tinyInteger('auth_branch_move')->default(0);
            $table->tinyInteger('hold_branch_rights2')->default(0);
            $table->tinyInteger('auth_test_input')->default(0);
            $table->tinyInteger('change_address2')->default(0);
            $table->tinyInteger('auth_reinstate')->default(0);
            $table->tinyInteger('change_priority2')->default(0);
            $table->tinyInteger('install')->default(0);
            $table->tinyInteger('test_check')->default(0);
            $table->tinyInteger('link_contract')->default(0);
            $table->tinyInteger('change_branch_in')->default(0);
            $table->tinyInteger('change_message')->default(0);
            $table->tinyInteger('change_force_release_fund')->default(0);
            $table->tinyInteger('suppress')->default(0);
            $table->tinyInteger('delete_branch_rights')->default(0);
            $table->tinyInteger('print_branch_rights')->default(0);
            $table->tinyInteger('ft_upload')->default(0);
            $table->tinyInteger('move_to_queue')->default(0);
            $table->tinyInteger('change_address_in')->default(0);
            $table->tinyInteger('auth_change_message')->default(0);
            $table->tinyInteger('auth_rights')->default(0);
            $table->tinyInteger('change_force_cover_match')->default(0);


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
        Schema::dropIfExists('grant_rights');
    }
}
