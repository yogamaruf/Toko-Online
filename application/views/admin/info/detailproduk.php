<div class="row">

    <div class="col-md-12">
        <h2><strong>Detail Produk</strong></h2>   
    </div>

</div>

<hr />

<div class="row">

	<div class="col-md-6">

		<div class="panel-body">
			<img style="width: 350px;height: 350px;" src="<?php echo base_url(); ?>assets/gambar/produk/<?php echo $data['foto']; ?>" class="img-rounded img-responsive"/>
		</div>

	</div>

	<div class="col-md-6">
		
		<div class="panel-body">

			<div class="row">

				<div class="col-md-6">
					<h3 style="margin: 5px 0 20px 0;"><strong>Produk </strong></h3>
				</div>

				<div class="col-md-6">
					<a href="<?php echo base_url('admin/toko/tabelproduk'); ?>" class="btn btn-primary" style="float: right;"><i class=""></i> Kembali </a>
				</div>

			</div>

			<div class="table-responsive">

				<table class="table table-striped">
					<tbody>
						<tr>
							<td class="td">ID Produk</td>
							<td class="td"><?php echo $data['idproduk']; ?></td>
						</tr>
						<tr>
							<td class="td">Nama Produk</td>
							<td class="td"><?php echo $data['nama']; ?></td>
						</tr>
						<tr>
							<td class="td">Kategori</td>
							<td class="td"><?php echo $data['namakategori']; ?></td>
						</tr>
						<tr>
							<td class="td">Merk</td>
							<td class="td"><?php echo $data['namamerk']; ?></td>
						</tr>
						<tr>
							<td class="td">Warna</td>
							<td class="td"><?php echo $data['warna']; ?></td>
						</tr>
						<tr>
							<td class="td">Bahan</td>
							<td class="td"><?php echo $data['bahan']; ?></td>
						</tr>
					</tbody>
				</table>

			</div>
				<p style="border-top: 2px solid #999;"><strong style="float: left;font-size: 25px;color: #888;">Harga</strong><strong style="font-size: 32px;float: right;color: #666;">Rp. <?php echo number_format($data['harga'], 0,".","."); ?></strong></p>

		</div>

	</div>
	
</div>

<hr>

<div class="row">

	<div class="col-md-12">

		<div class="panel-body">
			<h3><strong> Deskripsi </strong></h3>
			<p><?php echo $data['deskripsi']; ?></p>
		</div>
		
	</div>
	
</div>

<hr>