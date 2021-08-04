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
                <h6>Input Pengerjaan</h6>
            </hr>
            <div class="row">
             <div class="col-md"> 
                <form action="<?= base_url('Pengerjaan/action') ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_pengerjaan" value="">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">ID Proyek</label>
                        <select class="form-control" name="id_proyek" id="_id">
                            <option>Pilih ID</option>
                            <?php
                            $kontaktor = $this->db->get_where('kontraktor',["id_user"=> $this->session->userdata('data')['id_user']])->row_array();
                            $this->db->where('id_kontraktor',$kontaktor['id_kontraktor']);
                            $data_user = $this->db->get_where('proyek')->result_array();
                            foreach ($data_user as $value) : ?>
                                <option value="<?= $value['id_proyek'] ?>" data-name="<?= $value['nama_proyek'] ?>"><?= $value['id_proyek'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Proyek</label>
                        <input name="nama_proyek" type="text" class="form-control form-control-sm" readonly>
                    </div>
                    <label>Id Kontaktor</label>
                    <input name="id_kontraktor" type="text" class="form-control form-control-sm" readonly value="<?=$kontraktor['id_kontraktor']?>">
                </div>
                <div class="form-group">
                    <label>Nama Kontraktor</label>
                    <input name="nama_komtraktor" type="text" class="form-control form-control-sm" readonly value="<?=$kontraktor['nama']?>">
                </div>
            </div>
            <div class="col-md"> 
                <div class="form-group">
                    <label>Progres Pengerjaan</label>
                    <input name="progres_pengerjaan" type="text" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <label>Bukti Pengerjaan</label>
                    <input name="bukti_pengerjaan" type="file" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <label>Keterengan</label>
                    <textarea class="form-control" name="keterengan" type="text" rows="3"></textarea>
                    <!-- <input name="keterengan" type="text" class="form-control form-control-sm"> -->
                </div>
                <div class="form-group">
                    <label>Tanggal Laporan</label>
                    <input name="tgl_laporan" type="date" class="form-control form-control-sm">
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
            <h5>Data Pengerjaan</h5>
        </div>
        <div class="card-body mt-2">
            <div class="table-responsive">
                <table class="table" style="font-size: 10px !important; color: #000 !important;">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama Proyek</th>
                            <th>Nama Kontraktor</th>
                            <th>Progres Pengerjaan</th>
                            <th>Bukti Pengerjaan</th>
                            <th>Keterengan</th>
                            <th>Tanggal Laporan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($data_sumber as $value) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $value['nama_proyek'] ?></td>
                                <td><?= $value['nama_komtraktor'] ?></td>
                                <td><?= $value['progres_pengerjaan'] ?></td>
                                <td><img src="<?= base_url('assets/bukti/'.$value['bukti_pengerjaan']) ?>" style="width: 100px"></td>
                                <td><?= $value['keterengan'] ?></td> 
                                <td><?= $value['tgl_laporan'] ?></td>
                                <td>
                                    <a href="<?= base_url('Pengerjaan/index/' . $value['id_pengerjaan']) ?>" class="btn btn-success btn-sm">Edit</a>
                                    <a href="<?= base_url('Pengerjaan/hapus/' . $value['id_pengerjaan']) ?>" class="btn btn-danger btn-sm">Hapus</a>
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