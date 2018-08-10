<div class="row">

    <div class="col-md-12">
        <h2><strong>Detail Order</strong></h2>   
    </div>

</div>

<hr />

<div class="row">

    <div class="col-md-12">

         <div class="panel-body">

            <a href="<?php echo base_url('admin/toko/order'); ?>" class="btn btn-danger" style="margin-bottom: 15px;"><i class="fa fa-arrow-left" style="margin-right: 5px;"></i>Kembali</a>

                <h4>Nama pelanggan : <strong style="font-style: italic;"><?php echo $nama['title'];echo ' '.$nama['firstname'];echo ' '.$nama['lastname']; ?></strong><small style="float: right;"><strong><?php echo $data->num_rows(); ?></strong> Kali Order</small></h4>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Tanggal</th>
                                <th>Kode ORDER</th>
                                <th>Nama Produk</th>
                                <th>Jumlah Produk</th>
                                <th>Harga</th>
                                <th>Total</th>
                                <th>Total Bayar</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $no = 1;
                            foreach ($data->result_array() as $key => $value) { ?>
                            <tr <?php if ($value['status'] == 'Belum bayar') {
                                echo "style='color: red;font-weight:bold;'";
                            } ?>>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $value['tglorder']; ?></td>
                                <td><?php echo $value['kodeorder']; ?></td>
                                <td style="text-align: left;"><?php echo $value['nama']; ?></td>
                                <td><?php echo $value['jumlah']; ?></td>
                                <td><?php echo $value['harga']; ?></td>
                                <td><?php echo $value['total']; ?></td>
                                <td style="font-weight: bold;"><?php echo $value['nominal']; ?></td>
                            </tr>

                            <?php $no++; } ?>

                        </tbody>
                    </table>
                </div><br>
                <label style="border: 1px solid red;background-color: red;color:red;width: 20px;height: 20px;">a</label> <label> Belum Bayar</label><br>
                <label style="border: 1px solid #444;background-color: #444;color:#444;width: 20px;height: 20px;">a</label> <label> Sudah Bayar</label> 
        </div>

    </div>

</div>