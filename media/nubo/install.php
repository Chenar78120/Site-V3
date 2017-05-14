<?php

function install()
{
	if (!file_exists("database"))
		mkdir("database");
	if (!file_exists("database/users.db"))
	{
		$tab[0] = array(login => "mab", passwd => hash(whirlpool, "admin"));
		file_put_contents("database/users.db", serialize($tab));
	}
	if (!file_exists("database/art.db"))
	{
		$art[0] = array("nom" => "robe1", "prix" => "13690", "Categorie" => "robe");
		$art[1] = array("nom" => "robe2", "prix" => "4290", "Categorie" => "robe");
		$art[2] = array("nom" => "robe3", "prix" => "9740", "Categorie" => "robe");
		$art[3] = array("nom" => "robe4", "prix" => "4790", "Categorie" => "robe");
		$art[4] = array("nom" => "robe5", "prix" => "1490", "Categorie" => "robe");
		file_put_contents("database/art.db", serialize($art));
	}
}
?>
