<?php
	class Department_model extends CI_Model {
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function get_departmentname($id) {
			$query = $this->db->get_where('department', array('id' => $id));
			$result_array = $query->result_array();
			return $result_array[0]['name'];
		}
	}