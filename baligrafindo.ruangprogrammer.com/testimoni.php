<div class="fullwidth-box testimonials-box">
				<div class="container">

					<h3><span>Testimoni Pengunjung</span></h3>
					 <i style="color: white;">Silahkan Tulis Testimoni Anda !</i> <a href="index.php?hal=kontak" class="btn btn-info btn-flat btn-sm"> <li class="fa fa-edit"></li> Tulis Testimoni </a>
				</div>
				<ul class="bxslider">
					<?php 
								$querytestimoni  = mysql_query("SELECT * FROM testimoni order by idtestimoni DESC");
								while ($row  = mysql_fetch_array($querytestimoni)) {
					?>
					<li>
						<div class="container">
							<img alt="" src="gambar/1.png">
							 <div class="message-content">
								<p>Nama :  <?php echo $row['namapengunjung']; ?> " <?php echo $row['pesan']; ?> "</p>
								<h6>Taggal Testimoni : <?php echo $row['tgl_posting']; ?> , Email : <?php echo $row['email']; ?> ||  </h6>
							
							</div>
						
						</div>
					</li>
					<?php } ?>
					
					
				</ul>
			</div>
