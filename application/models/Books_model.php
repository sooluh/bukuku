<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Books_model extends CI_Model
{
	public function get_all_books()
	{
		return $this->db->get('books')->result();
	}
}
