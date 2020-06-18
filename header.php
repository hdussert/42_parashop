<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>boutique</title>
		<link rel="stylesheet" href="menu.css"/>
	</head>
	<header>
			<nav class="nav" role="navigation">
            <ul class="menu">
				<li class="header_home"><a href="./index.php">Accueil</a></li>
				<div>
					<li class="header_prod"><a href="./products.php">Produits</a></li>
					<li class="header_prod"><a href='./cart.php'>Panier</a></li>
				</div>
				<div>
					<?php if ($_SESSION['login'] == NULL): ?>
							<li class="header_login"><a href='./login.php'>Connexion</a></li>
							<li class="header_login"><a href='./register.php'>Inscription</a></li>
					<?php else:
							if ($_SESSION['group'] == "admin") ?>
								<li class="header_login"><a href='./admin.php'>Gestion</a></li>
							<li class="header_login"><a href="./account.php">Mon compte</a></li>
							<li class="header_login"><a href='./logout.php'>Déconnexion</a></li>
					<?php endif; ?>
				</div>
            </ul>
        </nav>
	</header>
</html>
