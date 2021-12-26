<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('kondisi');
            $table->bigInteger('dosen_id')->unsigned();
            $table->bigInteger('tahunakademik_id')->unsigned();
            $table->foreign('dosen_id')->references('id')
                  ->on('dosens')->onDelete('cascade');
            $table->foreign('tahunakademik_id')
                  ->references('id')
                  ->on('tahun_akademiks')->onDelete('cascade');
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
        Schema::dropIfExists('inventories');
    }
}
