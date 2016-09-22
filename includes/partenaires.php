<div>
	<ul>
		<?php
		for($i = 0; $i< $countResult;$i++){?>
			<li id="liste<?= $i; ?>" class="adherent">
				<ul>
					<img src="<?php echo $resultSelect[$i]['lienThumb']; ?>" alt="<?=$resultSelect[$i]['structure'];?>">
					<li id="nom"><p><?=$resultSelect[$i]['nom'];?> <?=$resultSelect[$i]['prenom'];?></p></li>
					<li id="fonction"><p><?=$resultSelect[$i]['fonction'];?></p></li>
					<li id="structure"><p><?=$resultSelect[$i]['structure'];?></p></li>
				</ul>
			</li>
		<?php        
		}
		?>
	</ul>
</div>
