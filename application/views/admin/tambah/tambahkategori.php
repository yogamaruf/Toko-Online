<div class="row">

    <div class="col-md-12">
        <h2><strong>Tambah Kategori</strong></h2>   
    </div>

</div>

<hr />

<div class="row">

    <div class="col-md-6">

        <div class="panel-body">
            <form action="<?php echo base_url('admin/toko/tambahkategori');?>" method="post">
                <input type="hidden" name="idmerk">
                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type="text" name="nama" class="form-control" required="" placeholder="Enter ...">
                    </div>
                <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-default">
                    <a href="<?php echo base_url('admin/toko/kategori');?>" class="btn btn-danger">Batal</a>
                </div>
            </form>
        </div>

    </div>

</div>