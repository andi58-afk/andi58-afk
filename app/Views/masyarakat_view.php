<?=$this->extend('layouts/admin')?>
<?=$this->section('title')?>
masyarakat
<?=$this->endSection()?>
<?=$this->section('content')?>
<div class="col">
    <div class="border-bg-danger">
        <div class="card-header bg-danger">
            <a href="" data-target="#fmasyarakat" data-toggle="modal" data-masyarakat="" class="btn btn-warning">tambah data masyarakat</a>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <tr>
                    <td>no</td>
                    <td>nama</td>
                    <td>username</td>
                    <td>password</td>
                    <td>telp</td>
                    <td>nik</td>
                    <td>opsi</td>
                </tr>
                <?php
                $no=0;
                foreach($masyarakat as $row){
                    $no++;
                    $data = $row['nama'].",".$row['username'].",".$row['password'].",".$row['telp'].",".$row['nik'].",". base_url('masyarakat/edit', $row['id_masyarakat']);
                    ?>
                        <tr>
                            <td><?=$no?></td>
                            <td><?=$row['nama']?></td>
                            <td><?=$row['username']?></td>
                            <td><?=$row['password']?></td>
                            <td><?=$row['telp']?></td>
                            <td><?=$row['nik']?></td>
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
<div class="modal fade" tabindex="-1" id="fmasyarakat" aria-labelledby="modalMasyarakatLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5></h5>
                <button>
                    <span>&times;</span> 
                </button>
            </div>
            <form action="fmasyarakat" method="post" modal="fade">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama"></label>
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="nama">
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
                        <label for="nik"></label>
                        <input type="text" id="nik" name="nik" class="form-control" placeholder="nik">
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