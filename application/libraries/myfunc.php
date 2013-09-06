<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class myfunc {
    var $CI;
    function myfunc(){
        $this->CI = & get_instance();
        //变量可以在这里定义，或者来自配置文件，也可以去数据库中查
        $func['islogged'] = function() {
        	
        };
        $this->CI->load->vars($func);
    }
}

/* End of file global.php */