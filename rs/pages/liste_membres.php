 <?php
	include("fonctions/membre.func.php");
	include("body/header.php");
	include("body/menu.php");
?>
<h3>Listes membres</h3>
<?php
	$pseudo_avatars=recupere_pseudo_avatar();
	if (!empty($pseudo_avatars)) {
		foreach ($pseudo_avatars as $pseudo_avatar) {
		?>
			<p><a href='index.php?page=profile&pseudo=<?php echo $pseudo_avatar['pseudo'];?>'><?php echo $pseudo_avatar['pseudo']?></a></p>
			<a href='index.php?page=profile&pseudo=<?php echo $pseudo_avatar['pseudo'];?>'><img src="avatar/<?php echo $pseudo_avatar['avatar']?>" height="100" width="100" alt="avatar"></a>
		<?php
	}
	}else{
		echo "<div class='error'>vous etez le seul membre pour linstant</div>";
	}
	
?>