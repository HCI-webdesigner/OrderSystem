<?php
	class Address_model extends CI_Model {
		private $destination;
		private $phone;
		private $person;
		private $mainnumber;

		public function __construct() {
			$this->load->database();
		}

		public function get_allAddressMessage() {
			$query = $this->db->query("SELECT * FROM `address`, `address_rel_employee`, `employee` 
				WHERE address.id=address_rel_employee.Aid AND employee.id=address_rel_employee.Eid");
			return $query->result_array();
		}

		public function edit_address($newMessage, $aId) {
			if($this->db->update('address', $newMessage, array('id' => $aId))) {
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		public function add_address($addressMessage) {
			if($this->db->insert('address', $addressMessage)) {
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

	}