<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $table = "servicios";

    //Relación N a M con la tabla user
    public function users() {
        return $this->belongsToMany("App\Models\User");
    }
}
