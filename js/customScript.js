// Drag And Drop Function
//$(function(){
//    $('.drop').droppable({
//        tolerance: 'fit',
//        drop: function(event,ui){
//            ui.draggable.offset(ui.position);
//        }
//    });
//
//    $('.drag').draggable({
//        revert: 'invalid',
//        helper: 'clone',
//        stop: function(){
//            $(this).draggable('option','revert','invalid');
//        }
//    });
//
//    $('.drag').droppable({
//        greedy: true,
//        tolerance: 'touch',
//        drop: function(event,ui){
//            ui.draggable.draggable('option','revert',true);
//        }
//    });
//});


//HORLOGE
function compZero(nombre) {
return nombre < 10 ? '0' + nombre : nombre;
}

function date_heure() {
const infos = new Date();

//Heure
document.getElementById('date_heure').innerHTML =  compZero(infos.getHours()) + ' h ' + compZero(infos.getMinutes()) + ' min ' + compZero(infos.getSeconds()) + " sec";

//Date
const mois = new Array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
const jours = new Array('dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi');
document.getElementById('date_heure').innerHTML += '<br>' + jours[infos.getDay()] + ' ' + infos.getDate() + ' ' + mois[infos.getMonth()] + ' ' + infos.getFullYear() + '.';
}

window.onload = function() {
setInterval("date_heure()", 1000); //Actualisation de l'heure
};



//AUTO-UPDATE CHART WITH HIGHCHART
