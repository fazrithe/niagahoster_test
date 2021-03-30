<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Packet;
use App\Models\Cart;
use App\Models\HeaderTransaction;
use App\Models\DetailTransaction;
use Auth;

class TransactionController extends Controller
{
    public function index($id)
    {
        $paket = Packet::all();
        $cart = null;
        $carts = json_decode(request()->cookie('dw-carts'), true);
        $subtotal = collect($carts)->sum(function($q) {
            return $q['packet_price'];
        });
        $ppn = $subtotal * 10 / 100;
        $packet_id = $id;
        return view('frontend.transaction', compact('paket','carts','subtotal','ppn','packet_id'));
    }

    public function paket($id)
    {
        $paket = Packet::find($id);
        return $paket;
    }

    public function addcart(Request $request)
    {
    $this->validate($request, [
        'packet_id' => 'required',
    ]);

    $carts = json_decode($request->cookie('dw-carts'), true); 
  
        $packet = Packet::find($request->packet_id);
        $carts[$request->packet_id] = [
            'packet_id' => $packet->id,
            'packet_name' => $packet->name,
            'packet_price' => $packet->price
        ];
    
        $request->session()->put('session_packet',$request->packet_id);
        $cookie = cookie('dw-carts', json_encode($carts), 2880);
        return redirect()->back()->cookie($cookie);
    }

    public function delcart($id)
    {
    $carts = json_decode(request()->cookie('dw-carts'), true);
   
    unset($carts[$id]);
        
    $cookie = cookie('dw-carts', json_encode($carts), 2880);
    
    return redirect()->back()->cookie($cookie);
    }
    
    public function cart(Request $request)
    {
        $paket = Packet::all();
        if($request->user_id == null){
            $cart = null;
            return redirect('/transaction')->with(['success' => 'Anda harus melakukan Login terlebih dahulu']);
        }else{
            $data = new Cart;
            $data->user_id      = $request->user_id;
            $data->packet_id    = $request->packet_id;
            $data->save();

            $cart = Cart::where('user_id',$request->user_id)->join('packets','carts.packet_id','=','packets.id')->get();
            $total = Cart::where('user_id',$request->user_id)->join('packets','carts.packet_id','=','packets.id')->sum('price');
            $ppn = $total * 10 / 100;
            return view('frontend.transaction', compact('paket','cart','total','ppn'));
        }
    }

    public function chackout()
    {
        $carts = json_decode(request()->cookie('dw-carts'), true);
        $subtotal = collect($carts)->sum(function($q) {
            return $q['packet_price'];
        });
        $ppn = $subtotal * 10 / 100;

        return view('frontend.chackout', compact('carts','subtotal','ppn'));

    }

    public function buy_order()
    {
        $carts = json_decode(request()->cookie('dw-carts'), true);

        $header_transaction_id = HeaderTransaction::add_header_transaction();
        foreach ($carts as $key => $value){
            $packet_id = $value['packet_id'];
            $user_id = Auth::user()->id;
            DetailTransaction::add_detail_transaction($packet_id,$header_transaction_id,$user_id);
            unset($carts[$packet_id]);
        }
        $cookie = cookie('dw-carts', json_encode($carts), 2880);
        return redirect('/billing')->cookie($cookie);
    }

}
