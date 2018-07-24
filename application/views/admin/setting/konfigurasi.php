<div class="row">

    <div class="col-md-12">
        <h2><strong>Konfigurasi WEB</strong></h2>   
    </div>

</div>

<hr />

<div class="row">

	<div class="col-md-6">

		<div class="panel-body">
			<p><font style="font-size: 26px;"><strong>Nama Website</strong></font><br>
			<?php echo $set['nama']; ?></p>
			<p><font style="font-size: 26px;"><strong>E-mail</strong></font><br>
			<?php echo $set['email']; ?></p>
			<p><font style="font-size: 26px;"><strong>No. Telepon</strong></font><br>
			<?php echo $set['telp']; ?></p>
		</div>

	</div>

	<div class="col-md-6">

		<div class="panel-body">
			<font style="font-size: 26px;"><strong>Share</strong></font><br><br>
			<a href="https:\\<?php echo $set['share1']; ?>" class="aa"><li class="fa fa-facebook fa-2x"></li></a>
			<a href="https:\\<?php echo $set['share2']; ?>" class="aa"><li class="fa fa-twitter fa-2x"></li></a>
			<a href="https:\\<?php echo $set['share3']; ?>" class="aa"><li class="fa fa-instagram fa-2x"></li></a>
		</div><br><br>

		<a href="<?php echo base_url('index.php/admin/toko/editkonfig/').$set['id']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Ubah</a>
		<a href="<?php echo base_url('index.php/admin/toko/reset/').$set['id']; ?>" class="btn btn-info" onclick="return confirm('Anda yakin ingin kembali ke awal !!!');"><i class="fa fa-undo"></i> Kembali ke Awal</a>

	</div>
	
</div>

<div class="row">
	
	<div class="col-md-12">
		
		<div class="panel-body">
			<center><h3><strong>Deskripsi</strong></h3>
				<div class="well well-small">
					<p><?php echo $set['deskripsi']; ?></p>
			</center>
		</div>

	</div>

</div>