<?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data Penilaian Mitra.xls");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">No Urut</th>
                                        <th scope="col">Kode Mitra</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">NIK</th>
                                        <th scope="col">No HP</th>                                        
                                        <th scope="col">Alamat</th> 
                                        <th scope="col">Nama Penilai</th>
                                        <th scope="col">Volume Beban Kerja</th>
                                        <th scope="col">Status Partisipasi Mitra</th>
                                        <th scope="col">Penguasaan Konsep</th>
                                        <th scope="col">Teknik Wawancara</th>
                                        <th scope="col">Ketepatan Waktu</th>
                                        <th scope="col">Respon Komunikasi</th>
                                        <th scope="col">Kelebihan</th>
                                        <th scope="col">Kekurangan</th>
                                        <th scope="col">Catatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($admin as $i => $adm) : ?>
                                        <tr>
                                            <th scope="row"><?= $i + 1;?></th>
                                            <td><?= $adm->kode_mitra; ?></td>
                                            <td><?= $adm->NAMA; ?></td>
                                            <td><?= $adm->NIK; ?></td>
                                            <td><?= $adm->NOMOR_HP; ?></td>
                                            <td><?= $adm->ALAMAT; ?></td>
                                            <td><?= $adm->nama_penilai; ?></td>
                                            <td><?= $adm->beban_kerja; ?></td>
                                            <td><?= $adm->status; ?></td>
                                            <td><?= $adm->que1; ?></td>
                                            <td><?= $adm->que2; ?></td>
                                            <td><?= $adm->que3; ?></td>
                                            <td><?= $adm->que4; ?></td>
                                            <td><?= $adm->que5; ?></td>
                                            <td><?= $adm->que6; ?></td>
                                            <td><?= $adm->catatan; ?></td>
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
    </body>
</html>