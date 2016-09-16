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
        <script src="lib/Chart.min.js"></script>
        <script src="lib/jquery-3.1.0.min.js"></script>
        <script src="js/customScript.js"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
        <script src="lib/slideShow/jquery.slides.js"></script>
        <script src="lib/slideShow/jquery.slides.min.js"></script>


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
                
                <div class="WidgetGrand">
                    <canvas id="myChart" width="800" height="650"></canvas>
                    <script type="text/javascript">
                        var dataCharts = [15, 19, 3, 5, 2, 3]
                        var ctx = document.getElementById("myChart");
                        var myChart = new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                                datasets: [{
                                    label: '# of Votes',
                                    data: dataCharts,
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
                </script>
                </div>
            </div>
        <footer>

        </footer>
        </body>
         <!--    Fin du Contenu--> 
</html>
