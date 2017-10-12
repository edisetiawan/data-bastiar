<?php 
		$id = $_GET['id'];
		$row = mysql_fetch_array(mysql_query("SELECT * FROM profil where idprofil  = '".$id."' "));
		$gambar  = $row['gambar'];
 ?>
<div class="content">
			<div class="page-banner">
				<div class="container">
					<h2><?php echo $row['judul_profil']; ?></h2>
					<ul class="page-tree">
						<li><a href="#">Home</a></li>
						<li><a href="#">Profil</a></li>
					</ul>				
				</div>
			</div>
			<div class="blog-box with-sidebar">
				<div class="container">
					<div class="row">

						<div class="col-md-9 single-post">
							<div class="single-post-content">
								<center><img alt="" src="gambar/<?php echo $gambar; ?>" class="img-circle" style="width: 200px;"></center>
								<h2><?php echo $row['judul_profil']; ?></h2>
								<p><?php echo $row['deskripsi']; ?> </p>
							</div>
						</div>

						<div class="col-md-3 sidebar">
							<div class="sidebar-widgets">
								<div class="tabs-widget widget">
									<ul class="tab-links">
										<li><a class="tab-link1 active" href="#"> Profil Perusahaan</a></li>
									</ul>
									<div class="tab-box">
										<div class="tab-content active">
											<ul class="post-popular">
												<?php 
													$queryprofilterbaru = mysql_query("SELECT * FROM profil order by idprofil DESC");
													while ($row = mysql_fetch_array($queryprofilterbaru)) {
														$gambarprofil = $row['gambar'];
														
												 ?>
												<li>
													<img  src="gambar/<?php echo $gambarprofil; ?>">
													<h6><a href="index.php?hal=detail_profil&id=<?php echo $row['idprofil']; ?>"><?php echo $row['judul_profil']; ?></a></h6>
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
	</div>
<div class="container">
				<div class="panel panel-primary">
				<div class="panel-body">
					<?php include 'produk.php'; ?>
				</div>
			</div>
			</div>