<div class="row">

	<div id="sidebar" class="span3">

		<div class="well well-small">

			<ul class="nav nav-list">
		
				<?php foreach ($list->result_array() as $key => $value) { ?>

					<li>
						<a href="<?php echo base_url('toko/detaillist/').$value['idkategori']; ?>"><span class="icon-chevron-right"></span><?php echo $value['namakategori']; ?></a>
					</li>

				<?php } ?>

				<li style="border:0"> &nbsp;</li>
				<li> 
					<a class="totalInCart" href="<?php echo base_url('toko/keranjang'); ?>"><strong>Total <span class="badge badge-warning pull-right" style="line-height:18px;">Rp. <?php echo number_format($total,0,'.','.'); ?></span></strong></a>
				</li>

			</ul>

		</div>

		<div class="well well-small alert alert-warning cntr">
			<h2>50% Discount</h2>
				<p> 
					only valid for online order. <br><br><a class="defaultBtn" href="#">Click here </a>
				</p>
		</div>

		<div class="well well-small" >
			<a href="#"><img src="<?php echo base_url(); ?>assets/fronted/assets/img/paypal.jpg" alt="payment method paypal"></a>
		</div>
			
		<a class="shopBtn btn-block" href="#">Upcoming products <br><small>Click to view</small></a><br><br>

		<ul class="nav nav-list promowrapper">

			<?php 
		  		$record = $this->db->query('SELECT * FROM produk LIMIT 0,3'); 
		  		foreach ($record->result_array() as $key => $value) { 
		  	?>

				<li>
				 	<div class="thumbnail">
						<a class="zoomTool" href="<?php echo base_url('toko/detailproduk/').$value['idproduk']; ?>" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
						<img style="width: 210px;height: 270px;" src="<?php echo base_url(); ?>assets/gambar/produk/<?php echo $value['foto']; ?>" alt="bootstrap ecommerce templates">
							<div class="caption">
				  				<h4 style="padding: 0;"><a class="defaultBtn" href="<?php echo base_url('toko/detailproduk/').$value['idproduk']; ?>">VIEW</a><span class="pull-right" style="font-size: 16px;">Rp. <?php echo number_format($value['harga'],0,'.','.'); ?></span>
				  				</h4>
							</div>
					</div>
				</li>

				<li style="border:0"> &nbsp;</li>

			<?php } ?>

		</ul>

	</div>

	<div class="span9">

		<div class="well np">

			<div id="myCarousel" class="carousel slide homCar">

            	<div class="carousel-inner">

			  		<div class="item">
                		<img style="width:100%" src="<?php echo base_url(); ?>assets/fronted/assets/img/bootstrap_free-ecommerce.png" alt="bootstrap ecommerce templates">
                		<div class="carousel-caption">
                     		<h4>Bootstrap shopping cart</h4>
                      		<p><span>Very clean simple to use</span></p>
                		</div>
              		</div>
			  		<div class="item">
                		<img style="width:100%" src="<?php echo base_url(); ?>assets/fronted/assets/img/carousel1.png" alt="bootstrap ecommerce templates">
                		<div class="carousel-caption">
                      		<h4>Bootstrap Ecommerce template</h4>
                      		<p><span>Highly Google seo friendly</span></p>
                		</div>
              		</div>
			  		<div class="item active">
                		<img style="width:100%" src="<?php echo base_url(); ?>assets/fronted/assets/img/carousel3.png" alt="bootstrap ecommerce templates">
                		<div class="carousel-caption">
                      		<h4>Twitter Bootstrap cart</h4>
                      		<p><span>Very easy to integrate and expand.</span></p>
                		</div>
              		</div>
              		<div class="item">
                		<img style="width:100%" src="<?php echo base_url(); ?>assets/fronted/assets/img/bootstrap-templates.png" alt="bootstrap templates">
		                <div class="carousel-caption">
        	              	<h4>Bootstrap templates integration</h4>
                      		<p><span>Compitable to many more opensource cart</span></p>
                		</div>
              		</div>

            	</div>

            	<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            	<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>

          	</div>

        </div>

		<div class="well well-small">

			<h3><?php echo $title['judulhal'];?></h3>

			<hr class="soften"/>

				<div class="row-fluid">

					<div id="newProductCar" class="carousel slide">

            			<div class="carousel-inner">

							<div class="item active">
			  					<ul class="thumbnails">
									<li class="span3">
										<div class="thumbnail">
											<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
											<a href="#" class="tag"></a>
											<a href="product_details.html"><img src="<?php echo base_url(); ?>assets/fronted/assets/img/bootstrap-ring.png" alt="bootstrap-ring"></a>
										</div>
									</li>
									<li class="span3">
				  						<div class="thumbnail">
											<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
											<a href="#" class="tag"></a>
											<a  href="product_details.html"><img src="<?php echo base_url(); ?>assets/fronted/assets/img/i.jpg" alt=""></a>
				  						</div>
									</li>
									<li class="span3">
				  						<div class="thumbnail">
											<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
											<a href="#" class="tag"></a>
											<a  href="product_details.html"><img src="<?php echo base_url(); ?>assets/fronted/assets/img/g.jpg" alt=""></a>
				  						</div>
									</li>
									<li class="span3">
				  						<div class="thumbnail">
											<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
											<a  href="product_details.html"><img src="<?php echo base_url(); ?>assets/fronted/assets/img/s.png" alt=""></a>
				  						</div>
									</li>
			  					</ul>
			  				</div>

		   					<div class="item">
		 						 <ul class="thumbnails">
									<li class="span3">
			  							<div class="thumbnail">
											<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
											<a  href="product_details.html"><img src="<?php echo base_url(); ?>assets/fronted/assets/img/i.jpg" alt=""></a>
			  							</div>
									</li>
									<li class="span3">
			  							<div class="thumbnail">
											<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
											<a  href="product_details.html"><img src="<?php echo base_url(); ?>assets/fronted/assets/img/f.jpg" alt=""></a>
			  							</div>
									</li>
									<li class="span3">
			  							<div class="thumbnail">
											<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
											<a  href="product_details.html"><img src="<?php echo base_url(); ?>assets/fronted/assets/img/h.jpg" alt=""></a>
			  							</div>
									</li>
									<li class="span3">
			  							<div class="thumbnail">
											<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
											<a  href="product_details.html"><img src="<?php echo base_url(); ?>assets/fronted/assets/img/j.jpg" alt=""></a>
			  							</div>
									</li>
		  						</ul>
		  					</div>

		   				</div>

		  				<a class="left carousel-control" href="#newProductCar" data-slide="prev">&lsaquo;</a>
            			<a class="right carousel-control" href="#newProductCar" data-slide="next">&rsaquo;</a>

		  			</div>

		  		</div>

				<div class="row-fluid">

		  			<ul class="thumbnails">

		  				<?php 
							$record = $this->db->query('SELECT * FROM produk LIMIT 3,3'); 
		  					foreach ($record->result_array() as $key => $value) { 
		  				?>

						<li class="span4">
			  				<div class="thumbnail">
								<a class="zoomTool" href="<?php echo base_url('toko/detailproduk/').$value['idproduk']; ?>"" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
								<a  href="<?php echo base_url('toko/detailproduk/').$value['idproduk']; ?>""><img style="height: 200px;" src="<?php echo base_url(); ?>assets/gambar/produk/<?php echo $value['foto']; ?>" alt=""></a>
								<div class="caption">

				  					<h5><?php echo $value['nama']; ?></h5>
					  
					  				<form action="<?php echo base_url('toko/tambahcart'); ?>" method="POST" style="margin: 0;padding: 0;height: 42px;">

										<input type="hidden" name="idcart">
										<input type="hidden" name="idproduk" value="<?php echo $value['idproduk'];?>">
										<input type="hidden" name="jumlah" value="1">
										<input type="hidden" name="foto" value="<?php echo $value['foto'];?>">
										<input type="hidden" name="desk" value="<?php echo $value['nama'];?>">
										<input type="hidden" name="harga" value="<?php echo $value['harga'];?>">
										<h4>
											<a class="defaultBtn" href="<?php echo base_url('toko/detailproduk/').$value['idproduk']; ?>"" title="Click to view">
												<span class="icon-zoom-in"></span>
											</a>
											<button class="shopBtn" title="add to cart" type="submit">
												<span class="icon-plus"></span>
											</button>
											<span class="pull-right" style="font-size: 16px;">Rp. <?php echo number_format($value['harga'],0,'.','.'); ?></span>
										</h4> 

									</form>

								</div>
			  				</div>
						</li>

						<?php } ?>

		  			</ul>

				</div>

		</div>

		<div class="well well-small">

		  	<h3>
		  		<a class="btn btn-mini pull-right" href="<?php echo base_url('toko/grid'); ?>" title="View more">VIew More<span class="icon-plus"></span></a> <?php echo $title1['judulhal'];?>  
		  	</h3>

		  	<hr class="soften"/>

		  	<div class="row-fluid">

		  		<ul class="thumbnails">

		  			<?php 
		  				$record = $this->db->query('SELECT * FROM produk LIMIT 0,3'); 
		  				foreach ($record->result_array() as $key => $value) { 
		  			?>

					<li class="span4">
			  			<div class="thumbnail">
							<a class="zoomTool" href="<?php echo base_url('toko/detailproduk/').$value['idproduk']; ?>"" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
							<a  href="<?php echo base_url('toko/detailproduk/').$value['idproduk']; ?>""><img style="height: 200px;" src="<?php echo base_url(); ?>assets/gambar/produk/<?php echo $value['foto']; ?>" alt=""></a>
							<div class="caption">

				  				<h5><?php echo $value['nama']; ?></h5>

				  				<form action="<?php echo base_url('toko/tambahcart'); ?>" method="POST" style="margin: 0;padding: 0;height: 42px;">

									<input type="hidden" name="idcart">
									<input type="hidden" name="idproduk" value="<?php echo $value['idproduk'];?>">
									<input type="hidden" name="jumlah" value="1">
									<input type="hidden" name="foto" value="<?php echo $value['foto'];?>">
									<input type="hidden" name="desk" value="<?php echo $value['nama'];?>">
									<input type="hidden" name="harga" value="<?php echo $value['harga'];?>">
									<h4>
										<a class="defaultBtn" href="<?php echo base_url('toko/detailproduk/').$value['idproduk']; ?>"" title="Click to view">
											<span class="icon-zoom-in"></span>
										</a>
										<button class="shopBtn" title="add to cart" type="submit">
											<span class="icon-plus"></span>
										</button>
										<span class="pull-right" style="font-size: 16px;">Rp. <?php echo number_format($value['harga'],0,'.','.'); ?></span>
									</h4> 

								</form>

							</div>
			  			</div>
					</li>

					<?php } ?>

		  		</ul>

			</div>

		</div>
	
		<div class="well well-small">

			<a class="btn btn-mini pull-right" href="#">View more <span class="icon-plus"></span></a>
			Popular Products 

		</div>

		<hr>

		<div class="well well-small">

			<a class="btn btn-mini pull-right" href="#">View more <span class="icon-plus"></span></a>
			Best selling Products 
			
		</div>

	</div>

</div>

<section class="our_client">
	<hr class="soften"/>
	<h4 class="title cntr"><span class="text">Manufactures</span></h4>
	<hr class="soften"/>
	<div class="row">

		<?php foreach ($merk as $key => $value) { ?>

			<div class="span2">
				<a href="<?php echo base_url('toko/detaillist/').$value['idmerk']; ?>"><img alt="" src="<?php echo base_url(); ?>assets/gambar/merk/<?php echo $value['gambar']; ?>"></a>
			</div>

		<?php } ?>
		
	</div>
</section>