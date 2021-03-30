<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Packet;

class HeaderTransaction extends Model
{
    use HasFactory;

    protected $table = 'header_transaction';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'header_transaction_id',
        'date',
    ];

    static function add_header_transaction()
    {
        $data = HeaderTransaction::create([
            'date' => date('Y-m-d'),
        ]);

        return $data->id;
    }
}
