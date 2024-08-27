<?php
class SuratDomisili extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('M_history');
        $this->load->model('M_cetak');
    }

    public function index()
    {
        $data = array(
            'title' => 'History Surat Domisili',
            'datas' => $this->M_history->getSkd(),
        );
        $this->M_notifikasi->updateSd();
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('warga/history/skd/index', $data);
        $this->load->view('layout/footer', $data);
    }

    public function cetak($id)
    {
        $data = array(
            'title' => 'Cetak Keterangan Surat Domisili',
            'data'  => $this->M_cetak->cetakSkd($id),
            'user_nama'          =>  $user_nama,
						'user_nik'          =>  $user_nik,
						'user_jekel'          =>  $user_jekel,
						'user_tempatlahir'          =>  $user_tempatlahir,
						'user_ttl'          =>  $user_ttl,
						'user_agama'          =>  $user_agama,
						'user_pekerjaan'          =>  $user_pekerjaan,
						'user_alamat'          =>  $user_alamat,	
						'user_rt'          =>  $user_rt,	
						'user_rw'          =>  $user_rw
        );

        $this->load->view('warga/history/skd/print', $data);
    }
}
