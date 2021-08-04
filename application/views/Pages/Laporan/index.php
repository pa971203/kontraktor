<div class="container">
    <div class="row">
        <div class="col-md">
            <a href="<?= base_url('Print_/index/')?>" class="btn btn-success btn-sm">Print</a>
            <div class="card">                <div class="card-body mt-2">
                <div class="table-responsive">
                    <table class="table" style="font-size: 10px !important; color: #000 !important;">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>URAIAN KEGIATAN</th>
                                <th>TARGET</th>
                                <th>PAGU (Rp)</th>
                                <th>NILAI KONTRAK (Rp)</th>
                                <th>KONTRAKTOR</th>
                                <th>NOMOR KONTRAK</th>
                                <th>WAKTU PELAKSANAAN</th>
                                <th>TGL. KONTRAK</th>
                                <th>TGL. BERAKHIR KONTRAK</th>
                                <th>UANG MUKA</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($proyek as $value) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $value['nama_proyek'] ?></td>
                                    <td><?= $value['target'] ?></td>
                                    <td><?= $value['pagu'] ?></td>
                                    <td><?= $value['nilai_proyek'] ?></td> 
                                    <td><?= $value['nama'] ?></td> 
                                    <td><?= $value['no_kontrak'] ?></td>
                                    <td><?= $value['waktu_pelaksanaan'] ?></td>
                                    <td><?= $value['tgl_kontrak'] ?></td>
                                    <td><?= $value['tgl_berakhir'] ?></td>
                                    <td><?= $value['uang_muka'] ?></td>
                                        <td>
                                            <a href="<?= base_url('Laporan/detail/' . $value['id_proyek']) ?>" class="btn btn-info btn-sm">Detail</a>
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