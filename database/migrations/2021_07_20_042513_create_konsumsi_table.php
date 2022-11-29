<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonsumsiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konsumsi', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); 
            $table->string('alamat'); 
            $table->string('telp'); 
            $table->string('email');
            $table->string('nominal'); 
            $table->enum('status', ['Tunggu', 'Proses', 'Selesai'])->default('Tunggu');  
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
        Schema::dropIfExists('konsumsi');
    }
}
