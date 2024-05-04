<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_produk','jumlah','tanggal_produksi','id_merek'];
    // protected $table = ['telepons'];
    public $timestamps = true;


    public function merek()
    {
        return $this->belongsTo(merek::class, 'id_merek');
    }
}
