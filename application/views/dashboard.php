            <div class="main-content container-fluid">
                <section class="section col-lg-10 col-md-12 mx-auto">
                    <?php if ($this->session->userdata('role_id') == 1) { ?>
                        <div class="row mb-2">
                            <div class="col-12 col-md-3 col-sm-6">
                                <div class="card bg-warning" style="border-radius: 10px;">
                                    <div class="card-body p-0">
                                        <div class="d-flex flex-column">
                                            <div class='px-3 py-3 d-flex justify-content-between'>
                                                <h1 class='text-dark font-bold'><?= $mvskd['jumlah'] + $mvsk['jumlah'] + $mvskk['jumlah'] + $mvskp['jumlah'] + $mvsktm['jumlah'] + $mvsku['jumlah']; ?></h1>
                                            </div>
                                            <div class="card-right d-flex align-items-center p-3">
                                                <p class="text-dark">Menunggu<br>Verifikasi</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 col-sm-6">
                                <div class="card bg-success" style="border-radius: 10px;">
                                    <div class="card-body p-0">
                                        <div class="d-flex flex-column">
                                            <div class='px-3 py-3 d-flex justify-content-between'>
                                                <h1 class='text-dark font-bold'><?= $pdskd['jumlah'] + $pdsk['jumlah'] + $pdskk['jumlah'] + $pdskp['jumlah'] + $pdsktm['jumlah'] + $pdsku['jumlah']; ?></h1>
                                            </div>
                                            <div class="card-right d-flex align-items-center p-3">
                                                <p class="text-dark"><span>Permohonan<br>Diterima</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 col-sm-6">
                                <div class="card bg-danger" style="border-radius: 10px;">
                                    <div class="card-body p-0">
                                        <div class="d-flex flex-column">
                                            <div class='px-3 py-3 d-flex justify-content-between'>
                                                <h1 class='text-dark font-bold'><?= $ptskd['jumlah'] + $ptsk['jumlah'] + $ptskk['jumlah'] + $ptskp['jumlah'] + $ptsktm['jumlah'] + $ptsku['jumlah']; ?></h1>
                                            </div>
                                            <div class="card-right d-flex align-items-center p-3">
                                                <p class="text-dark">Permohonan<br>Ditolak</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 col-sm-6">
                                <div class="card bg-info" style="border-radius: 10px;">
                                    <div class="card-body p-0">
                                        <div class="d-flex flex-column">
                                            <div class='px-3 py-3 d-flex justify-content-between'>
                                                <h1 class='text-dark font-bold'><?= $psd + $sk + $kk + $skp + $sktm + $sku?></h1>
                                            </div>
                                            <div class="card-right d-flex align-items-center p-3">
                                                <p class="text-dark"><span>Total<br>Permohonan</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } else if ($this->session->userdata('role_id') == 2) { ?>
                        <div class="row mb-4">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body bg-success">
                                        <h4 class="font-bold text-white">SELAMAT DATANG DI APLIKASI PELAYANAN SURAT</h4>
                                        <h5 class="font-bold text-white">GENTAN - SUKOHARJO</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header bg-info">
                                        <h5 class="text-dark text-center"><b>DATA PERMOHONAN SURAT</b></h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row p-2">
                                            <div class="col-md-4">
                                                <div class="card">
                                                    <div class="card-header bg-warning">
                                                        <h5 class="text-dark font-bold text-center">MENUNGGU VERIFIKASI</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <h1 class="text-center p-3 text-dark font-bold"><?= $mvskd['jumlah'] + $mvsk['jumlah'] + $mvskk['jumlah'] + $mvskp['jumlah'] + $mvsktm['jumlah'] + $mvsku['jumlah']; ?></h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card">
                                                    <div class="card-header bg-success">
                                                        <h5 class="text-dark font-bold text-center">PERMOHONAN DITERIMA</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <h1 class="text-center p-3 text-dark font-bold"><?= $pdskd['jumlah'] + $pdsk['jumlah'] + $pdskk['jumlah'] + $pdskp['jumlah'] + $pdsktm['jumlah'] + $pdsku['jumlah']; ?></h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card">
                                                    <div class="card-header bg-danger">
                                                        <h5 class="text-dark font-bold text-center">PERMOHONAN DITOLAK</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <h1 class="text-center p-3 text-dark font-bold"><?= $ptskd['jumlah'] + $ptsk['jumlah'] + $ptskk['jumlah'] + $ptskp['jumlah'] + $ptsktm['jumlah'] + $ptsku['jumlah']; ?></h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } else if ($this->session->userdata('role_id') == 3) { ?>
						<div class="row">
							
						</div>
                        <div class="col-12 p-4">
							<div class="row">
								<div id="carouselExampleIndicators" class="carousel slide col-12 mx-auto" style="max-width: 1200px; max-height: 700px; overflow: hidden;">
									<ol class="carousel-indicators">
										<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">Pizza</li>
										<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
									</ol>
							<div class="carousel-inner shadow-none">
								<div class="carousel-item active">
								<img class="d-block w-100" src="./assets/images/background/carousel-1.jpg" alt="First slide" style="object-fit: cover;">
									<div class="carousel-caption d-none d-md-block">
										<h5>Selamat datang di GENTA</h5>
										<p>Aplikasi layanan surat Desa Gentan, Kecamatan Bulu</p>
									</div>
								</div>
								<div class="carousel-item">
								<img class="d-block w-100" src="./assets/images/background/carousel-2.jpg" alt="Second slide" style="object-fit: cover;">
								<div class="carousel-caption d-none d-md-block">
										<h5>Selamat datang di GENTA</h5>
										<p>Aplikasi layanan surat Desa Gentan, Kecamatan Bulu</p>
									</div>
								</div>
								<div class="carousel-item">
								<img class="d-block w-100" src="./assets/images/background/carousel-3.jpg" alt="Third slide" style="object-fit: cover;">
								<div class="carousel-caption d-none d-md-block">
										<h5>Selamat datang di GENTA</h5>
										<p>Aplikasi layanan surat Desa Gentan, Kecamatan Bulu</p>
									</div>
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
							</div>
                            <div class="row mx-1 mt-4">
                                <div class="col-sm-12 col-lg-8 p-4 card shadow-none mx-auto" style="border-radius: 18px">
                                    <div class="page-title">
                                        <h5>
                                            <strong>Pilih salah satu layanan surat berikut dibawah ini.</strong>
                                        </h5>
                                    </div>
                                    <div class="row d-flex">
                                        <div class="col-lg-3 col-md-6 col-sm-3">
                                            <a href="<?= base_url('skd/buat-surat') ?>">
                                                <div class="mb-2" style="border-radius: 15px; background-image: linear-gradient(to bottom right, #ef8c50, #ef6445);" role="alert">
                                                    <div class="alert-text mt-2 px-4 py-3">
                                                        <img src="<?= base_url() ?>./assets/icons/logo_pindahdom.png" class="my-4" style="max-width: 64px; margin-top: 100px" />
                                                        <h6 class="text-white">Surat Keterangan<br />Pindah</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-3">
                                            <a href="<?= base_url('skp/buat-surat') ?>">
                                                <div class="mb-2" style="border-radius: 15px; background-image: linear-gradient(to bottom right, #50d2ef, #45b2ef);" role="alert">
                                                    <div class="alert-text mt-2 px-4 py-3">
                                                        <img src="<?= base_url() ?>./assets/icons/logo_pengantar.png" class="my-4" style="max-width: 64px; margin-top: 100px" />
                                                        <h6 class="text-white">Surat Keterangan<br />Pengantar</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-3">
                                            <a href="<?= base_url('spak/buat-surat') ?>">
                                                <div class="mb-2" style="border-radius: 15px; background-image: linear-gradient(to bottom right, #40dec2, #00a6b4);" role="alert">
                                                    <div class="alert-text mt-2 px-4 py-3">
                                                        <img src="<?= base_url() ?>./assets/icons/logo_aktakel.png" class="my-4" style="max-width: 64px; margin-top: 100px" />
                                                        <h6 class="text-white">Surat Keterangan<br />Akta Kelahiran</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-3">
                                            <a href="<?= base_url('skk/buat-surat') ?>">
                                                <div class="mb-2" style="border-radius: 15px; background-image: linear-gradient(to bottom right, #59d8c1, #2d8e7c);" role="alert">
                                                    <div class="alert-text mt-2 px-4 py-3">
                                                        <img src="<?= base_url() ?>./assets/icons/logo_kematian.png" class="my-4" style="max-width: 64px; margin-top: 100px" />
                                                        <h6 class="text-white">Surat Keterangan<br />Kematian</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-3 p-4 card shadow-none mx-auto" style="border-radius: 18px">
                                    <div class="page-title">
                                        <h5>
                                            <strong>Butuh bantuan?</strong>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </section>
            </div>
