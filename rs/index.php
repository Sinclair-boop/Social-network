<?php
	include('fonctions/connect.php');
	$page=htmlentities($_GET['page']);
	include('fonctions/'.$page.'.func.php');
	$pages=scandir('pages');
	if(!empty($page)&&in_array($_GET['page'].".php", $pages)){
		$content="pages/".$_GET['page'].".php";
	}else{
		 header("Location:index.php?page=login");
	}
	if (isset($_SESSION['pseudo']) && $page !='membre' && $page !='update' && $page!= 'update_avatar' && $page!='liste_membres' && $page!='profile' && $page!='envoi' && $page !='annuler' && $page!='invitations' && $page!='accepter' && $page!='refuser' && $page!='amis') {
		header("Location:index.php?page=membre");
	}
?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<div id="content">
		<?php
			include($content);
		?>	
	</div>
</body>
</html>
