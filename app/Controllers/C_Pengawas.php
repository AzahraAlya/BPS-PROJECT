<?php

namespace App\Controllers;
use App\Models\M_pencacah;
use App\Models\M_kegiatan;


class C_Pengawas extends BaseController
{
	public function pengawas()
	{
		$M_pencacah = model("M_pencacah");
		$data = [
			'pencacah' => $M_pencacah->findAll(),
			'validation' => \Config\Services::validation(),

		];
		return view('pengawas/daftar_pencacah',$data);
	}

	public function nilai($No_Urut){

		$M_pencacah = model("M_pencacah");
		$M_kegiatan = model("M_kegiatan");
		$data = [
			'validation' => \Config\Services::validation(),
			'pencacah' => $M_pencacah->getPencacahan($No_Urut),
			'kegiatan' => $M_kegiatan->findAll(),
		];
		return view('pengawas/nilai',$data);
	}

	public function store_nilai(){
		$data = [
			'kode_mitra' => $this->request->getVar('kode_mitra'),
			'nama' => $this->request->getVar('nama'),
			'nik' => $this->request->getVar('nik'),
			'no_hp' => $this->request->getVar('no_hp'),
			'alamat' => $this->request->getVar('alamat'),
			'nama_penilai' => $this->request->getVar('nama_penilai'),
			'nama_kegiatan' => $this->request->getVar('nama_kegiatan'),
			'beban_kerja' => $this->request->getVar('beban_kerja'),
			'status' => $this->request->getVar('status'),
			'que1' => $this->request->getVar('que1'),
			'que2'=> $this->request->getVar('que2'),
			'que3'=> $this->request->getVar('que3'),
			'que4'=> $this->request->getVar('que4'),
			'que5' => implode(",",$this->request->getVar('que5')), 
			'que6' => implode(",",$this->request->getVar('que6')),
			'catatan' => $this->request->getVar('catatan'),
		];
		$M_nilai = model("M_nilai");
		$M_nilai->insert($data);
		// dd($data);
		return redirect()->to(base_url('/pengawas'));
}

	public function penilaian(){
		$M_kegiatan = model("M_kegiatan");
		$data = [
			'kegiatan' => $M_kegiatan->findAll(),
		];
		return view('pengawas/penilaian',$data);
	}

	public function selanjutnya(){
		return view('pengawas/selanjutnya');
	}

	public function savePenilaian(){
		$data = [
            'kode_mitra' => $this->request->getVar('kode_mitra'),
            'nama_penilai' => $this->request->getVar('nama_penilai'),
            'nama_kegiatan' => $this->request->getVar('nama_kegiatan'),
            'beban_kerja' => $this->request->getVar('beban_kerja'),
            'status' => $this->request->getVar('status'),
        ];
		$M_nilai = model("M_nilai");
		$M_nilai->insert($data);
		// dd($data);
		return view('/pengawas/selanjutnya');
	}

}