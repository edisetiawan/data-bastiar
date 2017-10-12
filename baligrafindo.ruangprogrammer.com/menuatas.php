<header class="clearfix">
			<!-- Static navbar -->
			<div class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"><img alt="" src="gambar/logo.png" width="200"></a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="index.php">HOME</a></li>
							<li class="drop"><a href="#">PROFIL</a>
								<ul class="drop-down">
									<?php 
										$profil = mysql_query("SELECT * FROM profil order by idprofil ASC ");
										while ($rowprofil = mysql_fetch_array($profil)) {
									 ?>
									<li><a href="index.php?hal=detail_profil&id=<?php echo $rowprofil['idprofil']; ?>"><?php echo $rowprofil['judul_profil']; ?></a></li>
									<?php } ?>

								</ul>
							</li>
							<li><a href="index.php?hal=berita">BERITA</a></li>
							<li class="drop"><a href="index.php?hal=daftarproduk">PRODUK</a>
								<ul class="drop-down">
								<?php
										$kategori  = mysql_query("SELECT * FROM kategori_produk order by idkategori_produk ASC");
										while ($rowkategori = mysql_fetch_array($kategori)) {
								  ?>
									<li><a href="index.php?hal=detail_produk&id=<?php echo $rowkategori['idkategori_produk']; ?>"><?php echo $rowkategori['kategori']; ?></a></li>
								<?php  }?>
								</ul>
							</li>
							<li><a href="index.php?hal=daftargaleri">GALERI</a></li>
							<li><a href="index.php?hal=kontak">KONTAK</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>