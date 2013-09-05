<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class myconfig
{
    var $CI;
    function __construct() {
        $this->CI = & get_instance();
        //变量可以在这里定义，或者来自配置文件，也可以去数据库中查
        $config['sitename'] = 'OrderSystem';
        $this->CI->load->vars($config);
    }
}

/* End of file myconfig.php */