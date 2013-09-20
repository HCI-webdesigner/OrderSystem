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

		public function get_lv2NameByID($lv2Id) {
			$query = $this->db->get_where('producttype_lv2', array('id' => $lv2Id));
			$result = $query->result_array();
			return $result[0]['name'];
		}

		public function get_allProducts() {
			$query = $this->db->get('products');
			return $query->result_array();
		}

		public function search_products($keyWordArray) {
			foreach ($keyWordArray as $key) {
				$this->db->select('*');
				$this->db->from('products');
				$this->db->like('name', $key);
				$query = $this->db->get();
				$results = $query->result_array();
			}

			// foreach ($results as $rows) {
			// 	preg_replace("/$rows[name]/i", "<font color=red><b>\\1</b>
			// 		</font>", $key);
			// }
			return $results;
		}

	}