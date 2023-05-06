<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Books_model extends CI_Model
{
	public function get_owned_books()
	{
		$this->db->where('is_wishlist', false);
		$this->db->order_by('created_at', 'desc');
		return $this->db->get('books')->result();
	}

	public function get_whishlist_books()
	{
		$this->db->where('is_wishlist', true);
		$this->db->order_by('created_at', 'asc');
		return $this->db->get('books')->result();
	}

	public function find($uuid)
	{
		$this->db->where('uuid', $uuid);
		return $this->db->get('books')->row();
	}
}
