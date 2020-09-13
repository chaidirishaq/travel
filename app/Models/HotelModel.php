<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelModel extends Model
{
    use HasFactory;

    protected $table = 'mst_hotel';
    protected $fillable = [
        'nama_hotel', 'kategori_hotel', 'area_hotel', 'telepon_hotel', 'alamat_hotel', 'kategori_kamar_hotel', 'harga_kamar_hotel', 'review_hotel',
    ];
    protected $primaryKey = 'id';

    public function HotelOrderModelss()
    {
        return $this->hasMany(HotelOrderModel::class, "kategori_kamar_hotel");
    }

    public function Customer()
    {
        return $this->belongsToMany(CustomerModel::class);
    }
}
