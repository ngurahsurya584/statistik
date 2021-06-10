<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ExportController extends BaseController
{
    public function __construct()
	{
		$this->mahasiswaModel = new \App\Models\MahasiswaModel();
	}
    public function export()
    {
        $data [
            "nilai" => $this->mahasiswaModel->getMahasiswa(),
        ];
        return view('Statistik/sabi');
    }
}