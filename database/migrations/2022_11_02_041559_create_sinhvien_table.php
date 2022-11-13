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
        Schema::create('sinhvien', function (Blueprint $table) {
            $table->increments('masv',10)->unique();
            $table->string('hosv');
            $table->string('tensv');
            $table->string('gioitinh');
            $table->string('ngaysinh');
            $table->string('quequan');
            $table->string('anhdaidien')->nullable();
            $table->integer('lop_id')->unsigned();
            $table->foreign('lop_id')->references('malop')->on('lop')->onDelete('cascade');
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
        Schema::dropIfExists('sinhvien');
    }
};
