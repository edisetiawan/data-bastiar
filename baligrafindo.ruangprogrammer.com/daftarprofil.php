<div id="content">
	<div class="fullwidth-box">
		<div class="container">
			<div class="services-box">
				<div class="row">
					<?php 
						$queryprofil = mysql_query("SELECT * FROM profil order by idprofil ASC ");
						while ($rowprofil = mysql_fetch_array($queryprofil)) {		
					 ?>
						<div class="col-md-3">
							<div class="services-post">
								<a class="services-icon1" href="index.php?hal=detail_profil&id=<?php echo $rowprofil['idprofil']; ?>"><i class="fa fa-sitemap"></i></a>
								<div class="services-post-content">
									<h4><a  href="index.php?hal=detail_profil&id=<?php echo $rowprofil['idprofil']; ?>"> <?php echo $rowprofil['judul_profil']; ?></a></h4>
									<p><?php echo $rowprofil['deskripsi']; ?></p>
								</div>
							</div>
						</div>
						<?php } ?>	
				</div>
			</div>
			