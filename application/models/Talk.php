<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Talk extends CI_Model
{
	/**
	 * Get all chats from the database.
	 * 
	 * @return array
	 */
	public function get_all_chats()
	{
		$query = "SELECT * FROM chats";
		return $this->db->query($query)->result_array();
	}

	/**
	 * Insert a new chat into the database.
	 * 
	 * @param string $utext
	 * @param string $atext
	 */
	public function insert_chat($utext, $atext)
	{
		$query = "INSERT INTO chats (utext, atext, created_at) VALUES (?, ?, ?)";
		$values = array($utext, $atext, date("Y-m-d H:i:s"));
		return $this->db->query($query, $values);
	}
}
