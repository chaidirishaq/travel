<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //Ambil data dari model
    public function getAll()
    {
        $customer = CustomerModel::all();
        return $customer;
    }

    //Insert data
    public function insertData(Request $request)
    {
        $customer = new CustomerModel();

        $customer->nama_customer = $request->nama_customer;
        $customer->tanggal_lahir_customer = $request->tanggal_lahir_customer;
        $customer->jenis_kelamin_customer = $request->jenis_kelamin_customer;
        $customer->alamat_customer = $request->alamat_customer;
        $customer->kota_customer = $request->kota_customer;
        $customer->negara_customer = $request->negara_customer;
        $customer->telepon_customer = $request->telepon_customer;
        $customer->email_customer = $request->email_customer;
        $customer->foto_customer = $request->foto_customer;


        $customer->save();

        return "Data Berhasil Diinput!";
    }

    //Update data
    public function updateData(Request $request, $id)
    {
        $find_customer_by_id = CustomerModel::find($id);

        $find_customer_by_id->nama_customer = $request->nama_customer;
        $find_customer_by_id->tanggal_lahir_customer = $request->tanggal_lahir_customer;
        $find_customer_by_id->jenis_kelamin_customer = $request->jenis_kelamin_customer;
        $find_customer_by_id->alamat_customer = $request->alamat_customer;
        $find_customer_by_id->kota_customer = $request->kota_customer;
        $find_customer_by_id->negara_customer = $request->negara_customer;
        $find_customer_by_id->telepon_customer = $request->telepon_customer;
        $find_customer_by_id->email_customer = $request->email_customer;
        $find_customer_by_id->foto_customer = $request->foto_customer;


        $find_customer_by_id->save();

        return "Data Berhasil Diupdate!";
    }

    //Delete data
    public function deleteData($id)
    {
        $find_customer_by_id = CustomerModel::find($id);
        $find_customer_by_id->delete();

        return "Data Berhasil Dihapus!";
    }

    //Mengambil data berdasarkan id
    public function getDataId($id)
    {
        $customer = CustomerModel::find($id);
        return $customer;
    }
}
