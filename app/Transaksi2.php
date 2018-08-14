<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi2 extends Model
{
    protected $table = 'steps2';
    public $fillable = ["upload_pembayaran","pembayaran"];

}
