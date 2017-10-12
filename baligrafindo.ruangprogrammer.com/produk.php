<div class="portfolio-box with-3-col">
				<div class="container">
					<ul class="filter">
						<li><a href="#" class="active" data-filter="*"><i class="fa fa-th"></i>- Produk Kami - </a></li>
					</ul>

					<div class="portfolio-container">
						<?php 
							$queryproduk = mysql_query("SELECT * FROM produk p join kategori_produk k on p.idkategori_produk = k.idkategori_produk
							 order by p.idproduk DESC");
							while ($rowproduk = mysql_fetch_array($queryproduk)) {
								$gambarproduk = $rowproduk['gambar'];
						 ?>
						 <div class="work-post  brochures">
							<div class="work-post-gal">
								<img alt="" src="gambar/<?php echo $gambarproduk; ?>" style="width: 200px;">
								<div class="hover-box">
									<a class="zoom" href="gambar/<?php echo $gambarproduk; ?>"><i class="fa fa-plus-circle"></i></a>
									<a class="page" href="index.php?hal=detail_produk&id=<?php echo $rowproduk['idproduk']; ?>"><i class="fa fa-arrow-circle-right"></i></a>
								</div>
							</div>
							<div class="work-post-content">
								<h2>Nama Foto : <?php echo $rowproduk['nama_produk']; ?></h2>
								<span><b>Album Foto : <?php echo $rowproduk['kategori']; ?></b></span>
							</div>
						</div>
						<?php } ?>
					</div>
			</div>
				</div>
			</div>