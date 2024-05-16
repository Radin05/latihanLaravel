<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = ['id','nama_produk','price','description','id_brand','cover'];
    // protected $table = ['telepons'];
    public $timestamps = true;


    public function brand()
    {
        return $this->belongsTo(Brand::class, 'id_brand');
    }

    // menghapus image
    public function deleteImage(){
        if($this->cover && file_exists(public_path('image/product' . $this->cover))){
            return unlink(public_path('image/product' . $this->cover));
        }
    }
}

