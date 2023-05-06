<?php
defined('BASEPATH') or exit('No direct script access allowed');

function status_class($status)
{
	$statuses = [
		1 => 'secondary',
		'warning',
		'success',
	];
	return $statuses[$status];
}

function status_text($status)
{
	$statuses = [
		1 => 'To Read',
		'Reading',
		'Read',
	];
	return $statuses[$status];
}
