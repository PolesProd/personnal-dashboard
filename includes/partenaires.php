<?php
	//Creation de 2 variables --1 / colonne **
	$colLeft = array();
	$colRight = array();
	
	//Les fonctions principales **
	function genRaw($l){
		return "<li id='liste". $l ."' class='adherent'>
					<ul>
						<img src='" . $resultSelect[$l]["lienThumb"] . "' alt='" . $resultSelect[$l]['structure'] . "'>
						<li id='nom'><p>" . $resultSelect[$l]['nom'] . " " . $resultSelect[$l]['prenom'] . "</p></li>
						<li id='fonction'><p>" .$resultSelect[$l]['fonction'] . "</p></li>
						<li id='structure'><p>" . $resultSelect[$l]['structure']."</p></li>
					</ul>
				</li>";
	}
	function dataWrite($arrayData){
		for( $i=0; $i<count($arrayData); $i++){
			echo $arrayData[$i];
		}
	}

	//Repartition du contenus entre chaques colonnes **
	for($i = 0; $i< $countResult;$i++){
		if( $i%2 == 0 ){
			$colRight[] = genRaw($i);
		}elseif( $i%2 == 1 ){
			$colLeft[] = genRaw($i);
		}
	}
	//Insertion dans le DOM **?>
	<ul id="colLeft"><?php
		dataWrite($colLeft);
	?></ul>
	<ul id="colRight"><?php
		dataWrite($colRight);
	?></ul>
