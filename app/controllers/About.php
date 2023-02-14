<?php 

class About extends Controller{
	public function index($nama = 'sabar', $pekerjaan = 'dosen')
	{
		// echo "Halo, nama saya $nama saya seorang $pekerjaan" ;
		$data['title'] = 'About';
		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}
	public function page()
	{
		// echo 'about/page';
		$data['title'] = 'Page';
		$this->view('templates/header', $data);
		$this->view('about/page');
		$this->view('templates/footer');
	}
}