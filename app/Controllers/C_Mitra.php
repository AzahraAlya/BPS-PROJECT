<?php

namespace App\Controllers;

use App\Models\M_pencacah;

class C_Mitra extends BaseController
{

	public function tambah(){
        $M_pencacah = model("M_pencacah");
        $M_kecamatan = model("M_kecamatan");
        $id_mitra = $M_pencacah->id_KodeMitra();

        $data = [
			'id_mitra' => $id_mitra,
            'kecamatan' => $M_kecamatan->findAll(),
		];
		return view('admin/tambah-mitra',$data);
	}

	public function store(){
		$data = [
			'Kode_Mitra' => $this->request->getVar('Kode_Mitra'),
			'noKecamatan'=> $this->request->getVar('noKecamatan'),
			'NOMOR_PESERTA' => $this->request->getVar('NOMOR_PESERTA'),
			'NIK'=> $this->request->getVar('NIK'),
			'NAMA'=> $this->request->getVar('NAMA'),
			'JENIS_KELAMIN'=> $this->request->getVar('JENIS_KELAMIN'),
			'TEMPAT_LAHIR'=> $this->request->getVar('TEMPAT_LAHIR'),
			'TANGGAL_LAHIR'=> $this->request->getVar('TANGGAL_LAHIR'),
			'PENDIDIKAN'=> $this->request->getVar('PENDIDIKAN'),
			'STATUS_PERKAWINAN'=> $this->request->getVar('STATUS_PERKAWINAN'),
			'PEKERJAAN'=> $this->request->getVar('PEKERJAAN'),
			'PENGALAMAN_SURVEI_BPS'=> $this->request->getVar('PENGALAMAN_SURVEI_BPS'),
			'ALAMAT'=> $this->request->getVar('ALAMAT'),
			'DESA'=> $this->request->getVar('DESA'),
			'KECAMATAN'=> $this->request->getVar('KECAMATAN'),
			'KABUPATEN'=> $this->request->getVar('KABUPATEN'),
			'NOMOR_HP'=> $this->request->getVar('NOMOR_HP'),
			'NOMOR_WA'=> $this->request->getVar('NOMOR_WA'),
		];
		$M_pencacah = model("M_pencacah");
		$M_pencacah->insert($data);
		return redirect()->to(base_url('/pencacah'));
	}

	public function home(){

		return view('pencacah/home');
	}

	public function homeData(){
		return view('pencacah/data');
	}
}
