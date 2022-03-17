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
        Schema::create('butir', function (Blueprint $table) {
            $table->id();
            $table->string('nama_butir');
            $table->string('satuan_butir');
            $table->Integer('angka_kredit');
            $table->foreignId('id_fungsional');
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
        Schema::dropIfExists('butir');
    }
};
