<div class="row">

    <div class="col-md-12">
        <h2><strong>Dashboard</strong></h2>   
    </div>

</div>

<hr />
            
<div class="row"> 
        
    <div class="col-md-3 col-sm-12 col-xs-12">     

        <div class="panel panel-primary text-center no-boder bg-color-green">

            <div class="panel-body">
                <div class="col-md-6 col-sm-4 col-xs-12">
                    <i class="fa fa-shopping-cart fa-5x"></i>
                </div>
                <div class="col-md-6 col-sm-4 col-xs-12">
                    <div class="text-box" >
                        <p class="main-text" style="margin-bottom: 20px;text-align: left;display: block;">
                            <?php echo $produk; ?> <br> Data
                        </p>
                    </div>
                </div>
                <p style="margin: 5px 0;font-size: 18px;">
                    <a href="<?php echo base_url('admin/toko/formproduk'); ?>">
                    <i style="border: 1px solid #fff;color: #fff;border-radius: 50px;margin: 0 7px;padding: 2px 4px;" class="fa fa-plus"></i></a>Produk
                </p>
            </div>
            <div style="padding: 0;" class="panel-footer back-footer-green">
               <a style="text-decoration: none; color: #fff;display: block;padding: 10px 0;" href="<?php echo base_url('admin/toko/tabelproduk'); ?>">Lebih banyak...</a>    
            </div>

        </div>

    </div>

    <div class="col-md-3 col-sm-12 col-xs-12">     

        <div class="panel panel-primary text-center no-boder bg-color-green" style="background-color: #DB0630;">

            <div class="panel-body">
                <div class="col-md-6 col-sm-4 col-xs-12">
                    <i class="fa fa-inbox fa-5x"></i>
                </div>
                <div class="col-md-6 col-sm-4 col-xs-12">
                    <div class="text-box" >
                        <p class="main-text" style="margin-bottom: 20px;text-align: left;display: block;">
                            <?php echo $merk; ?> <br> Data
                        </p>
                    </div>
                </div>
                <p style="margin: 5px 0;font-size: 18px;">
                    <a href="<?php echo base_url('admin/toko/formmerk'); ?>">
                    <i style="border: 1px solid #fff;color: #fff;border-radius: 50px;margin: 0 7px;padding: 2px 4px;" class="fa fa-plus"></i></a>Merk
                </p>
            </div>
            <div style="padding: 0;background-color: #a023008f;" class="panel-footer back-footer-green">
               <a style="text-decoration: none; color: #fff;display: block;padding: 10px 0;" href="<?php echo base_url('admin/toko/merk'); ?>">Lebih banyak...</a>    
            </div>

        </div>

    </div>

    <div class="col-md-3 col-sm-12 col-xs-12">     

        <div class="panel panel-primary text-center no-boder bg-color-green" style="background-color: #7c2da7;">

            <div class="panel-body">
                <div class="col-md-6 col-sm-4 col-xs-12">
                    <i class="fa fa-filter fa-5x"></i>
                </div>
                <div class="col-md-6 col-sm-4 col-xs-12">
                    <div class="text-box" >
                        <p class="main-text" style="margin-bottom: 20px;text-align: left;display: block;">
                            <?php echo $kategori; ?> <br> Data
                        </p>
                    </div>
                </div>
                <p style="margin: 5px 0;font-size: 18px;">
                    <a href="<?php echo base_url('admin/toko/formtambahkat'); ?>">
                    <i style="border: 1px solid #fff;color: #fff;border-radius: 50px;margin: 0 7px;padding: 2px 4px;" class="fa fa-plus"></i></a>Kategori
                </p>
            </div>
            <div style="padding: 0;background-color: #5d1e7f;" class="panel-footer back-footer-green">
               <a style="text-decoration: none; color: #fff;display: block;padding: 10px 0;" href="<?php echo base_url('admin/toko/kategori'); ?>">Lebih banyak...</a>    
            </div>

        </div>

    </div>

    <div class="col-md-3 col-sm-12 col-xs-12">     

        <div class="panel panel-primary text-center no-boder bg-color-green" style="background-color: #1675c7;">

            <div class="panel-body">
                <div class="col-md-6 col-sm-4 col-xs-12">
                    <i class="fa fa-life-buoy fa-5x"></i>
                </div>
                <div class="col-md-6 col-sm-4 col-xs-12">
                    <div class="text-box" >
                        <p class="main-text" style="margin-bottom: 20px;text-align: left;display: block;">
                            <?php echo $customer; ?> <br> Data
                        </p>
                    </div>
                </div>
                <p style="margin: 5px 0;font-size: 18px;">
                    <a href="<?php echo base_url('admin/toko/formtambahcus'); ?>">
                    <i style="border: 1px solid #fff;color: #fff;border-radius: 50px;margin: 0 7px;padding: 2px 4px;" class="fa fa-plus"></i></a>Customer
                </p>
            </div>
            <div style="padding: 0; background-color: #0c5798;" class="panel-footer back-footer-green">
               <a style="text-decoration: none; color: #fff;display: block;padding: 10px 0;" href="<?php echo base_url('admin/toko/tabelcustomer'); ?>">Lebih banyak...</a>    
            </div>

        </div>

    </div>

</div>