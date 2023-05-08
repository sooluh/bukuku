<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public CI_Output $output;
	public Books_model $books;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Books_model', 'books');
	}

	public function index()
	{
		$this->load->view('home', [
			'page' => settings('title'),
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

		$book->is_pdf = $book->is_pdf === 't';
		$book->is_wishlist = $book->is_wishlist === 't';
		$book->cover = str_replace('&tr=w-300', '', $book->cover);

		$this->load->view('detail', [
			'page' => $book->name,
			'book' => $book,
		]);
	}
}
