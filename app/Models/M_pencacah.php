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

	public function getPencacahdata($kode = false)
	{
		if ($kode == false) {
			return $this->findAll();
		}
		return $this->where(['Kode_Mitra' => $kode])->first();
	}

	public function id_KodeMitra(){
		$kode = $this->db->table('db_bps')
		->select('RIGHT(Kode_Mitra,5) as Kode_Mitra', false)
		->orderBy('Kode_Mitra', 'DESC')
		->limit(1)->get()->getRowArray();
    	$kode_mitra = isset($kode['Kode_Mitra']) ? $kode['Kode_Mitra'] : '';
		if($kode_mitra ==null){
			$no = 1;
		}else{
			$no = intval($kode_mitra) + 1;
		}

		$tgl = 18;
		$batas = str_pad($no, 5, "0", STR_PAD_LEFT);
		$id_mitra = $tgl.$batas;
		return $id_mitra;
	}


}
