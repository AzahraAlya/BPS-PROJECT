<?php

namespace App\Models;

use CodeIgniter\Model;

class M_nilai extends Model
{

    protected $table                = 'tb_nilai';
	protected $primaryKey           = 'id_nilai';
	protected $allowedFields        = ['kode_mitra','nama','nik','no_hp','alamat','nama_penilai','nama_kegiatan','beban_kerja','status','que1','que2','que3','que4','que5','que6','catatan', 'created_at', 'updated_at'];
	protected $useTimestamps        = true;


    public function getDataById_p($id){
        $query = $this->db->table('tb_nilai')->select('*')
		->join('db_bps', 'tb_nilai.id_nilai = db_bps.No_Urut')
        ->where('tb_nilai.id_nilai',$id)->get()->getRow();
        return $query;
    }

    public function getDataAdmin(){
        $query = $this->db->table('tb_nilai')->select('*')
		->join('db_bps', 'tb_nilai.id_nilai = db_bps.No_Urut')->get()->getResult();
        return $query;
    }


}



?>