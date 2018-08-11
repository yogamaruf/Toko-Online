<div class="row">

    <div class="col-md-12">
        <h2><strong>
            <?php if($this->uri->segment(4)) {
                        echo $title1;
                    } else {
                        echo $title;
                    }?>
            </strong></h2>    
    </div>

</div>

<hr />

<div class="row">
    <div class="col-md-12">
        <a href="<?php echo base_url('admin/toko/tabelcustomer');?>" class="btn btn-danger" style="margin-bottom: 15px;"><i class="fa fa-arrow-left" style="margin-right: 5px;"></i>Kembali</a>
    </div>
</div>

<div class="row">

    <div class="col-md-6">

        <div class="panel panel-default">
        <div class="panel-heading">
            <strong>Akun</strong>
        </div>
        <div class="panel-body">
            <form action="<?php echo base_url('admin/toko/simpancustomer');?>" method="post">
                <input type="hidden" name="user" value="<?php echo !empty($data) ? $data['idcustom'] : '' ?>">
                <input type="hidden" name="detail" value="<?php echo !empty($data) ? $data1['idd'] : '' ?>">
                <div class="form-group">
                    <label>Title</label>
                    <select class="form-control" name="title" required="">

                        <?php if (!empty($data)) { ?>
                                <option value="<?php echo !empty($data) ? $data['title'] : '' ?>">
                                    <?php echo !empty($data) ? $data['title'] : '' ?>
                                </option>
                        <?php } ?>

                        <option value="-">-</option>
                        <option value="Mr.">Mr.</option>
                        <option value="Mrs">Mrs</option>
                        <option value="Miss">Miss</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama Depan</label>
                    <input type="text" class="form-control" name="namad" value="<?php echo !empty($data) ? $data['firstname'] : '' ?>" required="">
                </div>
                <div class="form-group">
                    <label>Nama Belakang</label>
                    <input type="text" class="form-control" name="namab" value="<?php echo !empty($data) ? $data['lastname'] : '' ?>" required="">
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" class="form-control" name="email" value="<?php echo !empty($data) ? $data['email'] : '' ?>" required="">
                </div>
                <div class="form-group">
                    <label>Kata Kunci</label>
                    <input type="password" class="form-control" name="pass" value="<?php echo !empty($data) ? $data['password'] : '' ?>" required="">
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control" name="ttl" value="<?php echo !empty($data) ? $data['date'] : '' ?>" required="">
                </div>
                <div class="form-group">
                    <input type="submit" name="akun" value="Simpan" class="btn btn-primary">
                </div>
            </div>
        </div>

    </div>

    <div class="col-md-6">

        <div class="panel panel-default">
        <div class="panel-heading">
            <strong>Detail Akun</strong>
        </div>
        <div class="panel-body">
                <input type="hidden" name="detail" value="<?php echo !empty($data) ? $data1['idd'] : '' ?>">
                <div class="form-group">
                    <label>No. Telp</label>
                    <input type="text" class="form-control" name="notelp" value="<?php echo !empty($data1) ? $data1['notelp'] : '' ?>">
                </div>
                <div class="form-group">
                    <label>No. Rekening</label>
                    <input type="text" class="form-control" name="norekening" value="<?php echo !empty($data1) ? $data1['norekening'] : '' ?>">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="gender">

                        <?php if (!empty($data1)) { ?>
                                <option value="<?php echo !empty($data1) ? $data1['gender'] : '' ?>">
                                    <?php echo !empty($data1) ? $data1['gender'] : '' ?>
                                </option>
                        <?php } ?>

                        <option value="-">-</option>
                        <option value="L">Pria</option>
                        <option value="P">Wanita</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat"><?php echo !empty($data1) ? $data1['alamat'] : '' ?></textarea>
                </div>
                <div class="form-group">
                    <label>Kewarganegaraan</label>
                    <input type="text" class="form-control" name="warga" value="<?php echo !empty($data1) ? $data1['warganegara'] : '' ?>">
                </div>
                <div class="form-group">
                    <label>Kode POS</label>
                    <input type="text" class="form-control" name="kodepos" value="<?php echo !empty($data1) ? $data1['kodepos'] : '' ?>">
                </div><div class="form-group">
                    <label>Kabupaten</label>
                    <input type="text" class="form-control" name="kabupaten" value="<?php echo !empty($data1) ? $data1['kabupaten'] : '' ?>">
                </div>
                <div class="form-group">
                    <label>Provinsi</label>
                    <input type="text" class="form-control" name="provinsi" value="<?php echo !empty($data1) ? $data1['provinsi'] : '' ?>">
                </div>
                <div class="form-group">
                    <input type="submit" name="detailakun" value="Simpan" class="btn btn-primary">
                </div>
            </form>
        </div>
        </div>

    </div>

</div>