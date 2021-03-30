<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaction extends Model
{
    use HasFactory;

    protected $table = 'detail_transactions';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'header_transaction_id',
        'packet_id',
        'user_id',
    ];

    static function add_detail_transaction($packet_id,$header_transaction_id,$user_id)
    {
        DetailTransaction::create([
            'packet_id' => $packet_id,
            'header_transaction_id' => $header_transaction_id,
            'user_id' => $user_id,

        ]);
    }
}
