// Asignar nombre y versión de la cache
const CACHE_NAME = 'v1_cache_pisossantcugat_pwa';
var  urlsToCache = [
'./'
];

// Evento install
// Instalación del service worker y guardar en cache los recursos estáticos
/*
self.addEventListener('install', e => {
	e.waitUntil(
		caches.open(CACHE_NAME)
			.then(cache => {
				return cache.addAll(urlsToCache)
					.then() => {
						self.skipWaiting();
					})
					.catch(err => {
						console.log('No se ha registrado el cache', err);
					})
			})
	};
});
*/
self.addEventListener('install', function(event) {
  // Perform install steps
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(function(cache) {
        console.log('Opened cache');
        return cache.addAll(urlsToCache);
      })
  );
});

// Evento activate
// Que la app funcione sin conexión
/*
self.addEventListener('activate', e => {
	 const cacheWhitelist = [CACHE_NAME];
	 
	 e.waitUntil(
	 	caches.keys()
			.then(cahesNames => {
				return Promise.all{
					cacheNames.map(caheName => {
						
						if(cacheWhitelist.indexOf(cacheName) === -1){
							//Borrar elementos que no se necesitan
							return caches.delete(caheName);
						}
					});
				);
			})
			.then(() => {
				// Activar cahe
				self.clients.claim();
				
			});	 
	);
});
*/
self.addEventListener('activate', function(event) {

  var cacheWhitelist = [CACHE_NAME];

  event.waitUntil(
    caches.keys().then(function(cacheNames) {
      return Promise.all(
        cacheNames.map(function(cacheName) {
          if (cacheWhitelist.indexOf(cacheName) === -1) {
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
});

// Evento fetch
/*
self.addEventListener('fetch', e => {
	
	e.respondWith(
		caches.match(e.request)
			.then(res => {
				if(res){
					return res;
				}
			return fetch(e.request);
		});
	);
});
*/
self.addEventListener('fetch', function(event) {
  event.respondWith(
    caches.match(event.request)
      .then(function(response) {
        // Cache hit - return response
        if (response) {
          return response;
        }

        // IMPORTANT: Clone the request. A request is a stream and
        // can only be consumed once. Since we are consuming this
        // once by cache and once by the browser for fetch, we need
        // to clone the response.
        var fetchRequest = event.request.clone();

        return fetch(fetchRequest).then(
          function(response) {
            // Check if we received a valid response
            if(!response || response.status !== 200 || response.type !== 'basic') {
              return response;
            }

            // IMPORTANT: Clone the response. A response is a stream
            // and because we want the browser to consume the response
            // as well as the cache consuming the response, we need
            // to clone it so we have two streams.
            var responseToCache = response.clone();

            caches.open(CACHE_NAME)
              .then(function(cache) {
                cache.put(event.request, responseToCache);
              });

            return response;
          }
        );
      })
    );
});
	
