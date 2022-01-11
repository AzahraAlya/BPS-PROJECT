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
}
