<div class="row">

    <div class="col-md-12">
        <h2><strong>Tambah Customer</strong></h2>   
    </div>

</div>

<hr />

<div class="row">

    <div class="col-md-6">

        <div class="panel-body">
            <form action="<?php echo base_url('admin/toko/tambahcustomer');?>" method="post">
                <input type="hidden" name="user">
                <div class="form-group">
                    <label>Title</label>
                    <select class="form-control" name="title" required="">
                        <option value="-">-</option>
                        <option value="Mr.">Mr.</option>
                        <option value="Mrs">Mrs</option>
                        <option value="Miss">Miss</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama Depan</label>
                    <input type="text" class="form-control" name="namad" required="">
                </div>
                <div class="form-group">
                    <label>Nama Belakang</label>
                    <input type="text" class="form-control" name="namab" required="">
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="phone" class="form-control" name="email" required="">
                </div>
                <div class="form-group">
                    <label>Kata Kunci</label>
                    <input type="password" class="form-control" name="pass" required="">
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control" name="ttl" required="">
                </div>
                <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-default">
                    <a href="<?php echo base_url('admin/toko/tabelcustomer');?>" class="btn btn-danger">Batal</a>
                </div>
            </form>
        </div>

    </div>

</div>