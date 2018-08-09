<div class="row">

    <div class="col-md-12">
        <h2><strong>Setting Konten</strong></h2>   
    </div>

</div>

<hr />

<div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">

        <div class="panel-body">
            <a href="<?php echo base_url('admin/toko/halaman'); ?>" class="btn btn-danger" style="margin-bottom: 15px;"><i class="fa fa-arrow-left" style="margin-right: 5px;"></i>Kembali</a>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Menu</th>
                            <th>Judul Halaman</th>
                            <th>Proses</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php $no = 1;
                    foreach ($konten->result_array() as $key => $value) { ?>
    
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $value['namamenu']; ?></td>
                            <td><?php echo $value['judulhal']; ?></td>
                             <td>
                                <a href="<?php echo base_url('admin/toko/formkonten/').$value['id']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                
                    <?php $no++; } ?>

                    </tbody>
                </table>
        </div>

    </div>
    
</div>