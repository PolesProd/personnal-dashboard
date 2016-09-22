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
        <meta name="description" content="dashboard">
        <meta name="keywords" content="dashboard, Custom">
        <meta name="author" content="LePoleS">
        <link rel="icon" type="image/png" href="http://lepoles.org/wp-content/themes/activism/favicon.ico" />
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
        <!--        Appels des Librairies et Scripts-->
        <script src="lib/Chart.min.js"></script>
        <script src="lib/jquery-3.1.0.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
        <script src="lib/slideShow/jquery.slides.js"></script>
        <script src="lib/slideShow/jquery.slides.min.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/exporting.js"></script>

      	
        
        <!--        Appel des Styles-->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/layout.css">
        
        <title>Dashboard Custom LePoleS</title>
    </head>

    	 <!--    	Début du Contenu-->
	<body>

		<section id="leftSide" class="spaceGrid">
			<section>
				<h2 class='titleWidget'>Avec nous</h2>
				
				<?php //include 'includes/Ascii_HandShake.html'; ?>
				<?php include('includes/partenaires.php'); ?>
				
			</section>
			<section>
				<div id="chartStuff">
					<h2 class='titleWidget'>Votre parcours</h2>
					<?php
						include 'includes/Ascii_MouseLR.php';
					?>
					<div id="container" onload="ChartUpdate()"></div>
				</div><!--
				--><div>
				
				</div>
			</section>
		</section><!--
		--><section id="center" class="spaceGrid">
			<?php
				//Widget feed RSS le monde
				$feedlistZnet = new rss('http://www.zdnet.fr/feeds/rss/actualites/internet/');
				//print_r($feedlistZnet);
				echo $feedlistZnet->display(16, "<h2 class='titleWidget'>news</h2>");
			?>
		</section><!--
		--><section id="right" class="spaceGrid">
			<div>
				<!--//emplois ESS-->
				<?php
					//Widget feed RSS le monde
					$feedlistJob = new rss('http://www.joobeo.com/feed?post_type=job_listing');
					//print_r($feedlistZnet);
					echo $feedlistJob->display(10, "<h2 class='titleWidget'>Emplois Web</h2>");
				?>
			</div>
			<div>
				<h2>heure et date</h2>
				<div id="date_heure"></div>
			</div>
		</section>
		<footer>
			<script src="js/customScript.js"></script>
			<script src="js/configCharts.js"></script>
		</footer>
	</body>

         <!--    Fin du Contenu-->
</html>
