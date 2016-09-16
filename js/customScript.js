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



//CHART.JS
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});