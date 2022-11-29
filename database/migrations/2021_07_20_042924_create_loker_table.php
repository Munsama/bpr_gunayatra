<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLokerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loker', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('nama_pekerjaan');
            $table->text('kualifikasi');
            $table->text('objektif');
            $table->text('keuntungan');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loker');
    }
}
