<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table      = 'mahasiswa';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['nilai'];

    public function getMahasiswa($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function cekData($nilai)
    {
        return $this->db->table('mahasiswa')
            ->where('nilai', $nilai)
            ->get()->getRowArray();
    }

    public function add($data)
    {
        $this->db->table('mahasiswa')->insert($data);
    }


}