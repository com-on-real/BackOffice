<?php
$debug = 'simple'; // all / simple / false
require('ini.php');

require('model/Autoloader.php');
App\Autoloader::register();
require('controller/controller.php');

try
{
	switch ($_GET['page'])
	{
		case 'login':
			loginView();
		break;

		case 'register':
			registerView();
		break;

		case 'index':
			indexView();
		break;

		case 'calendar':
			calendarView();
		break;

		default:
			throw new Exception("Cette page n'existe pas", 404);
		break;
	}
}
catch (Exception $e)
{
	$title = $e->getMessage();
	$description = 'Erreur ';
	$description .= $e->getCode();
	require('view/template/dashboard.php');
}
?>