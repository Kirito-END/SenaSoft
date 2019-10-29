<?php

namespace App;
use App\TipoMoneda;
use App\User;
use App\Vendedor;

use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    public function moneda(){
        return $this->belongsTo(TipoMoneda::class);
    }

    public function vendedor(){
        return $this->belongsTo(Vendedor::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}

