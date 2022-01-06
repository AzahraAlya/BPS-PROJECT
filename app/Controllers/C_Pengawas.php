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

	public function kegiatan(){
		return view('pengawas/kegiatan');
	}

	public function store_kegiatan(){
			$data = [
				'nama_kegiatan' => $this->request->getVar('nama_kegiatan'),
			];
			$M_kegiatan = model("M_kegiatan");
			$M_kegiatan->insert($data);
			return redirect()->to(base_url('/pengawas/tambah-kegiatan'));
	}
}
