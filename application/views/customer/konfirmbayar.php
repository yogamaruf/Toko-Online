<div class="row">

	<div class="span12">

    	<ul class="breadcrumb">
			<li><a href="<?php echo base_url('index.php/toko/');?>">Home</a> <span class="divider">/</span></li>
			<li class="active">Pembayaran</li>
    	</ul>

    	<div class="well well-small">

			<h2>Pembayaran</h2>

    		<hr class="soften"/>

    		<h3>
    			Detail Order<p class="pull-right"><?php echo $jumlah->num_rows(); ?> Barang</p>
    		</h3>

			<table class="table table-bordered">
				<thead>
                	<tr> 
                		<td>No.</td>
				 		<td>Nama Produk</td>
				 		<td>Harga</td>
				 		<td>Jumlah</td>
				 		<td>Total</td>
					</tr>
              	</thead>
              	<tbody>

              		<?php 
              			$no = 1; 
              			foreach ($data->result_array() as $key => $value) { 
              		?>

                	<tr> 
                		<td><?php echo $no; ?></td>
				 		<td><?php echo $value['deskripsi']; ?></td>
				 		<td>Rp. <?php echo number_format($value['harga'],0,'.','.'); ?></td>
				 		<td><?php echo $value['jumlah']; ?></td>
				 		<td>Rp. <?php echo number_format($value['total'],0,'.','.'); ?></td>
					</tr>

            		<?php 
            			$no++;
            			$t = $value['total'];
            			} 
            		?>	

					<tr>
						<td>#</td>
						<th colspan="3">Total</th>
						<th>Rp. <?php echo number_format($total,0,'.','.'); ?></th>
					</tr>
              	</tbody>
            </table>

		</div>

	</div>

</div>

<div class="row">

	<div class="span6">

		<div class="well">

			<h3>Detail Shipping</h3>

			<table class="table table-striped">
				<tbody>
               		<tr> 
			 			<td>Alamat</td>
			 			<td><?php echo $alm; ?></td>
					</tr>
					<tr>
			 			<td>Kode POS</td>
			 			<td><?php echo $kd; ?></td>
					</tr>
					<tr>
					 	<td>Kabupaten</td>
					 	<td><?php echo $kbt; ?></td>
					</tr>
					<tr>
					 	<td>Provinsi</td>
					 	<td><?php echo $pvs; ?></td>
					</tr>
					<tr>
			 			<td>Negara</td>
			 			<td><?php echo $ngr; ?></td>
					</tr>
            	</tbody>
            </table>

		</div>

	</div>

	<div class="span6">

		<div class="well">

			<h3>Via Bayar</h3>

			<form action="<?php echo base_url('index.php/toko/checkout'); ?>" method="POST">

				<input type="hidden" name="order">
				<input type="hidden" name="idcheck">
				<input type="hidden" name="total" value="<?php echo $t; ?>">
				<input type="hidden" name="barang" value="<?php echo $jumlah->num_rows(); ?>">
				<input type="hidden" name="tobayar" value="<?php echo $total; ?>">
				<input type="hidden" name="alamat" value="<?php echo $alm; ?>">
				<input type="hidden" name="kodepos" value="<?php echo $kd; ?>">
				<input type="hidden" name="kabupaten" value="<?php echo $kbt; ?>">
				<input type="hidden" name="provinsi" value="<?php echo $pvs; ?>">
				<input type="hidden" name="negara" value="<?php echo $ngr; ?>">
				<div class="control-group">
					<div class="controls">
						<select name="viabayar" style="width: 185px;">
							<option value="">Pilih</option>
							<option value="BCA">BCA</option>
							<option value="MEGA">MEGA</option>
							<option value="SYARIAH">SYARIAH</option>
							<option value="PAYPAL">PAYPAL</option>
							<option value="VISA">VISA</option>
							<option value="DISCOVER">DISCOVER</option>
							<option value="MAESTRO">MAESTRO</option>
							<option value="MASTERCARD">MASTERCARD</option>
						</select>
			
						<input type="text" name="no" placeholder="No. Rekening">
					</div>
				</div>
				<a href="<?php echo base_url('index.php/toko/keranjang'); ?>" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Kembali </a>
				<input type="submit" name="" class="shopBtn btn-large pull-right" value="CheckOut">

			</form>

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