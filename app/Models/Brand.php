<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['id','name_brand'];
    // protected $table = ['penggunas'];
    public $timestamps = true;

    // relasi ke tabel telepon
    // public function Product()
    // {
    //     return $this->hasMany(Product::class);
    // }
}
