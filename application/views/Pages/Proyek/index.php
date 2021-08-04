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
                <h6>Input Proyek</h6>
            </hr>
            <div class="row">
               <div class="col-md"> 
                <form action="<?= base_url('Proyek/action') ?>" method="post">
                    <input type="hidden" name="id_proyek" value="">
                     <div class="form-group">
                        <label for="exampleFormControlSelect1">ID Kontraktor</label>
                        <select class="form-control" name="id_kontraktor" id="_id">
                            <option>Pilih ID</option>
                            <?php
                            $data_user = $this->db->get_where('kontraktor')->result_array();
                            foreach ($data_user as $value) : ?>
                                <option value="<?= $value['id_kontraktor'] ?>"><?= $value['id_kontraktor'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Proyek</label>
                        <input name="nama_proyek" type="text" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label>Lokasi</label>
                        <input name="lokasi" type="text" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label>Target</label>
                        <input name="target" type="text" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label>Pagu(Rp)</label>
                        <input name="pagu" type="text" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label>Nilai Proyek(Rp)</label>
                        <input name="nilai_proyek" type="text" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md"> 
                    <div class="form-group">
                        <label>Uang Muka(Rp)</label>
                        <input name="uang_muka" type="text" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label>NO Kontrak</label>
                        <input name="no_kontrak" type="text" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label>Waktu Pelaksanaan</label>
                        <input name="waktu_pelaksanaan" type="text" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Kontrak</label>
                        <input name="tgl_kontrak" type="date" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Berakhir</label>
                        <input name="tgl_berakhir" type="date" class="form-control form-control-sm">
                    </div>
                <div class="form-group text-right">
                    <a href="<?= base_url('Proyek') ?>" class="btn btn-secondary btn-sm">Batal</a>
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
            <h5>Data Proyek</h5>
        </div>
        <div class="card-body mt-2">
            <div class="table-responsive">
                <table class="table" style="font-size: 10px !important; color: #000 !important;">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ID Kontraktor</th>
                            <th>Nama Proyek</th>
                            <th>Lokasi</th>
                            <th>Target</th>
                            <th>Pagu(Rp)</th>
                            <th>Nilai Proyek(Rp)</th>
                            <th>Uang Muka(Rp)</th>
                            <th>NO Kontrak</th>
                            <th>Waktu Pelaksanaan</th>
                            <th>Tanggal Kontrak</th>
                            <th>Tanggal Berakhir</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($data_sumber as $value) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $value['id_kontraktor'] ?></td>
                                <td><?= $value['nama_proyek'] ?></td>
                                <td><?= $value['lokasi'] ?></td>
                                <td><?= $value['target'] ?></td> 
                                <td><?= $value['pagu'] ?></td>
                                <td><?= $value['nilai_proyek'] ?></td>
                                <td><?= $value['uang_muka'] ?></td>
                                <td><?= $value['no_kontrak'] ?></td> 
                                <td><?= $value['waktu_pelaksanaan'] ?></td>
                                <td><?= $value['tgl_kontrak'] ?></td>
                                <td><?= $value['tgl_berakhir'] ?></td> 
                                <td>
                                    <a href="<?= base_url('Proyek/index/' . $value['id_proyek']) ?>" class="btn btn-success btn-sm">Edit</a>
                                    <a href="<?= base_url('Proyek/hapus/' . $value['id_proyek']) ?>" class="btn btn-danger btn-sm">Hapus</a>
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