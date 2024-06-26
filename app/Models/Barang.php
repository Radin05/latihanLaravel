<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    
    protected $fillable = ['id','nama','harga', 'stok'];
    public $timestamps = true;

    public function transaksi()
    {
        return $this->hasMany(transaksi::class);
    }
}
