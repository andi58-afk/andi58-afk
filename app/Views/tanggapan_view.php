<?=$this->extend('layouts/admin')?>
<?=$this->section('title')?>
Tanggapan
<?=$this->endSection()?>
<?=$this->section('content')?>
<div class="col">
    <div class="border-bg-primary">
        <div class="card-header bg-primary">
            <a href="" data-target="#fpengaduan" data-toggle="modal" data-pengaduan="" class="btn btn-primary">tambah data</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <td>no</td>
                    <td>tgl_pengaduan</td>
                    <td>tanggal_tangapan</td>
                    <td>tanggapan</td>
                    <td>id_petugas</td>
                    <td>opsi</td>
                </tr>
                <?php
                    $no=0;
                    foreach($tanggapan as $row){
                        
                    }
                ?>
            </table>
        </div>
    </div>
</div>
<?=$this->endSection()?>