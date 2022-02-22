<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    protected $table = "horarios";

    //Relacion de 1 a N con la tabla user
    public function users() {
        return $this->belongsTo("App\Models\User");
    }
}
