<div class="fullwidth-box">
				<div class="container">
					<div class="latest-post">
						<h3>BERITA TERBARU</h3>
						<div id="carousel-example-generic3" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								 <div class="item active">
									<div class="row">
								<?php 
									$queryberita = mysql_query("SELECT * FROM berita order by idberita DESC limit 6");
									while ($rowberita = mysql_fetch_array($queryberita)) {
										$gambar  = $rowberita['gambar'];
								 ?> 
										<div class="col-md-4">
											<div class="item news-item">
												<img alt="" src="gambar/<?php echo $gambar; ?>">
												<h2><a href="index.php?hal=detail_berita&id=<?php echo $rowberita['idberita']; ?>"><?php echo $rowberita['judul_berita']; ?></a></h2>
												<p>
													<?php $kalimat=strtok(nl2br($rowberita['deskripsi'])," ");
				                                    for ($i=1;$i<=50;$i++){
				                                        echo($kalimat);
				                                        echo(" ");
				                                        $kalimat=strtok(" ");
				                                    }
				                                    echo '.....'; ?>
				                                    <a href="index.php?hal=detail_berita&id=<?php echo $rowberita['idberita']; ?>" class="btn btn-sm btn-flat btn-info"><span class="fa fa-eye"></span> Baca Selengkapnya</a>
												</p>
												<ul class="blog-tags">
													<li><a class="autor" href="#"><i class="fa fa-user"></i> Oleh : ADMIN</a></li>
													<li><a class="date" href="#"><i class="fa fa-clock-o"></i> <?php echo $rowberita['tgl_posting']; ?></a></li>
												</ul>
											</div>
										</div>
												<?php } ?>			
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>