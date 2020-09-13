<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerModel;
use App\Models\HotelModel;
use App\Models\HotelOrderModel;

class HotelOrderController extends Controller
{
    public function index()
    {
        $Customer = CustomerModel::all();
        $Hotel = HotelModel::all();
        $order = HotelOrderModel::all();
        return [$order, $Hotel, $Customer];
    }
}
