<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_patients', function (Blueprint $table) {
            $table->string('id',25)->primary();
            $table->string('name',100);
            $table->enum('sex',['L','P']);
            $table->date('birthday');
            $table->string('phone',50);
            $table->text('address');
            $table->string('rw',3);
            $table->string('rt',3);
            $table->enum('marital_status',['single','married','widow','widower'])->index();
            $table->enum('membership',['normal','member'])->index();
            $table->enum('insurance',['yes','no'])->index();
            $table->enum('status',['on','off'])->index();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('"0000-00-00 00:00:00" on update CURRENT_TIMESTAMP'));
            $table->string('author',50);
            $table->string('province_id',2);
            $table->string('city_id',4);
            $table->string('district_id',7);
            $table->string('sdistrict_id',10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mst_patients');
    }
}
