<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_booking extends CI_Model {

	public function getDataTeam()
    {
        return $this->db->get('employees');  // table name
    }
    function getAll()
	{
		$query = $this->db->query("SELECT employees.name_employees AS Name_Employee FROM employees LEFT JOIN team ON employees.name_employees = team.name_team;");
		if($query->num_rows()>0){
			return $query->result();
			}else{
			return array();
			}
	}
}