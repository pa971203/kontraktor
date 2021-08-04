<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontraktor extends CI_Controller
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
        $edit = $this->db->get_where('kontraktor', ["id_kontraktor" => $id_])->row_array();
        // $this->db->order_by('tahun', 'desc');
        $data_query = $this->db->get_where('kontraktor')->result_array();
        $data = [
            "title" => "Kontraktor",
            "pages" => "Kontraktor/index",
            "script" => "Kontraktor/script",
            "data_sumber" => $data_query,
            "edit"      => json_encode($edit)
        ];
        $this->load->view('Router/route', $data);
    }
    public function action()
    {
        $data = $this->input->post();
        unset($data['id_kontraktor']);
        if (!empty($_POST['id_kontraktor']) && $_POST['id_kontraktor'] != '') {
            $this->db->where('id_kontraktor', $_POST['id_kontraktor']);
       
            $ins = $this->db->update('kontraktor', $data);
        } else {
            $ins = $this->db->insert('kontraktor', $data);
        }

        if ($ins) {
            $this->session->set_flashdata('status', '1');
            redirect(base_url('Kontraktor/index'));
        } else {
            $this->session->set_flashdata('status', '0');
            redirect(base_url('Kontraktor/index'));
        }
    }
    public function hapus($id_)
    {
      $this->db->where('id_kontraktor',$id_);
      $delete = $this->db->delete('kontraktor');
      
      if($delete){
        $this->session->set_flashdata('pesan','1');
        redirect(base_url('Kontraktor/index'));
    }else{
        $this->session->set_flashdata('pesan','0');
        redirect(base_url('Kontraktor/index'));
    }
}

}
