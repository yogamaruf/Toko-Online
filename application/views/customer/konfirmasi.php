<div class="row">

	<div class="span2"></div>

	<div class="span8">

		<div class="well well-small">

			<h3 class="alert alert-success">Terima Kasih telah berlangganan disini...</h3>

			<div class="row-fluid">	

				<h5><center>Silahkan isi form dibawah ini untuk konfirmasi pembayaran</center></h5>

				<form class="form-horizontal" style="margin: 20px;" action="<?php echo base_url('index.php/toko/finish'); ?>" method="POST">
          			
            		<div class="control-group">
						<label class="control-label" for="input">Nama <sup>*</sup></label> 
						<div class="controls">
						  	<input type="text" required="" placeholder="Masukkan nama anda">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="input">Kode ORDER <sup>*</sup></label> 
						<div class="controls">
						  	<input type="text" name="kodeorder" required="" placeholder="Masukkan kode order anda">
						  	<p style="font-style: italic;">( <?php echo $order['kodeorder']; ?> ) *kode order anda</p>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="input">Nominal <sup>*</sup></label> 
						<div class="controls">
						  	<input type="text" value="Rp. <?php echo number_format($order['nominal'],0,'.','.'); ?>" readonly>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="input">Tanggal/ Waktu <sup>*</sup></label> 
						<div class="controls">
						  	<input type="text" value="<?php echo $order['tanggal']; ?>" readonly>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="input">Via Pembayaran <sup>*</sup></label> 
						<div class="controls">
						  	<input type="text" value="<?php echo $check['viabayar']; ?>" readonly>
						</div>
					</div>
            		<div class="control-group">
						<label class="control-label" for="input">Keterangan <sup>*</sup></label> 
						<div class="controls">
						  	<input type="text" value="<?php echo $order['status']; ?>" readonly>
						</div>
					</div>

            		<center><button type="submit" class="shopBtn btn-large"><span class="icon-check"></span> Konfirmasi</button></center>

        		</form>

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