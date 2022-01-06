<?php

namespace App\Models;

use CodeIgniter\Model;

class M_pencacah extends Model
{
	
	protected $table                = 'db_bps';
	protected $primaryKey           = 'No_Urut';
	protected $allowedFields        = ['Kode_Mitra','noKecamatan','NOMOR_PESERTA','NIK','NAMA','JENIS_KELAMIN', 'TEMPAT_LAHIR','TANGGAL_LAHIR','PENDIDIKAN','STATUS_PERKAWNINAN','PEKERJAAN','PENGALAMAN_SURVEI_BPS','ALAMAT','DESA','KECAMATAN','KABUPATEN','NOMOR_HP','NOMOR_WA','created_at','updated_at'];
	protected $useTimestamps        = true;
	
	public function getPencacah($No_Urut=false){
		if($No_Urut == false){
			return $this->findAll();
		}

		return $this->where(['No_Urut'=> $No_Urut]) -> first();
	}

    public function getPencacahan($No_Urut=false){
		if($No_Urut == false){
			return $this->findAll();
		}

		return $this->where(['No_Urut'=> $No_Urut]) -> first();
	}
}
