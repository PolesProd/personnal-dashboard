<div>
	<ul>
		<?php
			for($i = 0; $i< $countResult;$i++){?>
			<li id="liste<?= $i; ?>" class="adherent" style="background-image:url('<?php echo $resultSelect[$i]['lienThumb']; ?>');">
				<ul>
					<li><p>nom : <?=$resultSelect[$i]['nom'];?></p></li>
					<li><p>prénom : <?=$resultSelect[$i]['prenom'];?></p></li>
					<li><p>fonction : <?=$resultSelect[$i]['fonction'];?></p></li>
					<li><p>structure : <?=$resultSelect[$i]['structure'];?></p></li>
					<li><p>code postal : <?=$resultSelect[$i]['code_postal'];?></p></li>
					<li><p>ville : <?=$resultSelect[$i]['ville'];?></p></li>
					<li><p>email : <?=$resultSelect[$i]['email'];?></p></li>
					<li><p>thumb : <?php echo $resultSelect[$i]['lienThumb'];?></p></li>
				</ul>
			</li>
		<?php        
			}
		?>
	</ul>
	<img src="img/wf3.jpg" alt="logoWF3">
</div>
