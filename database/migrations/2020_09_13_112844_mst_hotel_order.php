<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MstHotelOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_hotel_order', function (Blueprint $table) {
            //
            $table->id();
            $table->string("kode_booking_kamar");
            $table->string("kategori_kamar_hotel")->nullable(); // foregin key
            $table->integer("jumlah_booking_kamar");
            $table->date("tanggal_checkin");
            $table->date("tanggal_checkout");
            $table->integer("total_bayar");
            $table->string("nama_customer")->nullable(); //
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
        Schema::table('mst_hotel_order', function (Blueprint $table) {
            //
        });
    }
}
