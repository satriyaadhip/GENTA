            <div class="main-content container-fluid" style="max-width: 80vmax;">
            	<div class="page-title">
            		<h3>Dashboard</h3>
            	</div>
            	<section class="section">
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
            								<!-- <div class="chart-wrapper">
                                            <canvas id="canvas1" style="height:100px !important"></canvas>
                                        </div> -->
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
            								<!-- <div class="chart-wrapper">
                                            <canvas id="canvas2" style="height:100px !important"></canvas>
                                        </div> -->
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
            								<!-- <div class="chart-wrapper">
                                            <canvas id="canvas1" style="height:100px !important"></canvas>
                                        </div> -->
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
            								<!-- <div class="chart-wrapper">
                                            <canvas id="canvas3" style="height:100px !important"></canvas>
                                        </div> -->
            							</div>
            						</div>
            					</div>
            				</div>
            			</div>
            			<!-- <div class="row mb-4">
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
            											<h5 class="text-dark font-bold text-center">Menunggu Verifikasi</h5>
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
            			</div> -->
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
            			<div class="row mb-4">
            				<div class="col-lg-12">
            					<div class="card">
            						<div class="card-body bg-success">
            							<h4 class="font-bold text-white">SELAMAT DATANG DI APLIKASI PELAYANAN SURAT</h4>
            							<h5 class="font-bold text-white">DESA GENTAN - SUKOHARJO</h5>
            						</div>
            					</div>
            					<div class="card">
									<div class="col-12 row p-3">
										<div class="col-9" style="background-color: blue;">
											<p>addaa</p>
										</div>

										<div class="col-3" style="background-color: blue;">
											<p>ada</p>
										</div>
									</div>
            						<!-- <div class="card-body bg-primary">
            							<h2 class="text-center font-bold text-dark">PROSEDUR PERMOHONAN SURAT</h1>
            								<hr>
            								<div class="row">
            									<div class="col-sm-6">
            										<div class="card">
            											<div class="card-body">
            												<h4 class="card-title text-dark">1. Mengajukan Permohonan Surat</h4>
            												<p class="card-text text-dark ml-3">Silahkan memilih jenis surat dan request permohonan surat pada menu pelayanan surat, serta lengkapi seluruh data yang dibutuhkan untuk request surat, kemudian di kirim dan menunggu persetujuan lurah.</p>
            											</div>
            										</div>
            										<div class="card">
            											<div class="card-body">
            												<h4 class="card-title text-dark">2. Cek Status Permohonan</h4>
            												<p class="card-text text-dark ml-3">Silahkan cek status permohonan pada menu Surat dan pilih jenis Suratnya.</p>
            											</div>
            										</div>
            									</div>
            									<div class="col-sm-6">
            										<div class="card">
            											<div class="card-body">
            												<h4 class="card-title text-dark">3. Permohonan Disetujui</h4>
            												<p class="card-text text-dark ml-3">Silahkan cetak surat pada menu Surat dan pilih Request Surat yang telah di setujui, kemudia pilih Cetak.</p>
            											</div>
            										</div>
            										<div class="card">
            											<div class="card-body">
            												<h4 class="card-title text-dark">4. Permohonan Ditolak</h4>
            												<p class="card-text text-dark ml-3">Silahkan cetak surat pada menu Surat dan cek komentar untuk cek data yang tidak lengkap, kemudian lakukan request surat kembali.</p>
            											</div>
            										</div>
            									</div>
            								</div>
            						</div> -->
            					</div>
            				</div>
            			</div>
            		<?php } ?>
            	</section>
            </div>
