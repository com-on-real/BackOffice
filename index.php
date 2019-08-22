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
		default:
			indexView();
		break;

		case 'index':
			indexView();
		break;

		case 'calendar':
			calendarView();
		break;

		case 'ticket':
			ticketView();
		break;
	}
}
catch (Exeption $e)
{

}
?>