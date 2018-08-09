<div class="row">

    <div class="col-md-12">
        <h2><strong>Edit Menu</strong></h2>   
    </div>

</div>

<hr />

<div class="row">

    <div class="col-md-6 col-sm-12 col-xs-12">

        <form action="<?php echo base_url('admin/toko/simpanmenu'); ?>" method="POST">

            <input type="hidden" name="id" value="<?php echo $menu['idmenu'];?>">
            <div class="panel-body">
                <div class="form-group">
                    <label>Nama Menu</label>
                    <input type="text" name="nama" class="form-control" required="" placeholder="Enter ..." value="<?php echo $menu['namamenu'];?>">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-default" value="Simpan">
                    <a href="<?php echo base_url('admin/toko/menu'); ?>" class="btn btn-danger">Batal</a>
                </div>
            </div>

        </form>

    </div>
    
</div>