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
			$query = $this->db->get('address');
			return $query->result_array();
		}
	}