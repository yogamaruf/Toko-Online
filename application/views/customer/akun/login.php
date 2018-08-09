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
					<a class="totalInCart" href="<?php echo base_url('toko/keranjang'); ?>"><strong>Total <span class="badge badge-warning pull-right" style="line-height:18px;">Rp. 0</span></strong></a>
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

    	<ul class="breadcrumb">
			<li><a href="<?php echo base_url('toko/');?>">Home</a> <span class="divider">/</span></li>
			<li class="active">Login</li>
    	</ul>

		<h3> Login</h3>	

		<hr class="soft"/>
	
		<div class="row">
	
			<div class="span4">

				<?php  echo $this->session->flashdata("error"); ?>

				<div class="well">
					
					<h5>ALREADY REGISTERED ?</h5>

					<form action="<?php echo base_url('login/loginmer'); ?>" method="POST">
			  			<div class="control-group">
							<label class="control-label" for="inputEmail">Email</label>
							<div class="controls">
				  				<input class="span3" type="text" name="email" placeholder="Email">
							</div>
			  			</div>
			  			<div class="control-group">
							<label class="control-label" for="inputPassword">Password</label>
							<div class="controls">
				  				<input type="password" class="span3" name="password" placeholder="Password">
							</div>
			  			</div>
			  			<div class="control-group">
							<div class="controls">
				  				<button type="submit" class="defaultBtn">Sign in</button> 
				  				<a href="<?php echo base_url('toko/cek');?>">Forget password?</a>
							</div>
			  			</div>
					</form>

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
				<a href="<?php echo base_url('toko/detaillist/').$value['idmerk']; ?>"><img alt="" src="<?php echo base_url(); ?>assets/gambar/merk/<?php echo $value['gambar']; ?>"></a>
			</div>

		<?php } ?>
		
	</div>
</section>