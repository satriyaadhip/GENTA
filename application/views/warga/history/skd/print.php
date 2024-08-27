<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>./assets/css/print.css">
</head>


<body>
    <div class="container mt-3 page">
        <div class="sub-page">
            <center>
                <table width="100%">
                    <tr>
                        <td>
                            <img src="<?= base_url() ?>./assets/logo/jpr.png" width="100px" height="130px">
                        </td>
                        <td>
                            <center>
                                <strong>
                                    <h5><b>PEMERINTAHAN KABUPATEN SUKOHARJO</b></h5>
                                    <h5><b>KECAMATAN BULU</b></h5>
                                    <h5><b>DESA GENTAN</b></h5>
                                    <small>Jalan Batu Seribu No 10 Tlpn - Email<br>gentan3311022003@gmail.com Kode Pos 57563</small>
                                </strong>
                            </center>
                        </td>
                    </tr>
                </table>
            </center>
            <hr>

            <div class="identitas">
                <?php foreach ($data as $d) { ?>
                    <p class="text-end fw-bold">
                        <small>
                            <?= $d->tanggal_surat ?>
                        </small>
                    </p>
                    <span class="text-center">
                        <strong>
                            <p>
                                <u><?= $d->jenis_surat ?></u>
                            </p>
                        </strong>
                        <p>Nomor : <?= $d->nomor_surat ?></p>
                    </span>
                <?php } ?>
            </div>
            <div class="text-surat">
                <p>Yang bertanda tangan di bawah ini Kepada Desa Gentan, Kecamatan Bulu, Kabupaten Sukoharjo,
                    menerangkan dengan sebenarnya, bahwa:</p>
                <table class="ms-5">
                    <?php foreach ($data as $d) { ?>
                        <tr>
                            <td>Nama</td>
                            <td>: </td>
                            <td><?= $d -> user_nama ?></td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>: </td>
                            <td><?= $d -> user_nik ?></td>
                        </tr>
                        <tr>
                            <td>Tempat/Tanggal Lahir</td>
                            <td>: </td>
                            <td><?= $d -> user_tempatlahir ?>, <?= $d -> user_ttl ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>: </td>
                            <td><?= $d -> user_jekel ?></td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>: </td>
                            <td><?= $d -> user_pekerjaan ?></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>: </td>
                            <td><?= $d->user_agama ?></td>
                        </tr>
                        <tr>
                            <td>RT/RW</td>
                            <td>: </td>
                            <td><?= $d -> user_rt ?>/<?= $d -> user_rw ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: </td>
                            <td><?= $d -> user_alamat ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <br>
                <p>Demikian ini menerangkan bahwa benar yang bersangkutan berdomisili
                    di Desa Gentan, Kecamatan Bulu, Kabupaten Sukoharjo:</p>
                <table class="ms-5">
                    <?php foreach ($data as $d) { ?>
                        <p class="fw-bold">Surat keterangan ini dibuat untuk <span><?= $d->keperluan ?></span></p>
                    <?php } ?>
                </table>
                <br>
                <p style="text-align: justify;">
                    Demikian surat keterangan ini dibuat, atas perhatian dan
                    kerjasamanya kami ucapkan terima kasih.
                </p>
                <br>
                <div class="kades float-end">
                    <span class="mb-n2">Sukoharjo, <?= date('d M Y') ?></span>
                    <p>KEPALA DESA GENTAN</p>
                    <img src="<?= base_url('./assets/ttd/ttd.png') ?>" class="ttd-kades" width="80%" style="margin-top: -25px; z-index:9999;">
                    <p class="fw-bold text-center" style="margin-top: -30px; z-index:2;">HARJANTO, S.E.</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
    </div>
    <script src="<?= base_url(); ?>./assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>