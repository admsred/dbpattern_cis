<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_sessions', function (Blueprint $table) {
            $table->string('id',40);
            $table->string('ip_address',50);
            $table->string('user_agent',120);
            $table->integer('last_activity')->unsigned();
            $table->text('user_data');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sys_sessions');
    }
}
