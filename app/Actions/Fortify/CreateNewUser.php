<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),

            'nombreEmpresa' => $input['nombreempresa'],
            'ciudad' => $input['ciudad'],
            'provincia' => $input['provincia'],
            'direccion' => $input['direccion'],
            'telefonoMovil' => $input['telefonomovil'],
            'telefonoFijo' => $input['telefonofijo'],
            'paginaWeb' => $input['web'],
            'listaInmuebles' => $input['inmuebles'],
            'video' => $input['video'],
            // 'imagen' => $input['imagen'],
            'profile_photo_path' => $input['profile_photo_path'],
            'facebook' => $input['rrssfacebook'],
            'youtube' => $input['rrssyoutube'],
            'instagram' => $input['rrssinstagram'],
            'linkedin' => $input['rrsslinkedin'],
            'twitter' => $input['rrsstwitter'],
            'descripcion' => $input['sombremi'],
            'serviciosDescripcion' => $input['serviciostexto']

        ]);
    }
}
