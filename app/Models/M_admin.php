<?php

namespace App\Models;

use CodeIgniter\Model;

class M_admin extends Model
{

    protected $table                = 'tb_kepala';
	protected $primaryKey           = 'id_kpl';
	protected $allowedFields        = ['KESAN_DAN_PESAN','PENAMPILAN','KOMUNIKASI','NILAI','KEPEMILIKAN_HP','SPESIFIKASI_ANDROID','OPERASI_GOOGLE_MAPS','GAMBAR','E','I','S','N','T','F','J','P','nokep','nodev','nojab','nopos','Rekomendasi_Hasil_MBTI','Psikolog_Prov','Evaluasi_KSK','HASIL_AKHIR','LULUS_PEMETAAN','Keterangan','NILAI_PENDALAMAN','NILAI_PENGAMATAN','JUMLAH_ERROR','PSIKOTES','Umur','Tanggal_Rekrutment_'];
	protected $useTimestamps        = true;

}


?>