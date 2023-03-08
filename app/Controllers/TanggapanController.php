<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Tanggapan;

class TanggapanController extends BaseController{
    protected $tangapans;
    function __construct()
    {
        $this->tanggapans = new Tanggapan;
    }
    public function index()
    {
        $data['tanggapans']=$this->tanggapans->findAll();
        return view('tanggapan_view', $data);
    }
}