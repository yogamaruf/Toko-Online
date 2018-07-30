<div class="row">

    <div class="col-md-12">
        <h2><strong>Edit Konten</strong></h2>   
    </div>

</div>

<hr />

<div class="row">

    <div class="col-md-6 col-sm-12 col-xs-12">

        <form action="<?php echo base_url('index.php/admin/toko/simpankonten'); ?>" method="POST">

            <p>Termasuk bagian MENU <strong style="font-style: italic;"><?php echo $konten['namamenu']; ?></strong></p>
            <input type="hidden" name="id" value="<?php echo $konten['id'];?>">
            <input type="hidden" name="idmenu" value="<?php echo $konten['idmenu'];?>">
            <div class="panel-body">
                <div class="form-group">
                    <label>Judul Halaman</label>
                    <input type="text" name="judul" class="form-control" required="" placeholder="Enter ..." value="<?php echo $konten['judulhal'];?>">
                </div>
                <div class="form-group">
                    <label>Sub Judul</label>
                    <input type="text" name="subjudul" class="form-control" placeholder="Enter ..." value="<?php echo $konten['subjudul'];?>">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="des" class="form-control" placeholder="Enter ..." style="height: 150px;"><?php echo $konten['deskripsi'];?></textarea> 
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-default" value="Simpan">
                    <a href="<?php echo base_url('index.php/admin/toko/konten'); ?>" class="btn btn-danger">Batal</a>
                </div>
            </div>

        </form>

    </div>
    
</div>