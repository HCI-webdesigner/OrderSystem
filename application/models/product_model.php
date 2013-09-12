<?php
	
	class Product_model extends CI_Model {
		
		public function __construct() {
			$this->load->database();
		}

		public function get_lv1AllNames() {
			$query = $this->db->get('producttype_lv1');
			return $query->result_array();
		}

		public function get_lv2Names($lv1Id) {
			$query = $this->db->get_where('producttype_lv2', array('PTid' => $lv1Id));
			return $query->result_array();
		}

	}