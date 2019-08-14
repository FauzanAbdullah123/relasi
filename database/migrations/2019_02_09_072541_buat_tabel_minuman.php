<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelMinuman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minuman', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_supplier');            
            $table->string('nm_minuman');
            $table->integer('harga_minuman');
            $table->integer('stok_minuman');
            $table->foreign('id_supplier')->references('id')->on('suplier')->onDelete('CASCADE');
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
        Schema::dropIfExists('minuman');
    }
}
