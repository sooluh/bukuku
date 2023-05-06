<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	private $site = 'Books I\'m Reading';
	private $author = 'Suluh Sulistiawan';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Books_model', 'books');
	}

	public function index()
	{
		$this->load->view('home', [
			'author' => $this->author,
			'site' => $this->site,
			'title' => $this->site,
			'owned' => $this->books->get_owned_books(),
			'whishlist' => $this->books->get_whishlist_books(),
		]);
	}

	public function detail($uuid)
	{
		$book = $this->books->find($uuid);

		if (!$book) {
			$this->output->set_status_header(404);
			return $this->load->view('error');
		}

		$this->load->view('detail', [
			'author' => $this->author,
			'site' => $this->site,
			'title' => $book->name,
			'book' => $book,
		]);
	}
}
