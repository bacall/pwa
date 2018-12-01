if('serviceWorker' in navigator){
	console.log('Hay serviceWorker');
	navigator.serviceWorker.register('./sw.js')
		.then(res => console.log('servicioWorker cargado',res))
		.catch(err => console.log('servicioWorker no cargado',err))
}else{
	console.log('No hay serviceWorker');
}
