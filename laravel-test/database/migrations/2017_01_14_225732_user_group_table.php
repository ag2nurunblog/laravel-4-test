<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_group', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('group_id');
            $table->integer('user_id');
            $table->string('name');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_group');
    }
}
