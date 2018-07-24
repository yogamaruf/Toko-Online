<div class="row">

	<div class="span12">

    	<ul class="breadcrumb">
			<li><a href="<?php echo base_url('index.php/toko/');?>">Home</a> <span class="divider">/</span></li>
			<li class="active">Order Histori</li>
    	</ul>

		<div class="well">
		
			<h3>Histori</h3>

			<?php 
				if (!empty($data->num_rows())) {
					$no = 1;
					foreach ($data->result_array() as $key => $value) { 
			?>

				<div class="row-fluid">	
					<div class="span1">
						<h2><strong>( <?php echo $no; ?> )</strong></h2>
					</div>
					<div class="span7">
						<h3><?php echo $value['tanggal']; ?></h3>
						<p>Kode ORDER : <?php echo $value['kodeorder']; ?><br>Jumlah Barang : <?php echo $value['jumbel']; ?><br>Total Bayar : Rp. <?php echo number_format($value['nominal'],0,'.','.'); ?>
						</p>
					</div>

					<div class="span4 alignR">

						<div class="form-horizontal qtyFrm">

							<h3>Status : <?php echo $value['status']; ?></h3>

						</div>

					</div>

				</div>

				<hr class="soften">

			<?php 
					$no++;
					} 
				} else {
					echo "<h3 style='color: #666;'><center>Tidak Ada Histori</center></h3>";
				}
			?>

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