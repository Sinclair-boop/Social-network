<?php
	enreg_invitation();
	header("Location:index.php?page=profile&pseudo=".$_GET['pseudo']);
?>