<?php
	include('body/header.php');
	include('body/menu.php');
?>
<div class="info">
	<?php
	$infos=info_membres_connecter();
		foreach ($infos as $info) {
			?>	
				<p><a href="index.php?page=update_avatar">Changer votre image de profile</a></p>
				<a href="index.php?page=update_avatar"><img src="avatar/<?php echo $info['avatar']?>" height="150" width="150" alt='avatar '></a>
				<p><strong>Email :</strong>:<em><?php echo $info['email']?></em></p>
				<p><strong>Sexe :</strong>:<em><?php echo $info['sexe']?></em></p>
				<p><strong>Situation :</strong>:<em><?php echo $info['situation']?></em></p>
				<p><strong>A propos de vous :</strong>:<em><?php echo $info['apropos']?></em></p>
			<?php
		}
	?>
</div>