<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skors', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->unsignedBigInteger('provinsi_id');
            $table->unsignedBigInteger('kota_id');
            $table->string('nama');
            $table->string('nik')->unique()->nullable();
            $table->string('jeniskelamin');
            $table->string('pekerjaan');
            $table->string('jumlahkeluarga');
            $table->float('skor');
            
            $table->foreign('provinsi_id')->references('id')->on('provinsis')->onDelete('cascade');
            $table->foreign('kota_id')->references('id')->on('kotas')->onDelete('cascade');
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
        Schema::dropIfExists('skors');
    }
}
