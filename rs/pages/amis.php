<?php
	include("fonctions/membre.func.php");
	include("body/header.php");
	include("body/menu.php");
?>
<h3>Vos amis</h3>
<?php
	$list_amis_exp=list_amis_exp();
	$list_amis_dest=list_amis_dest();
	foreach ($list_amis_exp as $key => $list_ami_exp) {
		?>
			<p><a href='index.php?page=profile&pseudo=<?php echo $list_ami_exp['pseudo_dest']?>'><?php echo $list_ami_exp['pseudo_dest']?></a></p>
			<a href=""><img src="avatar/<?php echo $list_ami_exp['avatar']?>" height="100" width="100" alt="pseudo"></a>
		<?php
	}
	foreach ($list_amis_dest as $key => $list_ami_dest) {
		?>
			<p><a href='index.php?page=profile&pseudo=<?php echo $list_ami_dest['pseudo_exp'];?>'><?php echo $list_ami_dest['pseudo_exp']?></a></p>
			<a href="index.php?page=profile&pseudo=<?php echo $list_ami_dest['pseudo_exp'];?>"><img src="avatar/<?php echo $list_ami_dest['avatar']?>" height="100" width="100" alt="pseudo"></a>
		<?php
	}
	if (empty($list_amis_exp)&&empty($list_amis_exp)) {
		echo "<div class='error'>vous n'avez pas d'amis</div>";
	}
?>