<?php 
		$id = $_GET['id'];
		$row = mysql_fetch_array(mysql_query("SELECT * FROM berita where idberita  = '".$id."' "));
		$gambar  = $row['gambar'];
 ?>
<div class="content">
			<div class="page-banner">
				<div class="container">
					<h2><?php echo $row['judul_berita']; ?></h2>
					<ul class="page-tree">
						<li><a href="#">Home</a></li>
						<li><a href="#">Berita</a></li>
					</ul>				
				</div>
			</div>
			<div class="blog-box with-sidebar">
				<div class="container">
					<div class="row">

						<div class="col-md-9 single-post">
							<div class="single-post-content">
								<img alt="" src="gambar/<?php echo $gambar; ?>">
								<h2><?php echo $row['judul_berita']; ?></h2>
								<p><?php echo $row['deskripsi']; ?> </p>

								<ul class="blog-tags">
									<li><a class="autor" href="#"><i class="fa fa-user"></i> Oleh : Admin</a></li>
									<li><a class="date" href="#"><i class="fa fa-clock-o"></i> <?php echo $row['tgl_posting']; ?></a></li>
									
								</ul>
							</div>
						</div>

						<div class="col-md-3 sidebar">
							<div class="sidebar-widgets">
								<div class="tabs-widget widget">
									<ul class="tab-links">
										<li><a class="tab-link1 active" href="#"> Berita Terbaru</a></li>
									</ul>
									<div class="tab-box">
										<div class="tab-content active">
											<ul class="post-popular">
												<?php 
													$queryberitaterbaru = mysql_query("SELECT * FROM berita order by idberita DESC");
													while ($row = mysql_fetch_array($queryberitaterbaru)) {
														
												 ?>
												<li>
													<img  src="gambar/<?php echo $gambar; ?>">
													<h6><a href="index.php?hal=detail_berita&id=<?php echo $row['idberita']; ?>"><?php echo $row['judul_berita']; ?></a></h6>
												</li>
												<?php } ?> 
											</ul>
										</div>
									</div>
								</div>
							</div>
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