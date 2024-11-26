<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use mikehaertl\pdftk\Pdf;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FormController::class, 'index'])->name('form.index');

Route::post('/store', [FormController::class, 'store'])->name('form.store');

// Route::get('/pdfnew', function () {
//     $data = [
//         "fecha" => date('d/m/Y'),
//         "nombre asesor" => 'nombre asesor',
//         "curp" => 'REAL970615HDFYLS02',
//     ];

//     $fileName = 'pdf_' . rand(2000, 1200000) . '.pdf';
//     $pdf = new Pdf('pdfs/sample_request.pdf');
//     $pdf->fillForm($data);

//     // Descargar el PDF directamente
//     // return response()->streamDownload(function () use ($pdf) {
//     //     echo $pdf->send();
//     // }, $fileName);

//     // mostrar el PDF en el navegador sin descargar
//     return $pdf->send();
// });





Route::get('/pdfnew', function () {
    $curp = "curp"; // Variable para curp
    $Text2 = "Text2"; // Variable para Text2
    $Text3 = "Text3"; // Variable para Text3
    $Text4 = "Text4";  // Variable para Text4
    $Text5 = "Text5";  // Variable para Text5
    $colonia = "colonia";  // Variable para colonia
    $Asesor =  "Asesor";  // Variable para nombre asesor
    $delegacion = "delegacion";   // Variable para delegacion
    $ciudad =  "ciudad";   // Variable para ciudad
    $edo =  "edo";  // Variable para edo
    $cel =  "cel";  // Variable para cel
    $Group13 = "Opción1"; // Variable para Group13
    $Group14 = "Opción4"; // Variable para Group14
    $tipo_credito = "CREDITO SIMPLE"; // Variable para tipo de credito
    $Group15 = "Off"; // Variable para Group15
    $tel_fijo =  "tel fijo"; // Variable para tel fijo
    $fecha_nac =  "fecha nac"; // Variable para fecha nac
    $ent_fed_de_nac =  "ent fed de nac"; // Variable para ent fed de nac
    $pais = "MEXICO"; // Variable para pais
    $Text21 = "Text21"; // Variable para Text21
    $Text22 = "Text22"; // Variable para Text22
    $Text23 = "Text23";  // Variable para Text23
    $Text24 =  "Text24"; // Variable para Text24
    $Text25 =  "Text25"; // Variable para Text25
    $fiel = "FIEL";  // Variable para fiel
    $migratoria =  "migratoria"; // Variable para migratoria
    $Group16 = "Opción3"; // Variable para Group16
    $convenio =  "convenio"; // Variable para convenio
    $lugar_de_trabajo =  "lugar de trabajo"; // Variable para lugar de trabajo
    $Text28 = "Text28"; // Variable para Text28
    $Text29 =  "Text29"; // Variable para Text29
    $puesto =  "puesto"; // Variable para puesto
    $Text31 =   "Text31";  // Variable para Text31
    $Text32 =  "Text32";  // Variable para Text32
    $Text33 = "Text33"; // Variable para Text33
    $Text34 = "Text34";  // Variable para Text34
    $Text35 = "Text35";  // Variable para Text35
    $Text36 = "Text36";  // Variable para Text36
    $Text37 = "Text37";  // Variable para Text37
    $Text38 =  "Text38"; // Variable para Text38
    $Opcion2_1 = "Opción2"; // Variable para 1
    $Opcion8_2 = "Opción8"; // Variable para 2
    $Opcion8_3 = "Opción8"; // Variable para 3
    $Opcion11_4 = "Opción11"; // Variable para 4
    $Opcion1_5 = "Opción1"; // Variable para 5
    $Opcion4_6 = "Opción4"; // Variable para 6
    $Opcion8_7 = "Opción8"; // Variable para 7
    $Opcion15_8 = "Opción15"; // Variable para 8
    $Opcion11_9 = "Opción11"; // Variable para 9
    $Opcion18_10 = "Opción18"; // Variable para 10
    $Opcion21_11 = "Opción21"; // Variable para 11
    $Opcion23_12 = "Opción23"; // Variable para 12
    $Opcion24_13 = "Opción24"; // Variable para 13
    $Opcion25_13a = "Opción25"; // Variable para 13a
    $Opcion26_13b = "Opción26"; // Variable para 13b
    $Opcion27_13c = "Opción27"; // Variable para 13c
    $Opcion29_14 = "Opción29"; // Variable para 14
    $Opcion30_15 = "Opción30"; // Variable para 15
    $cp = "cp";  // Variable para cp
    $Nombre_y_Firma_del_Servidor_Publico = "Nombre y Firma del Servidor Público";  // Variable para Nombre y Firma del Servidor Público
    $fecha = "fecha";  // Variable para fecha
    $funciones = "funciones";  // Variable para funciones
    $na = "NO APLICA"; // Variable para na
    $titular = "titular";  // Variable para titular
    $cat = "cat";  // Variable para cat
    $monto_solicitado = "monto solicitado"; // Variable para monto solicitado
    $monto_solicitado_texto =  "monto solicitado texto"; // Variable para monto solicitado texto
    $Plazo =  "Plazo"; // Variable para plazo
    $Texto198765432345678 = "NO APLICAs"; // Variable para Texto198765432345678
    $Texto1982347365736748RFJEHGF =  "NO APLICA"; // Variable para Texto1982347365736748RFJEHGF
    $Texto234567FDGJHKJ = "NO APLICA";  // Variable para Texto234567FDGJHKJ
    $Texto3Y54YTFHGV = "X"; // Variable para Texto3Y54YTFHGV
    $diapor_definir =  "diapor definir"; // Variable para diapor definir
    $mes_por_definir = "mes por definir"; // Variable para mes por definir
    $año_por_definir = "año por definir";  // Variable para año por definir
    $diapor_definir2 = "diapor definir2"; // Variable para diapor definir2
    $mes_por_definir2 = "mes por definir2";  // Variable para mes por definir2
    $año_por_definir2 =  "año por definir2"; // Variable para año por definir2
    $Text48 =  "Text48"; // Variable para Text48
    $nacionalidad = "MEXICANA"; // Variable para nacionalidad
    $Text50 = "Text50";  // Variable para Text50
    $rfc = "rfc"; // Variable para rfc
    $correo = "Correo electrónico:"; // Variable para correo
    $Text55 = "Text55";  // Variable para Text55
    $cta_clabe = "cta clabe"; // Variable para cta clabe
    $banco = "banco";  // Variable para banco
    $sucursal = "sucursal";  // Variable para sucursal
    $plazo2 = "plazo2"; // Variable para plazo2
    $fecha_corte = "fecha corte"; // Variable para fecha corte
    $Lugar_de_elaboración = "Lugar de elaboración"; // Variable para Lugar de elaboración
    $tasa_ordinaria =  "tasa ordinaria"; // Variable para tasa ordinaria
    $tasa_moratoria = "tasa moratoria";  // Variable para tasa moratoria
    $seg1 = "seg1";  // Variable para seg1
    $seg2 = "seg2";  // Variable para seg2
    $Texto4BGFHGJGHTD655 = "Text4BGFHGJGHTD655"; // Variable para Texto4BGFHGJGHTD655
    $Texto5MHGHFHTO87554 =  "Text5MHGHFHTO87554"; // Variable para Texto5MHGHFHTO87554
    $lugar_y_fecha = "lugar y fecha";  // Variable para lugar y fecha
    $seg3 =  "seg3"; // Variable para seg3
    $na2 = "na2";  // Variable para na2
    $Texto69878675 = "Text69878675"; // Variable para Texto69878675
    $Texto712233DHGGHHH =  "Text712233DHGGHHH"; // Variable para Texto712233DHGGHHH
    $monto_total_a_pagar =  "monto total a pagar"; // Variable para monto total a pagar
    $año =  "año"; // Variable para año
    $periodicidad = "QUINCENAL"; // Variable para periodicidad
    $parcialidades = "parcialidades";  // Variable para parcialidades
    $Text86 =  "Text86"; // Variable para Text86
    $fecha_vencimiento = "fecha vencimiento"; // Variable para fecha vencimiento
    $dia = "dia";  // Variable para dia
    $mes =  "mes"; // Variable para mes
    $Bien_servicio_o_credito_a_pagar_Credito_Simple = "SIN"; // Variable para Bien servicio o crédito a pagar Crédito Simple
    $Aval_con_folio =  "aval con folio"; // Variable para Aval con folio
    $undefined = "undefined"; // Variable para undefined
    $cien_MN_Incluye_IVA = "100 MN Incluye IVA"; // Variable para 100 MN Incluye IVA
    $Por_este_conducto_autorizo_expresamente = "Por este conducto autorizo expresamente"; // Variable para Por este conducto autorizo expresamente
    $Número_de_empleado = "numero de empleado"; // Variable para Número de empleado
    $Número_de_folio =  "numero de folio"; // Variable para Número de folio
    $Para_uso_exclusivo_de = "para uso exclusivo de"; // Variable para Para uso exclusivo de
    $año3 = "24"; // Variable para año3
    $año2 = "2024"; // Variable para año2
    $parcialidades_texto = "parcialidades texto"; // Variable para parcialidades texto
    $Texto8PAGARE_MONTO_TOTAL_LETRA = "Texto8PAGARE MONTO TOTAL LETRA"; // Variable para Texto8PAGARE MONTO TOTAL LETRA
    $Número_de_nómina = "numero de nomina"; // Variable para Número de nómina
    $monto_total_a_pagar_texto = "monto total a pagar texto"; // Variable para monto total a pagar texto
    $monto_total_a_pagar_texto2 = "monto total a pagar texto2"; // Variable para monto total a pagar texto2

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
});
