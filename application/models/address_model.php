<?php
	class Address_model extends CI_Model {
		private $destination;
		private $phone;
		private $person;
		private $mainnumber;

		public function __construct() {
			$this->load->database();
		}

		public function get_allAddressMessage($pageNum, $pagesize) {
			$employee_id = $this->session->userdata('employee_id');
			if($pageNum == null) {
				$query = $this->db->query("SELECT address.* FROM `address`
					WHERE address.id in
					(SELECT address_rel_employee.Aid FROM `address_rel_employee` WHERE address_rel_employee.Eid='$employee_id') LIMIT $pagesize");
				return $query->result_array();
			}
			else {
				$offset = ($pageNum-1)*$pagesize;
				$query = $this->db->query("SELECT address.* FROM `address`
					WHERE address.id in
					(SELECT address_rel_employee.Aid FROM `address_rel_employee` WHERE address_rel_employee.Eid='$employee_id') LIMIT $offset, $pagesize");
				return $query->result_array();
			}
		}

		public function edit_address($newMessage, $aId) {
			if($this->db->update('address', $newMessage, array('id' => $aId))) {
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		public function del($aId) {
			if($this->db->delete('address', array('id' => $aId)) && 
				$this->db->delete('address_rel_employee', array('Aid' => $aId))) {
					return TRUE;
			}
			else {
				return FALSE;
			}
		}

		public function add_address($addressMessage) {
			if($this->db->insert('address', $addressMessage)) {
				$query = $this->db->query("select @@identity");
				$addressRELemployee = array('Aid' => $query->result_array()[0]['@@identity'],
					'Eid' => $this->session->userdata('employee_id'));
				if($this->db->insert('address_rel_employee', $addressRELemployee)) {
					return TRUE;
				}
				else {
					return FALSE;
				}
			}
			else {
				return FALSE;
			}
		}

		public function get_addressnum() {
			$employee_id = $this->session->userdata('employee_id');
			$query = $this->db->query("SELECT address.* FROM `address`
				WHERE address.id in
				(SELECT address_rel_employee.Aid FROM `address_rel_employee` WHERE address_rel_employee.Eid='$employee_id')");
			return $query->num_rows();
		}

		public function get_totalPages($_pagesize) {
			return round($this->get_addressnum()/$_pagesize + 0.4);
		}

	}