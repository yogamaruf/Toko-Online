<div class="row">

    <div class="col-md-12">
        <h2><strong>Detail Profil</strong></h2>   
    </div>

</div>

<hr />

<div class="row">

	<div class="col-md-6">
		
		<div class="panel-body">
			<img src="<?php echo base_url(); ?>assets/backend/assets/img/find_user.png" class="user-image img-responsive"/>
		</div>

	</div>

	<div class="col-md-6">
		
		<div class="panel-body">
			<div class="row">
			<div class="col-md-6">
			<h3 style="margin: 5px 0 20px 0;"><strong>Akun User</strong></h3>
			</div>
			<div class="col-md-6">
				<a href="<?php echo base_url('index.php/admin/toko/tabelcustomer'); ?>" class="btn btn-primary" style="float: right;"><i class=""></i> Kembali </a>
			</div>
			</div>
			<div class="table-responsive">

				<?php foreach ($detail->result_array() as $key => $value) { ?>

			<table class="table table-striped">
			<tbody>
				<tr>
					<td class="td">Nama</td>
					<td class="td"><?php echo $value['title'];echo " ".$value['firstname'];echo " ".$value['lastname']; ?></td>
				</tr>
				<tr>
					<td class="td">Kata Kunci</td>
					<td class="td"><?php echo $value['password']; ?></td>
				</tr>
				<tr>
					<td class="td">E-mail</td>
					<td class="td"><?php echo $value['email']; ?></td>
				</tr>
				<tr>
					<td class="td">Tanggal lahir</td>
					<td class="td"><?php echo $value['date']; ?></td>
				</tr>
			</tbody>
			</table>

				<?php } ?>

			</div>
		</div>

	</div>

	
</div>