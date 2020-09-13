<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MstCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_customer', function (Blueprint $table) {
            //
            $table->id(); // type data harus sama
            $table->string("nama_customer");
            $table->date("tanggal_lahir_customer");
            $table->string("jenis_kelamin_customer");
            $table->string("alamat_customer");
            $table->string("kota_customer");
            $table->string("negara_customer");
            $table->string("telepon_customer");
            $table->string("email_customer");
            $table->string("foto_customer");
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
        Schema::table('mst_customer', function (Blueprint $table) {
            //
        });
    }
}
