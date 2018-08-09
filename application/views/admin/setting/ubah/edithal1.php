<div class="row">

    <div class="col-md-12">
        <h2><strong>Setting Menu</strong></h2>   
    </div>

</div>

<hr />

<div class="row">

    <div class="col-md-6 col-sm-12 col-xs-12">

        <div class="panel-body">
            <form action="<?php echo base_url('admin/toko/simpanhal');?>" method="post">

                <input type="hidden" name="idmenu" value="<?php echo $set['idmenu']; ?>">
                <div class="form-group">
                    <label>Nama Menu</label>
                    <input type="text" name="nama" class="form-control" required="" placeholder="Enter ..." value="<?php echo $set['namamenu']; ?>">
                </div><br>
                <div class="form-group">
                    <label>Detail Halaman</label>

                    <?php foreach ($data as $key => $value) { ?>

                        <hr>
                        <div class="form-group">
                            <input type="text" name="id" value="<?php echo $value['id']; ?>">
                            <label style="font-style: italic;">Judul Halaman</label>
                            <input type="text" name="judul" class="form-control" required="" placeholder="Enter ..." value="<?php echo $value['judulhal']; ?>">
                        </div>
                        <div class="form-group">
                            <label style="font-style: italic;">Deskripsi</label>
                            <textarea name="des" class="form-control" placeholder="Enter ..."><?php echo $value['isi3']; ?></textarea>
                            </div>

                    <?php } ?>

                </div>

                <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-default">
                    <a href="<?php echo base_url('admin/toko/halaman');?>" class="btn btn-danger">Batal</a>
                </div>

            </form>

        </div>

    </div>
    
</div>