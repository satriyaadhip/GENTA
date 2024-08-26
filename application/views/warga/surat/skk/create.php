            <div class="main-content container-fluid">
                <div class="page-title">
                    <h6><strong>Surat Keterangan Kematian</strong></h6>
                </div>
                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="btn-group">
                                <a href="<?= base_url('list-surat') ?>" class="btn btn-warning btn-sm mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                    </svg> Kembali</a>
                            </div>
                            <div class="card ml-5 mr-5">
                                <div class="card-body">
                                    <form action="<?= base_url('skk/proses') ?>" method="post" enctype="multipart/form-data">
                                        <p class="text-center">Nama Pelapor</p>
                                        <div class="form-group">
								<label for="">Nama</label>
								<input
									type="text"
									name="user_nama"
									class="form-control"
									value="<?= set_value('user_nama') ?>"
								/>
							</div>
							<div class="form-group">
								<label for="">NIK</label>
								<input
									type="number"
									name="user_nik"
									class="form-control"
									value="<?= set_value('user_nik') ?>"
								/>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="">Tempat Lahir</label>
										<input
											type="text"
											name="user_tempatlahir"
											class="form-control"
											value="<?= set_value('user_tempatlahir') ?>"
										/>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="">Tanggal Lahir</label>
										<input
											type="date"
											name="user_ttl"
											class="form-control"
											value="<?= set_value('user_ttl') ?>"
										/>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="">Jenis Kelamin</label>
								<select name="user_jekel" class="form-control" required>
									<option selected>Pilih Jenis Kelamin</option>
									<option value="Laki - Laki">Laki-laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>
							
							<div class="form-group">
								<label for="">Agama</label>
								<select name="user_agama" class="form-control" id="" required>
									<option selected disabled>Pilih agama</option>
									<option value="Islam">Islam</option>
									<option value="Kristen">Kristen</option>
									<option value="Hindu">Hindu</option>
									<option value="Buddha">Buddha</option>
								</select>
							</div>

							<div class="form-group">
								<label for="">Pekerjaan</label>
								<input
									type="text"
									name="user_pekerjaan"
									class="form-control"
									value="<?= set_value('user_pekerjaan') ?>"
								/>
							</div>

							<div class="form-group">
								<label for="">Alamat rumah</label>
								<textarea
									name="user_alamat"
									id=""
									cols="30"
									rows="5"
									class="form-control"
									required
								>
<?= set_value('user_alamat') ?></textarea
								>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="">RT</label>
										<input
											type="number"
											name="user_rt"
											class="form-control"
											value="<?= set_value('user_rt') ?>"
										/>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="">RW</label>
										<input
											type="number"
											name="user_rw"
											class="form-control"
											value="<?= set_value('user_rw') ?>"
										/>
									</div>
								</div>
							</div>
                                        <div class="form-group">
                                            <label for="">Hubungan dengan yang meninggal <small class="text-danger">(*Harus dengan ahli waris.)</small></label>
                                            <input type="text" name="hubungan" class="form-control" value="<?= set_value('hubungan') ?>" required>
                                        </div>
                                        <p class="text-center">Biodata yang meninggal</p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Nama Almarhum/Almarhumah</label>
                                                    <input type="text" name="nama_alm" class="form-control" value="<?= set_value('nama_alm') ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Bin/binti</label>
                                                    <input type="text" name="bin" class="form-control" value="<?= set_value('bin') ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Nik</label>
                                                    <input type="number" name="nik_a" class="form-control" value="<?= set_value('nik') ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Jenis Kelamin</label>
                                                    <select name="jekel_a" id="" class="form-control" required>
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
                                                    <label for="">Tempat Lahir</label>
                                                    <input type="text" name="tempat_lahir_a" class="form-control" value="<?= set_value('tempat_lahir') ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class=" form-group">
                                                    <label for="">Tanggal Lahir</label>
                                                    <input type="date" name="tanggal_lahir_a" class="form-control" value="<?= set_value('tanggal_lahir') ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class=" form-group">
                                                    <label for="">Kewarganegaraan</label>
                                                    <select name="kewarganegaraan_a" class="form-control" id="" required>
                                                        <option selected disabled>Pilih Kewarganegaraan</option>
                                                        <option value="WNI">WNI</option>
                                                        <option value="WNA">WNA</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Status Perkawinan</label>
                                                    <select name="status_perkawinan_a" id="" class="form-control" required>
                                                        <option selected disabled>Pilih Status Perkawinan</option>
                                                        <option value="Kawin">Kawin</option>
                                                        <option value="Belum Kawin">Belum Kawin</option>
                                                        <option value="Janda">Janda</option>
                                                        <option value="Duda">Duda</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Pekerjaan</label>
                                            <input type="text" name="pekerjaan_a" value="<?= set_value('pekerjaan') ?>" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Alamat</label>
                                            <textarea name="alamat_a" id="" cols="30" rows="5" class="form-control" required><?= set_value('alamat') ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Foto Kartu Keluarga</label>
                                            <input type="file" name="file_kk" value="<?= set_value('file_kk') ?>" class="form-control" id="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Foto KTP</label>
                                            <input type="file" name="file_ktp" value="<?= set_value('file_ktp') ?>" class="form-control" required>
                                        </div>
                                        <p class="text-center">Telah Meninggal Dunia Pada :</p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Hari</label>
                                                    <select name="hari" class="form-control" id="">
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
                                                    <label for="">Tanggal Meninggal</label>
                                                    <input type="date" name="tanggal_meninggal" class="form-control" value="<?= set_value('tanggal_meninggal') ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Jam Meninggal</label>
                                                    <input step="1" type="time" name="jam_meninggal" class="form-control" value="<?= set_value('jam_meninggal') ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Tempat Meninggal</label>
                                                    <input type="text" name="tempat_meninggal" placeholder="Contoh : RSUD Sukoharjo" class="form-control" value="<?= set_value('tempat_meninggal') ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Sebab Meninggal</label>
                                                    <input type="text" name="sebab_meninggal" placeholder="Contoh : Sakit" class="form-control" value="<?= set_value('sebab_meninggal') ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Tempat Pemakaman</label>
                                                    <input type="text" name="tempat_pemakaman" placeholder="Contoh : TPU Desa" class="form-control" value="<?= set_value('sebab_meninggal') ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Keperluan Surat</label>
                                            <textarea name="keperluan" class="form-control" id="" cols="30" rows="5" placeholder="Masukkan keperluan permintaan surat" required><?= set_value('keperluan') ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-block btn-primary btn-sm" type="submit"><b>Kirim Permohonan Surat</b> <i class="bi bi-send-fill" required></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>