<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Luecano\NumeroALetras\NumeroALetras;
use mikehaertl\pdftk\Pdf;
use NumberFormatter;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function oaxaca()
    {
        return view('oaxaca');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function morelos()
    {
        return view('morelos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function guerrero()
    {
        return view('guerrero');
    }

    public function salud_morelos()
    {
        return view('salud_morelos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        setlocale(LC_TIME, 'es_MX.UTF-8', 'es_MX', 'spanish');

        $lugar = $request->lugar;

        // Conversión de montos y formato de números
        $montosolicitado = floatval($request->montosolicitado ?? 0);
        $montosolicitadotexto = $montosolicitado ? $this->numberToLetters($montosolicitado) : '';
        $montosolicitadoformat = $montosolicitado ? $this->formatNumber($montosolicitado, 2) : '';

        $parcialidades = floatval($request->parcialidades ?? 0);
        $parcialidadesformat = $parcialidades ? $this->formatNumber($parcialidades, 2) : '';
        $parcialidadestexto = $parcialidades ? $this->numberToLetters($parcialidades) : '';
        $decimal_parcialidades = $parcialidades ? $this->getDecimals($parcialidades) : '';

        // Mapeo del tipo de solicitud
        $tiposolicitudMap = [
            'Opción1' => ['nombre' => "CREDITO SIMPLE", 'codigo' => 'Opción8'],
            'Opción2' => ['nombre' => "REFINANCIAMIENTO", 'codigo' => 'Opción10'],
            'Opción3' => ['nombre' => "COMPRA DE CARTERA", 'codigo' => 'Opción9']
        ];
        $tipoData = $tiposolicitudMap[$request->tiposolicitud] ?? ['nombre' => '', 'codigo' => ''];

        // Formateo de fechas
        $fecha_nac      = date('dmY', strtotime($request->fechanacimiento));
        $fecha_ingreso  = date('dmY', strtotime($request->fechaingreso));
        $fecha          = strftime('%d de %B de %Y', strtotime($request->lugaryfecha));
        $fecha_corte    = strftime('%d de %B de %Y', strtotime($request->fechacortecredito));
        $fecha_venc     = strftime('%d de %B de %Y', strtotime($request->fechavencimientocredito));

        // Arreglo con los datos a rellenar en el PDF
        $data = [
            "curp"                               => $request->curp,
            "Text2"                              => $request->nombresolicitante,
            "Text3"                              => $request->apellidopaterno,
            "Text4"                              => $request->apellidomaterno,
            "Text5"                              => $request->domicilio,
            "colonia"                            => $request->colonia,
            "nombre asesor"                      => $request->asesor,
            "delegacion"                         => $request->delegacion,
            "ciudad"                             => $request->ciudad,
            "edo"                                => $request->estado,
            "cel"                                => $request->celular,
            "Group13"                            => $request->tiposolicitud,
            "Group14"                            => "Opción4",
            "tipo de credito"                    => $tipoData['nombre'],
            "Group15"                            => $request->genero,
            "tel fijo"                           => $request->telefonofijo,
            "fecha nac"                          => $fecha_nac,
            "ent fed de nac"                     => $request->entidadfederativa,
            "pais"                               => "MÉXICO",
            "Text21"                             => $request->tiempoderesidir,
            "Text22"                             => $request->nombrearrendador,
            "Text23"                             => $request->apellidopaternoarrendador,
            "Text24"                             => $request->apellidomaternoarrendador,
            "Text25"                             => $request->celulararrendador,
            "fiel"                               => "",
            "migratoria"                         => "",
            "Group16"                            => $request->tipovivienda,
            "convenio"                           => "GOBIERNO " . (
                $lugar
                ? ($lugar == 'SALUDMORELOS' ? 'MORELOS' : $lugar)
                : ''
            ),
            "lugar de trabajo"                   => $request->centrotrabajo,
            "Text28"                             => $request->telefonolaboral,
            "Text29"                             => $request->extencion,
            "puesto"                             => $request->puesto,
            "Text31"                             => $this->formatNumber(floatval($request->sueldo ?? 0), 2),
            "Text32"                             => $fecha_ingreso,
            "Text33"                             => $request->nombrereflaboral,
            "Text34"                             => $request->apellidopaternoreflaboral,
            "Text35"                             => $request->apellidomaternoreflaboral,
            "Text36"                             => $request->celularreflaboral,
            "Text37"                             => $request->telefonofijoreflaboral,
            "Text38"                             => $request->direccionreflaboral,
            "1"                                  => "Opción2",
            "2"                                  => $request->destinorecursos,
            "3"                                  => "Opción8",
            "4"                                  => "Opción11",
            "5"                                  => "Opción1",
            "6"                                  => "Opción4",
            "7"                                  => $tipoData['codigo'],
            "8"                                  => "Opción15",
            "9"                                  => 'Off',
            "10"                                 => "Opción18",
            "11"                                 => "Opción21",
            "12"                                 => "Opción23",
            "13"                                 => "Opción24",
            "13a"                                => "Opción25",
            "13b"                                => "Opción26",
            "13c"                                => "Opción27",
            "14"                                 => "Opción29",
            "15"                                 => $request->autorizacion,
            "cp"                                 => $request->codigopostal,
            "Nombre y Firma del Servidor Público" => "",
            "fecha"                              => $fecha,
            "funciones"                          => $request->funciones,
            "na"                                 => "NO APLICA",
            "titular"                            => trim($request->nombresolicitante . " " . $request->apellidopaterno . " " . $request->apellidomaterno),
            "cat"                                => $request->cat . "%",
            "monto solicitado"                   => $montosolicitadoformat,
            "monto solicitado texto"             => $montosolicitadotexto,
            "plazo"                              => $request->plazo,
            "Texto198765432345678"               => 'NO APLICA',
            "Texto1982347365736748RFJEHGF"        => isset($request->enviardomicilio) ? 'X' : '',
            "Texto234567FDGJHKJ"                 => isset($request->consultarinternet) ? 'X' : '',
            "Texto3Y54YTFHGV"                    => isset($request->enviarcorreoelectronico) ? 'X' : '',
            "diapor definir"                     => date('d', strtotime($request->fechavencimientocredito)),
            "mes por definir"                    => date('m', strtotime($request->fechavencimientocredito)),
            "año por definir"                    => date('Y', strtotime($request->fechavencimientocredito)),
            "diapor definir2"                    => date('d', strtotime($request->fechacortecredito)),
            "mes por definir2"                   => date('m', strtotime($request->fechacortecredito)),
            "año por definir2"                   => date('Y', strtotime($request->fechacortecredito)),
            "Text48"                             => $request->seidentificacon . " " . $request->numero_identificacion,
            "nacionalidad"                       => 'MEXICANA',
            "Text50"                             => $request->domicilio . " " . $request->colonia . " C.P. " . $request->codigopostal,
            "rfc"                                => $request->rfc,
            "correo"                             => $request->correoelectronico,
            "Text55"                             => strftime('%d de %B de %Y', strtotime($request->fechasdisposicion)),
            "cta clabe"                          => $request->ctaclabe,
            "banco"                              => $request->banco,
            "sucursal"                           => "CORPORATIVO",
            "plazo2"                             => $request->plazo . " QUINCENAS",
            "fecha corte"                        => $fecha_corte,
            "Lugar de elaboración"               => (
                $lugar
                ? ($lugar == 'SALUDMORELOS' ? 'MORELOS' : $lugar)
                : ''
            ),
            "tasa ordinaria"                     => $request->tasaordinaria . "%",
            "tasa moratoria"                     => $request->tasamoratoria . "%",
            "seg1"                               => $request->seg1,
            "seg2"                               => $request->seg2,
            "Texto4BGFHGJGHTD655"                => 'X',
            "Texto5MHGHFHTO87554"                => '',
            "lugar y fecha"                      => (
                $lugar
                ? ($lugar == 'SALUDMORELOS' ? 'MORELOS' : $lugar)
                : ''
            ) . " " . $fecha,
            "seg3"                               => $request->seg3,
            "na2"                                => $request->na2,
            "Texto69878675"                      => 'X',
            "Texto712233DHGGHHH"                 => '',
            "monto total a pagar"                => $this->formatNumber(floatval($request->montototalpagar ?? 0), 2),
            "año"                                => substr(date('Y', strtotime($request->lugaryfecha)), -1),
            "periodicidad"                       => "Quincenal",
            "parcialidades"                      => $parcialidadesformat,
            "Text86"                             => strftime('%d de %B de %Y', strtotime($request->fechacortecredito)),
            "fecha vencimiento"                  => $fecha_venc,
            "dia"                                => date('d', strtotime($request->lugaryfecha)),
            "mes"                                => date('m', strtotime($request->lugaryfecha)),
            "Bien servicio o crédito a pagar Crédito Simple" => "",
            "Aval con folio"                     => $request->avalconfolio,
            "undefined"                          => $parcialidadestexto,
            "100 MN Incluye IVA"                 => $decimal_parcialidades,
            "Por este conducto autorizo expresamente" => "ID FINANCIERO",
            "Número de empleado"                 => $request->numeronomina,
            "Número de folio"                    => "",
            "Para uso exclusivo de"              => "ID FINANCIERO",
            "año3"                               => substr(date('Y', strtotime($request->lugaryfecha)), -2),
            "año2"                               => date('Y', strtotime($request->lugaryfecha)),
            "parcialidades texto"                => $parcialidadestexto,
            "Texto8PAGARE MONTO TOTAL LETRA"     => $request->montototalpagar ? $this->numberToLetters(floatval($request->montototalpagar)) : '',
            "Número de nómina"                   => $request->numeronomina,
            "monto total a pagar texto"          => $request->montototalpagar ? $this->numberToLetters(floatval($request->montototalpagar)) : '',
            "monto total a pagar texto2"         => $request->montototalpagar ? $this->numberToLetters(floatval($request->montototalpagar)) : '',
            "plazo3"                             => "QUINCENAS",
            "dias naturales"                     => "15",
            "tfm"                                => $request->tazafijamensual . "%",
            "tfmm"                               => $request->tazafijamensualmoratoria . "%",

            "fechamd"                            =>  substr($fecha, 0, -7),
            "suscritomd"                         => trim($request->nombresolicitante . " " . $request->apellidopaterno . " " . $request->apellidomaterno),
            "nominamd"                           => $request->plazo,
            "parcialidadesmd"                    => $parcialidadesformat,
            "parcialidadestextomd"               => $parcialidadestexto,
            "totalmd"                            => $this->formatNumber(floatval($request->montototalpagar ?? 0), 2),
            "totaltextomd"                       => $request->montototalpagar ? $this->numberToLetters(floatval($request->montototalpagar)) : '',
            "numerocreditomd"                    => $request->avalconfolio,
            "nombremd"                           => trim($request->nombresolicitante . " " . $request->apellidopaterno . " " . $request->apellidomaterno),
            "numeronominamd"                     => $request->numeronomina,


            "diamorelos"                              => date('d', strtotime($request->lugaryfecha)),
            "mesmorelos"                              => date('m', strtotime($request->lugaryfecha)),
            "añomorelos"                              => date('Y', strtotime($request->lugaryfecha)),
            "suscritomorelos"                         => trim($request->nombresolicitante . " " . $request->apellidopaterno . " " . $request->apellidomaterno),
            "nominamorelos"                           => $request->plazo,
            "parcialidadesmorelos"                    => $parcialidadesformat,
            "parcialidadesletramorelos"               => $parcialidadestexto,
            "numerocreditomorelos"                    => $request->avalconfolio,
            "nombremorelos"                           => trim($request->nombresolicitante . " " . $request->apellidopaterno . " " . $request->apellidomaterno),
            "numeronominamorelos"                     => $request->numeronomina
        ];

        // Genera y envía el PDF
        // $pdf = new Pdf('pdfs/sample_request.pdf');
        $pdf = null;
        if ($lugar == "MORELOS") {
            $pdf = new Pdf('pdfs/morelos.pdf');
        } elseif ($lugar == "OAXACA") {
            $pdf = new Pdf('pdfs/oaxaca.pdf');
        } elseif ($lugar == "GUERRERO") {
            $pdf = new Pdf('pdfs/guerrero.pdf');
        } elseif ($lugar == "SALUDMORELOS") {
            $pdf = new Pdf('pdfs/saludmorelos.pdf');
        } else {
            throw new Exception("El valor de 'lugar' no es válido.");
        }

        if (!$pdf instanceof Pdf) {
            throw new Exception("Error al instanciar el objeto Pdf.");
        }

        $pdf->fillForm($data)->needAppearances();
        return $pdf->send();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function numberToLetters($number, $decimals = true)
    {
        $formatter = new NumeroALetras();
        $decimals = 0;
        $currency = 'pesos';
        $cents = 'centavos';

        $decimalPart = explode('.', (string)$number);
        $decimal = isset($decimalPart[1]) ? str_pad($decimalPart[1], 2, '0') : '00';

        return ($formatter->toMoney($number, $decimals, $currency, $cents) . ' ' . $decimal . '/100 M.N.');
    }

    public function formatNumber($number)
    {
        // Obtener la parte entera del número
        // $integerPart = floor($number);

        // Formatear solo la parte entera como moneda
        $formatter = new NumberFormatter('es_MX', NumberFormatter::CURRENCY);
        $formatter->setAttribute(NumberFormatter::FRACTION_DIGITS, 2);  // Sin decimales
        $formattedNumber = $formatter->formatCurrency($number, 'MXN');

        // Captura la parte decimal original
        // $decimalPart = explode('.', (string)$number);
        // $decimal = isset($decimalPart[1]) ? str_pad($decimalPart[1], 2, '0') : '00';

        // Devuelve el resultado con el formato adecuado
        // return $formattedNumber . ' ' . $decimal . '/100 MXN';
        return $formattedNumber;
    }

    public function getDecimals($number)
    {
        $decimalPart = explode('.', (string)$number);
        $decimal = isset($decimalPart[1]) ? str_pad($decimalPart[1], 2, '0') : '00';
        return $decimal;
    }
}
