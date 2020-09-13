<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    use HasFactory;

    protected $table = 'mst_customer';
    protected $fillable = [
        'nama_customer', 'tanggal_lahir_customer', 'jenis_kelamin_customer', 'alamat_customer', 'kota_customer', 'negara_customer', 'telepon_customer', 'email_customer', 'foto_customer',
    ];
    protected $primaryKey = 'id';

    public function HotelOrderModels()
    {
        return $this->hasMany(HotelOrderModel::class, 'id_customer');
    }

    public function HotelModel()
    {
        return $this->belongsToMany(HotelModel::class);
    }
}
