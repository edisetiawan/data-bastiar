<div class="content">
		<div class="page-banner">
				<div class="container">
					<h2>Berita Terbaru</h2>
					<ul class="page-tree">
						<li><a href="index.php">Home</a></li>
						<li><a href="index.php?hal=berita">Berita</a></li>
					</ul>				
				</div>
			</div>
			<div class="blog-box with-sidebar">
				<div class="container">
					<div class="row">
						<div class="col-md-12 blog-side">
							<div class="row">
							<?php 
								$queryberita = mysql_query("SELECT * FROM berita order by idberita DESC");
								while ($rowberita  = mysql_fetch_array($queryberita)) {
									$gambar  = $rowberita['gambar'];
							 ?>
								<div class="col-md-4">
									<div class="item news-item">
										<!-- <img alt="" src="upload/blog1.jpg"> 350 219-->
										<img src="gambar/<?php echo $gambar; ?>">
										<h2><a href="index.php?hal=detail_berita&id=<?php echo $rowberita['idberita']; ?>"><?php echo $rowberita['judul_berita']; ?></a></h2>
										<p>
											<?php $kalimat=strtok(nl2br($rowberita['deskripsi'])," ");
		                                    for ($i=1;$i<=50;$i++){
		                                        echo($kalimat);
		                                        echo(" ");
		                                        $kalimat=strtok(" ");
		                                    }
		                                    echo '.....'; ?>
		                                	<a href="index.php?hal=detail_berita&id=<?php echo $rowberita['idberita']; ?>" class="btn btn-sm btn-flat btn-info"><span class="fa fa-eye"></span> Baca Selengkapnya</a></p>
										<ul class="blog-tags">
											<li><a class="autor" href="#"><i class="fa fa-user"></i> Oleh : Admin</a></li>
											<li><a class="date" href="#"><i class="fa fa-clock-o"></i> <?php echo $rowberita['tgl_posting']; ?></a></li>
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
			<div class="container">
				<div class="panel panel-primary">
				<div class="panel-body">
					<?php include 'produk.php'; ?>
				</div>
			</div>
			</div>
	</div>
