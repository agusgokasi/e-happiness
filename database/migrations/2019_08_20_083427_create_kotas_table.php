<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kotas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('provinsi_id');
            $table->string('kota');
            $table->double('longitude', 22, 10)->nullable();
            $table->double('latitude', 22, 10)->nullable();
            $table->double('skor', 14, 4)->default(0);
            $table->integer('input')->default(0);
            $table->double('final_skor', 14, 4)->default(0);
            $table->string('status')->nullable();
            $table->foreign('provinsi_id')->references('id')->on('provinsis')->onDelete('cascade');
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
        Schema::dropIfExists('kotas');
    }
}
