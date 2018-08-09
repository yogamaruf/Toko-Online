<div class="row">

    <div class="col-md-12">
        <h2><strong>Data Kategori</strong></h2>   
    </div>

</div>

<hr />

<div class="row">

    <div class="col-md-12">

         <div class="panel-body">
            <a href="<?php echo base_url('admin/toko/formtambahkat'); ?>" class="btn btn-success" style="margin-bottom: 15px;"><i class="fa fa-plus" style="margin-right: 5px;"></i>Tambah</a>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>ID Kategori</th>
                                <th>Nama Kategori</th>
                                <th>Sunting</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $no = 1;
                            foreach ($data as $key => $value) { ?>

                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $value['idkategori']; ?></td>
                                <td><?php echo $value['namakategori']; ?></td>
                                <td>
                                    <a href="<?php echo base_url('admin/toko/editkategori/').$value['idkategori'];?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <a href="<?php echo base_url('admin/toko/hapuskategori/').$value['idkategori'];?>" class="btn btn-danger" onclick='return confirm("Yakin mau dihapus???");'><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>

                            <?php $no++; } ?>

                        </tbody>
                    </table>
                </div>   
        </div>

    </div>

</div>