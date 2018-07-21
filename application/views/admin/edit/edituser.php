<div class="row">

    <div class="col-md-12">
        <h2><strong>Edit User</strong></h2>   
    </div>

</div>

<hr />

<div class="row">

    <div class="col-md-6">

        <div class="panel-body">

            <form action="<?php echo base_url('index.php/admin/toko/ubahuser');?>" method="post">

                <?php foreach ($data->result_array() as $key => $value) { ?>

                    <input type="hidden" name="idadmin" value="<?php echo $value['idadmin']; ?>">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $value['username']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="namaleng" value="<?php echo $value['namalengkap']; ?>">
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="phone" class="form-control" name="email" value="<?php echo $value['email']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Kata Kunci</label>
                        <input type="password" class="form-control" name="pass" id="kunci1" value="<?php echo $value['password']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Ulangi Kata Kunci</label>
                        <input type="password" class="form-control" name="repass" id="kunci2" onkeyup="cekkunci(); return false;" value="<?php echo $value['password']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Simpan" class="btn btn-default">
                        <a href="<?php echo base_url('index.php/admin/toko/user');?>" class="btn btn-danger">Batal</a>
                    </div>

                <?php } ?>

            </form>

        </div>

    </div>

</div>