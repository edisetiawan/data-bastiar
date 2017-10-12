<div class="content">
		<div class="page-banner">
				<div class="container">
					<h2>Produk Terbaru</h2>
					<ul class="page-tree">
						<li><a href="index.php">Home</a></li>
						<li><a href="index.php?hal=daftarproduk">Produk</a></li>
					</ul>				
				</div>
			</div>
			<div class="blog-box with-sidebar">
				<div class="container">
					<div class="row">
						<div class="col-md-12 blog-side">
							<div class="row">
							<?php 
								$querydaftarproduk = mysql_query("SELECT * FROM produk p join kategori_produk k on p.idkategori_produk = k.idkategori_produk order by p.idproduk DESC");
								while ($rowproduk  = mysql_fetch_array($querydaftarproduk)) {
									$gambar  = $rowproduk['gambar'];
							 ?>
								<div class="col-md-4">
									<div class="item news-item">
										<img src="gambar/<?php echo $gambar; ?>" width="300" height="300">
										<h2><a href="index.php?hal=detail_produk&id=<?php echo $rowproduk['idproduk']; ?>"><?php echo $rowproduk['nama_produk']; ?></a></h2>
										<p>
											<?php $kalimat=strtok(nl2br($rowproduk['deskripsi_produk'])," ");
		                                    for ($i=1;$i<=50;$i++){
		                                        echo($kalimat);
		                                        echo(" ");
		                                        $kalimat=strtok(" ");
		                                    }
		                                    echo '.....'; ?>
		                                	<a href="index.php?hal=detail_produk&id=<?php echo $rowproduk['idproduk']; ?>" class="btn btn-sm btn-flat btn-info"><span class="fa fa-eye"></span> Baca Selengkapnya</a></p>
										<ul class="blog-tags">
											<li><a class="autor" href="#"><i class="fa fa-user"></i> Oleh : Admin</a></li>
											<li><a class="autor" href="#"><i class="fa fa-tags"></i> Kategori : <?php echo $rowproduk['kategori']; ?></a></li>
											<li><a class="date" href="#"><i class="fa fa-clock-o"></i> <?php echo $rowproduk['tgl_posting']; ?></a></li>
										</ul>
									</div>
								</div>
								<?php } ?>
							</div>
							<ul class="pagination-list">
								<li><a class="active" href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
							</ul>
						</div>
					</div>
											
				</div>
			</div>
	</div>
