<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Books_model extends CI_Model
{
	public function get_owned_books()
	{
		$driver = $this->db->platform();

		$this->db->where('is_wishlist', false);

		if ($driver === 'postgre') {
			$this->db->order_by("CASE WHEN status = '2' THEN 1 WHEN status = '1' THEN 2 WHEN status = '3' THEN 3 ELSE 4 END, created_at DESC", false);
		} elseif ($driver === 'mysqli') {
			$this->db->order_by("FIELD(status, '2', '1', '3'), created_at DESC", '', false);
		}

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
