<?php

function indexView()
{
	require('array.php');
	require('view/index.php');
	require('view/template/dashboard.php');
}

function calendarView()
{
	require('array.php');
	require('view/calendar.php');
	require('view/template/dashboard.php');
}

function loginView()
{
	require('array.php');
	require('view/login.php');
	require('view/template/noConnect.php');
}

function registerView()
{
	require('array.php');
	require('view/register.php');
	require('view/template/noConnect.php');
}

function ticketView()
{
	require('array.php');
	require('view/ticketing.php');
	require('view/template/dashboard.php');
}