<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Books_model', 'books');
	}

	public function index()
	{
		$this->load->view('home', [
			'title' => 'Books I\'m Reading',
			'books' => $this->books->get_all_books(),
		]);
	}
}
