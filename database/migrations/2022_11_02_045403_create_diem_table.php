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
        Schema::create('diem', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('diemcc');
            $table->integer('diemtx');
            $table->integer('diemgk');
            $table->integer('diemck');
            $table->integer('diemtong')->nullable();
            $table->string('diemchu')->nullable();
            $table->integer('monhoc_id')->unsigned();
            $table->integer('sinhvien_id')->unsigned();
            $table->foreign('monhoc_id')->references('mamon')->on('monhoc');
            $table->foreign('sinhvien_id')->references('masv')->on('sinhvien');
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
        Schema::dropIfExists('diem');
    }
};
