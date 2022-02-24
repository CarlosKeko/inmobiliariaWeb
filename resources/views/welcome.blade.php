<x-guest-layout>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">AGENTES INMOBILIARIOS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
            </li>
          </ul>

            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
    
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
            @endif


        </div>
      </nav>


      <br><br>

      {{-- <div lass="container-fluid">

        <div class="row">
            <div class="col-md-1">
            </div>

            <div class="col-md-4">
                <p class="h2">FILTRAR</p>
                <hr width=600>
                <br>
                
                <tr>
                  <td>
                    <select data-column="0" class="form-control filter-select" aria-label="Disabled select example">
                      <option selected>Cerca de mi</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </td>
                  <td>
                    <select data-column="1" class="form-control filter-select" aria-label="Disabled select example">
                      <option selected>Cerca de mi</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </td>
                  <td>
                    <select data-column="2" class="form-control filter-select" aria-label="Disabled select example">
                      <option selected>Cerca de mi</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </td>
                  <td>
                    <select data-column="2" class="form-control filter-select" aria-label="Disabled select example">
                      <option selected>Cerca de mi</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </td>
                  <td>
                    <select data-column="2" class="form-control filter-select" aria-label="Disabled select example">
                      <option selected>Cerca de mi</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </td>
                </tr> --}}




                {{-- <select class="form-select" aria-label="Disabled select example">
                  <option selected>Todos los Servicios</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>

                <select class="form-select" aria-label="Disabled select example">
                  <option selected>Todas las Especialidades</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                
                <select class="form-select" aria-label="Disabled select example">
                  <option selected>Idiomas</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>

                <select class="form-select" aria-label="Disabled select example">
                  <option selected>Abierto ahora</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select> --}}
                
                {{-- <br>
                <br>
                <ul>
                  @foreach ($users as $user) 
                      <li>{{$user->name}}</li>
                  
                  @endforeach
                </ul>
          
                {{$users->links()}}


            </div>

        </div>

      </div>


      <br> --}}


      <form action="/" method="GET">
        <div class="form-group">
  
          <select name="distancia" id="distancia" class="form-control input-lg-dynamic" data-dependent="state">
            <option value="">Cerca de mí</option>
          </select>
          <br>
  
          <select name="servicios" id="servicios" class="form-control input-lg-dynamic" data-dependent="state">
            <option value="">Todos los Servicios</option>
            <option value="administración de fincas">Administración de Fincas</option>
            <option value="agente inmobiliario">Agente Inmobiliario</option>
            <option value="analista inversor">Analista inversor</option>
            <option value="api">API</option>
            <option value="consultoría inmobiliaria">Consultoría inmobiliaria</option>
            <option value="estudio técnico y de diseño">Estudio técnico y de diseño</option>
            <option value="gestor de propiedades">Gestor de Propiedades</option>
            <option value="promoción inmobiliaria">Promoción Inmobiliaria</option>
            <option value="tasaciones">Tasaciones</option>
          </select>
          <br>
  
          <select name="especialidades" id="especialidades" class="form-control input-lg-dynamic" data-dependent="state">
            <option value="">Todas las Especialidades</option>
            <option value="vivienda">Vivienda</option>
            <option value="obra nueva">Obra nueva</option>
            <option value="local">Local</option>
            <option value="nave">Nave</option>
            <option value="garaje">Garaje</option>
            <option value="oficina">Oficina</option>
            <option value="trastero">Trastero</option>
            <option value="terreno">Terreno</option>
            <option value="edificio">Edificio</option>
          </select>
          <br>
  
          <select name="idiomas" id="idiomas" class="form-control input-lg-dynamic" data-dependent="state">
            <option value="">Idiomas</option>
            <option value="español">Español</option>
            <option value="inglés">Inglés</option>
            <option value="francés">Francés</option>
            <option value="alemán">Alemán</option>
            <option value="chino">Chino</option>
            <option value="árabe">Árabe</option>
            <option value="ruso">Ruso</option>
            <option value="portugués">Portugués</option>
            <option value="italiano">Italiano</option>
            <option value="euskera">Euskera</option>
            <option value="catalán">Catalán</option>
            <option value="gallego">Gallego</option>
          </select>
          <br>
  
          <select name="horario" id="horario" class="form-control input-lg-dynamic" data-dependent="state">
            <option value="">Abierto ahora</option>
          </select>
          <br>
    
  
        </div>
        <button type="submit" class="btn btn-primary btn-lg">Buscar</button>
      </form>



      @forelse($perfiles as $perfil) 
      <h1><a href="perfil/{{$perfil->id}}">{{$perfil->email}}
      </a>
      </h1>

      @empty
      Sin resultados
      @endforelse



</x-guest-layout>