<?php

namespace App\Actions\Fortify;

use App\Models\Especialidad;
use App\Models\Idioma;
use App\Models\Servicio;
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
            'profile_photo_path' => ['required', 'image', 'max:1024'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ],[
            'profile_photo_path' => 'Error en la subida de la imagen, selecciona otra o prueba más tarde',
            'name.required'=>'Name is required',
            'email.required'=>'Email is required',
            'phone.required'=>'Phone is required',
            'email.unique' =>'Esté mail ya está en uso.'
        ])->validate();

        $user = User::create([
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

        if ($user) {
            foreach($input['idiomas'] as $idioma) {
                $idiomaBuscado = Idioma::where("nombre", "=", strtolower($idioma))->get();
                if (count($idiomaBuscado) >= 1) {
                    $user->idiomas()->attach($idiomaBuscado[0]);

                }
            }

            foreach($input['servicios'] as $servicio) {
                $servicioBuscado = Servicio::where("nombre", "=", strtolower($servicio))->get();
                if (count($servicioBuscado) >= 1) {
                    $user->servicios()->attach($servicioBuscado[0]);

                }
            }

            foreach($input['especialidades'] as $especialidad) {
                $especialidadBuscada = Especialidad::where("nombre", "=", strtolower($especialidad))->get();
                if (count($especialidadBuscada) >= 1) {
                    $user->especialidades()->attach($especialidadBuscada[0]);

                }
            }

        }

        return $user;
    }
}
