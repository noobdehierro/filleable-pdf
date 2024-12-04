const preLoad = function () {
    return caches.open("offline").then(function (cache) {
        // caching index and important routes
        return cache.addAll(filesToCache);
    });
};

self.addEventListener("install", function (event) {
    event.waitUntil(preLoad());
});

const filesToCache = [
    '/',
    '/offline.html',
    '/js/jquery-3.7.1.min.js',
    '/js/jquery.mask.js',
    '/js/helpers.js',
    '/sw.js',
    '/manifest.json',
    '/logo.png'
];

const checkResponse = function (request) {
    return new Promise(function (fulfill, reject) {
        fetch(request).then(function (response) {
            if (response.status !== 404) {
                fulfill(response);
            } else {
                reject();
            }
        }, reject);
    });
};

const addToCache = function (request) {
    return caches.open("offline").then(function (cache) {
        return fetch(request).then(function (response) {
            return cache.put(request, response);
        });
    });
};

const returnFromCache = function (request) {
    return caches.open("offline").then(function (cache) {
        return cache.match(request).then(function (matching) {
            if (!matching || matching.status === 404) {
                return cache.match("offline.html");
            } else {
                return matching;
            }
        });
    });
};


// Inicializar IndexedDB
function initDatabase() {
    return new Promise((resolve, reject) => {
        const request = indexedDB.open("offlineDatabase", 3);
        request.onupgradeneeded = (event) => {
            const db = event.target.result;
            if (!db.objectStoreNames.contains("postRequests")) {
                db.createObjectStore("postRequests", { keyPath: "id", autoIncrement: true });
            }
        };
        request.onsuccess = (event) => {
            resolve(event.target.result);
        };
        request.onerror = (event) => {
            reject("Error initializing database: " + event.target.errorCode);
        };
    });
}

// Guardar datos en IndexedDB
function saveToDatabase(data) {
    return initDatabase().then((db) => {
        return new Promise((resolve, reject) => {
            const transaction = db.transaction("postRequests", "readwrite");
            const store = transaction.objectStore("postRequests");
            const request = store.add({ body: data, timestamp: Date.now() });

            request.onsuccess = () => {
                console.log("Data successfully saved to IndexedDB:", data);
                resolve();
            };
            request.onerror = (event) => {
                console.error("Error saving to IndexedDB:", event.target.error);
                reject(event.target.error);
            };
        });
    });
}


self.addEventListener("fetch", function (event) {
    if (event.request.method === "POST") {
        event.respondWith(
            event.request.clone().text().then(body => {
                console.log("Request body:", body); // Ver el cuerpo de la solicitud

                if (!navigator.onLine) {
                    console.log("Offline: Saving data to IndexedDB...");

                    // Guardamos los datos en IndexedDB
                    return saveToDatabase(body).then(() => {
                        // Notificar a la página que los datos se guardaron en IndexedDB
                        self.clients.matchAll().then(clients => {
                            clients.forEach(client => {
                                client.postMessage({
                                    type: "offlineSave",
                                    message: "No tienes conexión, pero los datos se guardaron en la base de datos local."
                                });
                            });
                        });

                        // Enviar una respuesta vacía para evitar el error de red
                        return Response.redirect("/", 302);

                    }).catch(err => {
                        console.error("Error saving data to IndexedDB:", err);
                        return new Response(
                            JSON.stringify({ message: "Error saving data locally." }),
                            { headers: { "Content-Type": "application/json" }, status: 500 }
                        );
                    });
                } else {
                    console.log("Online: Passing request to server.");
                    return fetch(event.request); // Si está online, se pasa la solicitud al servidor
                }
            }).catch(err => {
                console.error("Error reading request body:", err);
                return new Response(
                    JSON.stringify({ message: "Error processing request." }),
                    { headers: { "Content-Type": "application/json" }, status: 500 }
                );
            })
        );
    } else {
        // Maneja otras solicitudes (por ejemplo, GET)
        event.respondWith(
            checkResponse(event.request).catch(() => returnFromCache(event.request))
        );

        if (!event.request.url.startsWith('http')) {
            event.waitUntil(addToCache(event.request));
        }
    }
});
