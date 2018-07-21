<div class="row">

	<div id="sidebar" class="span3">

		<div class="well well-small">

			<ul class="nav nav-list">
		
				<?php foreach ($list->result_array() as $key => $value) { ?>

					<li>
						<a href="<?php echo base_url('index.php/toko/detaillist/').$value['idkategori']; ?>"><span class="icon-chevron-right"></span><?php echo $value['namakategori']; ?></a>
					</li>

				<?php } ?>

				<li style="border:0"> &nbsp;</li>
				<li> 
					<a class="totalInCart" href="<?php echo base_url('index.php/toko/keranjang'); ?>"><strong>Total Amount  <span class="badge badge-warning pull-right" style="line-height:18px;">Rp. 0</span></strong></a>
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

			<li>
			 	<div class="thumbnail">
					<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
					<img src="<?php echo base_url(); ?>assets/fronted/assets/img/bootstrap-ecommerce-templates.png" alt="bootstrap ecommerce templates">
						<div class="caption">
				  			<h4><a class="defaultBtn" href="product_details.html">VIEW</a> <span class="pull-right">$22.00</span></h4>
						</div>
				</div>
			</li>

			<li style="border:0"> &nbsp;</li>

			<li>
				<div class="thumbnail">
					<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
					<img src="<?php echo base_url(); ?>assets/fronted/assets/img/shopping-cart-template.png" alt="shopping cart template">
						<div class="caption">
				  			<h4><a class="defaultBtn" href="product_details.html">VIEW</a> <span class="pull-right">$22.00</span></h4>
						</div>
			  	</div>
			</li>

			<li style="border:0"> &nbsp;</li>

			<li>
				<div class="thumbnail">
					<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
					<img src="<?php echo base_url(); ?>assets/fronted/assets/img/bootstrap-template.png" alt="bootstrap template">
						<div class="caption">
				  			<h4><a class="defaultBtn" href="product_details.html">VIEW</a> <span class="pull-right">$22.00</span></h4>
						</div>
				</div>
			</li>

		</ul>

	</div>

	<div class="span9">

		<div class="well well-small">

			<h3>Our Products </h3>

			<div class="row-fluid">

		  		<ul class="thumbnails">

		  			<?php foreach ($data->result_array() as $key => $value) { ?>

						<li class="span4" style="margin-left: 5px;">

			  				<div class="thumbnail">

								<a href="<?php echo base_url('index.php/toko/detailproduk/').$value['idproduk']; ?>" class="overlay"></a>
								<a class="zoomTool" href="<?php echo base_url('index.php/toko/detailproduk/').$value['idproduk']; ?>"" title="Detail"><span class="icon-search"></span> QUICK VIEW</a>
								<a href="<?php echo base_url('index.php/toko/detailproduk/').$value['idproduk']; ?>"><img style="height: 200px;" src="<?php echo base_url(); ?>assets/gambar/produk/<?php echo $value['foto']; ?>" alt=""></a>
								<div class="caption cntr" style="height: 100px;"> 
									<p><?php echo substr($value['nama'],0,20).'...'; ?></p>
									<p><strong>Rp. <?php echo number_format($value['harga'],0,'.','.'); ?></strong></p>

									<form action="<?php echo base_url('index.php/toko/tambahcart'); ?>" method="POST" style="margin: 0;padding: 0;height: 42px;">

										<input type="hidden" name="idcart">
										<input type="hidden" name="idproduk" value="<?php echo $value['idproduk'];?>">
										<input type="hidden" name="jumlah" value="1">
										<input type="hidden" name="foto" value="<?php echo $value['foto'];?>">
										<input type="hidden" name="desk" value="<?php echo $value['nama'];?>">
										<input type="hidden" name="harga" value="<?php echo $value['harga'];?>">
										<h4><button class="shopBtn" title="add to cart" type="submit"> Add to cart </button></h4> 

									</form>

									<br class="clr">

								</div>

			  				</div>

						</li>

					<?php } ?>

		  		</ul>

			</div>
	
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
				<a href="<?php echo base_url('index.php/toko/detaillist/').$value['idmerk']; ?>"><img alt="" src="<?php echo base_url(); ?>assets/gambar/merk/<?php echo $value['gambar']; ?>"></a>
			</div>

		<?php } ?>
		
	</div>
</section>