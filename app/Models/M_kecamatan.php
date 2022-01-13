<?php

namespace App\Models;

use CodeIgniter\Model;

class M_kecamatan extends Model
{

    protected $table                = 'tb_kecamatan';
	protected $primaryKey           = 'kode_kcm';
	protected $allowedFields        = ['kode_kcm','nama_kcm'];
	protected $useTimestamps        = true;

}


?>