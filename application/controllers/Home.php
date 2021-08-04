<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	  public function __construct()
    {
        parent::__construct();
      if (empty($this->session->userdata()['data'])) {
          redirect(base_url('Login'));
        }
    }
    
    public function index()
    {
        $data = [
            "title" => "Dashboard",
            "pages" => "Home/index",
        ];
        $this->load->view('Router/route',$data);
    }
}
