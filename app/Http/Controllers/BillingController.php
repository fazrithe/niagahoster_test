<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailTransaction;
use App\Models\HeaderTransaction;
use Auth;

class BillingCOntroller extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $transaction = DetailTransaction::where('user_id',Auth::user()->id)
        ->join('header_transaction','detail_transactions.header_transaction_id','=','header_transaction.header_transaction_id')
        ->join('packets','detail_transactions.packet_id','=','packets.id')
        ->get();

        $header_transaction = HeaderTransaction::orderby('date')->get();
        return view('billing', compact('transaction','transaction','header_transaction'));
    }
}
