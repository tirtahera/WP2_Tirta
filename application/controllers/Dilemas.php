<?php

class Dilemas extends CI_Controller
{

	public function index()
	{
		$this->load->view('view-dilemas');
	}

	public function cetak()
	{
		$this->form_validation->set_rules('name', 'Nama Siswa', 'required|min_length[3]' [
		'required'=> "Nama Harus diisi",
		'min_length' => "Nama Terlalu Pendek minimal 3 Karakter" 
		]);

		$this->form_validation->set_rules('nis', 'Nis Siswa', 'required|min_length[3]' [
		'required'=> "Nis Siswa Harus diisi",
		'min_length' => "Nis Terlalu Pendek minimal 3 Karakter" 
		]);

		$this->form_validation->set_rules('kelas', 'Kelas Siswa', 'required|min_length[3]' [
		'required'=> "Kelas Siswa Harus diisi",
		'min_length' => "Kelas Terlalu Pendek" 
		]);

		$this->form_validation->set_rules('tanggal', 'Tanggal Lahir Siswa', 'required|min_length[3]' [
		'required'=> "Tanggal Lahir Siswa Harus diisi",
		'min_length' => "Tanggal Lahir Terlalu Pendek" 
		]);

		$this->form_validation->set_rules('tempat', 'Tempat Lahir Siswa', 'required|min_length[3]' [
		'required'=> "Tempat Lahir Siswa Harus diisi",
		'min_length' => "Tempat Lahir Tidak Tersedia" 
		]);

		$this->form_validation->set_rules('alamat', 'Alamat Siswa', 'required|min_length[3]' [
		'required'=> "Alamat Siswa Harus diisi",
		'min_length' => "Alamat Terlalu Pendek minimal Jalan"

		if$this->form_validation->run() ==FALSE){
			$this->load->view('view-dilemas');
		}else{


			$nama = $this->input->post('nama', TRUE);
			$nis = $this->input->post('nis', TRUE);
			$kelas = $this->input->post('kelas', TRUE);
			$tanggal = $this->input->post('tanggal', TRUE);
			$tempat = $this->input->post('tempat', TRUE);
			$alamat = $this->input->post('alamat', TRUE);
			$jk = $this->input->post('jk', TRUE);
			$agama = $this->input->post('agama', TRUE);

			$data = [
				'nama' => $nama,
				'nis' => $nis,
				'kelas' => $kelas,
				'tanggal' => $tanggal,
				'tempat' => $tempat,
				'alamat' => $alamat,
				'jk' => $jk,
				'agama' => $agama
			];

			$this->load->view('view-dilemas', $data);
		}	
		
	}
}