<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client extends CI_Controller {

    
    function index($id)
    {
        $this->load->library('rest', array(
            'server' => 'http://localhost/synzerestful/index.php/api/example/users/455',
            'http_user' => 'admin',
            'http_pass' => '1234',
            'http_auth' => 'basic' // or 'digest'
        ));

        $user = $this->rest->get('user', array('id' => $id), 'json');

        echo var_dump($user);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */