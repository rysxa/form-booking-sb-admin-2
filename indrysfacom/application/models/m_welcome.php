<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_welcome extends CI_Model {

	public function ceklogin($data)
    {
        $this->db->where($data);
        return $this->db->get('user'); //table name
    }
}
