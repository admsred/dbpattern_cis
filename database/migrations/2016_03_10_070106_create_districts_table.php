<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_reg_district', function (Blueprint $table) {
            $table->string('id',7)->primary();
            $table->string('name',100);
            $table->enum('status',['on','off'])->index();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('"0000-00-00 00:00:00" on update CURRENT_TIMESTAMP'));
            $table->string('author',50);
            $table->string('city_id',4);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mst_reg_district');
    }
}
