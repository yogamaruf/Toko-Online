<div class="row">

    <div class="col-md-12">
        <h2><strong>
            <?php if($this->uri->segment(4)) {
                        echo $title1;
                    } else {
                        echo $title;
                    }?>
            </strong></h2>   
    </div>

</div>

<hr />

<div class="row">

    <div class="col-md-6">

        <div class="panel-body">
            <form action="<?php echo base_url('admin/toko/simpanmerk');?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="idmerk" value="<?php echo !empty($data) ? $data['idmerk'] : '' ?>">
                    <div class="form-group">
                        <label>Nama Merk</label>
                        <input type="text" name="nama" class="form-control" required="" placeholder="Enter ..." value="<?php echo !empty($data) ? $data['namamerk'] : '' ?>">
                    </div>
                    <div class="form-group">
                        <label>Pilih Gambar</label>
                        <input type="file" name="gambar" class="form-control" required="" value="<?php echo !empty($data) ? $data['gambar'] : '' ?>">
                    </div>
                <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-default">
                    <a href="<?php echo base_url('admin/toko/merk');?>" class="btn btn-danger">Batal</a>
                </div>
            </form>
        </div>

    </div>

</div>