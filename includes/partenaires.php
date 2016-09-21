<div>
	<ul>
		<?php
			for($i = 0; $i< $countResult;$i++){?>
			<li id="liste<?= $i; ?>" class="adherent">
				<ul>
					<li>nom : <?=$resultSelect[$i]['nom'];?></li>
					<li>prénom : <?=$resultSelect[$i]['prenom'];?> &nbsp;&nbsp;</li>
					<li>fonction : <?=$resultSelect[$i]['fonction'];?> &nbsp;&nbsp;</li>
					<li>structure : <?=$resultSelect[$i]['structure'];?> &nbsp;&nbsp;</li>
					<li>code postal : <?=$resultSelect[$i]['code_postal'];?> &nbsp;&nbsp;</li>
					<li>ville : <?=$resultSelect[$i]['ville'];?> &nbsp;&nbsp;</li>
					<li>email : <?=$resultSelect[$i]['email'];?> &nbsp;&nbsp;</li>
					<!--thumb : <?php //echo $resultSelect[$i]['lienThumb'];?> &nbsp;&nbsp;-->
					</li>
				</ul>
			</li>
				<?php        
			}
		?>
	</ul>
</div>