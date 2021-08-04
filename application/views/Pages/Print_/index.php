<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Laporan Proyek</title>
</head>
<body>
    <h3><center>LAPORAN PROYEK</center></h3>
    <table border="1" cellspacing="0" cellpadding="5" width="100%">
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
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($data as $value) : ?>
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
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>       
<div>
    <br/>
    <br/>
    <div style="width:400px;float:right">
        Denpasar, <?= date('d M Y'); ?>
        <br/>Pimpinan
        <br/>
        <br/>
        <br/>
        <p>Nama<br/>NIP. 1234</p>
    </div>
    <div style="clear:both"></div>
</div>
</body>
</html>