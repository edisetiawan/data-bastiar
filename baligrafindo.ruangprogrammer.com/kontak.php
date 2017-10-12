<?php 
		if (isset($_POST['kirimtestimoni'])) {
			$simpantestimoni  = mysql_query("INSERT INTO testimoni (tgl_posting,namapengunjung,email,pesan) VALUES (NOW(),'$_POST[namapengunjung]','$_POST[email]','$_POST[pesan]')");
			if ($simpantestimoni) {
				 echo "<script> alert('Terimakasih Pesan Berhasil Dikirim'); location.href='index.php?hal=kontak' </script>";exit;
			}else{
				 echo "<script> alert('Maaf Testimoni Gagal Dikirim'); location.href='index.php?hal=kontak' </script>";exit;
			}
		}
 ?>
<div class="content">
	<!-- Page Banner -->
			<div class="page-banner">
				<div class="container">
					<h2>Kontak Kami</h2>
					<ul class="page-tree">
						<li><a href="index.php">Home</a></li>
						<li><a href="index.php?hal=kontak">Kontak</a></li>
					</ul>				
				</div>
			</div>
			<!-- contact box -->
			<div class="contact-box" style="margin-top:30px;">
				<div class="container">
					<div class="row">

						<div class="col-md-3">
							<div class="contact-information">
								<h3>Kontak Kami</h3>
								<ul class="contact-information-list">
									<li><span><i class="fa fa-home"></i>Jl.Noja No.100 Denpasar-Bali</span></li>
									<li><span><i class="fa fa-phone"></i>Telp.(0361)229114,780358</span></li>
									<li><span><i class="fa fa-fax"></i>Fax.(0361)229114</span></li>
									<li><i class="fa fa-envelope"></i>mediagrafindobali@gmail.com</li>
								</ul>
							</div>
						</div>

						<div class="col-md-3">
							<div class="contact-information">
								<h3>Tentang Kami</h3>
								<p>Perusahaan Swasta bergerak pada bidang percetakan media dan merupakan perusahaan swasta cabang dari jakarta yang diempakan di Bali, indonesia </p>
								<p class="work-time"><span>Senin - Jum'at</span> : 08.00 - 18.00</p>
								<p class="work-time"><span>Sabtu - Minggu </span> : 09.00 - 17.00</p>
							</div>
						</div>

						<div class="col-md-6">
							<h3>Silahkan Tulis Testimoni / Buku Tamu Kami</h3>
							<form id="contact-form" method="POST">

								<div class="text-input">
									<div class="float-input">
										<input name="namapengunjung" type="text" placeholder="Nama Lengkap">
										<span><i class="fa fa-user"></i></span>
									</div>

									<div class="float-input2">
										<input name="email" id="mail" type="text" placeholder="email">
										<span><i class="fa fa-envelope"></i></span>
									</div>
								</div>

								<div class="textarea-input">
									<textarea name="pesan" placeholder="Tulis Pesan"></textarea>
									<span><i class="fa fa-comment"></i></span>
								</div>

								<div id="msg" class="message"></div>
								<button type="submit" class="btn btn-info btn-flat btn-sm" name="kirimtestimoni"><span class="fa fa-envelope"></span> KIRIM TESTIMONI</button>

							</form>
						</div>

					</div>
				</div>
			</div>
</div>