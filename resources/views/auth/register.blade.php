<x-guest-layout>
    {{-- <x-jet-authentication-card> --}}
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        {{-- <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="nombreempresa" value="{{ __('Nombreempresa') }}" />
                <x-jet-input id="nombreempresa" class="block mt-1 w-full" type="text" name="nombreempresa" :value="old('nombreempresa')" required autofocus autocomplete="nombreempresa" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form> --}}

        <div class="container-fluid">
            <div class="row text-center bg-image header">
                <div class="col-md-12">
                    <h2>
                        Publicar Agente
                    </h2>
                    <p>
                        Home - Publicar Agente
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <div class="alert alert-info text-center" role="alert">
                      ¿Ya estás registrado? Por favor <a href="#" class="alert-link">inicia sesión</a> y si eres un nuevo usuario completa el siguiente Formulario y crea una cuenta.
                    </div>
                </div>
                <div class="col-md-2">
                </div>
            </div>
        
            @error('email')
              <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>¡Error!</strong> {{$message}}
              </div>
        
              <br>
            @enderror
        
            <form action="{{route("register")}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="nombreagente">Nombre del Agente Inmobiliario *</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nombre del Agente" required value="{{ old('nombreagente') }}">
                        <input type="text" class="form-control" name="nombreempresa" id="nombreempresa" placeholder="Nombre de la empresa" required value="{{ old('nombreempresa') }}">
                      </div>
                      <div class="form-group">
                        <label for="ciudad">Ciudad *</label>
                        <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Localidad donde trabajas" required value="{{ old('ciudad') }}">
                      </div>
                      <div class="form-group">
                        <label for="provincia">Provincia *</label>
                        <input type="text" class="form-control" name="provincia" id="provincia" placeholder="Selecciona la provincia" required value="{{ old('provincia') }}">
                      </div>
                      <div class="form-group">
                        <label for="direccion">Dirección *</label>
                        <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección completa" required value="{{ old('direccion') }}">
                      </div>
                      <div class="form-group">
                        <label for="telefonomovil">Teléfono *</label>
                        <input type="tel" class="form-control" name="telefonomovil" id="telefonomovil" placeholder="Teléfono móvil" required value="{{ old('telefonomovil') }}">
                        <input type="tel" class="form-control" name="telefonofijo" id="telefonofijo" placeholder="Teléfono fijo" required value="{{ old('telefonofijo') }}">
                      </div>
                      <div class="form-group">
                        <label for="web">Página web</label>
                        <input type="text" class="form-control" name="web" id="web" placeholder="https://www.ejemplo.com" value="{{ old('web') }}">
                      </div>
                      <div class="form-group">
                        <label for="inmuebles">Lista de inmuebles</label>
                        <input type="text" class="form-control" name="inmuebles" id="inmuebles" placeholder="https://www.ejemplo.com/listado" required value="{{ old('inmuebles') }}">
                      </div>
                      <div class="form-group">
                        <label for="idiomas">Idiomas *</label><br>
                        <select class="selectpicker" multiple data-live-search="true" name="idiomas[]" id="idiomas" required value="{{ old('idiomas[]') }}">
                              <option>Español</option>
                              <option>Inglés</option>
                              <option>Francés</option>
                              <option>Alemán</option>
                              <option>Chino</option>
                              <option>Árabe</option>
                              <option>Ruso</option>
                              <option>Portugués</option>
                              <option>Italiano</option>
                              <option>Euskera</option>
                              <option>Catalán</option>
                              <option>Gallego</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="servicios">Servicios *</label><br>
                        <select class="selectpicker" multiple data-live-search="true" name="servicios[]" id="servicios" required value="{{ old('servicios[]') }}">
                              <option>Administración de Fincas</option>
                              <option>Agente Inmobiliario</option>
                              <option>Analista inversor</option>
                              <option>API</option>
                              <option>Consultoría inmobiliaria</option>
                              <option>Estudio técnico y de diseño</option>
                              <option>Gestor de Propiedades</option>
                              <option>Promoción Inmobiliaria</option>
                              <option>Tasaciones</option>
                            </select>
                      </div>
                      <div class="form-group">
                        <label for="especialidades">Especialidades *</label><br>
                        <select class="selectpicker" multiple data-live-search="true" name="especialidades[]" id="especialidades" required value="{{ old('especialidades[]') }}">
                              <option>Vivienda</option>
                              <option>Obra nueva</option>
                              <option>Local</option>
                              <option>Nave</option>
                              <option>Garaje</option>
                              <option>Oficina</option>
                              <option>Trastero</option>
                              <option>Terreno</option>
                              <option>Edificio</option>
                            </select>
                      </div>
                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-5">
                      <div class="form-group">
                        <label for="profile_photo_path">Fotografía del Agente Inmobiliario</label>
                        <input type="file" class="form-control-file" name="profile_photo_path" id="profile_photo_path" value="{{ old('profile_photo_path') }}">
                      </div>
                      <div class="form-group">
                        <label for="video">Vídeo de presentación</label>
                        <input type="text" class="form-control" name="video" id="video" placeholder="URL del vídeo de presentación" value="{{ old('video') }}">
                      </div>
                      <div class="form-group">
                        <label for="rrdd">Redes Sociales</label>
                        <input type="text" class="form-control" name="rrssfacebook" id="rrssfacebook" placeholder="Facebook Url" value="{{ old('rrssfacebook') }}">
                        <input type="text" class="form-control" name="rrssinstagram" id="rrssinstagram" placeholder="Instagram Url" value="{{ old('rrssinstagram') }}">
                        <input type="text" class="form-control" name="rrssyoutube" id="rrssyoutube" placeholder="Youtube Url" value="{{ old('rrssyoutube') }}">
                        <input type="text" class="form-control" name="rrsslinkedin" id="rrsslinkedin" placeholder="Linkedin Url" value="{{ old('rrsslinkedin') }}">
                        <input type="text" class="form-control" name="rrsstwitter" id="rrsstwitter" placeholder="Twitter Url" value="{{ old('rrsstwitter') }}">
                      </div>
                      <div class="form-group">
                        <label for="sombremi">Sobre mí *</label>
                        <textarea class="form-control" name="sombremi" id="sombremi" rows="5" required placeholder="Describe quién eres, tu trayectoria profesional, tu perfil, la empresa en la que trabajas…." value="{{ old('sombremi') }}"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="serviciostexto">Servicios *</label>
                        <textarea class="form-control" name="serviciostexto" id="serviciostexto" rows="5" required placeholder="Habla y describe los servicios que ofreces..." value="{{ old('serviciostexto') }}"></textarea>
                      </div>

                      <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    </div>
                    <div class="col-md-1">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="email">Introduce tu correo electrónico para registrarte y crear tu cuenta</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="" required value="{{ old('email') }}">
        
                      </div>
                      

                    </div>

                    <div class="col-md-1">
                    </div>
                    <div class="col-md-5 text-center" >
                      <button type="submit" class="btn btn-primary btn-lg">Guardar y vista previa ></button>
                </div>
        
            </form>
        
        </div>
        
            <!--
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/scripts.js"></script>
          -->

    {{-- </x-jet-authentication-card> --}}
</x-guest-layout>







