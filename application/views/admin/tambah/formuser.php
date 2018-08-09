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

    <div class="col-md-6">

        <div class="panel-body">

            <form action="<?php echo base_url('admin/toko/simpanuser');?>" method="post">

                    <input type="hidden" name="idadmin" value="<?php echo !empty($data) ? $data['idadmin'] : '' ?>">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo !empty($data) ? $data['username'] : '' ?>">
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="namaleng" value="<?php echo !empty($data) ? $data['namalengkap'] : '' ?>">
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="phone" class="form-control" name="email" value="<?php echo !empty($data) ? $data['email'] : '' ?>">
                    </div>
                    <div class="form-group">
                        <label>Kata Kunci</label>
                        <input type="password" class="form-control" name="pass" id="kunci1" value="<?php echo !empty($data) ? $data['password'] : '' ?>">
                    </div>
                    <div class="form-group">
                        <label>Ulangi Kata Kunci</label>
                        <input type="password" class="form-control" name="repass" id="kunci2" onkeyup="cekkunci(); return false;" value="<?php echo !empty($data) ? $data['password'] : '' ?>">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Simpan" class="btn btn-default">
                        <a href="<?php echo base_url('admin/toko/user');?>" class="btn btn-danger">Batal</a>
                    </div>

            </form>

        </div>

    </div>

</div>