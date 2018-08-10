<div class="row">

    <div class="col-md-12">
        <h2><strong>Data Order</strong></h2>   
    </div>

</div>

<hr />

<div class="row">

    <div class="col-md-12">

         <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <!--<th>Kode ORDER</th>-->
                                <th>Nama Pelanggan</th>
                                <th>Jumlah ORDER</th>
                                <th>Terakhir ORDER</th>
                                <!--<th>Tanggal</th>
                                <th>Status</th>-->
                                <th>Sunting</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $no = 1;
                            foreach ($data->result_array() as $key => $value) { ?>

                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $value['title'];echo " ".$value['firstname'];echo " ".$value['lastname']; ?></td>
                                <td><?php echo $value['jumorder']; ?></td>
                                <td><?php echo $value['tanggal']; ?></td>
                                <!--<td>Rp. <?php echo number_format($value['nominal'],0,'.','.'); ?></td>
                                <td><?php echo $value['tanggal']; ?></td>
                                <td><?php echo $value['status']; ?></td>-->
                                <td>
                                	<a href="<?php echo base_url('admin/toko/detailorder/').$value['idcustom'];?>" class="btn btn-info"><i class="fa fa-info"></i></a>
                                    <a href="<?php echo base_url('admin/toko/hapusporder/').$value['kodeorder'];?>" class="btn btn-danger" onclick='return confirm("Yakin mau dihapus???");'><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>

                            <?php $no++; } ?>

                        </tbody>
                    </table>
                </div>   
        </div>

    </div>

</div>