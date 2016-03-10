<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesAccess extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_roles_access', function (Blueprint $table) {
            $table->increments('id');
            $table->char('view',1);
            $table->char('add',1);
            $table->char('edit',1);
            $table->char('delete',1);
            $table->char('export',1);
            $table->char('import',1);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('role_id')->unsigned();
            $table->integer('menu_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sys_roles_access');
    }
}
