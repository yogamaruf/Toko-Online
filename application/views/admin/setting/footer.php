<div class="row">

    <div class="col-md-12">
        <h2><strong>Setting Footer</strong></h2>   
    </div>

</div>

<hr />

<div class="row">

    <div class="col-md-6 col-sm-12 col-xs-12">

        <div class="panel-body">
            <a href="<?php echo base_url('admin/toko/halaman'); ?>" class="btn btn-danger" style="margin-bottom: 15px;"><i class="fa fa-arrow-left" style="margin-right: 5px;"></i>Kembali</a>
            <img src="<?php echo base_url(); ?>assets/gambar/setting/footer.png" class="img-responsive"><br>

            <form action="<?php echo base_url('admin/toko/simpanfooter'); ?>" method="POST">
                
            	<input type="hidden" name="id" value="15">
            	<div class="panel-body">
            		<div class="form-group">
                    	<label>Copyright &copy;</label>
                    	<input type="text" class="form-control" name="tahun" style="width: 60px;" required="" value="<?php echo $footer['deskripsi']; ?>">
                	</div>
                	<div class="form-group">
                    	<label>Nama Footer</label>
                    	<input type="text" class="form-control" name="nama" required="" placeholder="Enter ..." value="<?php echo $footer['subjudul']; ?>">
                	</div>
                	<div class="form-group">
                	    <input type="submit" class="btn btn-default" value="Simpan">
                	    <a href="<?php echo base_url('admin/toko/halaman'); ?>" class="btn btn-danger">Batal</a>
                	</div>
            	</div>

        	</form>

        </div>

    </div>
    
</div>