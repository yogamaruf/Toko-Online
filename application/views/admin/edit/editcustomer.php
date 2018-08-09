<div class="row">

    <div class="col-md-12">
        <h2><strong>Edit Customer</strong></h2>   
    </div>

</div>

<hr />

<div class="row">

    <div class="col-md-6">

        <div class="panel-body">

            <form action="<?php echo base_url('admin/toko/ubahcustomer');?>" method="post">

                <?php foreach ($data->result_array() as $key => $value) { ?>

                    <input type="hidden" name="user" value="<?php echo $value['idcustom'];?>">
                    <div class="form-group">
                        <label>Title</label>
                        <select class="form-control" name="title">
                            <option value="<?php echo $value['title'];?>"><?php echo $value['title'];?></option>
                            <option value="-">-</option>
                            <option value="Mr.">Mr.</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Miss">Miss</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Depan</label>
                        <input type="text" class="form-control" name="namad" value="<?php echo $value['firstname'];?>">
                    </div>
                    <div class="form-group">
                        <label>Nama Belakang</label>
                        <input type="text" class="form-control" name="namab" value="<?php echo $value['lastname'];?>">
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="phone" class="form-control" name="email" value="<?php echo $value['email'];?>">
                    </div>
                    <div class="form-group">
                        <label>Kata Kunci</label>
                        <input type="password" class="form-control" name="pass" value="<?php echo $value['password'];?>">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" name="ttl" value="<?php echo $value['date'];?>">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Simpan" class="btn btn-default">
                        <a href="<?php echo base_url('admin/toko/tabelcustomer');?>" class="btn btn-danger">Batal</a>
                    </div>

                <?php } ?>

            </form>
            
        </div>

    </div>

</div>