<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Laporan Dompdf Codeigniter</title>
</head>
<body>
    <h3><center>lAPORAN PENGERJAAN</center></h3>
    <table border="1" cellspacing="0" cellpadding="5" width="100%">
        <thead>
            <tr>
               <th>NO</th>
               <th>Nama Proyek</th>
               <th>Nama Kontraktor</th>
               <th>Tanggal Laporan</th>
               <th>Progres Pengerjaan</th>
               <th>Keterengan</th>
           </tr>
       </thead>
       <tbody>
        <?php $i = 1;
        foreach ($data as $value) : ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $value['nama_proyek'] ?></td>
                <td><?= $value['nama_komtraktor'] ?></td>
                <td><?= $value['tgl_laporan'] ?></td>
                <td><?= $value['progres_pengerjaan'] ?></td>
                <td><?= $value['keterengan'] ?></td> 
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
        <p><?= $value['nama_komtraktor'] ?><br/>NIP. 1234</p>
    </div>
    <div style="clear:both"></div>
</div>
</body>
</html>