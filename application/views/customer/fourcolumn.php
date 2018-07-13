	<h3>Four Column Product view </h3>
		<ul class="thumbnails">

		  	<?php foreach ($data->result_array() as $key => $value) { ?>

			<li class="span3">
			  <div class="thumbnail" style="height: 340px;">
				<a href="<?php echo base_url('index.php/toko/detailproduk/').$value['idproduk']; ?>" class="overlay"></a>
				<a class="zoomTool" href="<?php echo base_url('index.php/toko/detailproduk/').$value['idproduk']; ?>"" title="Detail"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="<?php echo base_url('index.php/toko/detailproduk/').$value['idproduk']; ?>"><img style="height: 200px;" src="<?php echo base_url(); ?>assets/gambar/produk/<?php echo $value['foto']; ?>" alt=""></a>
				<div class="caption cntr">
					<p><?php echo $value['nama']; ?></p>
					<p><strong>Rp. <?php echo number_format($value['harga'],0,'.','.'); ?></strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4> 
					<br class="clr">
				</div>
			  </div>
			</li>

			<?php } ?>

		  </ul>

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