<?php 
namespace App\Models;

use CodeIgniter\Model;

class Masyarakat extends Model{
    protected $table      = 'masyarakat';
    protected $primaryKey = 'id_masyarakat';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama','username','password','telp','nik'];
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
}