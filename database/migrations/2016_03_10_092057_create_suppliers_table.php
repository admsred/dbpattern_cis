<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('phone',50);
            $table->string('fax',50);
            $table->string('email',150);
            $table->text('address');
            $table->enum('status',['on','off'])->index();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('"0000-00-00 00:00:00" on update CURRENT_TIMESTAMP'));
            $table->string('author',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mst_suppliers');
    }
}
