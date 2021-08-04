<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Proyek extends CI_Controller
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
        $edit = $this->db->get_where('proyek', ["id_proyek" => $id_])->row_array();
        // $this->db->order_by('tahun', 'desc');
        $data_query = $this->db->get_where('proyek')->result_array();
        $data = [
            "title" => "Proyek",
            "pages" => "Proyek/index",
            "script" => "Proyek/script",
            "data_sumber" => $data_query,
            "edit"      => json_encode($edit)
        ];
        $this->load->view('Router/route', $data);
    }
    public function action()
    {
        $data = $this->input->post();
        unset($data['id_proyek']);
        if (!empty($_POST['id_proyek']) && $_POST['id_proyek'] != '') {
            $this->db->where('id_proyek', $_POST['id_proyek']);
            $ins = $this->db->update('proyek', $data);
        } else {
            $ins = $this->db->insert('proyek', $data);
        }

        if ($ins) {
            $this->session->set_flashdata('status', '1');
            redirect(base_url('Proyek/index'));
        } else {
            $this->session->set_flashdata('status', '0');
            redirect(base_url('Proyek/index'));
        }
    }
    public function hapus($id_)
    {
      $this->db->where('id_proyek',$id_);
      $delete = $this->db->delete('proyek');
      
      if($delete){
        $this->session->set_flashdata('pesan','1');
        redirect(base_url('Proyek/index'));
    }else{
        $this->session->set_flashdata('pesan','0');
        redirect(base_url('Proyek/index'));
    }
}



}
