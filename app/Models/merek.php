<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class merek extends Model
{
    use HasFactory;
    
    protected $fillable = ['id','nama_merek'];
    // protected $table = ['penggunas'];
    public $timestamps = true;

    // relasi ke tabel telepon
    public function produk()
    {
        return $this->hasMany(produk::class);
    }
}
