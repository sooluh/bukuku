<?php
defined('BASEPATH') or exit('No direct script access allowed');

function settings($key = null)
{
	$settings = [
		'title' => $_ENV['SITE_TITLE'],
		'author' => $_ENV['SITE_AUTHOR'],
		'email' => $_ENV['SITE_EMAIL'],
		'description' => $_ENV['SITE_DESCRIPTION'],
		'keywords' => $_ENV['SITE_KEYWORDS'],
	];

	return $key ? $settings[$key] : $settings;
}

function set_title($page = null)
{
	$title = settings('title');
	$author = settings('author');

	return $page ? "$page - $author" : "$title - $author";
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

function parse_desc($text)
{
	$maxWords = 150;
	$text = strip_tags($text);
	$text = str_replace(array("\r\n", "\r", "\n"), ' ', $text);
	$text = str_replace('"', '', $text);
	$words = explode(' ', $text);

	if (count($words) > $maxWords) {
		$words = array_slice($words, 0, $maxWords);
		$text = implode(' ', $words);
		$text .= '...';
	}

	return $text;
}
