<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MstHotel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_hotel', function (Blueprint $table) {
            //
            $table->id(); // primary key
            $table->string("nama_hotel");
            $table->string("kategori_hotel");
            $table->string("area_hotel");
            $table->string("telepon_hotel");
            $table->string("alamat_hotel");
            $table->string("kategori_kamar_hotel");
            $table->string("harga_kamar_hotel");
            $table->string("review_hotel");
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
        Schema::table('mst_hotel', function (Blueprint $table) {
            //
        });
    }
}
