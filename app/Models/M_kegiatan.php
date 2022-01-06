<?php

namespace App\Models;

use CodeIgniter\Model;

class M_kegiatan extends Model
{

    protected $table                = 'tb_kegiatan';
	protected $primaryKey           = 'id_kegiatan';
	protected $allowedFields        = ['nama_kegiatan','created_at', 'updated_at'];
	protected $useTimestamps        = true;

}


?>