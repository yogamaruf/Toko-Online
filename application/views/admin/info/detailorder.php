<div class="row">

    <div class="col-md-12">
        <h2><strong>Detail Order</strong></h2>   
    </div>

</div>

<hr />

<div class="row">

    <div class="col-md-12">

         <div class="panel-body">

            <a href="<?php echo base_url('index.php/admin/toko/order'); ?>" class="btn btn-danger" style="margin-bottom: 15px;"><i class="fa fa-arrow-left" style="margin-right: 5px;"></i>Kembali</a>

                <h4>Nama pelanggan : <strong style="font-style: italic;"><?php echo $nama['title'];echo ' '.$nama['firstname'];echo ' '.$nama['lastname']; ?></strong><!--<small style="float: right;"><strong><?php echo $jumlah['']; ?></strong> Kali Order</small>--></h4>

                <div class="table-responsive">

                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Tanggal ORDER</th>
                                <th>Kode ORDER</th>
                                <th>Nama Produk</th>
                                <th>Jumlah Produk</th>
                                <th>Harga</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $no = 1;
                            foreach ($data->result_array() as $key => $value) { ?>

                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $value['tanggal']; ?></td>
                                <td><?php echo $value['kodeorder']; ?></td>
                                <td><?php echo $value['nama']; ?></td>
                                <td><?php echo $value['jumlah']; ?></td>
                                <td>Rp. <?php echo number_format($value['harga'],0,'.','.'); ?></td>
                                <td>Rp. <?php echo number_format($value['total'],0,'.','.'); ?></td>
                            </tr>

                            <?php $no++; } ?>

                        </tbody>
                    </table>
                </div>   
        </div>

    </div>

</div>