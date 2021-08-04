<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
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
   $this->db->select('*');
   $this->db->from('proyek');
   $this->db->join('kontraktor','kontraktor.id_kontraktor = proyek.id_kontraktor');
   $proyek = $this->db->get()->result_array();
   $data = [
    "title" => "Laporan",
    "pages" => "Laporan/index",
    "script" => "Laporan/script",
    "proyek" => $proyek
  ];
  $this->load->view('Router/route', $data);
}
public function action()
{
  $data = $this->input->post();
  unset($data['id_user']);
  if (!empty($_POST['id_user']) && $_POST['id_user'] != '') {
    $this->db->where('id_user', $_POST['id_user']);
    $ins = $this->db->update('user', $data);
  } else {
    $ins = $this->db->insert('user', $data);
  }

  if ($ins) {
    $this->session->set_flashdata('status', '1');
    redirect(base_url('Laporan/index'));
  } else {
    $this->session->set_flashdata('status', '0');
    redirect(base_url('Laporan/index'));
  }
}
public function hapus($id_)
{
  $this->db->where('id_user',$id_);
  $delete = $this->db->delete('user');
  
  if($delete){
    $this->session->set_flashdata('pesan','1');
    redirect(base_url('Laporan/index'));
  }else{
    $this->session->set_flashdata('pesan','0');
    redirect(base_url('Laporan/index'));
  }
}
public function detail($id_)
{
  $this->db->select('*');
  $this->db->from('pengerjaan');
  // $this->db->join('kontraktor','kontraktor.id_kontraktor = proyek.id_kontraktor');
  $this->db->join('proyek','proyek.id_proyek = pengerjaan.id_proyek');
  $this->db->where('proyek.id_proyek',$id_);
  $sumber = $this->db->get()->result_array();
  $data = [
    "title" => "Detail",
    "pages" => "Laporan/detail",
    "script" => "Laporan/script",
    "data_sumber" =>$sumber,
    "id_kontraktor" =>$id_
            // "style" => "Client/style",

            // "edit"      => json_encode($edit)
  ];

  $this->load->view('Router/route', $data);   
}
public function printd($id_)
{
        // $this->db->order_by('tahun', 'desc');
   $this->db->from('pengerjaan');
  // $this->db->join('kontraktor','kontraktor.id_kontraktor = proyek.id_kontraktor');
  $this->db->join('proyek','proyek.id_proyek = pengerjaan.id_proyek');
  $this->db->where('proyek.id_proyek',$id_);
  $data['data'] = $this->db->get()->result_array();
  
  $this->load->library('pdf');
  $this->pdf->setPaper('A4', 'landscape');
  $this->pdf->filename = "Laporan-Dompdf-Codeigniter.pdf";
  $this->pdf->load_view('Pages/Print_/printd', $data);

}

}
