<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Product extends CI_Controller {
		private $_view_url = "system/";
		private $_pagesize = 5;

		public function __construct() {
			parent::__construct();
			$this->load->model('product_model');
			$this->load->library('pagination');
			date_default_timezone_set('PRC');
		}

		public function index() {
			if(!$this->myfunc->fn['isLogged']()) {
				redirect('/', 'refresh');
			}

			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('searchkey', 'SearchKey', 'required');

			$producttype1 = $this->product_model->get_lv1AllNames();
			$producttype2 = array();
			foreach ($producttype1 as $row) {
				$result = $this->product_model->get_lv2Names($row['id']);
				array_push($producttype2, $result);
			}
			$header['pagename'] = '送货信息管理';
			$header['producttype1'] = $producttype1;
			$header['producttype2'] = $producttype2;

			$this->load->view('header',$header);
			$this->load->view($this->_view_url.'product');
			$this->load->view('footer');
		}

		public function page() {
			$header['pagename'] = '所有商品';

			$this->load->helper('form');
			$this->load->library('form_validation');

			$page = $this->uri->segment(3);
			$config['base_url'] = site_url('product/page/');
			$config['total_rows'] = $this->product_model->get_productnum();
			$config['per_page'] = $this->_pagesize;
			$config['first_link'] = '首页';
			$config['last_link'] = '尾页';
			$config['use_page_numbers'] = TRUE;
			$this->pagination->initialize($config);
			$header['page'] = $this->pagination->create_links();
			$catagories = $this->product_model->get_allProducts($page, $config['per_page']);
			foreach ($catagories as $key => $rows) {
				$PT1Name = $this->product_model->get_lv2NameByID($rows['type']);
				$catagories[$key]['lv2name'] = $PT1Name;
			}
			$header['catagories'] = $catagories;
			$header['totalPages'] = $this->product_model->get_totalPages($this->_pagesize);

			$this->load->view('header',$header);
			$this->load->view($this->_view_url.'allProducts');
			$this->load->view('footer');
		}

		public function searchProducts() {
			$this->load->helper('form');
			$this->load->library('form_validation');
			$keyword = $this->input->post('searchkey');
			$keyWordArray = explode(' ', $keyword);
			$searchResults = $this->product_model->search_products($keyWordArray);

			foreach ($searchResults as $key => $rows) {
				$PT1Name = $this->product_model->get_lv2NameByID($rows['type']);
				$searchResults[$key]['lv2name'] = $PT1Name;
			}

			$header['searchResults'] = $searchResults;
			$header['pagename'] = '搜索结果';

			$this->load->view('header', $header);
			$this->load->view($this->_view_url.'searchProducts');
			$this->load->view('footer');
		}

	}