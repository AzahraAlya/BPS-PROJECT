<?php

namespace App\Controllers;

class C_Admin extends BaseController
{
	public function index()
	{

        $M_nilai = model("M_nilai");
        
        $admin = [
            'admin' => $M_nilai->getDataAdmin(),

		];
		return view('admin/print-nilai',$admin);
	}


    public function excel(){
        $M_nilai = model("M_nilai");
        $data = [
            'admin' => $M_nilai->getDataAdmin(),
            

		];
		return view('admin/excel',$data);
    }

    public function penilaian(){
        $M_nilai = model("M_nilai");
        
        $admin = [
            'admin' => $M_nilai->getDataAdmin(),

		];
        return view('admin/penilaian', $admin);
    }

    
	public function kegiatan(){
		return view('admin/kegiatan');
	}

	public function store_kegiatan(){
			$data = [
				'nama_kegiatan' => $this->request->getVar('nama_kegiatan'),
			];
			$M_kegiatan = model("M_kegiatan");
			$M_kegiatan->insert($data);
			return redirect()->to(base_url('/admin/tambah-kegiatan'));
	}

	public function lengkap(){
		return view('/admin/data-lengkap');
	}

	public function dataPenilaian(){
		$M_nilai = model("M_nilai");
        
        $admin = [
            'admin' => $M_nilai->getDataAdmin(),

		];
        return view('admin/data-penilaian', $admin);
	}
}
