<div class="row">

	<div class="span12">

    	<ul class="breadcrumb">
			<li><a href="<?php echo base_url('toko/');?>">Home</a> <span class="divider">/</span></li>
			<li class="active"><?php echo $title['judulhal'];?></li>
    	</ul>

    </div>

    <div class="span4">
		<div class="well">
		
			<h3>
				<?php echo $title1['judulhal'];?>
				<a href="<?php echo base_url('toko/hapusakun'); ?>" class="shopBtn pull-right" style="border-radius: 20px;margin-left: 5px;" title="Hapus" onclick="return confirm('Anda yakin ingin menghapus akun Anda ?');"><span class="icon-trash"></span></a>
				<a href="<?php echo base_url('toko/editakun'); ?>" class="shopBtn pull-right" style="border-radius: 50%;padding: 0 10px;" title="Edit"><span class="icon-edit"></span></a>
			</h3>

				<div class="well">

					<div class="control-group">
						<label><strong>Nama :</strong></label>
						<div class="controls">
							<?php echo $data['title'];echo ' '.$data['firstname'];echo ' '.$data['lastname']; ?>
						</div>
					</div>
					<div class="control-group">
						<label><strong>E-mail :</strong></label>
						<div class="controls">
		 					<?php echo $data['email']; ?>
						</div>
	    			</div>	  
					<div class="control-group">
						<label><strong>Password :</strong></label>
						<div class="controls">
		  					<?php echo $data['password']; ?>
						</div>
	    			</div>
					<div class="control-group">
						<label><strong>Tanggal Lahir :</strong></label>
						<div class="controls">
							<?php echo $data['date']; ?>
						</div>
	 				</div>
	 				
				</div>

		</div>

	</div>

	<div class="span4">
		<div class="well">
		
			<h3><?php echo $title1['subjudul'];?> 1</h3>

				<div class="well">

					<div class="control-group">
						<label><strong>Alamat :</strong></label>
						<div class="controls">
		  					<?php 
		  						if (!empty($detail['alamat'])) { 
		  							echo $detail['alamat']; 
		  						} else { 
		  							echo "<font style='font-style:italic;'>Alamat anda kosong...</font>"; 
		  						} 
		  					?>
						</div>
	    			</div>
					<div class="control-group">
						<label><strong>Jenis Kelamin :</strong></label>
						<div class="controls">
							<?php 
		  						if (!empty($detail['gender'])) { 
		  							echo $detail['gender']; 
		  						} else { 
		  							echo "<font style='font-style:italic;'>Jenis Kelamin anda kosong...</font>"; 
		  						} 
		  					?>
						</div>
	 				</div>
					<div class="control-group">
						<label><strong>No. Telp :</strong></label>
						<div class="controls">
							<?php 
		  						if (!empty($detail['notelp'])) { 
		  							echo $detail['notelp']; 
		  						} else { 
		  							echo "<font style='font-style:italic;'>No. Telepon anda kosong...</font>"; 
		  						} 
		  					?>
						</div>
					</div>
					<div class="control-group">
						<label><strong>No. Rekening :</strong></label>
						<div class="controls">
		 					<?php 
		  						if (!empty($detail['norekening'])) { 
		  							echo $detail['norekening']; 
		  						} else { 
		  							echo "<font style='font-style:italic;'>No. Rekening anda kosong...</font>"; 
		  						} 
		  					?>
						</div>
	    			</div>	  
	 				
				</div>

		</div>

	</div>

	<div class="span4">
		<div class="well">
		
			<h3><?php echo $title1['subjudul'];?> 2</h3>

				<div class="well">

					<div class="control-group">
						<label><strong>Kewarganegaraan :</strong></label>
						<div class="controls">
							<?php 
		  						if (!empty($detail['warganegara'])) { 
		  							echo $detail['warganegara']; 
		  						} else { 
		  							echo "<font style='font-style:italic;'>Kewarganegaraan anda kosong...</font>"; 
		  						} 
		  					?>
						</div>
					</div>
					<div class="control-group">
						<label><strong>Kode POS :</strong></label>
						<div class="controls">
		 					<?php 
		  						if (!empty($detail['kodepos'])) { 
		  							echo $detail['kodepos']; 
		  						} else { 
		  							echo "<font style='font-style:italic;'>Kode POS anda kosong...</font>"; 
		  						} 
		  					?>
						</div>
	    			</div>	  
					<div class="control-group">
						<label><strong>Kabupaten :</strong></label>
						<div class="controls">
		  					<?php 
		  						if (!empty($detail['kabupaten'])) { 
		  							echo $detail['kabupaten']; 
		  						} else { 
		  							echo "<font style='font-style:italic;'>Kabupaten anda kosong...</font>"; 
		  						} 
		  					?>
						</div>
	    			</div>
					<div class="control-group">
						<label><strong>Provinsi :</strong></label>
						<div class="controls">
							<?php 
		  						if (!empty($detail['provinsi'])) { 
		  							echo $detail['provinsi']; 
		  						} else { 
		  							echo "<font style='font-style:italic;'>Provinsi anda kosong...</font>"; 
		  						} 
		  					?>
						</div>
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