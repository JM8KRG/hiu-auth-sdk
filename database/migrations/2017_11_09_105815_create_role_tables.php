<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role_group', '32');
            $table->string('role_group_ja', '32');
        });

        Schema::create('role_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uid', '32');
            $table->unsignedInteger('role_groups_id');

            //外部キー制約
            $table->foreign('role_groups_id')
                ->references('id')
                ->on('role_groups')
                ->onDelete('cascade');

            $table->index('uid');
            $table->index('role_groups_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_users');
        Schema::dropIfExists('role_groups');
    }
}
