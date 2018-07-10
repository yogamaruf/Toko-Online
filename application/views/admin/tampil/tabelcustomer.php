<div class="row">

    <div class="col-md-12">
        <h2><strong>Data Customer</strong></h2>   
    </div>

</div>

<hr />

<div class="row">

    <div class="col-md-12">

        <div class="panel-body">
            <a href="<?php echo base_url('index.php/admin/toko/formtambahcus');?>" class="btn btn-success" style="margin-bottom: 15px;"><i class="fa fa-plus" style="margin-right: 5px;"></i>Tambah</a>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>E-mail</th>
                                <th>Tanggal Buat</th>
                                <th>Sunting</th>
                            </tr>
                        </thead>
                        <tbody>

                             <?php $no = 1;
                            foreach ($data as $key => $value) { ?>

                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $value['title'];echo " ".$value['firstname'];echo " ".$value['lastname']; ?></td>
                                <td><?php echo $value['email']; ?></td>
                                <td><?php echo $value['date']; ?></td>
                                <td>
                                    <a href="<?php echo base_url('index.php/admin/toko/detailprofil/').$value['idcustom'];?>" class="btn btn-info"><i class="fa fa-info"></i></a>
                                    <a href="<?php echo base_url('index.php/admin/toko/editcustomer/').$value['idcustom'];?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <a href="<?php echo base_url('index.php/admin/toko/hapuscustomer/').$value['idcustom'];?>" class="btn btn-danger" onclick='return confirm("Yakin mau dihapus???");'><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>

                            <?php $no++; } ?>

                        </tbody>
                    </table>
                </div>   
        </div>

    </div>

</div>