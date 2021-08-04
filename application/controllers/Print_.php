<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Print_ extends CI_Controller
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
        // $this->db->order_by('tahun', 'desc');
		$this->db->select('*');
		$this->db->from('proyek');
		$this->db->join('kontraktor','kontraktor.id_kontraktor = proyek.id_kontraktor');
		$data['data'] = $this->db->get()->result_array();

		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "Laporan-Dompdf-Codeigniter.pdf";
		$this->pdf->load_view('Pages/Print_/index', $data);

	}
}
