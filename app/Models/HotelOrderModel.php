<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelOrderModel extends Model
{
    use HasFactory;

    protected $table = 'mst_hotel_order';
    protected $fillable = [
        'kode_booking_kamar', 'kategori_kamar_hotel', 'jumlah_booking_kamar', 'tanggal_checkin', 'tanggal_checkout', 'total_bayar', 'nama_customer',
    ];
    protected $primaryKey = 'id';
}
