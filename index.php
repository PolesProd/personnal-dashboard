<?php
    include('lib/rssclass.php');
    include('includes/db.php');

    $sqlSelect = 'SELECT * FROM users';
    $querySelect = $db->query($sqlSelect);
    $resultSelect = $querySelect->fetchAll();
    $countResult = count($resultSelect);
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
    <div class="WidgetGrand">
        <script type="text/javascript" src="http://www.emploi-ess.fr/js/udesapi.js?12456"></script> <script type="text/javascript"> insertUdesWidget('http://www.emploi-ess.fr/moteur-complet','820','621','8'); </script>
    </div>
    
    <div class="WidgetGrand">
       <ul>
        <?php
            for($i = 0; $i< countResult;$i++){
                ?>
        <li>nom : <?=$resultSelect[$i]['nom'];?> &nbsp;&nbsp;
        prénom : <?=$resultSelect[$i]['prenom'];?> &nbsp;&nbsp;
        fonction : <?=$resultSelect[$i]['fonction'];?> &nbsp;&nbsp;
        structure : <?=$resultSelect[$i]['structure'];?> &nbsp;&nbsp;
        code postal : <?=$resultSelect[$i]['code_postal'];?> &nbsp;&nbsp;
        ville : <?=$resultSelect[$i]['ville'];?> &nbsp;&nbsp;
        email : <?=$resultSelect[$i]['email'];?> &nbsp;&nbsp;
        </li>
        <?php        
            }
        ?>
        </ul>
    </div>
   </div>
   <footer>
   </footer>
   </body>
   <!--    Fin du Contenu--> 
</html>