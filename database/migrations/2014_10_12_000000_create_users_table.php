<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('fullname',100);
            $table->string('username',50)->unique();
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('phone',50);
            $table->rememberToken();
            $table->enum('status',['on','off'])->index();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('"0000-00-00 00:00:00" on update CURRENT_TIMESTAMP'));
            $table->string('author',50);
            $table->integer('role_id')->unsigned();
            $table->char('clinic_id',5);
            $table->integer('poly_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sys_users');
    }
}
