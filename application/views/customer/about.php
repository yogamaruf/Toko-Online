<hr class="soften">

	<div>
		<h1><?php echo $data['judulhal']; ?></h1>
	</div>

	<hr class="soften">

	<div class="row">

		<div class="span8">
		  	<p>
				<?php echo $data['deskripsi']; ?>
		  	</p>
		</div>

		<div class="span4">
			Monday - Friday<br/>
			09:00am - 09:00pm<br/>
			Saturday<br/>
			09:00am - 07:00pm<br/>
			Sunday<br/>
			12:30pm - 06:00pm<br/>
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