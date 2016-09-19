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
<!--
        <script src="https://unpkg.com/react@15.3.1/dist/react.js"></script>
        <script src="https://unpkg.com/react-dom@15.3.1/dist/react-dom.js"></script>  
-->
        <script src="lib/jquery-3.1.0.min.js"></script>
        <script src="js/customScript.js"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
        <script src="lib/slideShow/jquery.slides.js"></script>
        <script src="lib/slideShow/jquery.slides.min.js"></script>
        <script src="lib/Chart.min.js"></script>
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
                    <h2>Date et Heure</h2><br>
                    <div id="date_heure">    
                    </div>
                </div>

                <div class="WidgetMoyen">
                    <?php
                    $feedlistMonde = new rss('http://www.lemonde.fr/m-actu/rss_full.xml');
                    echo $feedlistMonde->display(8, "Le Monde");
                    ?>
                </div>

              

                <div class="WidgetMoyen">
                    <?php
                    $feedlistInsta = new rss('https://queryfeed.net/instagram?q=%23lepolesidf');
                    echo $feedlistInsta->display(5, "Insta LePoleS_IDF");
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
                
                <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                    <script type="text/javascript">
                        var data = {
                            title: {
                                text: 'Monthly Average Temperature',
                                x: -20 //center
                            },
                            subtitle: {
                                text: 'Source: WorldClimate.com',
                                x: -20
                            },
                            xAxis: {
                                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                            },
                            yAxis: {
                                title: {
                                    text: 'Temperature (°C)'
                                },
                                plotLines: [{
                                    value: 0,
                                    width: 1,
                                    color: '#808080'
                                }]
                            },
                            tooltip: {
                                valueSuffix: '°C'
                            },
                            legend: {
                                layout: 'vertical',
                                align: 'right',
                                verticalAlign: 'middle',
                                borderWidth: 0
                            },
                            series: [{
                                name: 'Tokyo',
                                data: [15.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
                            }]
                        }
                        $('#container').highcharts(data);
                        var count = data.series[0].data.length
                        for (i = 0; i < count; i++) { 
                            data.series[i].data
                            console.log(data.series[i].data)
                        }
                        
                    
    </script>
               
            </div>
        <footer>

        </footer>
        </body>
         <!--    Fin du Contenu--> 
</html>
