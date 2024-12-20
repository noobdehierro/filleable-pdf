<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de solicitud de crédito</title>
    <!-- Incluir Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- agregar jquery --}}
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.js') }}"></script>
    <style>
        input:focus,
        select:focus,
        textarea:focus {
            border-color: #28a745 !important;
            /* Color verde de Bootstrap */
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25) !important;
            /* Sombra verde */
            outline: none;
            /* Opcional, elimina el borde adicional */
        }

        /* .shadow-green {
            box-shadow: 0 1rem 3rem rgba(40, 167, 69, 0.175) !important;
            /* Sombra verde */
        }

        */
    </style>
</head>

<body class="bg-success p-2 text-dark bg-opacity-25">
    <form action="{{ route('form.store') }}" method="POST" novalidate>

        <div class="container mt-3 shadow-lg p-3 mb-5 bg-body rounded ">

            <img style="display: block; margin: 0 auto" src="{{ asset('img/logo.png') }}" class="img-fluid"
                alt="Logo">

            <h2 class="text-center mb-4 mt-4">Formulario de solicitud de crédito</h2>
            <!-- Formulario -->
            @csrf
            <!-- Primera fila de dos campos -->
            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    {{-- <label for="asesor" class="form-label text-muted fs-6 fw-bold">Asesor</label> --}}
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Asesor</span>
                        <input type="text" class="form-control @error('asesor') is-invalid @enderror" id="asesor"
                            name="asesor" value="{{ old('asesor') }}" placeholder="Asesor" aria-label="Asesor"
                            aria-describedby="asesorError">
                        @error('asesor')
                            <div id="asesorError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Solicitante</span>
                        <input type="text" class="form-control @error('nombresolicitante') is-invalid @enderror"
                            id="nombresolicitante" name="nombresolicitante" value="{{ old('nombresolicitante') }}"
                            placeholder="Nombre(s) del solicitante" aria-label="Nombre(s) del solicitante"
                            aria-describedby="nombresolicitanteError">
                        @error('nombresolicitante')
                            <div id="nombresolicitanteError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Apellido Paterno</span>
                        <input type="text" class="form-control @error('apellidopaterno') is-invalid @enderror"
                            id="apellidopaterno" name="apellidopaterno" value="{{ old('apellidopaterno') }}"
                            placeholder="Apellido Paterno" aria-label="Apellido Paterno"
                            aria-describedby="apellidopaternoError">
                        @error('apellidopaterno')
                            <div id="apellidopaternoError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Apellido Materno</span>
                        <input type="text" class="form-control @error('apellidomaterno') is-invalid @enderror"
                            id="apellidomaterno" name="apellidomaterno" value="{{ old('apellidomaterno') }}"
                            placeholder="Apellido Materno" aria-label="Apellido Materno"
                            aria-describedby="apellidomaternoError">
                        @error('apellidomaterno')
                            <div id="apellidomaternoError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">CURP</span>
                        <input type="text" class="form-control @error('curp') is-invalid @enderror" id="curp"
                            name="curp" value="{{ old('curp') }}" placeholder="CURP" aria-label="CURP"
                            aria-describedby="curpError">
                        @error('curp')
                            <div id="curpError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">RFC</span>
                        <input type="text" class="form-control @error('rfc') is-invalid @enderror" id="rfc"
                            name="rfc" value="{{ old('rfc') }}" placeholder="RFC" aria-label="RFC"
                            aria-describedby="rfcError">
                        @error('rfc')
                            <div id="rfcError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Domicilio</span>
                        <input type="text" class="form-control @error('domicilio') is-invalid @enderror"
                            id="domicilio" name="domicilio" value="{{ old('domicilio') }}"
                            placeholder="Domicilio (calle y número)" aria-label="Domicilio"
                            aria-describedby="domicilioError">
                        @error('domicilio')
                            <div id="domicilioError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Colonia</span>
                        <input type="text" class="form-control @error('colonia') is-invalid @enderror"
                            id="colonia" name="colonia" value="{{ old('colonia') }}" placeholder="Colonia"
                            aria-label="Colonia" aria-describedby="coloniaError">
                        @error('colonia')
                            <div id="coloniaError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Delegación o municipio</span>
                        <input type="text" class="form-control @error('delegacion') is-invalid @enderror"
                            id="delegacion" name="delegacion" value="{{ old('delegacion') }}"
                            placeholder="Delegación o municipio" aria-label="Delegación"
                            aria-describedby="delegacionError">
                        @error('delegacion')
                            <div id="delegacionError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Ciudad</span>
                        <input type="text" class="form-control @error('ciudad') is-invalid @enderror"
                            id="ciudad" name="ciudad" value="{{ old('ciudad') }}" placeholder="Ciudad"
                            aria-label="Ciudad" aria-describedby="ciudadError">
                        @error('ciudad')
                            <div id="ciudadError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Estado</span>
                        <input type="text" class="form-control @error('estado') is-invalid @enderror"
                            id="estado" name="estado" value="{{ old('estado') }}" placeholder="Estado"
                            aria-label="Estado" aria-describedby="estadoError">
                        @error('estado')
                            <div id="estadoError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="col-12 col-md-6">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Código Postal</span>
                            <input type="text" class="form-control @error('codigopostal') is-invalid @enderror"
                                id="codigopostal" name="codigopostal" value="{{ old('codigopostal') }}"
                                placeholder="Código Postal" aria-label="Código Postal"
                                aria-describedby="codigopostalError">
                            @error('codigopostal')
                                <div id="codigopostalError" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Celular</span>
                            <input type="text" class="form-control @error('celular') is-invalid @enderror"
                                id="celular" name="celular" value="{{ old('celular') }}" placeholder="Celular"
                                aria-label="Celular" aria-describedby="celularError">
                            @error('celular')
                                <div id="celularError" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Fecha del llenado</span>
                            <input type="date" class="form-control @error('lugaryfecha') is-invalid @enderror"
                                id="lugaryfecha" name="lugaryfecha" value="{{ old('lugaryfecha') }}"
                                placeholder="Fecha del llenado" aria-label="Fecha del llenado"
                                aria-describedby="lugaryfechaError">
                            @error('lugaryfecha')
                                <div id="lugaryfechaError" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-3 shadow-lg p-3 mb-5 bg-body rounded">


            <h3 class="mt-2 text-center mb-3 fw-bold fs-5 ">CRÉDITO SOLICITADO</h3>

            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Monto solicitado</span>
                        <input type="number" class="form-control @error('montosolicitado') is-invalid @enderror"
                            id="montosolicitado" name="montosolicitado" value="{{ old('montosolicitado') }}"
                            placeholder="Monto solicitado" aria-label="Monto solicitado"
                            aria-describedby="montosolicitadoError">
                        @error('montosolicitado')
                            <div id="montosolicitadoError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Plazo</span>
                        {{-- <input type="text" class="form-control @error('plazo') is-invalid @enderror"
                            id="plazo" name="plazo" value="{{ old('plazo') }}" placeholder="Plazo"
                            aria-label="Plazo" aria-describedby="plazoError"> --}}
                        <select class="form-select" name="plazo" id="plazo">
                            <option selected>Seleccione una opcion</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                            <option value="45">45</option>
                            <option value="46">46</option>
                            <option value="47">47</option>
                            <option value="48">48</option>
                        </select>
                        @error('plazo')
                            <div id="plazoError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            {{-- radio buton --}}
            <div class="row mb-3">
                <!-- Grupo de radios para Tipo de solicitud -->
                <div class="col-12 col-md-6">
                    <fieldset class="form-group">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Tipo de crédito</span>
                            <select class="form-select" aria-label="Tipo de solicitud" name="tiposolicitud"
                                id="tiposolicitud">
                                <option selected>Seleccione una opción</option>
                                <option value="Opción1">Apertura</option>
                                <option value="Opción2">Refinanciamiento</option>
                                <option value="Opción3">CC</option>
                            </select>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
        <div class="container mt-3 shadow-lg p-3 mb-5 bg-body rounded">


            <h3 class="mt-2 text-center mb-3 fw-bold fs-5 ">SOLICITANTE:</h3>
            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Banco</span>
                        <input type="text" class="form-control @error('banco') is-invalid @enderror"
                            id="banco" name="banco" value="{{ old('banco') }}" placeholder="Banco"
                            aria-label="Banco" aria-describedby="bancoError">
                        @error('banco')
                            <div id="bancoError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">CLABE</span>
                        <input type="text" class="form-control @error('ctaclabe') is-invalid @enderror"
                            id="ctaclabe" name="ctaclabe" value="{{ old('ctaclabe') }}" placeholder="Cuenta CLABE"
                            aria-label="Cuenta CLABE" aria-describedby="ctaclabeError">
                        @error('ctaclabe')
                            <div id="ctaclabeError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <!-- Grupo de radios para genero -->
                <div class="col-md-4">
                    <fieldset class="form-group">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Genero</span>

                            <select class="form-select" aria-label="Genero" name="genero" id="genero">
                                <option selected>Seleccione una opción</option>
                                <option value="Opción1">Masculino</option>
                                <option value="Opción2">Femenino</option>
                            </select>
                        </div>
                    </fieldset>
                </div>
                <!-- Campo de entrada para telefonofijo -->

                <div class="col-md-4">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Teléfono Fijo</span>
                        <input type="text" class="form-control @error('telefonofijo') is-invalid @enderror"
                            id="telefonofijo" name="telefonofijo" value="{{ old('telefonofijo') }}"
                            placeholder="Teléfono Fijo" aria-label="Teléfono Fijo"
                            aria-describedby="telefonofijoError">
                        @error('telefonofijo')
                            <div id="telefonofijoError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <!-- Campo de entrada para fecha de nacimiento -->
                <div class="col-md-4">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Fecha de Nacimiento</span>
                        <input type="date" class="form-control @error('fechanacimiento') is-invalid @enderror"
                            id="fechanacimiento" name="fechanacimiento" value="{{ old('fechanacimiento') }}"
                            aria-label="Fecha de Nacimiento" aria-describedby="fechanacimientoError">
                        @error('fechanacimiento')
                            <div id="fechanacimientoError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Entidad Federativa de
                            nacimiento</span>
                        <input type="text" class="form-control @error('entidadfederativa') is-invalid @enderror"
                            id="entidadfederativa" name="entidadfederativa" value="{{ old('entidadfederativa') }}"
                            placeholder="Entidad Federativa" aria-label="Entidad Federativa de nacimiento"
                            aria-describedby="entidadfederativaError">
                        @error('entidadfederativa')
                            <div id="entidadfederativaError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Correo Electrônico</span>
                        <input type="text" class="form-control @error('correoelectronico') is-invalid @enderror"
                            id="correoelectronico" name="correoelectronico" value="{{ old('correoelectronico') }}"
                            placeholder="Correo Electrônico" aria-label="Correo Electrônico"
                            aria-describedby="correoelectronicoError">
                        @error('correoelectronico')
                            <div id="correoelectronicoError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <!-- Grupo de radios para tipo de vivienda -->
                <div class="col-md-4">
                    <fieldset class="form-group">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Tipo de vivienda</span>
                            <select class="form-select" aria-label="tipovivienda" name="tipovivienda"
                                id="tipovivienda">
                                <option value="" selected>Seleccione una opción</option>
                                <option value="Opción3">Propia</option>
                                <option value="Opción1">Rentada</option>
                                <option value="Opción2">Vive con papás</option>
                            </select>
                        </div>
                    </fieldset>
                </div>
                <!-- Campo de entrada para tiempo de residir  -->

                <div class="col-md-4">

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Tiempo de residir</span>
                        <input type="text" class="form-control @error('tiempoderesidir') is-invalid @enderror"
                            id="tiempoderesidir" name="tiempoderesidir" value="{{ old('tiempoderesidir') }}"
                            placeholder="Tiempo de residir" aria-label="Tiempo de residir"
                            aria-describedby="tiempoderesidirError">
                        @error('tiempoderesidir')
                            <div id="tiempoderesidirError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <!-- Campo de entrada para nombre arrendador -->
                <div class="col-md-4 arrendador">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Arrendador</span>
                        <input type="text" class="form-control @error('nombrearrendador') is-invalid @enderror"
                            id="nombrearrendador" name="nombrearrendador" value="{{ old('nombrearrendador') }}"
                            placeholder="Arrendador" aria-label="Nombre del Arrendador"
                            aria-describedby="nombrearrendadorError">
                        @error('nombrearrendador')
                            <div id="nombrearrendadorError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row mb-3 arrendador">
                <div class="col-md-4">

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Apellido 1</span>
                        <input type="text"
                            class="form-control @error('apellidopaternoarrendador') is-invalid @enderror"
                            id="apellidopaternoarrendador" name="apellidopaternoarrendador"
                            value="{{ old('apellidopaternoarrendador') }}" placeholder="Apellido 1"
                            aria-label="Apellido paterno del arrendador"
                            aria-describedby="apellidopaternoarrendadorError">
                        @error('apellidopaternoarrendador')
                            <div id="apellidopaternoarrendadorError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Apellido 2</span>
                        <input type="text"
                            class="form-control @error('apellidomaternoarrendador') is-invalid @enderror"
                            id="apellidomaternoarrendador" name="apellidomaternoarrendador"
                            value="{{ old('apellidomaternoarrendador') }}" placeholder="Apellido 2"
                            aria-label="Apellido materno del arrendador"
                            aria-describedby="apellidomaternoarrendadorError">
                        @error('apellidomaternoarrendador')
                            <div id="apellidomaternoarrendadorError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Celular</span>
                        <input type="text" class="form-control @error('celulararrendador') is-invalid @enderror"
                            id="celulararrendador" name="celulararrendador" value="{{ old('celulararrendador') }}"
                            placeholder="Celular" aria-label="Celular del arrendador"
                            aria-describedby="celulararrendadorError">
                        @error('celulararrendador')
                            <div id="celulararrendadorError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

        </div>
        <div class="container mt-3 shadow-lg p-3 mb-5 bg-body rounded">

            <h3 class="mt-2 text-center mb-3 fw-bold fs-5 ">DATOS LABORALES</h3>
            <div class="row mb-3">

                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Centro de Trabajo</span>
                        <input type="text" class="form-control @error('centrotrabajo') is-invalid @enderror"
                            id="centrotrabajo" name="centrotrabajo" value="{{ old('centrotrabajo') }}"
                            placeholder="Centro de trabajo" aria-label="Centro de trabajo"
                            aria-describedby="centrotrabajoError">
                        @error('centrotrabajo')
                            <div id="centrotrabajoError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Puesto</span>
                        <input type="text" class="form-control @error('puesto') is-invalid @enderror"
                            id="puesto" name="puesto" value="{{ old('puesto') }}" placeholder="Puesto"
                            aria-label="Puesto" aria-describedby="puestoError">
                        @error('puesto')
                            <div id="puestoError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Telefono laboral</span>
                        <input type="text" class="form-control @error('telefonolaboral') is-invalid @enderror"
                            id="telefonolaboral" name="telefonolaboral" value="{{ old('telefonolaboral') }}"
                            placeholder="Telefono laboral" aria-label="Telefono laboral"
                            aria-describedby="telefonolaboralError">
                        @error('telefonolaboral')
                            <div id="telefonolaboralError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Extencion</span>
                        <input type="text" class="form-control @error('extencion') is-invalid @enderror"
                            id="extencion" name="extencion" value="{{ old('extencion') }}" placeholder="Extencion"
                            aria-label="Extencion" aria-describedby="extencionError">
                        @error('extencion')
                            <div id="extencionError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Sueldo</span>
                        <input type="number" class="form-control @error('sueldo') is-invalid @enderror"
                            id="sueldo" name="sueldo" value="{{ old('sueldo') }}" placeholder="Sueldo"
                            aria-label="Sueldo" aria-describedby="sueldoError">
                        @error('sueldo')
                            <div id="sueldoError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Fecha de ingreso</span>
                        <input type="date" class="form-control @error('fechaingreso') is-invalid @enderror"
                            id="fechaingreso" name="fechaingreso" value="{{ old('fechaingreso') }}"
                            placeholder="Fecha de ingreso" aria-label="Fecha de ingreso"
                            aria-describedby="fechaingresoError">
                        @error('fechaingreso')
                            <div id="fechaingresoError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-3 shadow-lg p-3 mb-5 bg-body rounded">

            <h3 class="mt-2 text-center mb-3 fw-bold fs-5 ">REFERENCIA LABORAL</h3>
            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
                        <input type="text" class="form-control @error('nombrereflaboral') is-invalid @enderror"
                            id="nombrereflaboral" name="nombrereflaboral" value="{{ old('nombrereflaboral') }}"
                            placeholder="Nombre" aria-label="Nombre" aria-describedby="nombrereflaboralError">
                        @error('nombrereflaboral')
                            <div id="nombrereflaboralError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Apellido 1</span>
                        <input type="text"
                            class="form-control @error('apellidopaternoreflaboral') is-invalid @enderror"
                            id="apellidopaternoreflaboral" name="apellidopaternoreflaboral"
                            value="{{ old('apellidopaternoreflaboral') }}" placeholder="Apellido 1"
                            aria-label="Apellido 1" aria-describedby="apellidopaternoreflaboralError">
                        @error('apellidopaternoreflaboral')
                            <div id="apellidopaternoreflaboralError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Apellido 2</span>
                        <input type="text"
                            class="form-control @error('apellidomaternoreflaboral') is-invalid @enderror"
                            id="apellidomaternoreflaboral" name="apellidomaternoreflaboral"
                            value="{{ old('apellidomaternoreflaboral') }}" placeholder="Apellido 2"
                            aria-label="Apellido 2" aria-describedby="apellidomaternoreflaboralError">
                        @error('apellidomaternoreflaboral')
                            <div id="apellidomaternoreflaboralError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Célular</span>
                        <input type="text" class="form-control @error('celularreflaboral') is-invalid @enderror"
                            id="celularreflaboral" name="celularreflaboral" value="{{ old('celularreflaboral') }}"
                            placeholder="Célular" aria-label="Célular" aria-describedby="celularreflaboralError">
                        @error('celularreflaboral')
                            <div id="celularreflaboralError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Teléfono fijo</span>
                        <input type="text"
                            class="form-control @error('telefonofijoreflaboral') is-invalid @enderror"
                            id="telefonofijoreflaboral" name="telefonofijoreflaboral"
                            value="{{ old('telefonofijoreflaboral') }}" placeholder="Teléfono fijo"
                            aria-label="Teléfono fijo" aria-describedby="telefonofijoreflaboralError">
                        @error('telefonofijoreflaboral')
                            <div id="telefonofijoreflaboralError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Dirección (Calle / Colonia /
                            Municipio / Ciudad)</span>
                        <input type="text" class="form-control @error('direccionreflaboral') is-invalid @enderror"
                            id="direccionreflaboral" name="direccionreflaboral"
                            value="{{ old('direccionreflaboral') }}"
                            placeholder="Dirección (Calle / Colonia / Municipio / Ciudad / Estado / CP)"
                            aria-label="Dirección (Calle / Colonia / Municipio / Ciudad / Estado / CP)"
                            aria-describedby="direccionreflaboralError">
                        @error('direccionreflaboral')
                            <div id="direccionreflaboralError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-3 shadow-lg p-3 mb-5 bg-body rounded">

            <h3 class="mt-2 text-center mb-3 fw-bold fs-5 ">CONOCIMIENTO DEL CLIENTE</h3>

            {{-- fila de 3 radios butones --}}
            <div class="row mb-3">
                <div class="col-12 col-md-6">

                    <fieldset class="form-group">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">¿Cuál es el destino de los
                                recursos otorgados?</span>
                            <select class="form-select" aria-label="destinorecursos" name="destinorecursos">
                                <option selected>Seleccione una opción</option>
                                <option value="Opción8">Gastos personales</option>
                                <option value="Opción9">Pago de créditos</option>
                                <option value="Opción10">Administración de inversiones</option>
                            </select>
                        </div>
                    </fieldset>
                </div>
                <div class="col-12 col-md-6">
                    <fieldset class="form-group">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Mercadotecnia y
                                Publicidad.</span>
                            <select class="form-select" aria-label="autorizacion" name="autorizacion">
                                <option selected>Seleccione una opción</option>
                                <option value="Opción30">Si</option>
                                <option value="Opción31">No</option>
                            </select>
                        </div>
                    </fieldset>
                </div>
                {{-- <div class="col-12 col-md-6">

                    <fieldset class="form-group">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">¿Cuántas operaciones
                                estima realizar por mes?</span>

                            <select class="form-select" aria-label="operacionesestimadas"
                                name="operacionesestimadas">
                                <option selected>Seleccione una opción</option>
                                <option value="Opción1">De 0 a 4</option>
                                <option value="Opción2">De 4 a 10</option>
                                <option value="Opción3">Más de 10</option>
                            </select>
                        </div>
                    </fieldset>
                </div> --}}
            </div>
        </div>
        <div class="container mt-3 shadow-lg p-3 mb-5 bg-body rounded">

            <h3 class="mt-2 text-center mb-3 fw-bold fs-5 ">DATOS:</h3>

            <div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Funciones</span>
                    <textarea class="form-control @error('funciones') is-invalid @enderror" id="funciones" name="funciones"
                        value="{{ old('funciones') }}" placeholder="Funciones" aria-label="Funciones"
                        aria-describedby="funcionesError"></textarea>
                    @error('funciones')
                        <div id="funcionesError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

        </div>
        <div class="container mt-3 shadow-lg p-3 mb-5 bg-body rounded">


            <h3 class="mt-2 text-center mb-3 fw-bold fs-5 ">CARATULA DE CRÉDITO</h3>

            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">CAT</span>
                        <input type="text" class="form-control @error('cat') is-invalid @enderror" id="cat"
                            name="cat" value="{{ old('cat') }}" placeholder="CAT" aria-label="CAT"
                            aria-describedby="catError">
                        @error('cat')
                            <div id="catError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Tasa ordinaria</span>
                        <input type="text" class="form-control @error('tasaordinaria') is-invalid @enderror"
                            id="tasaordinaria" name="tasaordinaria" value="{{ old('tasaordinaria') }}"
                            placeholder="Tasa ordinaria" aria-label="Tasa ordinaria"
                            aria-describedby="tasaordinariaError">
                        @error('tasaordinaria')
                            <div id="tasaordinariaError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Tasa moratoria</span>
                        <input type="text" class="form-control @error('tasamoratoria') is-invalid @enderror"
                            id="tasamoratoria" name="tasamoratoria" value="{{ old('tasamoratoria') }}"
                            placeholder="Tasa moratoria" aria-label="Tasa moratoria"
                            aria-describedby="tasamoratoriaError">
                        @error('tasamoratoria')
                            <div id="tasamoratoriaError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Monto total a pagar</span>
                        <input type="number" class="form-control @error('montototalpagar') is-invalid @enderror"
                            id="montototalpagar" name="montototalpagar" value="{{ old('montototalpagar') }}"
                            placeholder="Monto total a pagar" aria-label="Monto total a pagar"
                            aria-describedby="montototalpagarError">
                        @error('montototalpagar')
                            <div id="montototalpagarError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                {{-- <div class="col-12 col-md-6">

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Fecha de vencimiento</span>
                        <input type="date" class="form-control @error('fechavencimiento') is-invalid @enderror"
                            id="fechavencimiento" name="fechavencimiento" value="{{ old('fechavencimiento') }}"
                            placeholder="Fecha de vencimiento" aria-label="Fecha de vencimiento"
                            aria-describedby="fechavencimientoError">
                        @error('fechavencimiento')
                            <div id="fechavencimientoError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div> --}}
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Fecha de corte</span>
                        <input type="date" class="form-control @error('fechacorte') is-invalid @enderror"
                            id="fechacorte" name="fechacorte" value="{{ old('fechacorte') }}"
                            placeholder="Fecha de corte" aria-label="Fecha de corte"
                            aria-describedby="fechacorteError">
                        @error('fechacorte')
                            <div id="fechacorteError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            {{-- <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Fecha de primer pago</span>
                        <input type="date" class="form-control @error('fechaprimerpago') is-invalid @enderror"
                            id="fechaprimerpago" name="fechaprimerpago" value="{{ old('fechaprimerpago') }}"
                            placeholder="Fecha de primer pago" aria-label="Fecha de primer pago"
                            aria-describedby="fechaprimerpagoError">
                        @error('fechaprimerpago')
                            <div id="fechaprimerpagoError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div> --}}

            <h3 class="mt-2 text-center mb-3 fw-bold fs-5 ">Seguros y estados de cuenta</h3>

            <div class="row mb-3">

                <div class="col-12 col-md-6">
                    <fieldset class="form-group">
                        {{-- <legend class="form-label text-muted fs-6 text-uppercase text-center">Enviar a domicilio</legend> --}}
                        <div class="form-check form-switch">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Enviar a
                                domicilio</label>
                            <input class="form-check-input" type="checkbox" role="switch"
                                id="flexSwitchCheckDefault" name="enviardomicilio">
                        </div>

                        <div class="form-check form-switch">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Consultar vía
                                internet</label>
                            <input class="form-check-input" type="checkbox" role="switch"
                                id="flexSwitchCheckDefault" name="consultarinternet">
                        </div>

                        <div class="form-check form-switch">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Envío por correo
                                electrónico</label>
                            <input class="form-check-input" type="checkbox" role="switch"
                                id="flexSwitchCheckDefault" name="enviarcorreoelectronico" checked>
                        </div>

                    </fieldset>
                </div>
            </div>
        </div>
        <div class="container mt-3 shadow-lg p-3 mb-5 bg-body rounded">


            <h3 class="mt-2 text-center mb-3 fw-bold fs-5 ">II. DATOS GENERALES DE EL CLIENTE</h3>

            <div class="row mb-3">
                <div class="col-12 col-md-6">

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Se identifica con</span>
                        <select class="form-select" aria-label="Default select example" name="seidentificacon">
                            <option selected>Seleccione una opción</option>
                            <option value="INE">INE</option>
                            <option value="Licencia">Licencia</option>
                        </select>
                        @error('seidentificacon')
                            <div id="seidentificaconError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

            </div>

            <h3 class="mt-2 text-center mb-3 fw-bold fs-5 ">IV. DISPOSICIÓN Y DOCUMENTACIÓN</h3>

            <div class="row mb-3">
                <div class="col-12 col-md-6">

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Fecha(s) de disposición</span>
                        <input type="date" class="form-control @error('fechasdisposicion') is-invalid @enderror"
                            id="fechasdisposicion" name="fechasdisposicion" value="{{ old('fechasdisposicion') }}"
                            placeholder="Fecha(s) de disposición" aria-label="Fecha(s) de disposición"
                            aria-describedby="fechasdisposicionError">
                        @error('fechasdisposicion')
                            <div id="fechasdisposicionError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <h3 class="mt-2 text-center mb-3 fw-bold fs-5 ">V. PLAZO Y CONDICIONES DE PAGO DEL CRÉDITO</h3>

            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Parcialidades</span>
                        <input type="number" class="form-control @error('parcialidades') is-invalid @enderror"
                            id="parcialidades" name="parcialidades" value="{{ old('parcialidades') }}"
                            placeholder="Parcialidades" aria-label="Parcialidades"
                            aria-describedby="parcialidadesError">
                        @error('parcialidades')
                            <div id="parcialidadesError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                {{-- <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Parcialidades Texto</span>
                        <input type="text" class="form-control @error('parcialidadestexto') is-invalid @enderror"
                            id="parcialidadestexto" name="parcialidadestexto"
                            value="{{ old('parcialidadestexto') }}" placeholder="Parcialidades Texto"
                            aria-label="Parcialidades Texto" aria-describedby="parcialidadestextoError">
                        @error('parcialidadestexto')
                            <div id="parcialidadestextoError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div> --}}
            </div>
            <div class="row mb-3">
                {{-- <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Plazo del credito</span>
                        <input type="text" class="form-control @error('plazocredito') is-invalid @enderror"
                            id="plazocredito" name="plazocredito" value="{{ old('plazocredito') }}"
                            placeholder="Plazo del credito" aria-label="Plazo del credito"
                            aria-describedby="plazocreditoError">
                        @error('plazocredito')
                            <div id="plazocreditoError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div> --}}
                {{-- <div class="col-12 col-md-6">

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Periodicidad de pagos</span>
                        <input type="text" class="form-control @error('periodicidadpagos') is-invalid @enderror"
                            id="periodicidadpagos" name="periodicidadpagos"
                            value="{{ old('periodicidadpagos') ?? 'Quincenal' }}"
                            placeholder="Periodicidad de pagos" aria-label="Periodicidad de pagos"
                            aria-describedby="periodicidadpagosError">
                        @error('periodicidadpagos')
                            <div id="periodicidadpagosError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div> --}}
            </div>

            <div class="row mb-3">
                <div class="col-12 col-md-6">

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Fecha corte credito</span>
                        <input type="date" class="form-control @error('fechacortecredito') is-invalid @enderror"
                            id="fechacortecredito" name="fechacortecredito" value="{{ old('fechacortecredito') }}"
                            placeholder="Fecha corte credito" aria-label="Fecha corte credito"
                            aria-describedby="fechacortecreditoError">
                        @error('fechacortecredito')
                            <div id="fechacortecreditoError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-6">

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Fecha vencimiento credito</span>
                        <input type="date"
                            class="form-control @error('fechavencimientocredito') is-invalid @enderror"
                            id="fechavencimientocredito" name="fechavencimientocredito"
                            value="{{ old('fechavencimientocredito') }}" placeholder="Fecha vencimiento credito"
                            aria-label="Fecha vencimiento credito" aria-describedby="fechavencimientocreditoError">
                        @error('fechavencimientocredito')
                            <div id="fechavencimientocreditoError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-3 shadow-lg p-3 mb-5 bg-body rounded">


            <h3 class="mt-2 text-center mb-3 fw-bold fs-5 ">AUTORIZACIONES ADICIONALES</h3>

            <div class="row">
                {{-- <div class="col-12 col-md-6">
                    <fieldset class="form-group">
                        <legend class="form-label text-muted fs-6 text-uppercase text-center">El CLIENTE autoriza a
                            que la FINANCIERA emita un estado de cuenta de forma mensual dentro de los 10 días
                            siguientes
                        </legend>
                        <div class="form-check form-switch">
                            <label class="form-check-label" for="aceptar">Si</label>
                            <input class="form-check-input" type="checkbox" role="switch" id="aceptar"
                                name="aceptar">
                        </div>
                    </fieldset>
                </div> --}}
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Primer Seguro</span>
                        <input type="text" class="form-control @error('seg1') is-invalid @enderror"
                            id="seg1" name="seg1" value="{{ old('seg1') }}" placeholder="Primer Seguro"
                            aria-label="Primer Seguro" aria-describedby="seg1Error">
                        @error('seg1')
                            <div id="seg1Error" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Segundo Seguro</span>
                        <input type="text" class="form-control @error('seg2') is-invalid @enderror"
                            id="seg2" name="seg2" value="{{ old('seg2') }}" placeholder="Segundo Seguro"
                            aria-label="Segundo Seguro" aria-describedby="seg2Error">
                        @error('seg2')
                            <div id="seg2Error" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row mb-3">

                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Tercer Seguro</span>
                        <input type="text" class="form-control @error('seg3') is-invalid @enderror"
                            id="seg3" name="seg3" value="{{ old('seg3') }}" placeholder="Tercer Seguro"
                            aria-label="Tercer Seguro" aria-describedby="seg3Error">
                        @error('seg3')
                            <div id="seg3Error" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-24">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">seguros antes
                            mencionados se contratarán con:</span>
                        <input type="text" class="form-control @error('na2') is-invalid @enderror" id="na2"
                            name="na2" value="{{ old('na2') }}"
                            placeholder="los seguros antes mencionados se contratarán con:"
                            aria-label="los seguros antes mencionados se contratarán con:"
                            aria-describedby="na2Error">
                        @error('na2')
                            <div id="na2Error" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                {{-- <div class="col-12 col-md-6">
                    <fieldset class="form-group">
                        <legend class="form-label text-muted fs-6 text-uppercase text-center">Facultó expresamente
                            a
                            la FINANCIERA para ceder o descontar los documentos originados como consecuencia de la
                            celebración del
                            presente Contrato aun antes del vencimiento del Crédito.
                        </legend>
                        <div class="form-check form-switch">
                            <label class="form-check-label" for="faculto">Si</label>
                            <input class="form-check-input" type="checkbox" role="switch" id="faculto"
                                name="faculto">
                        </div>
                    </fieldset>
                </div> --}}
            </div>
            <h3 class="mt-2 text-center mb-3 fw-bold fs-5 ">FORMATO PARA SOLICITAR LA DOMICILIACIÓN</h3>

            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Aval con folio</span>
                        <input type="text" class="form-control @error('avalconfolio') is-invalid @enderror"
                            id="avalconfolio" name="avalconfolio" aria-describedby="avalconfolioError"
                            placeholder="Aval con folio"
                            aria-label="Aval con folio">{{ old('avalconfolio') }}</input>
                        @error('avalconfolio')
                            <div id="avalconfolioError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="col-12 col-md-6">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">100 MN</span>
                            <input type="number" class="form-control @error('cienmn') is-invalid @enderror"
                                id="cienmn" name="cienmn" aria-describedby="cienmnError" placeholder="100 MN"
                                aria-label="100 MN">{{ old('cienmn') }}</input>
                            @error('cienmn')
                                <div id="cienmnError" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                </div>
            </div>

            <div class="row mb-3">

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Monto maximo fijo del cargo
                        autorizado letra</span>
                    <input type="text" class="form-control @error('montomaximo') is-invalid @enderror"
                        id="montomaximo" name="montomaximo" aria-describedby="montomaximoError"
                        placeholder="Monto máximo fijo del cargo autorizado letra"
                        aria-label="Monto máximo fijo del cargo autorizado letra">{{ old('montomaximo') }}</input>
                    @error('montomaximo')
                        <div id="montomaximoError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <h3 class="mt-2 text-center mb-3 fw-bold fs-5 ">MANDATO DE DESCUENTO IRREVOCABLE</h3>

            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Monto a pagar
                            IRREVOCABLE</span>
                        <input type="text"
                            class="form-control @error('montopagarirrevocabletexto') is-invalid @enderror"
                            id="montopagarirrevocabletexto" name="montopagarirrevocabletexto"
                            aria-describedby="montopagarirrevocabletextoError"
                            placeholder="Monto a pagar IRREVOCABLE"
                            aria-label="Monto a pagar IRREVOCABLE">{{ old('montopagarirrevocabletexto') }}</input>
                        @error('montopagarirrevocabletexto')
                            <div id="montopagarirrevocabletextoError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-6">

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Numero de nomina</span>
                        <input type="text" class="form-control @error('numeronomina') is-invalid @enderror"
                            id="numeronomina" name="numeronomina" aria-describedby="numeronominaError"
                            placeholder="Numero de nomina"
                            aria-label="Numero de nomina">{{ old('numeronomina') }}</input>
                        @error('numeronomina')
                            <div id="numeronominaError" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Botón de envío -->
            <div class="d-grid">
                <button type="submit" class="btn btn-success btn-block">Enviar</button>
            </div>
    </form>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/helpers.js') }}"></script>

</body>

</html>
