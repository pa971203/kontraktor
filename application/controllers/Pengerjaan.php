<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengerjaan extends CI_Controller
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
        $kontaktor = $this->db->get_where('kontraktor',["id_user"=> $this->session->userdata('data')['id_user']])->row_array();

        $edit = $this->db->get_where('pengerjaan', ["id_pengerjaan" => $id_])->row_array();
        $data_query = $this->db->get_where('pengerjaan',["id_kontraktor"=>$kontaktor['id_kontraktor'] ])->result_array();
        $data = [
            "title" => "Pengerjaan",
            "pages" => "Pengerjaan/index",
            "script" => "Pengerjaan/script",
            "data_sumber" => $data_query,
            "edit"      => json_encode($edit),
            "kontraktor" => $kontaktor
        ];
        $this->load->view('Router/route', $data);
    }
    public function action()
    {
        $data = $this->input->post();
        unset($data['id_pengerjaan']);
        unset($data['bukti_pengerjaan']);
        $upload = up('bukti_pengerjaan','assets/bukti/');
        if (!empty($_POST['id_pengerjaan']) && $_POST['id_pengerjaan'] != '') {
            $this->db->where('id_pengerjaan', $_POST['id_pengerjaan']);
            if( $upload  != false){
             $data +=["bukti_pengerjaan"=> $upload];
            }
            $ins = $this->db->update('pengerjaan', $data);
        } else {
           if( $upload  != false){
            $data +=["bukti_pengerjaan"=> $upload];
            }
        $ins = $this->db->insert('pengerjaan', $data);
    }

    if ($ins) {
        $this->session->set_flashdata('status', '1');
        redirect(base_url('Pengerjaan/index'));
    } else {
        $this->session->set_flashdata('status', '0');
        redirect(base_url('Pengerjaan/index'));
    }
}
public function hapus($id_)
{
  $this->db->where('id_pengerjaan',$id_);
  $delete = $this->db->delete('pengerjaan');

  if($delete){
    $this->session->set_flashdata('pesan','1');
    redirect(base_url('pengerjaan/index'));
}else{
    $this->session->set_flashdata('pesan','0');
    redirect(base_url('pengerjaan/index'));
}
}

}
