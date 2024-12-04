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

    getDataFromIndexedDB();  // Llamar a la función al cargar la página

});

// Abre la base de datos IndexedDB
function openDatabase() {
    return new Promise((resolve, reject) => {
        const request = indexedDB.open('offlineDatabase', 3);  // Nombre de la base de datos y su versión

        request.onsuccess = function (event) {
            const db = event.target.result;
            resolve(db);  // Devuelve la base de datos abierta
        };

        request.onerror = function (event) {
            reject("Error al abrir la base de datos", event.target.error);
        };

        // Evento onupgradeneeded para crear objectStores si no existen
        request.onupgradeneeded = function (event) {
            const db = event.target.result;
            if (!db.objectStoreNames.contains('postRequests')) {
                const store = db.createObjectStore('postRequests', { keyPath: 'id', autoIncrement: true });
                store.createIndex('timestamp', 'timestamp', { unique: false });
            }
        };
    });
}

// Función para obtener los datos de IndexedDB
function getDataFromIndexedDB() {
    openDatabase().then(db => {
        const transaction = db.transaction(['postRequests'], 'readonly');
        const store = transaction.objectStore('postRequests');
        const request = store.get(1);  // Obtenemos el registro con la clave 1, puedes modificar esto según tu necesidad

        request.onsuccess = function (event) {
            const data = event.target.result;
            if (data) {
                // Si hay datos, completemos los inputs
                populateForm(data.body);
            } else {
                console.log("No hay datos en la base de datos.");
            }
        };

        request.onerror = function (event) {
            console.error("Error al obtener los datos:", event.target.error);
        };
    }).catch(err => {
        console.error('Error al abrir la base de datos:', err);
    });
}

// Función para llenar los inputs con los datos de la base de datos
function populateForm(dataBody) {
    const params = new URLSearchParams(dataBody);  // Convertimos el cuerpo de la petición en parámetros de URL

    // Usamos jQuery para llenar los campos
    $('#_token').val(params.get('_token'));
    $('#asesor').val(params.get('asesor'));
    $('#nombresolicitante').val(params.get('nombresolicitante'));
    $('#apellidopaterno').val(params.get('apellidopaterno'));
    $('#apellidomaterno').val(params.get('apellidomaterno'));
    $('#curp').val(params.get('curp'));
    $('#rfc').val(params.get('rfc'));
    $('#domicilio').val(params.get('domicilio'));
    $('#colonia').val(params.get('colonia'));
    $('#delegacion').val(params.get('delegacion'));
    $('#ciudad').val(params.get('ciudad'));
    $('#estado').val(params.get('estado'));
    $('#codigopostal').val(params.get('codigopostal'));
    $('#celular').val(params.get('celular'));
    $('#lugaryfecha').val(params.get('lugaryfecha'));
    $('#montosolicitado').val(params.get('montosolicitado'));
    $('#plazo').val(params.get('plazo'));
    $('#tipocreditoproducto').val(params.get('tipocreditoproducto'));
    $('#frecuencia').val(params.get('frecuencia'));
    $('#tiposolicitud').val(params.get('tiposolicitud'));
    $('#banco').val(params.get('banco'));
    $('#ctaclabe').val(params.get('ctaclabe'));
    $('#genero').val(params.get('genero'));
    $('#telefonofijo').val(params.get('telefonofijo'));
    $('#fechanacimiento').val(params.get('fechanacimiento'));
    $('#entidadfederativa').val(params.get('entidadfederativa'));
    $('#correoelectronico').val(params.get('correoelectronico'));
    $('#tipovivienda').val(params.get('tipovivienda'));
    $('#tiempoderesidir').val(params.get('tiempoderesidir'));
    $('#nombrearrendador').val(params.get('nombrearrendador'));
    $('#apellidopaternoarrendador').val(params.get('apellidopaternoarrendador'));
    $('#apellidomaternoarrendador').val(params.get('apellidomaternoarrendador'));
    $('#celulararrendador').val(params.get('celulararrendador'));
    $('#centrotrabajo').val(params.get('centrotrabajo'));
    $('#puesto').val(params.get('puesto'));
    $('#telefonolaboral').val(params.get('telefonolaboral'));
    $('#extencion').val(params.get('extencion'));
    $('#sueldo').val(params.get('sueldo'));
    $('#fechaingreso').val(params.get('fechaingreso'));
    $('#nombrereflaboral').val(params.get('nombrereflaboral'));
    $('#apellidopaternoreflaboral').val(params.get('apellidopaternoreflaboral'));
    $('#apellidomaternoreflaboral').val(params.get('apellidomaternoreflaboral'));
    $('#celularreflaboral').val(params.get('celularreflaboral'));
    $('#telefonofijoreflaboral').val(params.get('telefonofijoreflaboral'));
    $('#direccionreflaboral').val(params.get('direccionreflaboral'));
    $('#destinorecursos').val(params.get('destinorecursos'));
    $('#operacionesestimadas').val(params.get('operacionesestimadas'));
    $('#tipocredito').val(params.get('tipocredito'));
    $('#autorizacion').val(params.get('autorizacion'));
    $('#funciones').val(params.get('funciones'));
    $('#cat').val(params.get('cat'));
    $('#tasaordinaria').val(params.get('tasaordinaria'));
    $('#tasamoratoria').val(params.get('tasamoratoria'));
    $('#montototalpagar').val(params.get('montototalpagar'));
    $('#fechavencimiento').val(params.get('fechavencimiento'));
    $('#fechacorte').val(params.get('fechacorte'));
    $('#fechaprimerpago').val(params.get('fechaprimerpago'));
    $('#seidentificacon').val(params.get('seidentificacon'));
    $('#fechasdisposicion').val(params.get('fechasdisposicion'));
    $('#parcialidades').val(params.get('parcialidades'));
    $('#parcialidadestexto').val(params.get('parcialidadestexto'));
    $('#plazocredito').val(params.get('plazocredito'));
    $('#periodicidadpagos').val(params.get('periodicidadpagos'));
    $('#fechacortecredito').val(params.get('fechacortecredito'));
    $('#fechavencimientocredito').val(params.get('fechavencimientocredito'));
    $('#seg1').val(params.get('seg1'));
    $('#seg2').val(params.get('seg2'));
    $('#seg3').val(params.get('seg3'));
    $('#na2').val(params.get('na2'));
    $('#avalconfolio').val(params.get('avalconfolio'));
    $('#montomaximo').val(params.get('montomaximo'));
    $('#cienmn').val(params.get('cienmn'));
    $('#montopagarirrevocabletexto').val(params.get('montopagarirrevocabletexto'));
    $('#numeronomina').val(params.get('numeronomina'));

    // checkbox
    // Obtener el valor de la base de datos
    let enviardomicilio = params.get('enviardomicilio'); // Suponiendo que viene algo como "on" o "true"

    // Marcar o desmarcar el checkbox dependiendo del valor
    if (enviardomicilio === "on" || enviardomicilio === "true") {
        $('#enviardomicilio').prop('checked', true); // Marcar el checkbox
    } else {
        $('#enviardomicilio').prop('checked', false); // Asegurarse de que esté desmarcado
    }

    let consultarinternet = params.get('consultarinternet'); // Suponiendo que viene algo como "on" o "true"

    // Marcar o desmarcar el checkbox dependiendo del valor
    if (consultarinternet === "on" || consultarinternet === "true") {
        $('#consultarinternet').prop('checked', true); // Marcar el checkbox
    } else {
        $('#consultarinternet').prop('checked', false); // Asegurarse de que esté desmarcado
    }

    let enviarcorreoelectronico = params.get('enviarcorreoelectronico'); // Suponiendo que viene algo como "on" o "true"

    // Marcar o desmarcar el checkbox dependiendo del valor
    if (enviarcorreoelectronico === "on" || enviarcorreoelectronico === "true") {
        $('#enviarcorreoelectronico').prop('checked', true); // Marcar el checkbox
    } else {
        $('#enviarcorreoelectronico').prop('checked', false); // Asegurarse de que esté desmarcado
    }

    let aceptar = params.get('aceptar'); // Suponiendo que viene algo como "on" o "true"

    // Marcar o desmarcar el checkbox dependiendo del valor
    if (aceptar === "on" || aceptar === "true") {
        $('#aceptar').prop('checked', true); // Marcar el checkbox
    } else {
        $('#aceptar').prop('checked', false); // Asegurarse de que esté desmarcado
    }

    let faculto = params.get('faculto'); // Suponiendo que viene algo como "on" o "true"

    // Marcar o desmarcar el checkbox dependiendo del valor
    if (faculto === "on" || faculto === "true") {
        $('#faculto').prop('checked', true); // Marcar el checkbox
    } else {
        $('#faculto').prop('checked', false); // Asegurarse de que esté desmarcado
    }

}
