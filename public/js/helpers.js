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
        .mask("AAAAAAAAAAAAA")
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

     // Objeto con opciones por frecuencia
     var opcionesPorFrecuencia = {
        Quincenas: [12, 24, 36, 48],   // Opciones para mensual
        Meses: [6, 12, 18, 24], // Opciones para quincenal
    };

    $("#frecuencia").on("change", function () {
        var frecuencia = $(this).val(); // Obtener valor seleccionado
        var $plazo = $("#plazo");       // Referencia al select #plazo
        var frec = frecuencia == "Opción4" ? "Quincenas" : "Meses";
        console.log(frec);
        // Limpiar opciones anteriores
        $plazo.empty();

        if (frecuencia && opcionesPorFrecuencia[frec]) {
            // Agregar la opción predeterminada
            $plazo.append('<option value="">Seleccione un plazo</option>');

            // Agregar nuevas opciones según la frecuencia seleccionada
            opcionesPorFrecuencia[frec].forEach(function (opcion) {
                $plazo.append('<option value="' + opcion + ' ' + frec + '">' + opcion + ' ' + frec + '</option>');
            });
        } else {
            // En caso de no seleccionar frecuencia
            $plazo.append('<option value="">Seleccione un plazo</option>');
        }
    });
});
