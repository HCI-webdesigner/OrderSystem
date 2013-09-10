<?php
	class Employee_model extends CI_Model {
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function get_messageByUid($accountId) {
			$query = $this->db->get_where('employee', array('Uid' => $accountId));
			$result_array = $query->result_array();
			return $result_array;
		}

		public function get_departmentId($accountId) {
			$result_array = $this->get_messageByUid($accountId);
			return $result_array[0]['Did'];
		}

		public function get_username($accountId) {
			$result_array = $this->get_messageByUid($accountId);
			return $result_array[0]['name'];
		}
		
		public function get_role($accountId) {
			$result_array = $this->get_messageByUid($accountId);
			return $result_array[0]['role'];
		}

		public function get_email($accountId) {
			$result_array = $this->get_messageByUid($accountId);
			return $result_array[0]['email'];
		}

		public function get_phone($accountId) {
			$result_array = $this->get_messageByUid($accountId);
			return $result_array[0]['telephone'];
		}

		public function get_fax($accountId) {
			$result_array = $this->get_messageByUid($accountId);
			return $result_array[0]['fax'];
		}

		public function update_message($newData, $uId) {
			if($this->db->update('employee', $newData, array('id' => $uId)))
				return TRUE;
		}

		public function get_employeeId($accountId) {
			$result_array = $this->get_messageByUid($accountId);
			return $result_array[0]['id'];
		}
	}