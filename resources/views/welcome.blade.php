<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de solicitud de crédito</title>
    <!-- Incluir Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
        <h2 class="text-center mb-4">Formulario de solicitud de crédito</h2>

        <!-- Mostrar mensajes de éxito -->
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-message">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
            </div>
        @endif

        <!-- Mostrar errores de validación -->
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert" id="error-message">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
            </div>
        @endif

        <!-- Formulario -->
        <form action="{{ route('form.store') }}" method="POST" novalidate>
            @csrf
            <!-- Primera fila de dos campos -->
            <div class="row mb-3">
                <div class="col">
                    <label for="asesor" class="form-label text-muted fs-6 fw-bold">Asesor</label>
                    <input type="text" class="form-control @error('asesor') is-invalid @enderror" id="asesor"
                        name="asesor" value="{{ old('asesor') }}" placeholder="Asesor" aria-label="Asesor"
                        aria-describedby="asesorError">
                    @error('asesor')
                        <div id="asesorError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="solicitante" class="form-label text-muted fs-6 fw-bold">Solicitante</label>
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
            <div class="row mb-3">
                <div class="col">
                    <label for="apellidopaterno" class="form-label text-muted fs-6 fw-bold">Apellido Paterno</label>
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
                <div class="col">
                    <label for="apellidomaterno" class="form-label text-muted fs-6 fw-bold">Apellido Materno</label>
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
            <div class="row mb-3">
                <div class="col">
                    <label for="curp" class="form-label text-muted fs-6 fw-bold">CURP</label>
                    <input type="text" class="form-control @error('curp') is-invalid @enderror" id="curp"
                        name="curp" value="{{ old('curp') }}" placeholder="CURP" aria-label="CURP"
                        aria-describedby="curpError">
                    @error('curp')
                        <div id="curpError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="rfc" class="form-label text-muted fs-6 fw-bold">RFC</label>
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

            <div class="row mb-3">
                <div class="col">
                    <label for="domicilio" class="form-label text-muted fs-6 fw-bold">Domicilio</label>
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
                <div class="col">
                    <label for="colonia" class="form-label text-muted fs-6 fw-bold">Colonia</label>
                    <input type="text" class="form-control @error('colonia') is-invalid @enderror" id="colonia"
                        name="colonia" value="{{ old('colonia') }}" placeholder="Colonia" aria-label="Colonia"
                        aria-describedby="coloniaError">
                    @error('colonia')
                        <div id="coloniaError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="delegacion" class="form-label text-muted fs-6 fw-bold">Delegación o municipio</label>
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
                <div class="col">
                    <label for="ciudad" class="form-label text-muted fs-6 fw-bold">Ciudad</label>
                    <input type="text" class="form-control @error('ciudad') is-invalid @enderror" id="ciudad"
                        name="ciudad" value="{{ old('ciudad') }}" placeholder="Ciudad" aria-label="Ciudad"
                        aria-describedby="ciudadError">
                    @error('ciudad')
                        <div id="ciudadError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="estado" class="form-label text-muted fs-6 fw-bold">Estado</label>
                    <input type="text" class="form-control @error('estado') is-invalid @enderror" id="estado"
                        name="estado" value="{{ old('estado') }}" placeholder="Estado" aria-label="Estado"
                        aria-describedby="estadoError">
                    @error('estado')
                        <div id="estadoError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="codigopostal" class="form-label text-muted fs-6 fw-bold">Código Postal</label>
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

            <div class="row mb-3">
                <div class="col">
                    <label for="celular" class="form-label text-muted fs-6 fw-bold">Celular</label>
                    <input type="text" class="form-control @error('celular') is-invalid @enderror" id="celular"
                        name="celular" value="{{ old('celular') }}" placeholder="Celular" aria-label="Celular"
                        aria-describedby="celularError">
                    @error('celular')
                        <div id="celularError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="lugaryfecha" class="form-label text-muted fs-6 fw-bold">Lugar y fecha</label>
                    <input type="text" class="form-control @error('lugaryfecha') is-invalid @enderror"
                        id="lugaryfecha" name="lugaryfecha" value="{{ old('lugaryfecha') }}"
                        placeholder="Lugar y Fecha" aria-label="Lugar y Fecha" aria-describedby="lugaryfechaError">
                    @error('lugaryfecha')
                        <div id="lugaryfechaError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <h3 class="mt-5 text-center mb-3 fw-bold fs-5 ">CRÉDITO SOLICITADO</h3>

            <div class="row mb-3">
                <div class="col">
                    <label for="montosolicitado" class="form-label text-muted fs-6 fw-bold">Monto solicitado</label>
                    <input type="text" class="form-control @error('montosolicitado') is-invalid @enderror"
                        id="montosolicitado" name="montosolicitado" value="{{ old('montosolicitado') }}"
                        placeholder="Monto solicitado" aria-label="Monto solicitado"
                        aria-describedby="montosolicitadoError">
                    @error('montosolicitado')
                        <div id="montosolicitadoError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="plazo" class="form-label text-muted fs-6 fw-bold">Plazo</label>
                    <input type="text" class="form-control @error('plazo') is-invalid @enderror" id="plazo"
                        name="plazo" value="{{ old('plazo') }}" placeholder="Plazo" aria-label="Plazo"
                        aria-describedby="plazoError">
                    @error('plazo')
                        <div id="plazoError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            {{-- radio buton --}}
            <div class="row mb-3">
                <!-- Campo de entrada para Tipo de Crédito -->
                <div class="col-md-4">
                    <label for="tipocredito" class="form-label text-muted fs-6 fw-bold">Tipo de Crédito</label>
                    <input type="text" class="form-control @error('tipocredito') is-invalid @enderror"
                        id="tipocredito" name="tipocredito" value="{{ old('tipocredito') ?? 'CREDITO SIMPLE' }}"
                        aria-label="Tipo de Crédito" aria-describedby="tipocreditoError">
                    @error('tipocredito')
                        <div id="tipocreditoError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Grupo de radios para Frecuencia de pago -->
                <div class="col-md-4">
                    <fieldset class="form-group">
                        <legend class="form-label text-muted fs-6 fw-bold">Frecuencia de pago</legend>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="frecuencia"
                                id="frecuenciaQuincenal" value="Opción4" checked>
                            <label class="form-check-label" for="frecuenciaQuincenal">Quincenal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="frecuencia" id="frecuenciaMensual"
                                value="Opción1">
                            <label class="form-check-label" for="frecuenciaMensual">Mensual</label>
                        </div>
                    </fieldset>
                </div>

                <!-- Grupo de radios para Tipo de solicitud -->
                <div class="col-md-4">
                    <fieldset class="form-group">
                        <legend class="form-label text-muted fs-6 fw-bold">Tipo de solicitud</legend>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tiposolicitud"
                                id="tiposolicitudapertura" value="Opción1" checked>
                            <label class="form-check-label" for="tiposolicitudapertura">Apertura</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tiposolicitud"
                                id="tiposolicitudrefinanciamiento" value="Opción2">
                            <label class="form-check-label"
                                for="tiposolicitudrefinanciamiento">Refinanciamiento</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tiposolicitud" id="tiposolicitudcc"
                                value="Opción3">
                            <label class="form-check-label" for="tiposolicitudcc">CC</label>
                        </div>
                    </fieldset>
                </div>
            </div>

            <h3 class="mt-5 text-center mb-3 fw-bold fs-5 ">DATOS DE IDENTIFICACIÓN DE SOLICITANTE</h3>
            <div class="row mb-3">
                <div class="col">
                    <label for="banco" class="form-label text-muted fs-6 fw-bold">Banco</label>
                    <input type="text" class="form-control @error('banco') is-invalid @enderror" id="banco"
                        name="banco" value="{{ old('banco') }}" placeholder="Banco" aria-label="Banco"
                        aria-describedby="bancoError">
                    @error('banco')
                        <div id="bancoError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="ctaclabe" class="form-label text-muted fs-6 fw-bold">Cuenta CLABE</label>
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

            <div class="row mb-3">
                <!-- Grupo de radios para genero -->
                <div class="col-md-4">
                    <fieldset class="form-group">
                        <legend class="form-label text-muted fs-6 fw-bold">Genero</legend>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genero" id="generomasculino"
                                value="Opción2">
                            <label class="form-check-label" for="generomasculino">Masculino</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genero" id="generofemenino"
                                value="Opción1">
                            <label class="form-check-label" for="generofemenino">Femenino</label>
                        </div>
                    </fieldset>
                </div>
                <!-- Campo de entrada para telefonofijo -->

                <div class="col-md-4">
                    <label for="telefonofijo" class="form-label text-muted fs-6 fw-bold">Teléfono Fijo</label>
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

                <!-- Campo de entrada para fecha de nacimiento -->
                <div class="col-md-4">
                    <label for="fechanacimiento" class="form-label text-muted fs-6 fw-bold">Fecha de
                        Nacimiento</label>
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

            <div class="row mb-3">
                <div class="col">
                    <label for="paisnacimiento" class="form-label text-muted fs-6 fw-bold">Pais de Nacimiento</label>
                    <input type="text" class="form-control @error('paisnacimiento') is-invalid @enderror"
                        id="paisnacimiento" name="paisnacimiento" value="{{ old('paisnacimiento') ?? 'MEXICO' }}"
                        placeholder="Pais de Nacimiento" aria-label="Pais de Nacimiento"
                        aria-describedby="paisnacimientoError">
                    @error('paisnacimiento')
                        <div id="paisnacimientoError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="entidadfederativa" class="form-label text-muted fs-6 fw-bold">Entidad
                        Federativa</label>
                    <input type="text" class="form-control @error('entidadfederativa') is-invalid @enderror"
                        id="entidadfederativa" name="entidadfederativa" value="{{ old('entidadfederativa') }}"
                        placeholder="Entidad Federativa" aria-label="Entidad Federativa"
                        aria-describedby="entidadfederativaError">
                    @error('entidadfederativa')
                        <div id="entidadfederativaError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="nacionalidad" class="form-label text-muted fs-6 fw-bold">Nacionalidad</label>
                    <input type="text" class="form-control @error('nacionalidad') is-invalid @enderror"
                        id="nacionalidad" name="nacionalidad" value="{{ old('nacionalidad') ?? 'MEXICANA' }}"
                        placeholder="Nacionalidad" aria-label="Nacionalidad" aria-describedby="nacionalidadError">
                    @error('nacionalidad')
                        <div id="nacionalidadError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="correoelectronico" class="form-label text-muted fs-6 fw-bold">Correo
                        Electrônico</label>
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
            <div class="row mb-3">
                <div class="col">
                    <label for="fiel" class="form-label text-muted fs-6 fw-bold">FIEL (opcional)</label>
                    <input type="text" class="form-control @error('fiel') is-invalid @enderror" id="fiel"
                        name="fiel" value="{{ old('fiel') }}" placeholder="FIEL (opcional)"
                        aria-label="FIEL (opcional)" aria-describedby="fielError">
                    @error('fiel')
                        <div id="fielError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="sexoynformamigratoria" class="form-label text-muted fs-6 fw-bold">Tipo y Número de
                        Forma Migratoria</label>
                    <input type="text" class="form-control @error('tipoynformamigratoria') is-invalid @enderror"
                        id="tipoynformamigratoria" name="tipoynformamigratoria"
                        value="{{ old('tipoynformamigratoria') }}" placeholder="Tipo y Número de Forma Migratoria"
                        aria-label="Tipo y Número de Forma Migratoria" aria-describedby="tipoynformamigratoriaError">
                    @error('tipoynformamigratoria')
                        <div id="tipoynformamigratoriaError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <!-- Grupo de radios para tipo de vivienda -->
                <div class="col-md-4">
                    <fieldset class="form-group">
                        <legend class="form-label text-muted fs-6 fw-bold">Tipo de vivienda</legend>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipovivienda" id="tipovivienda1"
                                value="Opción3" checked">
                            <label class="form-check-label" for="tipovivienda1">Propia</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipovivienda" id="tipovivienda2"
                                value="Opción1">
                            <label class="form-check-label" for="tipovivienda2">Rentada</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipovivienda" id="tipovivienda3"
                                value="Opción2">
                            <label class="form-check-label" for="tipovivienda3">Vive con papás</label>
                        </div>
                    </fieldset>
                </div>
                <!-- Campo de entrada para tiempo de residir  -->

                <div class="col-md-4">
                    <label for="tiempoderesidir" class="form-label text-muted fs-6 fw-bold">Tiempo de Residir</label>
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

                <!-- Campo de entrada para nombre arrendador -->
                <div class="col-md-4">
                    <label for="nombrearrendador" class="form-label text-muted fs-6 fw-bold">Nombre del
                        Arrendador</label>
                    <input type="text" class="form-control @error('nombrearrendador') is-invalid @enderror"
                        id="nombrearrendador" name="nombrearrendador" value="{{ old('nombrearrendador') }}"
                        placeholder="Nombre del Arrendador" aria-label="Nombre del Arrendador"
                        aria-describedby="nombrearrendadorError">
                    @error('nombrearrendador')
                        <div id="nombrearrendadorError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="apellidopaternoarrendador" class="form-label text-muted fs-6 fw-bold">Apellido paterno
                        del arrendador</label>
                    <input type="text"
                        class="form-control @error('apellidopaternoarrendador') is-invalid @enderror"
                        id="apellidopaternoarrendador" name="apellidopaternoarrendador"
                        value="{{ old('apellidopaternoarrendador') }}" placeholder="Apellido paterno del arrendador"
                        aria-label="Apellido paterno del arrendador"
                        aria-describedby="apellidopaternoarrendadorError">
                    @error('apellidopaternoarrendador')
                        <div id="apellidopaternoarrendadorError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="apellidomaternoarrendador" class="form-label text-muted fs-6 fw-bold">Apellido materno
                        del arrendador</label>
                    <input type="text"
                        class="form-control @error('apellidomaternoarrendador') is-invalid @enderror"
                        id="apellidomaternoarrendador" name="apellidomaternoarrendador"
                        value="{{ old('apellidomaternoarrendador') }}" placeholder="Apellido materno del arrendador"
                        aria-label="Apellido materno del arrendador"
                        aria-describedby="apellidomaternoarrendadorError">
                    @error('apellidomaternoarrendador')
                        <div id="apellidomaternoarrendadorError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="celulararrendador" class="form-label text-muted fs-6 fw-bold">Celular del
                        arrendador</label>
                    <input type="text" class="form-control @error('celulararrendador') is-invalid @enderror"
                        id="celulararrendador" name="celulararrendador" value="{{ old('celulararrendador') }}"
                        placeholder="Celular del arrendador" aria-label="Celular del arrendador"
                        aria-describedby="celulararrendadorError">
                    @error('celulararrendador')
                        <div id="celulararrendadorError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <h3 class="mt-5 text-center mb-3 fw-bold fs-5 ">DATOS LABORALES DEL SOLICITANTE</h3>
            <div class="row mb-3">
                <div class="col">
                    <label for="convenio" class="form-label text-muted fs-6 fw-bold">Convenio</label>
                    <input type="text" class="form-control @error('convenio') is-invalid @enderror"
                        id="convenio" name="convenio" value="{{ old('convenio') }}" placeholder="Empresa"
                        aria-label="Empresa" aria-describedby="convenioError">
                    @error('convenio')
                        <div id="convenioError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="centrotrabajo" class="form-label text-muted fs-6 fw-bold">Centro de Trabajo</label>
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

            <div class="row mb-3">
                <div class="col">
                    <label for="telefonolaboral" class="form-label text-muted fs-6 fw-bold">Telefono laboral</label>
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
                <div class="col">
                    <label for="extencion" class="form-label text-muted fs-6 fw-bold">Extencion</label>
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

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="puesto" class="form-label text-muted fs-6 fw-bold">Puesto</label>
                    <input type="text" class="form-control @error('puesto') is-invalid @enderror" id="puesto"
                        name="puesto" value="{{ old('puesto') }}" placeholder="Puesto" aria-label="Puesto"
                        aria-describedby="puestoError">
                    @error('puesto')
                        <div id="puestoError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="suelda" class="form-label text-muted fs-6 fw-bold">Sueldo (libre de
                        impuestos)</label>
                    <input type="text" class="form-control @error('sueldo') is-invalid @enderror" id="sueldo"
                        name="sueldo" value="{{ old('sueldo') }}" placeholder="Sueldo (libre de impuestos)"
                        aria-label="Sueldo (libre de impuestos)" aria-describedby="sueldoError">
                    @error('sueldo')
                        <div id="sueldoError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="fechaingreso" class="form-label text-muted fs-6 fw-bold">Fecha de ingreso</label>
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
            <h3 class="mt-5 text-center mb-3 fw-bold fs-5 ">REFERENCIA LABORAL</h3>
            <div class="row mb-3">
                <div class="col">
                    <label for="nombrereflaboral" class="form-label text-muted fs-6 fw-bold">Nombre del referente
                        laboral</label>
                    <input type="text" class="form-control @error('nombrereflaboral') is-invalid @enderror"
                        id="nombrereflaboral" name="nombrereflaboral" value="{{ old('nombrereflaboral') }}"
                        placeholder="Nombre del referente laboral" aria-label="Nombre del referente laboral"
                        aria-describedby="nombrereflaboralError">
                    @error('nombrereflaboral')
                        <div id="nombrereflaboralError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="apellidopaternoreflaboral" class="form-label text-muted fs-6 fw-bold">Apellido
                        paterno</label>
                    <input type="text"
                        class="form-control @error('apellidopaternoreflaboral') is-invalid @enderror"
                        id="apellidopaternoreflaboral" name="apellidopaternoreflaboral"
                        value="{{ old('apellidopaternoreflaboral') }}" placeholder="Apellido paterno"
                        aria-label="Apellido paterno" aria-describedby="apellidopaternoreflaboralError">
                    @error('apellidopaternoreflaboral')
                        <div id="apellidopaternoreflaboralError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="apellidomaternoreflaboral" class="form-label text-muted fs-6 fw-bold">Apellido
                        materno</label>
                    <input type="text"
                        class="form-control @error('apellidomaternoreflaboral') is-invalid @enderror"
                        id="apellidomaternoreflaboral" name="apellidomaternoreflaboral"
                        value="{{ old('apellidomaternoreflaboral') }}" placeholder="Apellido materno"
                        aria-label="Apellido materno" aria-describedby="apellidomaternoreflaboralError">
                    @error('apellidomaternoreflaboral')
                        <div id="apellidomaternoreflaboralError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="celularreflaboral" class="form-label text-muted fs-6 fw-bold">Teléfono celular (10
                        dígitos)</label>
                    <input type="text" class="form-control @error('celularreflaboral') is-invalid @enderror"
                        id="celularreflaboral" name="celularreflaboral" value="{{ old('celularreflaboral') }}"
                        placeholder="Teléfono celular (10 dígitos)" aria-label="Teléfono celular (10 dígitos)"
                        aria-describedby="celularreflaboralError">
                    @error('celularreflaboral')
                        <div id="celularreflaboralError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="telefonofijoreflaboral" class="form-label text-muted fs-6 fw-bold">Teléfono fijo (10
                        dígitos)</label>
                    <input type="text" class="form-control @error('telefonofijoreflaboral') is-invalid @enderror"
                        id="telefonofijorefLaboral" name="telefonofijoreflaboral"
                        value="{{ old('telefonofijoreflaboral') }}" placeholder="Teléfono fijo (10 dígitos)"
                        aria-label="Teléfono fijo (10 dígitos)" aria-describedby="telefonofijoreflaboralError">
                    @error('telefonofijoreflaboral')
                        <div id="telefonofijoreflaboralError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="direccionreflaboral" class="form-label text-muted fs-6 fw-bold">Dirección (Calle /
                        Colonia / Municipio / Ciudad / Estado / CP)</label>
                    <input type="text" class="form-control @error('direccionreflaboral') is-invalid @enderror"
                        id="direccionreflaboral" name="direccionreflaboral" value="{{ old('direccionreflaboral') }}"
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
            <h3 class="mt-5 text-center mb-3 fw-bold fs-5 ">CONOCIMIENTO DEL CLIENTE</h3>

            {{-- fila de 3 radios butones --}}
            <div class="row mb-3">
                <div class="col-md-4">
                    <fieldset class="form-group">
                        <legend class="form-label text-muted fs-6 fw-bold">¿Cuál es el origen de los recursos
                            para pago del (los) crédito(s)?</legend>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="origenrecursospago"
                                id="origenrecursospago1" value="Opción1">
                            <label class="form-check-label" for="origenrecursospago1">Ahorros propios</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="origenrecursospago"
                                id="origenrecursospago2" value="Opción2" checked>
                            <label class="form-check-label" for="origenrecursospago2">Sueldos/Salarios</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="origenrecursospago"
                                id="origenrecursospago3" value="Opción3">
                            <label class="form-check-label" for="origenrecursospago3">Arrendamiento de
                                inmuebles</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="origenrecursospago"
                                id="origenrecursospago4" value="Opción4">
                            <label class="form-check-label" for="origenrecursospago3">Inversiones</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="origenrecursospago"
                                id="origenrecursospago5" value="Opción5">
                            <label class="form-check-label" for="origenrecursospago3">Negocio propio</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="origenrecursospago"
                                id="origenrecursospago6" value="Opción6">
                            <label class="form-check-label" for="origenrecursospago3">Recursos de terceros</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="origenrecursospago"
                                id="origenrecursospago7" value="Opción7">
                            <label class="form-check-label" for="origenrecursospago3">Honorarios</label>
                        </div>
                    </fieldset>
                </div>
                <div class="col-md-4">
                    <fieldset class="form-group">
                        <legend class="form-label text-muted fs-6 fw-bold">¿Cuál es el destino de los
                            recursos otorgados en crédito?</legend>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="destinorecursos"
                                id="destinorecursos1" value="Opción8" checked>
                            <label class="form-check-label" for="destinorecursos1">Gastos personales</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="destinorecursos"
                                id="destinorecursos2" value="Opción9">
                            <label class="form-check-label" for="destinorecursos2">Pago de créditos</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="destinorecursos"
                                id="destinorecursos3" value="Opción10">
                            <label class="form-check-label" for="destinorecursos3">Administración de
                                inversiones</label>
                        </div>
                    </fieldset>
                </div>
                <div class="col-md-4">
                    <fieldset class="form-group">
                        <legend class="form-label text-muted fs-6 fw-bold">¿De qué forma pagará el (los crédito(s)
                            (tipo de
                            operaciones)?</legend>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="formapago" id="formapago1"
                                value="Opción8" checked>
                            <label class="form-check-label" for="formapago1">Transferencia</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="formapago" id="formapago2"
                                value="Opción9">
                            <label class="form-check-label" for="formapago2">Efectivo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="formapago" id="formapago3"
                                value="Opción10">
                            <label class="form-check-label" for="formapago3">Cheque</label>
                        </div>
                    </fieldset>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <fieldset class="form-group">
                        <legend class="form-label text-muted fs-6 fw-bold">¿Sobre qué montos realizará
                            pagos al mes?</legend>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="montopago" id="montopago1"
                                value="Opción11" checked>
                            <label class="form-check-label" for="montopago1">$0 a $50,000</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="montopago" id="montopago2"
                                value="Opción12">
                            <label class="form-check-label" for="montopago2">$50,001 a $100,000</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="montopago" id="montopago3"
                                value="Opción13">
                            <label class="form-check-label" for="montopago3">Más de $100,001</label>
                        </div>
                    </fieldset>
                </div>
                <div class="col-md-4">
                    <fieldset class="form-group">
                        <legend class="form-label text-muted fs-6 fw-bold">¿Cuántas operaciones estima
                            realizar por mes?</legend>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="operacionesestimadas"
                                id="operacionesestimadas1" value="Opción1" checked>
                            <label class="form-check-label" for="operacionesestimadas1">De 0 a 4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="operacionesestimadas"
                                id="operacionesestimadas2" value="Opción2">
                            <label class="form-check-label" for="operacionesestimadas2">De 4 a 10</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="operacionesestimadas"
                                id="operacionesestimadas3" value="Opción3">
                            <label class="form-check-label" for="operacionesestimadas3">Más de 10</label>
                        </div>
                    </fieldset>
                </div>
                <div class="col-md-4">
                    <fieldset class="form-group">
                        <legend class="form-label text-muted fs-6 fw-bold">¿Cuál es su ocupación o
                            actividad económica?</legend>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ocupacioneconomica"
                                id="ocupacioneconomica1" value="Opción4" checked>
                            <label class="form-check-label" for="ocupacioneconomica1">Empleado público</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ocupacioneconomica"
                                id="ocupacioneconomica2" value="Opción5">
                            <label class="form-check-label" for="ocupacioneconomica2">Empleado privado</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ocupacioneconomica"
                                id="ocupacioneconomica3" value="Opción6">
                            <label class="form-check-label" for="ocupacioneconomica3">Estudiante, jubilado, pensionado
                                o desesmpleado</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ocupacioneconomica"
                                id="ocupacioneconomica4" value="Opción7">
                            <label class="form-check-label" for="ocupacioneconomica3">Otro(especificar)</label>
                        </div>

                    </fieldset>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <fieldset class="form-group">
                        <legend class="form-label text-muted fs-6 fw-bold">¿Qué tipo de crédito se le
                            está otorgando?</legend>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipocredito" id="tipocredito1"
                                value="Opción8" checked>
                            <label class="form-check-label" for="tipocredito1">Tradicional (Nómina)</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipocredito" id="tipocredito2"
                                value="Opción9">
                            <label class="form-check-label" for="tipocredito2">Compra de cartera</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipocredito" id="tipocredito3"
                                value="Opción10">
                            <label class="form-check-label" for="tipocredito3">Refinanciamiento</label>
                        </div>
                    </fieldset>
                </div>
                <div class="col-md-4">
                    <fieldset class="form-group">
                        <legend class="form-label text-muted fs-6 fw-bold">¿Usted desempeña o ha desempeñado funciones
                            públicas
                            destacadas en un país extrenjero o en territorio nacional,
                            considerando entre otros, a los jefes de Estado o de gobierno, líderes políticos,
                            funcionarios gubernamentales,
                            judiciales o militares de alta jerarquía, altos ejecutivos de empresas estatales o
                            funcionarios o miembros importantes
                            de partidos POLITICOs?</legend>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="funcionespublicas"
                                id="funcionespublicas1" value="Opción14">
                            <label class="form-check-label" for="funcionespublicas1">Si</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="funcionespublicas"
                                id="funcionespublicas2" value="Opción15" checked>
                            <label class="form-check-label" for="funcionespublicas2">No</label>
                        </div>

                    </fieldset>
                    <fieldset class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="funcionespublicasnacionalidad"
                                id="funcionespublicasnacionalidad" value="Opción16">
                            <label class="form-check-label" for="funcionespublicasnacionalidad">Extranjera</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="funcionespublicasnacionalidad"
                                id="funcionespublicasnacionalidad2" value="Opción17">
                            <label class="form-check-label" for="funcionespublicasnacionalidad2">Nacional</label>
                        </div>
                    </fieldset>
                </div>
                <div class="col-md-4">
                    <fieldset class="form-group">
                        <legend class="form-label text-muted fs-6 fw-bold">¿Qué Nacionalidad tiene?</legend>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="nacionalidad" id="nacionalidad1"
                                value="Opción18" checked>
                            <label class="form-check-label" for="nacionalidad1">Mexicano</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="nacionalidad"
                                id="nacionalidad2" value="Opción19">
                            <label class="form-check-label" for="nacionalidad2">Extranjero</label>
                        </div>
                    </fieldset>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <fieldset class="form-group">
                        <legend class="form-label text-muted fs-6 fw-bold">¿Usted tiene algún proveedor de Recursos o
                            Propietario Real?</legend>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="algunprovedor"
                                id="algunprovedor1" value="Opción20">
                            <label class="form-check-label" for="algunprovedor1">Si</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="algunprovedor"
                                id="algunprovedor2" value="Opción21" checked>
                            <label class="form-check-label" for="algunprovedor2">No</label>
                        </div>
                    </fieldset>
                </div>
                <div class="col-md-4">
                    <fieldset class="form-group">
                        <legend class="form-label text-muted fs-6 fw-bold">¿Su conyuge o algun pariente por
                            consanguinidad o
                            afinidad hasta el segundo grado del apoderado legal
                            desempeña actualmente o desempeñó durante el año inmediato anterior algún cargo público a
                            nivel federal, estatal
                            o municipal en México o en algún país extranjero?</legend>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="parientespublicos"
                                id="parientespublicos1" value="Opción22">
                            <label class="form-check-label" for="parientespublicos1">Si</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="parientespublicos"
                                id="parientespublicos2" value="Opción23" checked>
                            <label class="form-check-label" for="parientespublicos2">No</label>
                        </div>

                    </fieldset>
                </div>
                {{-- agregar 4 checkbox --}}

                <div class="col-md-4">
                    <fieldset class="form-group">
                        <legend class="form-label text-muted fs-6 text-uppercase text-center">DOCUMENTOS</legend>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                value="Opción24" name="inlineCheckbox1" checked>
                            <label class="form-check-label" for="inlineCheckbox1">ID personal oficial
                                vigente</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                value="Opción25" name="inlineCheckbox2" checked>
                            <label class="form-check-label" for="inlineCheckbox2">Comp. de domicilio</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                value="Opción26" name="inlineCheckbox3" checked>
                            <label class="form-check-label" for="inlineCheckbox3">Comp. de ingreso</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox4"
                                value="Opción27" name="inlineCheckbox4" checked>
                            <label class="form-check-label" for="inlineCheckbox4">Edo. de cuenta bancario</label>
                        </div>
                    </fieldset>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <fieldset class="form-group">
                        <legend class="form-label text-muted fs-6 fw-bold">En caso de requerir factura
                            integrar los siguientes docs.</legend>
                        <legend class="form-label text-muted fs-6 fw-bold">Constancia de Situación Fiscal</legend>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="requierefactura"
                                id="requierefactura1" value="Opción28">
                            <label class="form-check-label" for="requierefactura1">Si</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="requierefactura"
                                id="requierefactura2" value="Opción29" checked>
                            <label class="form-check-label" for="requierefactura2">No</label>
                        </div>
                    </fieldset>
                </div>
                <div class="col-md-4">
                    <fieldset class="form-group">
                        <legend class="form-label text-muted fs-6 fw-bold">Mercadotecnia y Publicidad.</legend>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="autorizacion"
                                id="autorizacion1" value="Opción30" checked>
                            <label class="form-check-label" for="autorizacion1">Si</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="autorizacion"
                                id="autorizacion2" value="Opción31">
                            <label class="form-check-label" for="autorizacion2">No</label>
                        </div>

                    </fieldset>
                </div>
            </div>

            <h3 class="mt-5 text-center mb-3 fw-bold fs-5 ">DATOS COMPLEMENTARIOS (APARTADO II LLENARSE EN TODOS LOS
                CASOS)</h3>

            <div class="row mb-3">
                <div class="col">
                    <label for="funciones" class="form-label text-muted fs-6 fw-bold">Funciones</label>
                    <input type="text" class="form-control @error('funciones') is-invalid @enderror"
                        id="funciones" name="funciones" value="{{ old('funciones') }}" placeholder="Funciones"
                        aria-label="Funciones" aria-describedby="funcionesError">
                    @error('funciones')
                        <div id="funcionesError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="noaplicafunciones" class="form-label text-muted fs-6 fw-bold">Otras
                        funciones</label>
                    <input type="text" class="form-control @error('noaplicafunciones') is-invalid @enderror"
                        id="noaplicafunciones" name="noaplicafunciones"
                        value="{{ old('noaplicafunciones') ?? 'NO APLICA' }}" placeholder="Otras funciones"
                        aria-label="Otras funciones" aria-describedby="noaplicafuncionesError">
                    @error('noaplicafunciones')
                        <div id="noaplicafuncionesError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="nombreservidorpublico" class="form-label text-muted fs-6 fw-bold">Nombre del
                        servidor publico</label>
                    <input type="text" class="form-control @error('nombreservidorpublico') is-invalid @enderror"
                        id="nombreservidorpublico" name="nombreservidorpublico"
                        value="{{ old('nombreservidorpublico') }}" placeholder="Nombre del servidor publico"
                        aria-label="Nombre del servidor publico" aria-describedby="nombreservidorpublicoError">
                    @error('nombreservidorpublico')
                        <div id="nombreservidorpublicoError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="lugarelaboracion" class="form-label text-muted fs-6 fw-bold">Lugar de
                        laboracion</label>
                    <input type="text" class="form-control @error('lugarelaboracion') is-invalid @enderror"
                        id="lugarelaboracion" name="lugarelaboracion" value="{{ old('lugarelaboracion') }}"
                        placeholder="Lugar de laboracion" aria-label="Lugar de laboracion"
                        aria-describedby="lugarelaboracionError">
                    @error('lugarelaboracion')
                        <div id="lugarelaboracionError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <h3 class="mt-5 text-center mb-3 fw-bold fs-5 ">CARATULA DE CRÉDITO</h3>

            <div class="row mb-3">
                <div class="col">
                    <label for="cat" class="form-label text-muted fs-6 fw-bold">CAT</label>
                    <input type="text" class="form-control @error('cat') is-invalid @enderror" id="cat"
                        name="cat" value="{{ old('cat') }}" placeholder="CAT" aria-label="CAT"
                        aria-describedby="catError">
                    @error('cat')
                        <div id="catError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="tasaordinaria" class="form-label text-muted fs-6 fw-bold">Tasa ordinaria</label>
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

            <div class="row mb-3">
                <div class="col">
                    <label for="tasamoratoria" class="form-label text-muted fs-6 fw-bold">Tasa moratoria</label>
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
                <div class="col">
                    <label for="montosolicitadotexto" class="form-label text-muted fs-6 fw-bold">Monto solicitado
                        texto</label>
                    <input type="text" class="form-control @error('montosolicitadotexto') is-invalid @enderror"
                        id="montosolicitadotexto" name="montosolicitadotexto"
                        value="{{ old('montosolicitadotexto') }}" placeholder="Monto solicitado texto"
                        aria-label="Monto solicitado texto" aria-describedby="montosolicitadotextoError">
                    @error('montosolicitadotexto')
                        <div id="montosolicitadotextoError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="montototalpagar" class="form-label text-muted fs-6 fw-bold">Monto total a
                        pagar</label>
                    <input type="text" class="form-control @error('montototalpagar') is-invalid @enderror"
                        id="montototalpagar" name="montototalpagar" value="{{ old('montototalpagar') }}"
                        placeholder="Monto total a pagar" aria-label="Monto total a pagar"
                        aria-describedby="montototalpagarError">
                    @error('montototalpagar')
                        <div id="montototalpagarError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="montototalpagartexto" class="form-label text-muted fs-6 fw-bold">Monto total a pagar
                        texto</label>
                    <input type="text" class="form-control @error('montototalpagartexto') is-invalid @enderror"
                        id="montototalpagartexto" name="montototalpagartexto"
                        value="{{ old('montototalpagartexto') }}" placeholder="Monto total a pagar texto"
                        aria-label="Monto total a pagar texto" aria-describedby="montototalpagartextoError">
                    @error('montototalpagartexto')
                        <div id="montototalpagartextoError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="fechavencimiento" class="form-label text-muted fs-6 fw-bold">Fecha de
                        vencimiento</label>
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
                <div class="col">
                    <label for="fechacorte" class="form-label text-muted fs-6 fw-bold">Fecha de corte</label>
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

            <h3 class="mt-5 text-center mb-3 fw-bold fs-5 ">Seguros y estados de cuenta</h3>

            <div class="row mb-3">
                <div class="col">
                    <label for="aseguradora" class="form-label text-muted fs-6 fw-bold">Aseguradora</label>
                    <input type="text" class="form-control @error('aseguradora') is-invalid @enderror"
                        id="aseguradora" name="aseguradora" value="{{ old('aseguradora') }}"
                        placeholder="Aseguradora" aria-label="Aseguradora" aria-describedby="aseguradoraError">
                    @error('aseguradora')
                        <div id="aseguradoraError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <fieldset class="form-group">
                        {{-- <legend class="form-label text-muted fs-6 text-uppercase text-center">Enviar a domicilio</legend> --}}
                        <div class="form-check form-switch">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Enviar a domicilio</label>
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

            <h3 class="mt-5 text-center mb-3 fw-bold fs-5 ">II. DATOS GENERALES DE EL CLIENTE</h3>

            <div class="row mb-3">
                <div class="col">
                    <label for="seidentificacon" class="form-label text-muted fs-6 fw-bold">Se identifica
                        con</label>
                    <input type="text" class="form-control @error('seidentificacon') is-invalid @enderror"
                        id="seidentificacon" name="seidentificacon" value="{{ old('seidentificacon') }}"
                        placeholder="Se identifica con" aria-label="Se identifica con"
                        aria-describedby="seidentificaconError">
                    @error('seidentificacon')
                        <div id="seidentificaconError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="domiciliogeneral" class="form-label text-muted fs-6 fw-bold">Domicilio
                        general</label>
                    <input type="text" class="form-control @error('domiciliogeneral') is-invalid @enderror"
                        id="domiciliogeneral" name="domiciliogeneral" value="{{ old('domiciliogeneral') }}"
                        placeholder="Domicilio general" aria-label="Domicilio general"
                        aria-describedby="domiciliogeneralError">
                    @error('domiciliogeneral')
                        <div id="domiciliogeneralError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <h3 class="mt-5 text-center mb-3 fw-bold fs-5 ">IV. DISPOSICIÓN Y DOCUMENTACIÓN</h3>

            <div class="row mb-3">
                <div class="col">
                    <label for="fechasdisposicion" class="form-label text-muted fs-6 fw-bold">Fecha(s) de
                        disposición</label>
                    <input type="text" class="form-control @error('fechasdisposicion') is-invalid @enderror"
                        id="fechasdisposicion" name="fechasdisposicion" value="{{ old('fechasdisposicion') }}"
                        placeholder="Fecha(s) de disposición" aria-label="Fecha(s) de disposición"
                        aria-describedby="fechasdisposicionError">
                    @error('fechasdisposicion')
                        <div id="fechasdisposicionError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="sucursal" class="form-label text-muted fs-6 fw-bold">Sucursal</label>
                    <input type="text" class="form-control @error('sucursal') is-invalid @enderror"
                        id="sucursal" name="sucursal" value="{{ old('sucursal') }}" placeholder="Sucursal"
                        aria-label="Sucursal" aria-describedby="sucursalError">
                    @error('sucursal')
                        <div id="sucursalError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <h3 class="mt-5 text-center mb-3 fw-bold fs-5 ">V. PLAZO Y CONDICIONES DE PAGO DEL CRÉDITO</h3>

            <div class="row mb-3">
                <div class="col">
                    <label for="parcialidades" class="form-label text-muted fs-6 fw-bold">Parcialidades</label>
                    <input type="text" class="form-control @error('parcialidades') is-invalid @enderror"
                        id="parcialidades" name="parcialidades" value="{{ old('parcialidades') }}"
                        placeholder="Parcialidades" aria-label="Parcialidades"
                        aria-describedby="parcialidadesError">
                    @error('parcialidades')
                        <div id="parcialidadesError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="parcialidadestexto" class="form-label text-muted fs-6 fw-bold">Parcialidades
                        Texto</label>
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
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="plazocredito" class="form-label text-muted fs-6 fw-bold">Plazo del credito</label>
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
                <div class="col">
                    <label for="periodicidadpagos" class="form-label text-muted fs-6 fw-bold">Periodicidad de
                        pagos</label>
                    <input type="text" class="form-control @error('periodicidadpagos') is-invalid @enderror"
                        id="periodicidadpagos" name="periodicidadpagos"
                        value="{{ old('periodicidadpagos') ?? 'Quincenal' }}" placeholder="Periodicidad de pagos"
                        aria-label="Periodicidad de pagos" aria-describedby="periodicidadpagosError">
                    @error('periodicidadpagos')
                        <div id="periodicidadpagosError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="fechacortecredito" class="form-label text-muted fs-6 fw-bold">Fecha corte
                        credito</label>
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
                <div class="col">
                    <label for="fechavencimientocredito" class="form-label text-muted fs-6 fw-bold">Fecha
                        vencimiento credito</label>
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

            <h3 class="mt-5 text-center mb-3 fw-bold fs-5 ">AUTORIZACIONES ADICIONALES</h3>

            <div class="row mb-3">
                <div class="col">
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
                </div>
                <div class="col">
                    <label for="seg1" class="form-label text-muted fs-6 fw-bold">Primer Seguro</label>
                    <input type="text" class="form-control @error('seg1') is-invalid @enderror" id="seg1"
                        name="seg1" value="{{ old('seg1') }}" placeholder="Primer Seguro"
                        aria-label="Primer Seguro" aria-describedby="seg1Error">
                    @error('seg1')
                        <div id="seg1Error" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="seg2" class="form-label text-muted fs-6 fw-bold">Segundo Seguro</label>
                    <input type="text" class="form-control @error('seg2') is-invalid @enderror" id="seg2"
                        name="seg2" value="{{ old('seg2') }}" placeholder="Segundo Seguro"
                        aria-label="Segundo Seguro" aria-describedby="seg2Error">
                    @error('seg2')
                        <div id="seg2Error" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="seg3" class="form-label text-muted fs-6 fw-bold">Tercer Seguro</label>
                    <input type="text" class="form-control @error('seg3') is-invalid @enderror" id="seg3"
                        name="seg3" value="{{ old('seg3') }}" placeholder="Tercer Seguro"
                        aria-label="Tercer Seguro" aria-describedby="seg3Error">
                    @error('seg3')
                        <div id="seg3Error" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="na2" class="form-label text-muted fs-6 fw-bold">Los seguros antes mencionados
                        se contratarán con:</label>
                    <input type="text" class="form-control @error('na2') is-invalid @enderror" id="na2"
                        name="na2" value="{{ old('na2') }}"
                        placeholder="los seguros antes mencionados se contratarán con:"
                        aria-label="los seguros antes mencionados se contratarán con:" aria-describedby="na2Error">
                    @error('na2')
                        <div id="na2Error" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <fieldset class="form-group">
                        <legend class="form-label text-muted fs-6 text-uppercase text-center">Facultó expresamente a
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
                </div>
            </div>

            <h3 class="mt-5 text-center mb-3 fw-bold fs-5 ">PAGARÉ</h3>

            <div class="row mb-3">
                <div class="col">
                    <label for="montopagareletra" class="form-label text-muted fs-6 fw-bold">Monto pagaré
                        letra</label>
                    <input type="text" class="form-control @error('montopagareletra') is-invalid @enderror"
                        id="montopagareletra" name="montopagareletra" value="{{ old('montopagareletra') }}"
                        placeholder="Monto pagaré letra" aria-label="Monto pagaré letra"
                        aria-describedby="montopagareletraError">
                    @error('montopagareletra')
                        <div id="montopagareletraError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="fechapagere" class="form-label text-muted fs-6 fw-bold">Fecha que suscribe el
                        pagaré</label>
                    <input type="date" class="form-control @error('fechapagere') is-invalid @enderror"
                        id="fechapagere" name="fechapagere" value="{{ old('fechapagere') }}"
                        placeholder="Fecha primer pago" aria-label="Fecha primer pago"
                        aria-describedby="fechapagereError">
                    @error('fechapagere')
                        <div id="fechapagereError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <h3 class="mt-5 text-center mb-3 fw-bold fs-5 ">FORMATO PARA SOLICITAR LA DOMICILIACIÓN</h3>
            <div class="row mb-3">

                <div class="col">
                    <label for="fechadomiciliacion" class="form-label text-muted fs-6 fw-bold">Fecha solicitar la
                        domiciliación</label>
                    <input type="date" class="form-control @error('fechadomiciliacion') is-invalid @enderror"
                        id="fechadomiciliacion" name="fechadomiciliacion"
                        value="{{ old('fechadomiciliacion') }}" placeholder="Fecha solicitar la domiciliación"
                        aria-label="Fecha solicitar la domiciliación" aria-describedby="fechadomiciliacionError">
                    @error('fechadomiciliacion')
                        <div id="fechadomiciliacionError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="biencredito" class="form-label text-muted fs-6 fw-bold">Crédito simple</label>
                    <input type="text" class="form-control @error('biencredito') is-invalid @enderror"
                        id="biencredito" name="biencredito" value="{{ old('biencredito') ?? 'SIN' }}"
                        placeholder="Crédito simple" aria-label="Crédito simple"
                        aria-describedby="biencreditoError">
                    @error('biencredito')
                        <div id="biencreditoError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="avalconfolio" class="form-label text-muted fs-6 fw-bold">Aval con folio</label>
                    <input type="text" class="form-control @error('avalconfolio') is-invalid @enderror"
                        id="avalconfolio" name="avalconfolio" aria-describedby="avalconfolioError"
                        placeholder="Aval con folio" aria-label="Aval con folio">{{ old('avalconfolio') }}</input>
                    @error('avalconfolio')
                        <div id="avalconfolioError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="montomaximo" class="form-label text-muted fs-6 fw-bold">Monto máximo fijo del cargo
                        autorizado letra</label>
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

            <div class="row mb-3">
                <div class="col">
                    <label for="cienmn" class="form-label text-muted fs-6 fw-bold">100 MN</label>
                    <input type="text" class="form-control @error('cienmn') is-invalid @enderror"
                        id="cienmn" name="cienmn" aria-describedby="cienmnError" placeholder="100 MN"
                        aria-label="100 MN">{{ old('cienmn') }}</input>
                    @error('cienmn')
                        <div id="cienmnError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <h3 class="mt-5 text-center mb-3 fw-bold fs-5 ">MANDATO DE DESCUENTO IRREVOCABLE</h3>

            <div class="row mb-3">
                <div class="col">
                    <label for="montopagarirrevocabletexto" class="form-label text-muted fs-6 fw-bold">Monto a pagar
                        IRREVOCABLE</label>
                    <input type="text"
                        class="form-control @error('montopagarirrevocabletexto') is-invalid @enderror"
                        id="montopagarirrevocabletexto" name="montopagarirrevocabletexto"
                        aria-describedby="montopagarirrevocabletextoError" placeholder="Aval con folio"
                        aria-label="Aval con folio">{{ old('montopagarirrevocabletexto') }}</input>
                    @error('montopagarirrevocabletexto')
                        <div id="montopagarirrevocabletextoError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="numeronomina" class="form-label text-muted fs-6 fw-bold">Numero de nomina</label>
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

            <h3 class="mt-5 text-center mb-3 fw-bold fs-5 ">AUTORIZACIÓN DE CONSULTA EN PLATAFORMA NOMI-PAY</h3>

            <div class="row mb-3">
                <div class="col">
                    <label for="fechaautorizacion" class="form-label text-muted fs-6 fw-bold">Fecha de
                        autorización</label>
                    <input type="date" class="form-control @error('fechaautorizacion') is-invalid @enderror"
                        id="fechaautorizacion" name="fechaautorizacion" aria-describedby="fechaautorizacionError"
                        placeholder="Aval con folio"
                        aria-label="Aval con folio">{{ old('fechaautorizacion') }}</input>
                    @error('fechaautorizacion')
                        <div id="fechaautorizacionError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="nombrequeautoriza" class="form-label text-muted fs-6 fw-bold">Nombre que
                        autoriza</label>
                    <input type="text" class="form-control @error('nombrequeautoriza') is-invalid @enderror"
                        id="nombrequeautoriza" name="nombrequeautoriza" aria-describedby="nombrequeautorizaError"
                        placeholder="Nombre que autoriza"
                        aria-label="Nombre que autoriza">{{ old('nombrequeautoriza') }}</input>
                    @error('nombrequeautoriza')
                        <div id="nombrequeautorizaError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="numeroempleado" class="form-label text-muted fs-6 fw-bold">Numero de empleado</label>
                    <input type="text"
                        class="form-control @error('numeroempleado') is-invalid @enderror"
                        id="numeroempleado" name="numeroempleado"
                        aria-describedby="numeroempleadoError" placeholder="Numero de empleado"
                        aria-label="Numero de empleado">{{ old('numeroempleado') }}</input>
                    @error('numeroempleado')
                        <div id="numeroempleadoError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="numerofolio" class="form-label text-muted fs-6 fw-bold">Numero de folio</label>
                    <input type="text" class="form-control @error('numerofolio') is-invalid @enderror"
                        id="numerofolio" name="numerofolio" aria-describedby="numerofolioError"
                        placeholder="Numero de folio"
                        aria-label="Numero de folio">{{ old('numerofolio') }}</input>
                    @error('numerofolio')
                        <div id="numerofolioError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="usoexclusivo" class="form-label text-muted fs-6 fw-bold">Uso exclusivo de</label>
                    <input type="text" class="form-control @error('usoexclusivo') is-invalid @enderror"
                        id="usoexclusivo" name="usoexclusivo" aria-describedby="usoexclusivoError"
                        placeholder="Uso exclusivo de" aria-label="Uso exclusivo de">{{ old('usoexclusivo') }}</input>
                    @error('usoexclusivo')
                        <div id="usoexclusivoError" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <!-- Botón de envío -->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-block">Enviar</button>
            </div>
        </form>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script para manejar los mensajes de éxito, error y clases inválidas -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ocultar mensaje de éxito después de 5 segundos
            var successMessage = document.getElementById('success-message');
            if (successMessage) {
                setTimeout(function() {
                    successMessage.style.display = 'none';
                }, 5000);
            }

            // Ocultar mensaje de error después de 5 segundos
            // var errorMessage = document.getElementById('error-message');
            // if (errorMessage) {
            //     setTimeout(function() {
            //         errorMessage.style.display = 'none';
            //     }, 3000);
            // }

            // Eliminar clases 'is-invalid' después de que el usuario empiece a escribir
            var invalidFields = document.querySelectorAll('.is-invalid');

            // Función para eliminar la clase 'is-invalid' al escribir en el campo
            function clearInvalidState(event) {
                event.target.classList.remove('is-invalid');
            }

            // Añadir el evento 'input' a cada campo que tenga la clase 'is-invalid'
            invalidFields.forEach(function(field) {
                field.addEventListener('input', clearInvalidState);
            });

        });
    </script>

</body>

</html>