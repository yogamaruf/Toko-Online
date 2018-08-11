<div class="row">

    <div class="col-md-12">
        <h2><strong>Data Merk</strong></h2>   
    </div>

</div>

<hr />

<div class="row">

    <div class="col-md-12">

         <div class="panel-body">
            <a href="<?php echo base_url('admin/toko/formmerk'); ?>" class="btn btn-success" style="margin-bottom: 15px;"><i class="fa fa-plus" style="margin-right: 5px;"></i>Tambah</a>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>ID Merk</th>
                                <th>Nama Merk</th>
                                <th>Sunting</th>
                            </tr>
                        </thead>
                        <tbody>

                             <?php $no = 1;
                            foreach ($data->result_array() as $key => $value) { ?>

                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $value['idmerk']; ?></td>
                                <td><?php echo $value['namamerk']; ?></td>
                                <td>
                                    <a href="#" tdata-trigger="hover" title="Detail Merk" data-container="body" data-toggle="popover" data-html="true" data-content="
                                    
                                    <div class='row'>

                                        <div class='col-md-12'>

                                            <img style='width: 160px; height: 80px;' src='<?php echo base_url(''); ?>assets/gambar/merk/<?php echo $value['gambar']; ?>' class='col-md-12'>

                                        </div>

                                    </div><br>
                                    <div class='row>

                                        <div class='col-md-12'>

                                            <table style='margin: 0 15px 15px 15px; width: 50%;'>
                                                <tr>
                                                    <td style='text-align: left;'>ID</td>
                                                    <td style='text-align: left; width: 15px;'>:</td>
                                                    <td style='text-align: left;'><?php echo $value['idmerk']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td style='text-align: left;'>Nama</td>
                                                    <td style='text-align: left; width: 15px;'>:</td>
                                                    <td style='text-align: left;'><?php echo $value['namamerk']; ?></td>
                                                </tr>
                                            </table>

                                        </div>

                                    </div>" 

                                    data-placement="bottom" class="btn btn-info"><i class="fa fa-info"></i></a>

                                    <a href="<?php echo base_url('admin/toko/formmerk/').$value['idmerk'];?>" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-edit"></i></a>
                                    <a href="<?php echo base_url('admin/toko/hapusmerk/').$value['idmerk'];?>" class="btn btn-danger" onclick='return confirm("Yakin mau dihapus???");'><i class="fa fa-trash" data-toggle="tooltip" data-placement="right" title="Hapus"></i></a>
                                </td>
                            </tr>

                            <?php $no++; } ?>

                        </tbody>
                    </table>
                </div>   
        </div>

    </div>

</div>

