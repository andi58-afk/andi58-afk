<?=$this->extend('layouts/admin')?>
<?=$this->section('title')?>
masyarakat
<?=$this->endSection()?>
<?=$this->section('content')?>
<div class="col">
    <div class="border-bg-danger">
        <div class="card-header bg-danger">
            <a href="" data-target="#fpetugas" data-toggle="modal" data-petugas="" class="btn btn-warning">tambah data</a>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <tr>
                    <td>no</td>
                    <td>nama</td>
                    <td>username</td>
                    <td>password</td>
                    <td>telp</td>
                    <td>level</td>
                    <td>opsi</td>
                </tr>
                <?php
                $no=0;
                foreach($petugas as $row){
                    $no++;
                    $data = $row['nama_petugas'].",".$row['username'].",".$row['password'].",".$row['telp'].",".$row['level'].",". base_url('petugas/edit', $row['id_petugas']);
                    ?>
                        <tr>
                            <td><?=$no?></td>
                            <td><?=$row['nama_petugas']?></td>
                            <td><?=$row['username']?></td>
                            <td><?=$row['password']?></td>
                            <td><?=$row['telp']?></td>
                            <td><?=$row['level']?></td>
                            <td>
                                <a href="" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                                <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php
                }
                ?>
            </table>
        </div>
        <?php if(session()->getFlashdata("massage")):?>
            <div class="alret alert-success">
                <?php session()->getFlashdata("massage")?>
            </div>
        <?php endif?>
    </div>
</div>
<div class="modal fade" tabindex="-1" id="fpetugas" aria-labelledby="modalPetugasLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5></h5>
                <button>
                    <span>&times;</span> 
                </button>
            </div>
            <form action="fpetugas" method="post" modal="fade">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_petugas"></label>
                        <input type="text" id="nama_petugas" name="nama_petugas" class="form-control" placeholder="nama">
                    </div>
                    <div class="form-group">
                        <label for="username"></label>
                        <input type="text" id="nama" name="username" class="form-control" placeholder="username">
                    </div>
                    <div class="form-group">
                        <label for="password"></label>
                        <input type="text" id="password" name="password" class="form-control" placeholder="password">
                    </div>
                    <div class="form-group">
                        <label for="telp"></label>
                        <input type="text" id="telp" name="telp" class="form-control" placeholder="telp">
                    </div>
                    <div class="form-group">
                        <label for="level">level</label>
                        <select name="level" id="level" class="form-control">
                            <option value="">jabatan</option>
                            <option value="admin">admin</option>
                            <option value="petugas">petugas</option>
                        </select>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?=$this->endSection()?>