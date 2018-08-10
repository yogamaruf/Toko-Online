<div class="row">

    <div class="col-md-12">
        <h2><strong>Detail Profil</strong></h2>   
    </div>

</div>

<hr />

<div class="row">

	<div class="col-md-4">
		<div class="well" style="background-color: #fff;">

					<div class="control-group">
						<label><strong>Nama :</strong></label>
						<div class="controls">
							<?php echo $data['title'];echo ' '.$data['firstname'];echo ' '.$data['lastname']; ?>
						</div><br>
					</div>
					<div class="control-group">
						<label><strong>E-mail :</strong></label>
						<div class="controls">
		 					<?php echo $data['email']; ?>
						</div><br>
	    			</div>	  
					<div class="control-group">
						<label><strong>Password :</strong></label>
						<div class="controls">
		  					<?php echo $data['password']; ?>
						</div><br>
	    			</div>
					<div class="control-group">
						<label><strong>Tanggal Lahir :</strong></label>
						<div class="controls">
							<?php echo $data['date']; ?>
						</div>
	 				</div>

		</div>

	</div>

	<div class="col-md-4">
		<div class="well" style="background-color: #fff;">

					<div class="control-group">
						<label><strong>Alamat :</strong></label>
						<div class="controls">
		  					<?php 
		  						if (!empty($detail['alamat'])) { 
		  							echo $detail['alamat']; 
		  						} else { 
		  							echo "<font style='font-style:italic;'>Tidak Ada...</font>"; 
		  						} 
		  					?>
						</div><br>
	    			</div>
					<div class="control-group">
						<label><strong>Jenis Kelamin :</strong></label>
						<div class="controls">
							<?php 
		  						if (!empty($detail['gender'])) { 
		  							echo $detail['gender']; 
		  						} else { 
		  							echo "<font style='font-style:italic;'>Tidak Ada...</font>"; 
		  						} 
		  					?>
						</div><br>
	 				</div>
					<div class="control-group">
						<label><strong>No. Telp :</strong></label>
						<div class="controls">
							<?php 
		  						if (!empty($detail['notelp'])) { 
		  							echo $detail['notelp']; 
		  						} else { 
		  							echo "<font style='font-style:italic;'>Tidak Ada...</font>"; 
		  						} 
		  					?>
						</div><br>
					</div>
					<div class="control-group">
						<label><strong>No. Rekening :</strong></label>
						<div class="controls">
		 					<?php 
		  						if (!empty($detail['norekening'])) { 
		  							echo $detail['norekening']; 
		  						} else { 
		  							echo "<font style='font-style:italic;'>Tidak Ada...</font>"; 
		  						} 
		  					?>
						</div>
				</div>

		</div>

	</div>

	<div class="col-md-4">
		<div class="well" style="background-color: #fff;">

					<div class="control-group">
						<label><strong>Kewarganegaraan :</strong></label>
						<div class="controls">
							<?php 
		  						if (!empty($detail['warganegara'])) { 
		  							echo $detail['warganegara']; 
		  						} else { 
		  							echo "<font style='font-style:italic;'>Tidak Ada...</font>"; 
		  						} 
		  					?>
						</div><br>
					</div>
					<div class="control-group">
						<label><strong>Kode POS :</strong></label>
						<div class="controls">
		 					<?php 
		  						if (!empty($detail['kodepos'])) { 
		  							echo $detail['kodepos']; 
		  						} else { 
		  							echo "<font style='font-style:italic;'>Tidak Ada...</font>"; 
		  						} 
		  					?>
						</div><br>
	    			</div>	  
					<div class="control-group">
						<label><strong>Kabupaten :</strong></label>
						<div class="controls">
		  					<?php 
		  						if (!empty($detail['kabupaten'])) { 
		  							echo $detail['kabupaten']; 
		  						} else { 
		  							echo "<font style='font-style:italic;'>Tidak Ada...</font>"; 
		  						} 
		  					?>
						</div><br>
	    			</div>
					<div class="control-group">
						<label><strong>Provinsi :</strong></label>
						<div class="controls">
							<?php 
		  						if (!empty($detail['provinsi'])) { 
		  							echo $detail['provinsi']; 
		  						} else { 
		  							echo "<font style='font-style:italic;'>Tidak Ada...</font>"; 
		  						} 
		  					?>
						</div>
	 				</div>

		</div>

	</div>

	
</div>