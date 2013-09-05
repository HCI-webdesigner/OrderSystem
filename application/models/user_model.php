<?php
	class User_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}

		public function get_user($account=FALSE, $password=FALSE) {
			if($account === FALSE) {
				$query = $this->db->get('user');
				return $query->result_array();
			}

			$query = $this->db->query('SELECT id,account,password FROM `user`');
			return $query;
		}

		public function get_username($accountId) {
			$query = $this->db->get_where('employee', array('Uid' => $accountId));
			$result_array = $query->result_array();
			return $result_array[0]['name'];
		}
	}