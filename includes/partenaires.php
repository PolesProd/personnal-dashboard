<div>
	<ul>
		<?php
		for($i = 0; $i< $countResult;$i++){?>
			<li id="liste<?= $i; ?>" class="adherent" style="background-image:url('<?php echo $resultSelect[$i]['lienThumb']; ?>');">
				<ul>
					<li id="nom"><p><?=$resultSelect[$i]['nom'];?></p></li>
					<li id="prenom"><p><?=$resultSelect[$i]['prenom'];?></p></li>
					<li id="fonction"><p><?=$resultSelect[$i]['fonction'];?></p></li>
					<li id="structure"><p><?=$resultSelect[$i]['structure'];?></p></li>
				</ul>
			</li>
		<?php        
		}
		?>
	</ul>
</div>
