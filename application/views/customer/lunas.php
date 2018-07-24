<div class="row">

	<div class="span2"></div>

	<div class="span8">

		<div class="well well-small">

			<div class="row-fluid">	

				<center>
					<h1 class="alert alert-success"><span class="icon-check"></span> Konfirmasi Berhasil</h1>
					<a href="<?php echo base_url('index.php/toko/grid'); ?>" class="shopBtn btn-large"><span class="icon-shopping-cart"></span> Kembali Belanja</a>
				</center>

			</div>

		</div>

	</div>

	<div class="span2"></div>

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