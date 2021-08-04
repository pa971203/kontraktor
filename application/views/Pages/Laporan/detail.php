<div class="container">
    <div class="row">
        <div class="col-md-12" >
            <a href="<?= base_url('Laporan/printd/'. $id_kontraktor)?>" class="btn btn-success btn-sm">Print</a>
            <div class="card">
                <div class="card-header">
                    <h5>Detail</h5>
                </div>
                <div class="card-body mt-2">
                    <div class="table-responsive">
                        <table class="table" style="font-size: 10px !important; color: #000 !important;">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Nama Proyek</th>
                                    <th>Nama Kontraktor</th>
                                    <th>Tanggal Laporan</th>
                                    <th>Progres Pengerjaan</th>
                                    <th>Bukti Pengerjaan</th>
                                    <th>Keterengan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($data_sumber as $value) : ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= $value['nama_proyek'] ?></td>
                                        <td><?= $value['nama_komtraktor'] ?></td> 
                                        <td><?= $value['tgl_laporan'] ?></td>
                                        <td><?= $value['progres_pengerjaan'] ?></td>
                                        <td><img src="<?= base_url('assets/bukti/'.$value['bukti_pengerjaan']) ?>" style="width: 100px"></td>
                                        <td><?= $value['keterengan'] ?></td>
                                        <!-- <td>
                                            <a href="<?= base_url('Pengerjaan/index/' . $value['id_pengerjaan']) ?>" class="btn btn-success btn-sm">Edit</a>
                                            <a href="<?= base_url('Pengerjaan/hapus/' . $value['id_pengerjaan']) ?>" class="btn btn-danger btn-sm">Hapus</a>
                                        </td> -->
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