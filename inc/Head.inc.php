<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr">
<head>
	<meta charset="utf-8"/>
	<title> Jujutsu Kaisite - 
	<?php
	if (!(isset($_GET["Id"])))
	{
		echo "Accueil";
		}
	else
	{
		titre($tab,$_GET["Id"]);
		}
	?>
	</title>
	<link rel="stylesheet" href="index.css" />
</head>
