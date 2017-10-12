<div id="content">
			<!-- Page Banner -->
			<div class="page-banner">
				<div class="container">
					<h2>Portfolio</h2>
					<ul class="page-tree">
						<li><a href="#">Home</a></li>
						<li><a href="#">Portfolio</a></li>
					</ul>				
				</div>
			</div>

			<div class="portfolio-box with-3-col">
				<div class="container">
					<ul class="filter">
						<li><a href="#" class="active" data-filter="*"><i class="fa fa-th"></i>Galeri Foto Perusahaan</a></li>
					</ul>

					<div class="portfolio-container">
						<?php 
							$queryalbum = mysql_query("SELECT * FROM galeri g join  album a on g.idalbum  = a.idalbum group by a.idalbum order by a.idalbum");
							while ($row = mysql_fetch_array($queryalbum)) {
								$gambar = $row['gambar'];
						 ?>
						 <div class="work-post  brochures">
							<div class="work-post-gal">
								<img alt="" src="gambar/<?php echo $gambar; ?>">
								<div class="hover-box">
									<a class="zoom" href="gambar/<?php echo $gambar; ?>"><i class="fa fa-plus-circle"></i></a>
									<a class="page" href="index.php?hal=daftargaleriperalbum&id=<?php echo $row['idalbum']; ?>"><i class="fa fa-arrow-circle-right"></i></a>
								</div>
							</div>
							<div class="work-post-content">
								<h2>Nama Foto : <?php echo $row['judul_foto']; ?></h2>
								<span><b>Album Foto : <?php echo $row['album']; ?></b></span>
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