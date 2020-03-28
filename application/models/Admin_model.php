<?php
class Admin_model extends CI_Model{
	
	public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
	public function table($table)
		{
			return $fields = $this->db->list_fields($table);
			$this->db->last_query();
		}
	public function create($tablename,$data=array())
		{
			$this->db->insert($tablename,$data);
			return $this->db->insert_id();
		}
	function table_column($tablename, $column =FALSE)
		{
			$this->db->select('*');
			$this->db->from($tablename);
			$result = $this->db->get();
		//	return $this->db->last_query();
			return $result->result_array();
		}
}