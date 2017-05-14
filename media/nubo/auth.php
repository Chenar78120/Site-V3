<?php

function auth($login, $passwd)
{
	$pw = hash(whirlpool, $passwd);
	$array = file_get_contents("database/users.db");
	$tab = unserialize($array);
	foreach ($tab as $value)
	{
		if ($value['login'] === $login && $value['passwd'] === $pw)
			return (TRUE);
	}
	return (FALSE);
}

?>
