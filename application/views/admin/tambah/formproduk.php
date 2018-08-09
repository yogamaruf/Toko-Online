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

    <div class="col-md-6 col-sm-12 col-xs-12">

        <div class="panel-body">
            <form action="<?php echo base_url('admin/toko/simpanproduk');?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="idproduk" value="<?php echo !empty($data2) ? $data2['idproduk'] : '' ?>">
                <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" name="nama" class="form-control" required="" placeholder="Enter ..." value="<?php echo !empty($data2) ? $data2['nama'] : '' ?>">
                </div>
                <div class="form-group">
                    <label>Merk Produk</label>
                    <select class="form-control" name="merk">
                        <?php if(!empty($data2)){ ?>
                        <option value="<?php echo !empty($data2) ? $data2['idmerk'] : '' ?>"><?php echo !empty($data2) ? $data2['namamerk'] : '' ?></option>
                        <?php } else { ?>
                        <option value="">Pilih</option>
                        <?php foreach ($data->result_array() as $key => $value) { ?>
                            <option value="<?php echo $value['idmerk']; ?>"><?php echo $value['namamerk']; ?></option>
                        <?php } }?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Kategori Produk</label>
                    <select class="form-control" name="kategori">
                        <?php if(!empty($data2)){ ?>
                        <option value="<?php echo !empty($data2) ? $data2['idkategori'] : '' ?>"><?php echo !empty($data2) ? $data2['namakategori'] : '' ?></option>
                        <?php } else { ?>
                        <option value="">Pilih</option>
                        <?php foreach ($data1 as $key => $value) { ?>
                            <option value="<?php echo $value['idkategori']; ?>"><?php echo $value['namakategori']; ?></option>
                        <?php } }?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" name="harga" class="form-control" required="" placeholder="Enter ..." value="<?php echo !empty($data2) ? $data2['harga'] : '' ?>">
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="img" class="form-control" required="" value="<?php echo !empty($data2) ? $data2['foto'] : '' ?>">
                </div>
        </div>
     </div>

     <div class="col-md-6 col-sm-12 col-xs-12">

        <div class="panel-body">
            <div class="form-group">
                <label>Warna</label>
                <input type="text" name="warna" class="form-control" required="" placeholder="Enter ..." value="<?php echo !empty($data2) ? $data2['warna'] : '' ?>">
            </div>
            <div class="form-group">
                <label>Bahan</label>
                <input type="text" name="bahan" class="form-control" required="" placeholder="Enter ..." value="<?php echo !empty($data2) ? $data2['bahan'] : '' ?>">
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="des" class="form-control" required="" placeholder="Enter ..."><?php echo !empty($data2) ? $data2['deskripsi'] : '' ?></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Simpan" class="btn btn-default">
                <a href="<?php echo base_url('admin/toko/tabelproduk');?>" class="btn btn-danger">Batal</a>
            </div>
            
            </form>

        </div>

    </div>
    
</div>