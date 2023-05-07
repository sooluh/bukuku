<?php
defined('BASEPATH') or exit('No direct script access allowed');

function settings($key = null)
{
	$settings = [
		'title' => 'Books I\'m Reading',
		'author' => 'Suluh Sulistiawan',
		'description' => 'List of my reading books, both owned and wishlisted ones, you can have too!',
		'keywords' => 'books,reading,reading list',
	];

	return $key ? $settings[$key] : $settings;
}

function set_title($page = null)
{
	$title = settings('title');
	$author = settings('author');
	$title = $page ? "$page - $author" : "$title - $author";

	return "<title>$title</title>";
}

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
		$jsdelivr = 'https://cdn.jsdelivr.net/gh/sooluh/bukuku/';
		return $jsdelivr . $path . "?v=" . time();
	}

	return base_url($path);
}
