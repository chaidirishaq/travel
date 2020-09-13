<?php

namespace App\Http\Controllers;

use App\Models\HotelModel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    //Ambil data dari model
    public function getAll()
    {
        $hotel = HotelModel::all();
        return $hotel;
    }

    //Insert data
    public function insertData(Request $request)
    {
        $hotel = new HotelModel();

        $hotel->nama_hotel = $request->nama_hotel;
        $hotel->kategori_hotel = $request->kategori_hotel;
        $hotel->area_hotel = $request->area_hotel;
        $hotel->telepon_hotel = $request->telepon_hotel;
        $hotel->alamat_hotel = $request->alamat_hotel;
        $hotel->kategori_kamar_hotel = $request->kategori_kamar_hotel;
        $hotel->harga_kamar_hotel = $request->harga_kamar_hotel;
        $hotel->review_hotel = $request->review_hotel;

        $hotel->save();

        return "Data Berhasil Diinput!";
    }

    //Update data
    public function updateData(Request $request, $id)
    {
        $find_hotel_by_id = HotelModel::find($id);

        $find_hotel_by_id->nama_hotel = $request->nama_hotel;
        $find_hotel_by_id->kategori_hotel = $request->kategori_hotel;
        $find_hotel_by_id->area_hotel = $request->area_hotel;
        $find_hotel_by_id->telepon_hotel = $request->telepon_hotel;
        $find_hotel_by_id->alamat_hotel = $request->alamat_hotel;
        $find_hotel_by_id->kategori_kamar_hotel = $request->kategori_kamar_hotel;
        $find_hotel_by_id->harga_kamar_hotel = $request->harga_kamar_hotel;
        $find_hotel_by_id->review_hotel = $request->review_hotel;

        $find_hotel_by_id->save();

        return "Data Berhasil Diupdate!";
    }

    //Delete data
    public function deleteData($id)
    {
        $find_hotel_by_id = HotelModel::find($id);
        $find_hotel_by_id->delete();

        return "Data Berhasil Dihapus!";
    }

    //Mengambil data berdasarkan id
    public function getDataId($id)
    {
        $hotel = HotelModel::find($id);
        return $hotel;
    }
}
