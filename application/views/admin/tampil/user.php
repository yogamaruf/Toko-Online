<div class="row">

    <div class="col-md-12">
        <h2><strong>Data User</strong></h2>   
    </div>

</div>

<hr />

<div class="row">

    <div class="col-md-12">

         <div class="panel-body">
            <a href="<?php echo base_url('admin/toko/formuser');?>" class="btn btn-success" style="margin-bottom: 15px;"><i class="fa fa-plus" style="margin-right: 5px;"></i>Tambah</a>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Nama Lengkap</th>
                                <th>E-mail</th>
                                <th>Kata Kunci</th>
                                <th>Sunting</th>
                            </tr>
                        </thead>
                        <tbody>

                             <?php $no = 1;
                            foreach ($data->result_array() as $key => $value) { ?>

                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $value['username']; ?></td>
                                <td><?php echo $value['namalengkap']; ?></td>
                                <td><?php echo $value['email']; ?></td>
                                <td><?php echo $value['password']; ?></td>
                                <td>
                                    <a href="<?php echo base_url('admin/toko/formuser/').$value['idadmin'];?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <a href="<?php echo base_url('admin/toko/hapusadmin/').$value['idadmin'];?>" class="btn btn-danger" onclick='return confirm("Yakin mau dihapus???");'><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>

                            <?php $no++; } ?>

                        </tbody>
                    </table>
                </div>   
        </div>

    </div>

</div>