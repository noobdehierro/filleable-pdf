$(document).ready(function () {

    $('#curp').mask('AAAAAAAAAAAAAAAAAA'); // CURP 18
    $('#rfc').mask('AAAAAAAAAAAAA'); // RFC 13
    $('#celular').mask('0000000000'); // celular 10
    $('#ctaclabe').mask('000000000000000000'); // ctaclabe 18
    $('#telefonofijo').mask('0000000000'); // telefonofijo 10
    $('#celulararrendador').mask('0000000000'); // celulararrendador 10
    $('#telefonolaboral').mask('0000000000'); // telefonolaboral 10
    $('#celularreflaboral').mask('0000000000'); // celularreflaboral 10
    $('#telefonofijoreflaboral').mask('0000000000'); // telefonofijoreflaboral 10
    $('#codigopostal').mask('00000');

    $('.arrendador').hide();

    $('#tipovivienda').on('change', function () {
        var tipovivienda = $(this).val();
        if (tipovivienda == 'Opción1') {
            $('.arrendador').show();
        } else {
            $('.arrendador').hide();
        }
    });
});