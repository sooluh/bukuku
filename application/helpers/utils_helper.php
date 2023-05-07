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

function asset($path)
{
	if (ENVIRONMENT === 'production') {
		if ((str_replace(['.css', '.js'], '', $path)) != $path) {
			$path = str_replace(['.css', '.js'], ['.min.css', '.min.js'], $path);
		}

		$jsdelivr = 'https://cdn.jsdelivr.net/gh/sooluh/bukuku/';
		return $jsdelivr . $path;
	}

	return base_url($path);
}
