<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>./assets/bootstrap/css/bootstrap.min.css">
    <style>
        body {
            font-size: 14px;
            line-height: 1.5;
        }

        .container {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .btn-group {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .section-title {
            font-weight: bold;
            margin-top: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
        }
    </style>
</head>

<body>
    <div class="main-content container-fluid">
        <div class="page-title">
            <h6><strong>Surat Keterangan Kematian</strong></h6>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="btn-group">
                        <a href="<?= base_url('list-surat') ?>" class="btn btn-warning btn-sm mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                            </svg> Kembali
                        </a>
                    </div>
                    <div class="card ml-5 mr-5">
                        <div class="card-body">
                            <form action="<?= base_url('skk/proses') ?>" method="post" enctype="multipart/form-data">
                                <p class="text-center">Nama Pelapor</p>
                                <div class="form-group">
                                    <label for="user_nama">Nama</label>
                                    <input type="text" name="user_nama" id="user_nama" class="form-control"
                                        value="<?= set_value('user_nama') ?>" required />
                                </div>
                                <div class="form-group">
                                    <label for="user_nik">NIK</label>
                                    <input type="number" name="user_nik" id="user_nik" class="form-control"
                                        value="<?= set_value('user_nik') ?>" required />
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="user_tempatlahir">Tempat Lahir</label>
                                            <input type="text" name="user_tempatlahir" id="user_tempatlahir"
                                                class="form-control" value="<?= set_value('user_tempatlahir') ?>"
                                                required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="user_ttl">Tanggal Lahir</label>
                                            <input type="date" name="user_ttl" id="user_ttl" class="form-control"
                                                value="<?= set_value('user_ttl') ?>" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="user_jekel">Jenis Kelamin</label>
                                    <select name="user_jekel" id="user_jekel" class="form-control" required>
                                        <option selected disabled>Pilih Jenis Kelamin</option>
                                        <option value="Laki - Laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="user_agama">Agama</label>
                                    <select name="user_agama" id="user_agama" class="form-control" required>
                                        <option selected disabled>Pilih agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="user_pekerjaan">Pekerjaan</label>
                                    <input type="text" name="user_pekerjaan" id="user_pekerjaan" class="form-control"
                                        value="<?= set_value('user_pekerjaan') ?>" required />
                                </div>

                                <div class="form-group">
                                    <label for="user_alamat">Alamat Rumah</label>
                                    <textarea name="user_alamat" id="user_alamat" cols="30" rows="5" class="form-control"
                                        required><?= set_value('user_alamat') ?></textarea>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="user_rt">RT</label>
                                            <input type="number" name="user_rt" id="user_rt" class="form-control"
                                                value="<?= set_value('user_rt') ?>" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="user_rw">RW</label>
                                            <input type="number" name="user_rw" id="user_rw" class="form-control"
                                                value="<?= set_value('user_rw') ?>" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="hubungan">Hubungan dengan yang meninggal
                                        <small class="text-danger">(*Harus dengan ahli waris.)</small></label>
                                    <input type="text" name="hubungan" id="hubungan" class="form-control"
                                        value="<?= set_value('hubungan') ?>" required>
                                </div>

                                <p class="text-center">Biodata yang Meninggal</p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="nama_alm">Nama Almarhum/Almarhumah</label>
                                            <input type="text" name="nama_alm" id="nama_alm" class="form-control"
                                                value="<?= set_value('nama_alm') ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="bin">Bin/Binti</label>
                                            <input type="text" name="bin" id="bin" class="form-control"
                                                value="<?= set_value('bin') ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="nik_a">NIK</label>
                                            <input type="number" name="nik_a" id="nik_a" class="form-control"
                                                value="<?= set_value('nik_a') ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="jekel_a">Jenis Kelamin</label>
                                            <select name="jekel_a" id="jekel_a" class="form-control" required>
                                                <option selected disabled>Pilih Jenis Kelamin</option>
                                                <option value="Laki - Laki">Laki - Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tempat_lahir_a">Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir_a" id="tempat_lahir_a"
                                                class="form-control" value="<?= set_value('tempat_lahir_a') ?>"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tanggal_lahir_a">Tanggal Lahir</label>
                                            <input type="date" name="tanggal_lahir_a" id="tanggal_lahir_a"
                                                class="form-control" value="<?= set_value('tanggal_lahir_a') ?>"
                                                required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="alamat_a">Alamat</label>
                                    <textarea name="alamat_a" id="alamat_a" cols="30" rows="5" class="form-control"
                                        required><?= set_value('alamat_a') ?></textarea>
                                </div>

                                <p class="text-center">Telah Meninggal Dunia Pada:</p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="hari">Hari</label>
                                            <select name="hari" id="hari" class="form-control" required>
                                                <option selected disabled>Pilih Hari</option>
                                                <option value="Senin">Senin</option>
                                                <option value="Selasa">Selasa</option>
                                                <option value="Rabu">Rabu</option>
                                                <option value="Kamis">Kamis</option>
                                                <option value="Jumat">Jumat</option>
                                                <option value="Sabtu">Sabtu</option>
                                                <option value="Minggu">Minggu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tanggal_meninggal">Tanggal Meninggal</label>
                                            <input type="date" name="tanggal_meninggal" id="tanggal_meninggal"
                                                class="form-control" value="<?= set_value('tanggal_meninggal') ?>"
                                                required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="keperluan">Keperluan Surat</label>
                                    <textarea name="keperluan" id="keperluan" cols="30" rows="5" class="form-control"
                                        placeholder="Masukkan keperluan permintaan surat"
                                        required><?= set_value('keperluan') ?></textarea>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-block btn-primary btn-sm" type="submit"><b>Kirim
                                            Permohonan Surat</b> <i class="bi bi-send-fill" required></i></button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <script src="<?= base_url(); ?>./assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
