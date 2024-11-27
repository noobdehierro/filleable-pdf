<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mikehaertl\pdftk\Pdf;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->fechapagere);
        // dd($request->all());
        setlocale(LC_TIME, 'es_ES.UTF-8', 'es_ES', 'spanish');
        // if ($locale === false) {
        //     dd("No se pudo establecer la localización.");
        // } else {
        //     dd("Localización aplicada: $locale <br/>");
        // }
        // dd($request->all());
        $curp = $request->curp; // Variable para curp 
        $Text2 = $request->nombresolicitante; // Variable para Text2
        $Text3 = $request->apellidopaterno; // Variable para Text3
        $Text4 = $request->apellidomaterno; // Variable para Text4
        $Text5 = $request->domicilio; // Variable para Text5
        $colonia = $request->colonia; // Variable para colonia
        $Asesor = $request->asesor; // Variable para nombre asesor
        $delegacion = $request->delegacion; // Variable para delegacion
        $ciudad = $request->ciudad; // Variable para ciudad
        $edo = $request->estado; // Variable para edo
        $cel = $request->celular; // Variable para cel
        $Group13 = $request->tiposolicitud; // Variable para Group13
        $Group14 = $request->frecuencia; // Variable para Group14
        $tipo_credito = $request->tipocredito; // Variable para tipo de credito
        $Group15 = $request->genero; // Variable para Group15
        $tel_fijo = $request->telefonofijo; // Variable para tel fijo
        $fecha_nac =  date('dmY', strtotime($request->fechanacimiento)); // Variable para fecha nac cambiar fromato a solo nuemros
        $ent_fed_de_nac = $request->entidadfederativa; // Variable para ent fed de nac
        // $pais = $request->paisnacimiento; // Variable para pais
        $pais = "MÉXICO"; // Variable para pais
        $Text21 = $request->tiempoderesidir; // Variable para Text21
        $Text22 = $request->nombrearrendador; // Variable para Text22
        $Text23 = $request->apellidopaternoarrendador; // Variable para Text23
        $Text24 = $request->apellidomaternoarrendador; // Variable para Text24
        $Text25 = $request->celulararrendador; // Variable para Text25
        // $fiel = $request->fiel; // Variable para fiel
        $fiel = ""; // Variable para fiel
        // $migratoria = $request->tipoynformamigratoria; // Variable para migratoria
        $migratoria = ""; // Variable para migratoria
        $Group16 = $request->tipovivienda; // Variable para Group16
        // $convenio = $request->convenio; // Variable para convenio
        $convenio = "Gobierno Oaxaca"; // Variable para convenio
        $lugar_de_trabajo = $request->centrotrabajo; // Variable para lugar de trabajo
        $Text28 = $request->telefonolaboral; // Variable para Text28
        $Text29 = $request->extencion; // Variable para Text29
        $puesto = $request->puesto; // Variable para puesto
        $Text31 = $request->sueldo; // Variable para Text31
        $Text32 = date('dmY', strtotime($request->fechaingreso)); // Variable para Text32 cambiar fromato a solo nuemros $$request->fechaingreso; // Variable para Text32
        $Text33 = $request->nombrereflaboral; // Variable para Text33
        $Text34 = $request->apellidopaternoreflaboral; // Variable para Text34
        $Text35 = $request->apellidomaternoreflaboral; // Variable para Text35
        $Text36 = $request->celularreflaboral; // Variable para Text36
        $Text37 = $request->telefonofijoreflaboral; // Variable para Text37
        $Text38 = $request->direccionreflaboral; // Variable para Text38
        // $Opcion2_1 = $request->origenrecursospago; // Variable para 1
        $Opcion2_1 = "Opción2"; // Variable para 1
        $Opcion8_2 = $request->destinorecursos; // Variable para 2
        // $Opcion8_3 = $request->formapago; // Variable para 3
        $Opcion8_3 = "Opción8";
        // $Opcion11_4 = $request->montopago; // Variable para 4
        $Opcion11_4 = "Opción11"; // Variable para 4
        $Opcion1_5 = $request->operacionesestimadas; // Variable para 5
        // $Opcion4_6 = $request->ocupacioneconomica; // Variable para 6
        $Opcion4_6 = "Opción4"; // Variable para 6
        $Opcion8_7 = $request->tipocredito; // Variable para 7
        // $Opcion15_8 = $request->funcionespublicas; // Variable para 8
        $Opcion15_8 = "Opción15"; // Variable para 8
        // $Opcion11_9 = $request->funcionespublicasnacionalidad; // Variable para 9
        $Opcion11_9 = 'Off'; // Variable para 9
        // $Opcion18_10 = $request->nacionalidad; // Variable para 10
        $Opcion18_10 = "Opción18"; // Variable para 10
        // $Opcion21_11 = $request->algunprovedor; // Variable para 11
        $Opcion21_11 = "Opción21"; // Variable para 11
        // $Opcion23_12 = $request->parientespublicos; // Variable para 12
        $Opcion23_12 = "Opción23"; // Variable para 12
        // $Opcion24_13 = $request->inlineCheckbox1; // Variable para 13
        $Opcion24_13 = "Opción24"; // Variable para 13
        // $Opcion25_13a = $request->inlineCheckbox2; // Variable para 13a
        $Opcion25_13a = "Opción25"; // Variable para 13a
        // $Opcion26_13b = $request->inlineCheckbox3; // Variable para 13b
        $Opcion26_13b = "Opción26"; // Variable para 13b
        // $Opcion27_13c = $request->inlineCheckbox4; // Variable para 13c
        $Opcion27_13c = "Opción27"; // Variable para 13c
        // $Opcion29_14 = $request->requierefactura; // Variable para 14
        $Opcion29_14 = "Opción29"; // Variable para 14
        $Opcion30_15 = $request->autorizacion; // Variable para 15
        $cp = $request->codigopostal; // Variable para cp
        $Nombre_y_Firma_del_Servidor_Publico = $request->nombreservidorpublico; // Variable para Nombre y Firma del Servidor Público
        $fecha = strftime('%A %d de %B de %Y');
        $funciones = $request->funciones; // Variable para funciones
        // $na = $request->noaplicafunciones; // Variable para na
        $na = "NO APLICA"; // Variable para na
        $titular =  $request->nombresolicitante . " " . $request->apellidopaterno . " " . $request->apellidomaterno; // Variable para titular
        $cat = $request->cat; // Variable para cat
        $monto_solicitado = $request->montosolicitado; // Variable para monto solicitado
        $monto_solicitado_texto = $request->montosolicitadotexto; // Variable para monto solicitado texto
        $Plazo = $request->plazo; // Variable para plazo
        $Texto198765432345678 = $request->aseguradora; // Variable para Texto198765432345678
        $Texto1982347365736748RFJEHGF = isset($request->enviardomicilio) ? 'X' : ''; // Variable para Texto1982347365736748RFJEHGF
        $Texto234567FDGJHKJ = isset($request->consultarinternet) ? 'X' : ''; // Variable para Texto234567FDGJHKJ
        $Texto3Y54YTFHGV = isset($request->enviarcorreoelectronico) ? 'X' : ''; // Variable para Texto3Y54YTFHGV
        $diapor_definir = date('d', strtotime($request->fechavencimiento)); // Variable para diapor definir
        $mes_por_definir = date('m', strtotime($request->fechavencimiento)); // Variable para mes por definir
        $año_por_definir = date('Y', strtotime($request->fechavencimiento)); // Variable para año por definir
        $diapor_definir2 = date('d', strtotime($request->fechacorte)); // Variable para diapor definir2
        $mes_por_definir2 = date('m', strtotime($request->fechacorte)); // Variable para mes por definir2
        $año_por_definir2 = date('Y', strtotime($request->fechacorte)); // Variable para año por definir2
        $Text48 = $request->seidentificacon; // Variable para Text48
        // $nacionalidad = $request->nacionalidad; // Variable para nacionalidad
        $nacionalidad = 'Mexicana'; // Variable para nacionalidad
        // $Text50 = $request->domiciliogeneral; // Variable para Text50
        $Text50 = $request->domicilio; // Variable para Text50
        $rfc = $request->rfc; // Variable para rfc
        $correo = $request->correoelectronico; // Variable para correo
        $Text55 = $request->fechasdisposicion; // Variable para Text55
        $cta_clabe = $request->ctaclabe; // Variable para cta clabe
        $banco = $request->banco; // Variable para banco
        $sucursal = "Corporporativo"; // Variable para sucursal
        $plazo2 = $request->plazocredito; // Variable para plazo2
        $fecha_corte = date('d/m/Y', strtotime($request->fechacortecredito)); // Variable para fecha corte
        $Lugar_de_elaboración = "Oaxaca"; // Variable para Lugar de elaboración
        $tasa_ordinaria = $request->tasaordinaria; // Variable para tasa ordinaria
        $tasa_moratoria = $request->tasamoratoria; // Variable para tasa moratoria
        $seg1 = $request->seg1; // Variable para seg1
        $seg2 = $request->seg2; // Variable para seg2
        $Texto4BGFHGJGHTD655 = isset($request->aceptar) ? 'X' : ''; // Variable para Texto4BGFHGJGHTD655
        $Texto5MHGHFHTO87554 = isset($request->aceptar) ? '' : 'X'; // Variable para Texto5MHGHFHTO87554
        $lugar_y_fecha = $request->lugaryfecha; // Variable para lugar y fecha
        $seg3 = $request->seg3; // Variable para seg3
        $na2 = $request->na2; // Variable para na2
        $Texto69878675 = isset($request->faculto) ? 'X' : ''; // Variable para Texto69878675
        $Texto712233DHGGHHH = isset($request->faculto) ? '' : 'X'; // Variable para Texto712233DHGGHHH
        $monto_total_a_pagar = $request->montototalpagar; // Variable para monto total a pagar
        $año = substr(date('Y', strtotime($request->fechapagere)), -1); // Variable para año
        $periodicidad = $request->periodicidadpagos; // Variable para periodicidad
        $parcialidades = $request->parcialidades; // Variable para parcialidades
        $Text86 = date('d/m/Y', strtotime($request->fechaprimerpago)); // Variable para Text86
        $fecha_vencimiento = date('d/m/Y', strtotime($request->fechavencimientocredito)); // Variable para fecha vencimiento
        $dia = date('d', strtotime($request->fechapagere)); // Variable para dia
        $mes = date('m', strtotime($request->fechapagere)); // Variable para mes
        $Bien_servicio_o_credito_a_pagar_Credito_Simple = $request->biencredito; // Variable para Bien servicio o crédito a pagar Crédito Simple
        $Aval_con_folio = $request->avalconfolio; // Variable para Aval con folio
        $undefined = $request->montomaximo; // Variable para undefined
        $cien_MN_Incluye_IVA = $request->cienmn; // Variable para 100 MN Incluye IVA
        $Por_este_conducto_autorizo_expresamente = $request->nombrequeautoriza; // Variable para Por este conducto autorizo expresamente
        $Número_de_empleado = $request->numeroempleado; // Variable para Número de empleado
        $Número_de_folio = $request->numerofolio; // Variable para Número de folio
        $Para_uso_exclusivo_de = $request->usoexclusivo; // Variable para Para uso exclusivo de
        $año3 = substr(date('Y', strtotime($request->fechaautorizacion)), -2); // Variable para año        // Variable para año3
        $año2 = date('Y', strtotime($request->fechadomiciliacion)); // Variable para año2
        $parcialidades_texto = $request->parcialidadestexto; // Variable para parcialidades texto
        $Texto8PAGARE_MONTO_TOTAL_LETRA = $request->montopagareletra; // Variable para Texto8PAGARE MONTO TOTAL LETRA
        $Número_de_nómina = $request->numeronomina; // Variable para Número de nómina
        $monto_total_a_pagar_texto = $request->montototalpagartexto; // Variable para monto total a pagar texto
        $monto_total_a_pagar_texto2 = $request->montopagarirrevocabletexto; // Variable para monto total a pagar texto2

        $data = [
            "curp" => $curp,
            "Text2" => $Text2,
            "Text3" => $Text3,
            "Text4" => $Text4,
            "Text5" => $Text5,
            "colonia" => $colonia,
            "nombre asesor" => $Asesor,
            "delegacion" => $delegacion,
            "ciudad" => $ciudad,
            "edo" => $edo,
            "cel" => $cel,
            "Group13" => $Group13,
            "Group14" => $Group14,
            "tipo de credito" => $tipo_credito,
            "Group15" => $Group15,
            "tel fijo" => $tel_fijo,
            "fecha nac" => $fecha_nac,
            "ent fed de nac" => $ent_fed_de_nac,
            "pais" => $pais,
            "Text21" => $Text21,
            "Text22" => $Text22,
            "Text23" => $Text23,
            "Text24" => $Text24,
            "Text25" => $Text25,
            "fiel" => $fiel,
            "migratoria" => $migratoria,
            "Group16" => $Group16,
            "convenio" => $convenio,
            "lugar de trabajo" => $lugar_de_trabajo,
            "Text28" => $Text28,
            "Text29" => $Text29,
            "puesto" => $puesto,
            "Text31" => $Text31,
            "Text32" => $Text32,
            "Text33" => $Text33,
            "Text34" => $Text34,
            "Text35" => $Text35,
            "Text36" => $Text36,
            "Text37" => $Text37,
            "Text38" => $Text38,
            "1" => $Opcion2_1,
            "2" => $Opcion8_2,
            "3" => $Opcion8_3,
            "4" => $Opcion11_4,
            "5" => $Opcion1_5,
            "6" => $Opcion4_6,
            "7" => $Opcion8_7,
            "8" => $Opcion15_8,
            "9" => $Opcion11_9,
            "10" => $Opcion18_10,
            "11" => $Opcion21_11,
            "12" => $Opcion23_12,
            "13" => $Opcion24_13,
            "13a" => $Opcion25_13a,
            "13b" => $Opcion26_13b,
            "13c" => $Opcion27_13c,
            "14" => $Opcion29_14,
            "15" => $Opcion30_15,
            "cp" => $cp,
            "Nombre y Firma del Servidor Público" => $Nombre_y_Firma_del_Servidor_Publico,
            "fecha" => $fecha,
            "funciones" => $funciones,
            "na" => $na,
            "titular" => $titular,
            "cat" => $cat,
            "monto solicitado" => $monto_solicitado,
            "monto solicitado texto" => $monto_solicitado_texto,
            "plazo" => $Plazo,
            "Texto198765432345678" => $Texto198765432345678,
            "Texto1982347365736748RFJEHGF" => $Texto1982347365736748RFJEHGF,
            "Texto234567FDGJHKJ" => $Texto234567FDGJHKJ,
            "Texto3Y54YTFHGV" => $Texto3Y54YTFHGV,
            "diapor definir" => $diapor_definir,
            "mes por definir" => $mes_por_definir,
            "año por definir" => $año_por_definir,
            "diapor definir2" => $diapor_definir2,
            "mes por definir2" => $mes_por_definir2,
            "año por definir2" => $año_por_definir2,
            "Text48" => $Text48,
            "nacionalidad" => $nacionalidad,
            "Text50" => $Text50,
            "rfc" => $rfc,
            "correo" => $correo,
            "Text55" => $Text55,
            "cta clabe" => $cta_clabe,
            "banco" => $banco,
            "sucursal" => $sucursal,
            "plazo2" => $plazo2,
            "fecha corte" => $fecha_corte,
            "Lugar de elaboración" => $Lugar_de_elaboración,
            "tasa ordinaria" => $tasa_ordinaria,
            "tasa moratoria" => $tasa_moratoria,
            "seg1" => $seg1,
            "seg2" => $seg2,
            "Texto4BGFHGJGHTD655" => $Texto4BGFHGJGHTD655,
            "Texto5MHGHFHTO87554" => $Texto5MHGHFHTO87554,
            "lugar y fecha" => $lugar_y_fecha,
            "seg3" => $seg3,
            "na2" => $na2,
            "Texto69878675" => $Texto69878675,
            "Texto712233DHGGHHH" => $Texto712233DHGGHHH,
            "monto total a pagar" => $monto_total_a_pagar,
            "año" => $año,
            "periodicidad" => $periodicidad,
            "parcialidades" => $parcialidades,
            "Text86" => $Text86,
            "fecha vencimiento" => $fecha_vencimiento,
            "dia" => $dia,
            "mes" => $mes,
            "Bien servicio o crédito a pagar Crédito Simple" => $Bien_servicio_o_credito_a_pagar_Credito_Simple,
            "Aval con folio" => $Aval_con_folio,
            "undefined" => $undefined,
            "100 MN Incluye IVA" => $cien_MN_Incluye_IVA,
            "Por este conducto autorizo expresamente" => $Por_este_conducto_autorizo_expresamente,
            "Número de empleado" => $Número_de_empleado,
            "Número de folio" => $Número_de_folio,
            "Para uso exclusivo de" => $Para_uso_exclusivo_de,
            "año3" => $año3,
            "año2" => $año2,
            "parcialidades texto" => $parcialidades_texto,
            "Texto8PAGARE MONTO TOTAL LETRA" => $Texto8PAGARE_MONTO_TOTAL_LETRA,
            "Número de nómina" => $Número_de_nómina,
            "monto total a pagar texto" => $monto_total_a_pagar_texto,
            "monto total a pagar texto2" => $monto_total_a_pagar_texto2,
        ];

        $fileName = 'pdf_' . rand(2000, 1200000) . '.pdf';
        $pdf = new Pdf('pdfs/sample_request.pdf');
        $pdf->fillForm($data);
        // Descargar el PDF directamente
        // return response()->streamDownload(function () use ($pdf) {
        //     echo $pdf->send();
        // }, $fileName);
        // Mostrar el PDF en el navegador sin descargar
        return $pdf->send();


        return back()->with('success', 'Formulario enviado correctamente');
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
}
