<?php
session_start();
$debug = 'simple'; // all / simple / false
require('ini.php');

require('model/Autoloader.php');
App\Autoloader::register();
require('controller/controller.php');

// Test de modification par florian
if (0)
try
{
	if (empty($_SESSION))
		loginView();
	else
	{
		switch ($_GET['page'])
		{
			case 'index':
				indexView();
			break;
			
			// Connection
			case 'login':
				loginView();
			break;
			case 'register':
				registerView();
			break;

			// Page
			case 'calendar':
				calendarView();
			break;
			case 'ticket':
				ticketView();
			break;

			default:
				throw new Exception("Cette page n'existe pas", 404);
			break;
		}
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
