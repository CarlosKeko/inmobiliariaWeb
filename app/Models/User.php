<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'nombreEmpresa',
        'ciudad',
        'provincia',
        'direccion',
        'telefonoMovil',
        'telefonoFijo',
        'paginaWeb',
        'listaInmuebles',
        'video',
        'profile_photo_path',
        'facebook',
        'instagram',
        'youtube',
        'linkedin',
        'twitter',
        'descripcion',
        'serviciosDescripcion'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

     //Relación N a M con la tabla idiomas
     public function idiomas() {
        return $this->belongsToMany("App\Models\Idioma");
    }
    
    //Relación N a M con la tabla servicios
    public function servicios() {
        return $this->belongsToMany("App\Models\Servicio");
    }

    //Relación N a M con la tabla servicios
    public function especialidades() {
        return $this->belongsToMany("App\Models\Especialidad");
    }

    //Relación 1 a N con la tabla horarios
    public function horarios() {
        return $this->hasMany("App\Models\Horario");
    }
}
