<div class="row">

    <div class="col-md-12">
        <h2><strong>Data Produk</strong></h2>   
    </div>

</div>

<hr />

<div class="row">

    <div class="col-md-12">

         <div class="panel-body">
            <a href="<?php echo base_url('index.php/admin/toko/formproduk');?>" class="btn btn-success" style="margin-bottom: 15px;"><i class="fa fa-plus" style="margin-right: 5px;"></i>Tambah</a>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Produk</th>
                                <th>Merk Produk</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th>Sunting</th>
                            </tr>
                        </thead>
                        <tbody>

                             <?php $no = 1;
                            foreach ($data->result_array() as $key => $value) { ?>

                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $value['nama']; ?></td>
                                <td><?php echo $value['namamerk']; ?></td>
                                <td><?php echo $value['namakategori']; ?></td>
                                <td>Rp. <?php echo number_format($value['harga'],0,'.','.'); ?></td>
                                <td>
                                    <a href="<?php echo base_url('index.php/admin/toko/detailproduk/').$value['idproduk'];?>" class="btn btn-info"><i class="fa fa-info"></i></a>
                                    <a href="<?php echo base_url('index.php/admin/toko/formproduk/').$value['idproduk'];?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <a href="<?php echo base_url('index.php/admin/toko/hapusproduk/').$value['idproduk'];?>" class="btn btn-danger" onclick='return confirm("Yakin mau dihapus???");'><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>

                            <?php $no++; } ?>

                        </tbody>
                    </table>
                </div>   
        </div>

    </div>

</div>