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

$(function ChartUpdate() 
        Highcharts.setOptions({
            global: {
                useUTC: false
            }
        });

        $('#container').highcharts({
            chart: {
                type: 'spline',
                animation: Highcharts.svg, // don't animate in old IE
                marginRight: 10,
                events: {
                    load: function() {

                        // set up the updating of the chart each second
                        var series = this.series[0];
                        setInterval(function() {
                            var x = (new Date()).getTime(), // current time
                                y = Math.random();
                            series.addPoint([x, y], true, true);
                        }, 1000);
                    }
                }
            },
            title: {
                text: 'Live random data'
            },
            xAxis: {
                type: 'datetime',
                tickPixelInterval: 150
            },
            yAxis: {
                title: {
                    text: 'Value'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                formatter: function() {
                    return '<b>' + this.series.name + '</b><br/>' +
                        Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) + '<br/>' +
                        Highcharts.numberFormat(this.y, 2);
                }
            },
            legend: {
                enabled: false
            },
            exporting: {
                enabled: false
            },
            series: [{
                name: 'Data',
                data: (function() {
                    // generate an array of random data
                    var data = [],
                        time = (new Date()).getTime(),
                        i;

                    for (i = -19; i <= 0; i += 1) {
                        data.push({
                            x: time + i * 1000,
                            y: Math.random()
                        });
                    }
                    return data;
                }())
            }]
        });

});
