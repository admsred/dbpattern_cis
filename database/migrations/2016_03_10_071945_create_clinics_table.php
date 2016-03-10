<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_clinics', function (Blueprint $table) {
            $table->string('id',5)->primary();
            $table->string('name',100);
            $table->string('phone',50);
            $table->string('fax',50);
            $table->string('email',150);
            $table->text('address');
            $table->string('head',50);
            $table->enum('type',['branch','head']);
            $table->enum('status',['on','off'])->index();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('"0000-00-00 00:00:00" on update CURRENT_TIMESTAMP'));
            $table->string('author',50);
            $table->string('province_id',2);
            $table->string('city_id',4);
            $table->string('district_id',7);
            $table->string('sdistrict_id',10);
            $table->integer('price_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mst_clinics');
    }
}
