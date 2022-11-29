<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTinjauanKeuanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tinjauan_keuangan', function (Blueprint $table) {
            $table->id();
            $table->date('periode'); 
            $table->string('asset'); 
            $table->string('kredit'); 
            $table->string('dpk');
            $table->string('laba'); 
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
        Schema::dropIfExists('tinjauan_keuangan');
    }
}
