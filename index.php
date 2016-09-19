<?php
   include('lib/rssclass.php');
   ?>
<!DOCTYPE HTML>
<html>
   <head>
      <!--      MetaData-->
      <meta charset="UTF-8">
      <meta name="description" content="Dashboard">
      <meta name="keywords" content="dashboard, Custom">
      <meta name="author" content="LePoleS">
      <link rel="icon" type="image/png" href="http://lepoles.org/wp-content/themes/activism/favicon.ico" />
      
      <!--        Appels des Librairies et Scripts-->
      <script src="lib/jquery-3.1.0.min.js"></script>
      <script src="js/customScript.js"></script>
      <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
      <script src="lib/swipe.js"></script>
      <script src="https://code.highcharts.com/highcharts.js"></script>
      <script src="https://code.highcharts.com/modules/exporting.js"></script>
      
      <!--        Appel des Styles-->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <title>Dashboard Custom LePoleS</title>
   </head>
   <!--    Début du Contenu-->
   <body
   <div id="ContentZone">
      <div class="WidgetPetit">
         <h2>Date et Heure</h2>
         <br>
         <div id="date_heure">    
         </div>
      </div>
      <div class="WidgetMoyen">
         <?php
            $feedlistMonde = new rss('http://www.lemonde.fr/m-actu/rss_full.xml');
            echo $feedlistMonde->display(8, "<center>Le Monde</center>");
            ?>
      </div>
      <div id="WidgetMeteo">
         <div id="widget_2283b64454088d82e0ea206c70ca219e">
            <span id="l_2283b64454088d82e0ea206c70ca219e"><a href="http://www.my-meteo.fr/previsions+meteo+france/paris.html">www.my-meteo.fr</a></span>
            <script type="text/javascript">
               (function() {
               var my = document.createElement("script"); my.type = "text/javascript"; my.async = true;
               my.src = "http://services.my-meteo.fr/widget/js-design.php?ville=251&format=petit-horizontal&nb_jours=3&ombre1=000000&c1=ffffff&c2=a9a9a9&c3=ffffff&c4=ffffff&c5=ffffff&police=0&t_icones=4&fond=6&masque=1&x=476&y=80&id=2283b64454088d82e0ea206c70ca219e";
               var z = document.getElementsByTagName("script")[0]; z.parentNode.insertBefore(my, z);
               })();
            </script>
         </div>
      </div>
      <div class="WidgetGrand" id="container" onload="ChartUpdate()"></div>
      <script type="text/javascript">$(function () {
         $(document).ready(function () {
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
                         load: function () {
         
                             // set up the updating of the chart each second
                             var series = this.series[0];
                             setInterval(function () {
                                 var x = (new Date()).getTime(), // current time
                                     y = Math.random();
                                 series.addPoint([x, y], true, true);
                             }, 1000);
                         }
                     }
                 },
                 title: {
                     text: 'Données inexistantes du PoleS'
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
                     formatter: function () {
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
                     name: 'Random data',
                     data: (function () {
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
         });
      </script>
      <div class="WidgetGrand">
         <div id='mySwipe' style='max-width:500px;margin:0 auto' class='swipe'>
              <div class='swipe-wrap'>
                <div><b>0</b></div>
                <div><b>1</b></div>
                <div><b>2</b></div>
                <div><b>3</b></div>
                <div><b>4</b></div>
                <div><b>5</b></div>
                <div><b>6</b></div>
                <div><b>7</b></div>
                <div><b>8</b></div>
                <div><b>9</b></div>
                <div><b>10</b></div>
                <div><b>11</b></div>
                <div><b>12</b></div>
                <div><b>13</b></div>
                <div><b>14</b></div>
                <div><b>15</b></div>
                <div><b>16</b></div>
                <div><b>17</b></div>
                <div><b>18</b></div>
                <div><b>19</b></div>
                <div><b>20</b></div>
              </div>
            <div style='text-align:center;padding-top:20px;'>
                <button onclick='mySwipe.prev()'>Prev</button> 
                <button onclick='mySwipe.next()'>Next</button>
                </div>
        </div>
        <script>

// pure JS
var elem = document.getElementById('mySwipe');
window.mySwipe = Swipe(elem, {
   startSlide: 4,
   auto: 10000,
   continuous: true,
   disableScroll: true,
   stopPropagation: true,
   callback: function(index, element) {},
   transitionEnd: function(index, element) {}
});



</script>
      </div>
    <div class="WidgetGrand">$
        <iframe src="https://calendar.google.com/calendar/htmlembed?src=%23contacts%40group.v.calendar.google.com&ctz=Europe/Paris"></iframe>
    </div>
   </div>
   <footer>
   </footer>
   </body>
   <!--    Fin du Contenu--> 
</html>