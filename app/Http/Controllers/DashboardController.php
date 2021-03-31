<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Packet;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function index()
    {
        session()->forget('user');
        $packet_old_1 = Packet::find(1);
        $packet_old_2 = Packet::find(2);
        $packet_old_3 = Packet::find(3);
        $packet_old_4 = Packet::find(4);

        $packet_all = [
            'packet_old_1' => $packet_old_1,
            'packet_old_2' => $packet_old_2,
            'packet_old_3' => $packet_old_3,
            'packet_old_4' => $packet_old_4,
        ];

        $price_1_2 = Str::substr($packet_old_1->price, 2);
        $price_1_1 = Str::substr($packet_old_1->price, 0,2);

        $price_2_2 = Str::substr($packet_old_2->price, 2);
        $price_2_1 = Str::substr($packet_old_2->price, 0,2);

        $price_3_2 = Str::substr($packet_old_3->price, 2);
        $price_3_1 = Str::substr($packet_old_3->price, 0,2);

        $price_4_2 = Str::substr($packet_old_4->price, 2);
        $price_4_1 = Str::substr($packet_old_4->price, 0,2);

        $packet_str = [
            'price_1_1' => $price_1_1,
            'price_1_2' => $price_1_2,
            'price_2_1' => $price_2_1,
            'price_2_2' => $price_2_2,
            'price_3_1' => $price_3_1,
            'price_3_2' => $price_3_2,
            'price_4_1' => $price_4_1,
            'price_4_2' => $price_4_2,
        ];


        return view('frontend.dashboard', compact('packet_all','packet_str'));
    }
}
