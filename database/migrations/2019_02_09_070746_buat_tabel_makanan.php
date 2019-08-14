<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelMakanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('makanan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_supplier');
            $table->string('nm_makanan');
            $table->integer('harga_makanan');
            $table->integer('stok_makanan');
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
        Schema::dropIfExists('makanan');
    }
}
