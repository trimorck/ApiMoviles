<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Producto extends Model
{
    use HasFactory;

    protected $table = 'producto';
    public $timestamps =false;


    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
