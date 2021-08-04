<div class="container">
    <div class="row">
        <div class="col-md-12">
           <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb breadcrumb-arrow">
                    <li class="breadcrumb-item"  id="btn-inp"><a style=" cursor: pointer;">Input Data</a></li>
                    <li class="breadcrumb-item active" id="btn-view"><a style=" cursor: pointer;">Lihat Data</a></li>
                </ol>
            </div>
        </div>
        <div class="card" >
            <div class="card-body mt-2" id="inp">
               <h6>Input Kontraktor</h6>
           </hr>
           <div class="row">
               <div class="col-md"> 
                   <form action="<?= base_url('Kontraktor/action') ?>" method="post">
                    <input type="hidden" name="id_kontraktor" value="">
                    <div class="form-group">
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">ID User</label>
                        <input type="text" class="form-control form-control-sm" readonly name="id_user" value="<?=!empty($_GET['id_user'])?$_GET['id_user']:
                        ''?>">
                    </div>
                </div>
                <div class="form-group">
                    <label>Nama Kontraktor</label>
                    <input type="text" class="form-control form-control-sm" readonly name="nama" value="<?=!empty($_GET['nama'])?$_GET['nama']:
                    ''?>">
                </div>
            </div>
            <div class="col-md"> 
                <div class="form-group">
                    <label>Pemilik</label>
                    <input name="pemilik" type="text" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <label>NO HP</label>
                    <input name="no_hp" type="text" class="form-control form-control-sm">
                </div>
                <div class="form-group text-right">
                    <a href="<?= base_url('Kontraktor') ?>" class="btn btn-secondary btn-sm">Batal</a>
                    <button class="btn btn-primary btn-sm" id="simpan">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
<div class="col-md-12" id="view">
    <div class="card">
        <div class="card-header">
            <h5>Data Kontraktor</h5>
        </div>
        <div class="card-body mt-2">
            <div class="table-responsive">
                <table class="table" style="font-size: 10px !important; color: #000 !important;">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ID User</th>
                            <th>Nama Kontraktor</th>
                            <th>Pemilik</th>
                            <th>NO HP</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($data_sumber as $value) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $value['id_user'] ?></td>
                                <td><?= $value['nama'] ?></td>
                                <td><?= $value['pemilik'] ?></td>
                                <td><?= $value['no_hp'] ?></td> 
                                <td>
                                    <a href="<?= base_url('Kontraktor/index/' . $value['id_kontraktor']) ?>" class="btn btn-success btn-sm">Edit</a>
                                    <a href="<?= base_url('Kontraktor/hapus/' . $value['id_kontraktor']) ?>" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>