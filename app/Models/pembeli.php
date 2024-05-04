<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembeli extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_pendek','jenis_kelamin'];
    public $timestamps = true;

    public function transaksi()
    {
        return $this->hasMany(transaksi::class);
    }
}
