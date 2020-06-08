<div class="menu">
	<ul>
		<li><a href="index.php?page=membre">Accueil</a></li>
		<li><a href="index.php?page=update">Change vos informations</a></li>
		<li><a href="index.php?page=liste_membres">Les membres</a></li>
		<li><a href="index.php?page=amis">Vos amis</a></li>
		<li><a href="index.php?page=invitations">Invitations</a></li>
		<li><a href="">Messages</a></li>
		<li class="nbr"><?php echo nombre_membres()>1 ? nombre_membres().' membres' : nombre_membres().' membre';?></li>
	</ul>
</div>