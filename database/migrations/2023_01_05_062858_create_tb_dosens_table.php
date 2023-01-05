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
        Schema::create('tb_dosens', function (Blueprint $table) {
            $table->id();
            $table->integer('nip');
            $table->string('nama_dosen');
            $table->string('foto_dosen')->nullable();
            $table->bigInteger('ampu_id')->unsigned();
            $table->timestamps();

            $table->foreign('ampu_id')->references('id')->on('tb_matkuls')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_dosens');
    }
};
