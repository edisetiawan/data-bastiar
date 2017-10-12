<div class="fullwidth-box">
				<div class="container">
					<!-- Product Box -->
					<div class="product-box">
						<h3>Daftar Produk Kami</h3>
						<div id="carousel-example-generic4" class="carousel slide" data-ride="carousel">

							<!-- Wrapper for slides -->
							<div class="carousel-inner">

								<div class="item active">
										<?php 
											$queryberita = mysql_query("SELECT * FROM berita order by idberita");
											while ($row = mysql_fetch_array($queryberita)) {
										 ?>
										<div class="col-md-3">
											<div class="product-post">
												<div class="product-post-gal">
													<img alt="" src="upload/image5.jpg">
													<span class="price">$99.00</span>
												</div>
												<div class="product-post-content">
													<h5>Product Name Here</h5>
													<ul class="product-list">
														<li><a class="like" href="#"><i class="fa fa-heart"></i></a></li>
														<li><a class="shop" href="#"><i class="fa fa-shopping-cart"></i></a></li>
														<li><a class="rev" href="#"><i class="fa fa-exchange"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<?php } ?>
										
								</div>
							</div>
							<a class="left carousel-control" href="#carousel-example-generic4" data-slide="prev"></a>
							<a class="right carousel-control" href="#carousel-example-generic4" data-slide="next"></a>
						</div>
					</div>
				</div>
			</div>
			</div>