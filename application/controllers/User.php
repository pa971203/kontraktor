<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
      if (empty($this->session->userdata()['data'])) {
          redirect(base_url('Login'));
        }
    }
    public function index($id_ = null)
    {
        $edit = $this->db->get_where('user', ["id_user" => $id_])->row_array();
        // $this->db->order_by('tahun', 'desc');
        $data_query = $this->db->get_where('user')->result_array();
        $data = [
            "title" => "User",
            "pages" => "User/index",
            "script" => "User/script",
            "data_sumber" => $data_query,
            "edit"      => json_encode($edit)
        ];
        $this->load->view('Router/route', $data);
    }
    public function action()
    {
        $data = $this->input->post();
        $data+=["role"=>"KONTRAKTOR"];
        unset($data['id_user']);
        unset($data['password']);
        if (!empty($_POST['password'])) {
            $data+=["password"=>md5($_POST['password'])];
        }
        if (!empty($_POST['id_user']) && $_POST['id_user'] != '') {
            $this->db->where('id_user', $_POST['id_user']);
            $ins = $this->db->update('user', $data);
            redirect(base_url('User/index'));
        } else {
            $ins = $this->db->insert('user', $data);
        }

        if ($ins) {
            $this->session->set_flashdata('status', '1');
            $data_ = $this->db->get_where('user',$data)->row_array();
            redirect(base_url('Kontraktor/index?id_user='.$data_['id_user']."&&nama=".$data_['nama']));
        } else {
            $this->session->set_flashdata('status', '0');
            redirect(base_url('User/index'));
        }
    }
    public function hapus($id_)
    {
      $this->db->where('id_user',$id_);
      $delete = $this->db->delete('user');
      
      if($delete){
        $this->session->set_flashdata('pesan','1');
        redirect(base_url('User/index'));
    }else{
        $this->session->set_flashdata('pesan','0');
        redirect(base_url('User/index'));
    }
}

}
