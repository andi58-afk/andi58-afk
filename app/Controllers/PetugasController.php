<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Petugas;
class PetugasController extends BaseController{
    protected $petugass;
    function __construct()
    {
        $this->petugass = new Petugas;
    }
    public function index()
    {
        $data['petugas']=$this->petugass->findAll();
        return view('petugas_view', $data);
    }
    public function save()
    {
        $this->petugass->insert([
            'nama_petugas'=>$this->request->getPost('nama_petugas'),
            'username'=>$this->request->getPost('username'),
            'password'=>$this->request->getPost('password'),
            'telp'=>$this->request->getPost('telp'),
            'level'=>$this->request->getPost('level'),
        ]);
        return redirect('masyarakat');    
    }
}