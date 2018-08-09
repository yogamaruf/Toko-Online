<div class="row">

    <div class="col-md-12">
        <h2><strong>Setting Konfig</strong></h2>   
    </div>

</div>

<hr />

<div class="row">

    <div class="col-md-6 col-sm-12 col-xs-12">

        <div class="panel-body">
            <form action="<?php echo base_url('admin/toko/simpankonfig');?>" method="post" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?php echo $set['id']; ?>">
                <div class="form-group">
                    <label>Nama Website</label>
                    <input type="text" name="nama" class="form-control" required="" placeholder="Enter ..." value="<?php echo $set['nama']; ?>">
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" name="email" class="form-control" required="" placeholder="Enter ..." value="<?php echo $set['email']; ?>">
                </div>
                <div class="form-group">
                    <label>No. Telp</label>
                    <input type="text" name="telp" class="form-control" required="" value="<?php echo $set['telp']; ?>">
                </div>
                <div class="form-group">
                    <label>Share</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                        <input type="text" class="form-control" name="share1" placeholder="Facebook" value="<?php echo $set['share1']; ?>">
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                        <input type="text" class="form-control" name="share2" placeholder="Instagram" value="<?php echo $set['share2']; ?>">
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                        <input type="text" class="form-control" name="share3" placeholder="Twitter" value="<?php echo $set['share3']; ?>">
                    </div>
                </div>

        </div>

    </div>

    <div class="col-md-6 col-sm-12 col-xs-12">

        <div class="panel-body">

                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" required="" style="height: 300px;"><?php echo $set['deskripsi']; ?></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-default">
                    <a href="<?php echo base_url('admin/toko/konfig');?>" class="btn btn-danger">Batal</a>
                </div>

            </form>

        </div>

    </div>
    
</div>