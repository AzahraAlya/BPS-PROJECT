<?php

namespace App\Controllers;

class C_Admin extends BaseController
{
	public function index()
	{
        $M_pencacah = model("M_pencacah");
        $M_nilai = model("M_nilai");
        $data = [
			'pencacah' => $M_pencacah->findAll(),
			'nilai' => $M_nilai->findAll(),

		];
		return view('admin/print-nilai',$data);
	}

}
