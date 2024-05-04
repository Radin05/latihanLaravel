<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['id','id_barang','id_pembeli','jumlah','tanggal'];
    // protected $table = ['telepons'];
    public $timestamps = true;


    public function pembeli()
    {
        return $this->belongsTo(pembeli::class, 'id_pembeli');
    }

    public function barang()
    {
        return $this->belongsTo(barang::class, 'id_barang');
    }
}
