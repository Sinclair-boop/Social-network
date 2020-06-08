<?php
	include("fonctions/membre.func.php");
	include("body/header.php");
	include("body/menu.php");
?>
<h3>Listes membres</h3>
<?php
	$pseudo_avatars=recupere_pseudo_avatar();
	foreach ($pseudo_avatars as $pseudo_avatar) {
		?>
			<p><a href=""><?php echo $pseudo_avatar['pseudo']?></a></p>
			<a href=""><img src="avatar/<?php echo $pseudo_avatar['avatar']?>" height="100" width="100" alt="avatar"></a>
		<?php
	}
?>