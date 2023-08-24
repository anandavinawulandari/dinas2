<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan', function(Blueprint $table){
            $table->kode_laporan();
            $table->string('jenis_surat');
            $table->string('bidang');
            $table->date('tgl_awal');
            $table->date('tgl_akhir');
            $table->date('tgl_nomor');
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
        //
    }
};
