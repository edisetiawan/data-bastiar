<?php 
		$id = $_GET['id'];
		$row = mysql_fetch_array(mysql_query("SELECT * FROM produk p join kategori_produk k on p.idkategori_produk = k.idkategori_produk where p.idproduk = '".$id."' "));
		$gambar  = $row['gambar'];
 ?>
<div class="content">
			<div class="page-banner">
				<div class="container">
					<h2><?php echo $row['nama_produk']; ?></h2>
					<ul class="page-tree">
						<li><a href="#">Home</a></li>
						<li><a href="#">Daftar Produk</a></li>
						<li><a href="#"><?php echo $row['nama_produk']; ?></a></li>
					</ul>				
				</div>
			</div>
			<div class="blog-box with-sidebar">
				<div class="container">
					<div class="row">
					<img src="" height="">
						<div class="col-md-9 single-post">
							<div class="single-post-content">
								<center><img alt="" src="gambar/<?php echo $gambar; ?>" style="width: 200px;"></center>
								<h2><?php echo $row['nama_produk']; ?></h2>
								<p><?php echo $row['deskripsi_produk']; ?> </p>

								<ul class="blog-tags">
									<li><a class="autor" href="#"><i class="fa fa-user"></i> Oleh : Admin</a></li>
									<li><a class="autor" href="#"><i class="fa fa-tags"></i> Kategori : <?php echo $row['kategori']; ?></a></li>
									<li><a class="date" href="#"><i class="fa fa-clock-o"></i> <?php echo $row['tgl_posting']; ?></a></li>
									
								</ul>
							</div>
						</div>

						<div class="col-md-3 sidebar">
							<div class="sidebar-widgets">
								<div class="tabs-widget widget">
									<ul class="tab-links">
										<li><a class="tab-link1 active" href="#"> Kategori Produk</a></li>
									</ul>
									<div class="tab-box">
										<div class="tab-content active">
											<ul class="post-popular">
												<?php 
													$querykategoriproduk = mysql_query("SELECT * FROM kategori_produk order by idkategori_produk ASC");
													while ($rowkategori = mysql_fetch_array($querykategoriproduk)) {
														
												 ?>
												<li>
													<span class="fa fa-2x fa-tags"><a href="index.php?hal=daftarprodukperkategori&id=<?php echo $rowkategori['idkategori_produk']; ?>"><?php echo $rowkategori['kategori']; ?></a></span>
													<h6></h6>
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