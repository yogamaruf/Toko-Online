<div class="row">

	<div class="span12">

    	<ul class="breadcrumb">
			<li><a href="<?php echo base_url('index.php/toko/');?>">Home</a> <span class="divider">/</span></li>
			<li class="active">Check Out</li>
   		</ul>

    	<?php echo $this->session->flashdata('error'); ?>

		<div class="well well-small">

			<h1>
				Check Out <small class="pull-right"><?php echo $jumlah->num_rows(); ?> Items are in the cart </small>
			</h1>

			<hr class="soften"/>	

			<table class="table table-bordered table-condensed">
              	<thead>
                	<tr>
                  		<th>Product</th>
                  		<th>Description</th>
                  		<th>Unit price</th>
                  		<th>Qty </th>
                  		<th>Total</th>
					</tr>
              	</thead>
              	<tbody>

              		<?php 
              			$total = 0; 
              			foreach ($data->result_array() as $key => $value) { 
              		?>

                	<tr>
                  		<td><img width="100" src="<?php echo base_url(); ?>assets/gambar/produk/<?php echo $value['fotoproduk']; ?>" alt=""></td>
                  		<td><?php echo $value['deskripsi']; ?></td>
                  		<td>Rp. <?php echo number_format($value['harga'],0,'.','.'); ?></td>
                 		<td>
							<input class="span1" style="max-width:34px" placeholder="1" id="appendedInputButtons" size="16" type="text" value="<?php echo $value['jumlah']; ?>">
				  			<div class="input-append">
								<button class="btn btn-mini" type="button">-</button><button class="btn btn-mini" type="button"> + </button><a class="btn btn-mini btn-danger" href="<?php echo base_url('index.php/toko/hapuscart/').$value['idcart']; ?>"><span class="icon-remove"></span></a>
							</div>
						</td>
                  		<td>Rp. <?php echo number_format($value['total'],0,'.','.'); ?></td>
                	</tr>

                	<?php 
                		$total += str_replace('', '', $value['total']);
            			} 
            		?>

                	<tr>
                  		<td colspan="4" class="alignR">Total products:</td>
                  		<td class="label label-primary" style="display: block;">Rp. <?php echo number_format($total,0,'.','.'); ?></td>
                	</tr>

				</tbody>
            </table><br/>

			<table class="table table-bordered">
				<tbody>
                	<tr>
                		<td>ESTIMATE YOUR SHIPPING & TAXES</td>
                	</tr>
                 	<tr> 
				 		<td>
							<form class="form-horizontal" action="<?php echo base_url('index.php/toko/konfirm'); ?>" method="POST">

								<input type="hidden" name="total" value="<?php echo $total; ?>">
					  			<div class="control-group">
									<label class="control-label" for="inputEmail">Negara <sup>*</sup></label>
									<div class="controls">
						  				<input type="text" name="negara" placeholder="Negara">
									</div>
					  			</div>
					  			<div class="control-group">
									<label class="control-label" for="inputEmail">Provinsi <sup>*</sup></label>
									<div class="controls">
						  				<input type="text" name="provinsi" placeholder="Provinsi">
									</div>
					  			</div>
					  			<div class="control-group">
									<label class="control-label" for="inputEmail">Kabupaten <sup>*</sup></label>
									<div class="controls">
						  				<input type="text" name="kabupaten" placeholder="Kabupaten">
									</div>
					  			</div>
					  			<div class="control-group">
									<label class="control-label" for="inputPassword">Kode POS <sup>*</sup></label>
									<div class="controls">
						  				<input type="text" name="kodepos" placeholder="KODE POS">
									</div>
					  			</div>
					  			<div class="control-group">
									<label class="control-label" for="input">Alamat Lengkap <sup>*</sup></label> 
									<div class="controls">
						  				<textarea name="alamat" placeholder="Alamat"></textarea>
									</div>
					  			</div>
					  			<div class="control-group">
									<div class="controls">
						  				<button type="submit" class="shopBtn">Click to check the price</button>
									</div>
					  			</div>
				  		</td>
				  	</tr>
              	</tbody>
            </table>		

			<a href="<?php echo base_url('index.php/toko/grid'); ?>" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Continue Shopping </a>
			<button type="submit" class="shopBtn btn-large pull-right">Next  <span class="icon-arrow-right"></span></button>

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