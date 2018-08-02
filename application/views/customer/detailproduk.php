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
					<a class="totalInCart" href="<?php echo base_url('index.php/toko/keranjang'); ?>"><strong>Total <span class="badge badge-warning pull-right" style="line-height:18px;">Rp. <?php echo number_format($total,0,'.','.'); ?></span></strong></a>
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
		  		$record = $this->db->query('SELECT * FROM produk LIMIT 3,3'); 
		  		foreach ($record->result_array() as $key => $value) { 
		  	?>

				<li>
				 	<div class="thumbnail">
						<a class="zoomTool" href="<?php echo base_url('index.php/toko/detailproduk/').$value['idproduk']; ?>" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
						<img style="width: 210px;height: 270px;" src="<?php echo base_url(); ?>assets/gambar/produk/<?php echo $value['foto']; ?>" alt="bootstrap ecommerce templates">
							<div class="caption">
				  				<h4 style="padding: 0;"><a class="defaultBtn" href="<?php echo base_url('index.php/toko/detailproduk/').$value['idproduk']; ?>">VIEW</a><span class="pull-right" style="font-size: 16px;">Rp. <?php echo number_format($value['harga'],0,'.','.'); ?></span>
				  				</h4>
							</div>
					</div>
				</li>

				<li style="border:0"> &nbsp;</li>

			<?php } ?>

		</ul>

	</div>

	<div class="span9">

    	<ul class="breadcrumb">
			<li><a href="<?php echo base_url('index.php/toko/');?>">Home</a> <span class="divider">/</span></li>
    		<li><a href="<?php echo base_url('index.php/toko/grid');?>">Items</a> <span class="divider">/</span></li>
    		<li class="active">Preview</li>
    	</ul>

		<div class="well well-small">

			<div class="row-fluid">

				<div class="span5">
					<img style="width: 274px;height: 274px;" src="<?php echo base_url(''); ?>assets/gambar/produk/<?php echo $d['foto']; ?>" class="">
				</div>

				<div class="span7">
					<h3><?php echo $d['nama']; ?></h3>
					<hr class="soft"/>
				
					<form class="form-horizontal qtyFrm" action="<?php echo base_url('index.php/toko/tambahcart'); ?>" method="POST">

						<input type="hidden" name="idcart">
						<input type="hidden" name="idproduk" value="<?php echo $d['idproduk'];?>">
						<input type="hidden" name="foto" value="<?php echo $d['foto'];?>">
						<input type="hidden" name="desk" value="<?php echo $d['nama'];?>">
						<input type="hidden" name="harga" value="<?php echo $d['harga'];?>">

				  		<div class="control-group">
							<label class="control-label"><span>Rp. <?php echo number_format($d['harga'],0,'.','.'); ?></span></label>
							<div class="controls">
								<input type="number" name="jumlah" min="1" max="10" class="span6" placeholder="Qty." required="">
							</div>
			  			</div>
			  			<div class="control-group">
							<label class="control-label"><span>Warna</span></label>
							<div class="controls">
				  				<input type="text" class="span11" value="<?php echo $d['warna']; ?>" readonly="readonly">
							</div>
			  			</div>
			  			<div class="control-group">
							<label class="control-label"><span>Materials</span></label>
							<div class="controls">
				  				<input type="text" class="span11" value="<?php echo $d['bahan']; ?>" readonly="readonly">
							</div>
			  			</div>
			  			<button type="submit" class="shopBtn"><span class=" icon-shopping-cart"></span> Add to cart</button>

					</form>

				</div>

			</div>
			
			<hr class="softn clr"/>

        	<ul id="productDetail" class="nav nav-tabs">
              	<li class="active"><a href="#home" data-toggle="tab">Product Details</a></li>
              	<li class=""><a href="#profile" data-toggle="tab">Related Products </a></li>
              	<li class="dropdown">
               		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Acceseries <b class="caret"></b></a>
               		<ul class="dropdown-menu">
              			<li><a href="#cat1" data-toggle="tab">Category one</a></li>
              			<li><a href="#cat2" data-toggle="tab">Category two</a></li>
            		</ul>
            	</li>
            </ul>

            <div id="myTabContent" class="tab-content tabWrapper">

            	<div class="tab-pane fade active in" id="home">

			  		<h4>Product Information</h4>
                	<table class="table table-striped">
						<tbody>
							<tr class="techSpecRow">
								<td class="techSpecTD1">Color:</td>
								<td class="techSpecTD2"><?php echo $d['warna']; ?></td>
							</tr>
							<tr class="techSpecRow">
								<td class="techSpecTD1">Sport:</td>
								<td class="techSpecTD2"><?php echo $d['idkategori']; ?></td>
							</tr>
							<tr class="techSpecRow">
								<td class="techSpecTD1">Brand:</td>
								<td class="techSpecTD2"><?php echo $d['namamerk']; ?></td>
							</tr>
						</tbody>
					</table>

					<p><?php echo $d['deskripsi']; ?></p>

				</div>

				<div class="tab-pane fade" id="profile">

					<div class="row-fluid">	  

						<div class="span2">
							<img src="assets/img/d.jpg" alt="">
						</div>

						<div class="span6">
							<h5>Product Name </h5>
							<p>
								Nowadays the lingerie industry is one of the most successful business spheres.
								We always stay in touch with the latest fashion tendencies - 
								that is why our goods are so popular..
							</p>
						</div>

						<div class="span4 alignR">

							<form class="form-horizontal qtyFrm">

								<h3> $140.00</h3>
								<label class="checkbox">
									<input type="checkbox">  Adds product to compair
								</label><br>
								<div class="btn-group">
			  						<a href="product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
			  						<a href="product_details.html" class="shopBtn">VIEW</a>
			 					</div>

							</form>

						</div>

					</div>

					<hr class="soft">

					<div class="row-fluid">	  

						<div class="span2">
							<img src="assets/img/d.jpg" alt="">
						</div>

						<div class="span6">
							<h5>Product Name </h5>
							<p>
								Nowadays the lingerie industry is one of the most successful business spheres.
								We always stay in touch with the latest fashion tendencies - 
								that is why our goods are so popular..
							</p>
						</div>

						<div class="span4 alignR">

							<form class="form-horizontal qtyFrm">

								<h3> $140.00</h3>
								<label class="checkbox">
									<input type="checkbox">  Adds product to compair
								</label><br>
								<div class="btn-group">
			  						<a href="product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
			  						<a href="product_details.html" class="shopBtn">VIEW</a>
			 					</div>

							</form>

						</div>

					</div>

					<hr class="soft">

					<div class="row-fluid">	  

						<div class="span2">
							<img src="assets/img/d.jpg" alt="">
						</div>

						<div class="span6">
							<h5>Product Name </h5>
							<p>
								Nowadays the lingerie industry is one of the most successful business spheres.
								We always stay in touch with the latest fashion tendencies - 
								that is why our goods are so popular..
							</p>
						</div>

						<div class="span4 alignR">

							<form class="form-horizontal qtyFrm">

								<h3> $140.00</h3>
								<label class="checkbox">
									<input type="checkbox">  Adds product to compair
								</label><br>
								<div class="btn-group">
			  						<a href="product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
			  						<a href="product_details.html" class="shopBtn">VIEW</a>
			 					</div>

							</form>

						</div>

					</div>

					<hr class="soft">

				</div>

              	<div class="tab-pane fade" id="cat1">

                	<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p><br><br>

			  		<div class="row-fluid">	  

						<div class="span2">
							<img src="assets/img/d.jpg" alt="">
						</div>

						<div class="span6">
							<h5>Product Name </h5>
							<p>
								Nowadays the lingerie industry is one of the most successful business spheres.
								We always stay in touch with the latest fashion tendencies - 
								that is why our goods are so popular..
							</p>
						</div>

						<div class="span4 alignR">

							<form class="form-horizontal qtyFrm">

								<h3> $140.00</h3>
								<label class="checkbox">
									<input type="checkbox">  Adds product to compair
								</label><br>
								<div class="btn-group">
			  						<a href="product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
			  						<a href="product_details.html" class="shopBtn">VIEW</a>
			 					</div>

							</form>

						</div>

					</div>

					<hr class="soft">

					<div class="row-fluid">	  

						<div class="span2">
							<img src="assets/img/d.jpg" alt="">
						</div>

						<div class="span6">
							<h5>Product Name </h5>
							<p>
								Nowadays the lingerie industry is one of the most successful business spheres.
								We always stay in touch with the latest fashion tendencies - 
								that is why our goods are so popular..
							</p>
						</div>

						<div class="span4 alignR">

							<form class="form-horizontal qtyFrm">

								<h3> $140.00</h3>
								<label class="checkbox">
									<input type="checkbox">  Adds product to compair
								</label><br>
								<div class="btn-group">
			  						<a href="product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
			  						<a href="product_details.html" class="shopBtn">VIEW</a>
			 					</div>

							</form>

						</div>

					</div>

					<hr class="soft">

					<div class="row-fluid">	  

						<div class="span2">
							<img src="assets/img/d.jpg" alt="">
						</div>

						<div class="span6">
							<h5>Product Name </h5>
							<p>
								Nowadays the lingerie industry is one of the most successful business spheres.
								We always stay in touch with the latest fashion tendencies - 
								that is why our goods are so popular..
							</p>
						</div>

						<div class="span4 alignR">

							<form class="form-horizontal qtyFrm">

								<h3> $140.00</h3>
								<label class="checkbox">
									<input type="checkbox">  Adds product to compair
								</label><br>
								<div class="btn-group">
			  						<a href="product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
			  						<a href="product_details.html" class="shopBtn">VIEW</a>
			 					</div>

							</form>

						</div>

					</div>

					<hr class="soft">
			
				</div>

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