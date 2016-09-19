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
                
               <canvas id="line_example" width="400" height="400"></canvas>
                    <script type="text/javascript">
                       var N = 10;
                        // Array filled with N values at '0'
                        var zero_array = [];

                        for (i = 0; i < N; i++)
                            zero_array.push(0);

                        // The data of the chart, describe the differents sets of data you want with points, colors...
                        var data = {
                                labels: zero_array,
                                datasets:  [
                                    {
                                        label: "DataSet #1", // Name of the line
                                        data: zero_array, // data to represent
                                        // The following makes the line way less ugly
                                        fillColor: "rgba(151,187,205,0.2)",
                                        strokeColor: "rgba(151,187,205,1)",
                                        pointColor: "rgba(151,187,205,1)",
                                        pointStrokeColor: "#fff",
                                        pointHighlightFill: "#fff",
                                        pointHighlightStroke: "rgba(151,187,205,1)"
                                    }
                                ]
                        };

                        // We wait for everything to be loaded
                        window.onload = function main() {

                            // Get the context of the canvas
                            var ctx = document.getElementById("line_example").getContext("2d");

                            // Create the Chart object
                            var line_example_chart = new Chart.Line(ctx,data);

                            // Used for the labels on the X axis
                            var label_idx = 1;

                            // Function to execute to remove then add a new random value to the chart
                            function rand_value() {
                                // Generate a random integer
                                var rand_val = Math.floor(Math.random() * 100);

                                // Remove the point at the far left of the chart
                                line_example_chart.removeData();

                                // Add the random value at the far right of the chart
                                line_example_chart.addData([rand_val], label_idx++);
                            }
                            // Run rand_value() every 2 seconds
                            window.setInterval(rand_value, 2000);
                        }
    </script>
               
            </div>
        <footer>

        </footer>
        </body>
         <!--    Fin du Contenu--> 
</html>
