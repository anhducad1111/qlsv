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
        Schema::create('giangvien', function (Blueprint $table) {
            $table->increments('magv',10)->unique();
            $table->string('hogv');
            $table->string('tengv');
            $table->date('ngaysinh');
            $table->boolean('gioitinh');
            $table->integer('khoa_id')->unsigned();
            $table->foreign('khoa_id')->references('makhoa')->on('khoa');
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
        Schema::dropIfExists('giangvien');
    }
};
