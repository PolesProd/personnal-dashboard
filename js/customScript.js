
//HORLOGE
function compZero(nombre) {
	return nombre < 10 ? '0' + nombre : nombre;
}

function date_heure() {
	const infos = new Date();
	
	//Heure
	document.getElementById('date_heure').innerHTML ='<p><span>'+  compZero(infos.getHours()) + ':' + compZero(infos.getMinutes()) + '</span>' + compZero(infos.getSeconds())+'</p>';

	//Date
	const mois = new Array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');
	/*new Array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');*/
	const jours = new Array('dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi');
	document.getElementById('date_heure').innerHTML += '<p>'+infos.getDate() + '/' + mois[infos.getMonth()] + '/' + infos.getFullYear()+'</p>';
}

window.onload = function() {
	setInterval("date_heure()", 1000); //Actualisation de l'heure
};