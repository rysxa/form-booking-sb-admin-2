<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_customer extends CI_Model {

	public function c($data)
    {
        $this->db->where($data);
        return $this->db->get('user'); //table name
    }
}