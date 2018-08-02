<h3>Four Column Product view </h3>

	<ul class="thumbnails">

		<?php foreach ($data->result_array() as $key => $value) { ?>

			<li class="span3">

			  	<div class="thumbnail">

					<a href="<?php echo base_url('index.php/toko/detailproduk/').$value['idproduk']; ?>" class="overlay"></a>
					<a class="zoomTool" href="<?php echo base_url('index.php/toko/detailproduk/').$value['idproduk']; ?>" title="Detail"><span class="icon-search"></span> QUICK VIEW</a>
					<a href="<?php echo base_url('index.php/toko/detailproduk/').$value['idproduk']; ?>"><img style="height: 200px;" src="<?php echo base_url(); ?>assets/gambar/produk/<?php echo $value['foto']; ?>" alt=""></a>
					<div class="caption cntr">

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