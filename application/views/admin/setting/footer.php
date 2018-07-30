<div class="row">

    <div class="col-md-12">
        <h2><strong>Setting Footer</strong></h2>   
    </div>

</div>

<hr />

<div class="row">

    <div class="col-md-6 col-sm-12 col-xs-12">

        <div class="panel-body">
            <a href="<?php echo base_url('index.php/admin/toko/halaman'); ?>" class="btn btn-danger" style="margin-bottom: 15px;"><i class="fa fa-arrow-left" style="margin-right: 5px;"></i>Kembali</a>
            <img src="<?php echo base_url(); ?>assets/gambar/setting/footer.png" class="img-responsive"><br>

            <form action="<?php echo base_url('index.php/admin/toko/'); ?>" method="POST">

            	<input type="hidden" name="id" value="<?php// echo $menu['idmenu'];?>">
            	<div class="panel-body">
            		<div class="form-group">
                    	<label>Copyright &copy;</label>
                    	<input type="text" name="date" class="form-control" style="width: 60px;" required="" value="2018">
                	</div>
                	<div class="form-group">
                    	<label>Nama Footer</label>
                    	<input type="text" name="nama" class="form-control" required="" placeholder="Enter ..." value="Toko Online by Yoga">
                	</div>
                	<div class="form-group">
                	    <input type="submit" class="btn btn-default" value="Simpan">
                	    <a href="<?php echo base_url('index.php/admin/toko/halaman'); ?>" class="btn btn-danger">Batal</a>
                	</div>
            	</div>

        	</form>

        </div>

    </div>
    
</div>