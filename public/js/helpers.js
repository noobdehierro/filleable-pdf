$(document).ready(function () {
    $("#curp")
        .mask("AAAA000000AAAAAA00")
        .on("keyup", function () {
            var valor = $(this).val().toUpperCase(); // Convierte el valor a mayúsculas
            $(this).val(valor); // Actualiza el campo con el valor en mayúsculas
        });

    $("#curp").on("blur", function () {
        var curpValue = $(this).val();
        var rfcValue = curpValue.substring(0, 10); // Obtener los primeros 10 caracteres
        $("#rfc").val(rfcValue); // Asignar esos 10 caracteres al campo RFC
    });
    $("#rfc")
        .mask("AAAA000000AAA")
        .on("keyup", function () {
            var valor = $(this).val().toUpperCase(); // Convierte el valor a mayúsculas
            $(this).val(valor); // Actualiza el campo con el valor en mayúsculas
        });
    $("#celular").mask("0000000000"); // celular 10
    $("#ctaclabe").mask("000000000000000000"); // ctaclabe 18
    $("#telefonofijo").mask("0000000000"); // telefonofijo 10
    $("#celulararrendador").mask("0000000000"); // celulararrendador 10
    $("#telefonolaboral").mask("0000000000"); // telefonolaboral 10
    $("#celularreflaboral").mask("0000000000"); // celularreflaboral 10
    $("#telefonofijoreflaboral").mask("0000000000"); // telefonofijoreflaboral 10
    $("#codigopostal").mask("00000");

    $(".arrendador").hide();

    $("#tipovivienda").on("change", function () {
        var tipovivienda = $(this).val();
        if (tipovivienda == "Opción1") {
            $(".arrendador").show();
        } else {
            $(".arrendador").hide();
        }
    });

    $(document).on('input', 'input[type="text"], textarea', function () {
        $(this).val($(this).val().toUpperCase());
      });
});
