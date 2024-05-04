<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telepon extends Model
{
    use HasFactory;
    
    protected $fillable = ['id','no_telp','pengguna_id'];
    // protected $table = ['telepons'];
    public $timestamps = true;


    public function pengguna()
    {
        return $this->BelongsTo(pengguna::class, 'pengguna_id');
    }
}
