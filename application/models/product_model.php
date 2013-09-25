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

		public function get_allProducts($pageNum, $pagesize) {
			if($pageNum == null) {
				$this->db->select('products.*');
				$this->db->from('products');
				$this->db->limit($pagesize);
				$query = $this->db->get();
				return $query->result_array();
			}
			else {
				$offset = ($pageNum-1)*$pagesize;
				$this->db->select('products.*');
				$this->db->from('products');
				$this->db->limit($pagesize ,$offset);
				$query = $this->db->get();
				return $query->result_array();
			}
		}

		public function search_products($keyWordArray) {
			foreach ($keyWordArray as $key) {
				$this->db->select('*');
				$this->db->from('products');
				$this->db->like('name', $key);
				$query = $this->db->get();
				$results = $query->result_array();
			}
			return $results;
		}

		public function get_productnum() {
			$query = $this->db->get('products');
			return $query->num_rows();
		}

		public function get_totalPages($pagesize) {
			return round($this->get_productnum()/$pagesize + 0.4);
		}

	}