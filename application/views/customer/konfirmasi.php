<div class="row">

	<div class="span2"></div>

	<div class="span8">

		<div class="well well-small">

			<h3 class="alert alert-success">Terima Kasih telah berlangganan disini...</h3>

			<div class="row-fluid">	

				<h4>Data Anda</h4>

				<form class="form-horizontal" style="margin: 20px;">
          			<table class="table table-striped">
						<tbody>
                			<tr> 
							 	<td>Nama</td>
							 	<td><?php echo $check['title'];echo ' '.$check['firstname'];echo ' '.$check['lastname']; ?></td>
							</tr>
							<tr>
							 	<td>Kode ORDER</td>
							 	<td><?php echo $check['kodeorder']; ?></td>
							</tr>
							<tr>
							 	<td>Nominal</td>
							 	<td><?php echo $order['nominal']; ?></td>
							</tr>
							<tr>
							 	<td>Tanggal/ Waktu</td>
							 	<td><?php echo $check['tglorder']; ?></td>
							</tr>
							<tr>
							 	<td>Via Pembayaran</td>
							 	<td><?php echo $check['viabayar']; ?></td>
							</tr>
							<tr>
							 	<td>Keterangan</td>
							 	<td><?php echo $order['status']; ?></td>
							</tr>
            			</tbody>
            		</table>
        		</form>

			</div>

			<a href="<?php echo base_url('index.php/toko/grid'); ?>" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Kembali Belanja</a>
			<a href="<?php echo base_url('index.php/toko/'); ?>" class="shopBtn btn-large pull-right"><span class="icon-home"></span> Home </a>

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