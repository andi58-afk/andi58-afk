<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Masyarakat;
class MasyarakatController extends BaseController{
    protected $masyarakats;
    function __construct()
    {
        $this->masyarakats = new Masyarakat;
    }
    public function index()
    {
        $data['masyarakat']=$this->masyarakats->findAll();
        return view('masyarakat_view', $data);
    }
    public function save()
    {
        $this->masyarakats->insert([
            'nama'=>$this->request->getPost('nama'),
            'username'=>$this->request->getPost('username'),
            'password'=>$this->request->getPost('password'),
            'telp'=>$this->request->getPost('telp'),
            'nik'=>$this->request->getPost('nik'),
        ]);
        return redirect('masyarakat');
    }
    public function delete($id)
    {
        $this;
    }

}