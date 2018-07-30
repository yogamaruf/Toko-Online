<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url(); ?>assets/backend/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url(); ?>assets/backend/assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="<?php echo base_url(); ?>assets/backend/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url(); ?>assets/backend/assets/css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/backend/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Binary admin</a> 
            </div>
            <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;"> 
                <?php 
                    date_default_timezone_set('Asia/Jakarta');
                    echo date('l, d F Y H:i:s'); 
                ?>&nbsp; 
                <a href="<?php echo base_url('index.php/admin/login/logout');?>" class="btn btn-danger square-btn-adjust"><i class="fa fa-sign-out"></i> Logout</a> 
            </div>
        </nav>   

           <!-- /. NAV TOP  -->
        <?php $page = $this->uri->segment(3);?>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				    <li class="text-center">
                        <img src="<?php echo base_url(); ?>assets/backend/assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
                    <li>
                        <a <?php if($page == ''){ echo 'class="active-menu';}?> href="<?php echo base_url('index.php/admin/toko');?>"><i class="fa fa-dashboard fa-2x"></i> Dashboard </a>
                    </li>
                    <li>
                        <a <?php if($page == 'user' || $page == 'formtambahuser' || $page == 'edituser'){ echo 'class="active-menu';}?> href="<?php echo base_url('index.php/admin/toko/user');?>"><i class="fa fa-user fa-2x"></i> User </a>
                    </li>
                    <li>
                        <a <?php if($page == 'halaman' || $page == 'menu' || $page == 'konten' || $page == 'footer' || $page == 'formmenu' || $page == 'formkonten'){ echo 'class="active-menu';}?> href="<?php echo base_url('index.php/admin/toko/halaman');?>"><i class="fa fa-newspaper-o fa-2x"></i> Halaman </a>
                    </li>
                    <li>
                        <a <?php if($page == 'kategori' || $page == 'formtambahkat' || $page == 'editkategori'){ echo 'class="active-menu';}?> href="<?php echo base_url('index.php/admin/toko/kategori');?>"><i class="fa fa-filter fa-2x"></i> Kategori Produk </a>
                    </li>
                    <li>
                        <a <?php if($page == 'merk' || $page == 'formmerk'){ echo 'class="active-menu';}?> href="<?php echo base_url('index.php/admin/toko/merk');?>"><i class="fa fa-inbox fa-2x"></i> Merk Produk </a>
                    </li>
                    <li>
                        <a <?php if($page == 'tabelproduk' || $page == 'formproduk' || $page == 'detailproduk'){ echo 'class="active-menu';}?> href="<?php echo base_url('index.php/admin/toko/tabelproduk');?>"><i class="fa fa-shopping-cart fa-2x"></i>  Produk </a>
                    </li>
                    <li>
                        <a <?php if($page == 'tabelcustomer' || $page == 'formtambahcus' || $page == 'editcustomer' || $page == 'detailprofil'){ echo 'class="active-menu';}?> href="<?php echo base_url('index.php/admin/toko/tabelcustomer');?>"><i class="fa fa-life-buoy fa-2x"></i> Customer </a>
                    </li>	
                    <li>
                        <a <?php if($page == 'order' || $page == 'detailorder' ){ echo 'class="active-menu';}?> href="<?php echo base_url('index.php/admin/toko/order');?>"><i class="fa fa-line-chart fa-2x"></i> Order </a>
                    </li>	
                    <li>
                        <a <?php if($page == 'konfig'){ echo 'class="active-menu';}?> href="<?php echo base_url('index.php/admin/toko/konfig');?>"><i class="fa fa-desktop fa-2x"></i> Konfgurasi WEB </a>
                    </li>		
                </ul>
            </div>   
        </nav>  
         <!-- /. NAV SIDE  -->

        <div id="page-wrapper" >

            <!-- PAGE INNER  -->
            <div id="page-inner">

                <?php echo $konten;?>

            </div>
             <!-- /. PAGE INNER  -->

        </div>
         <!-- /. PAGE WRAPPER  -->

    </div>
     <!-- /. WRAPPER  -->

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/backend/assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/backend/assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/backend/assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="<?php echo base_url(); ?>assets/backend/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/assets/js/morris/morris.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/assets/js/dataTables/bootstrap-popover.js"></script>
    <script>

            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });

            $(document).ready(function() {
                $('#editkat').on('show.bs.modal', function(event) {
                    var div = $(event.relatedTarget)
                    var modal = $(this)

                    modal.find('#id').attr("value",div.data('id'));
                    modal.find('#nama').attr("value",div.data('nama'));
                });
            });

            $(document).ready(function() {
                $('[data-toggle="popover"]').popover();
            });

            $(document).ready(function(){
                $(".close").alert('close');
            });

            function validasi(form) {
                if(form.nama.value == "") {
                    sweetAlert('Nama masih kosong!');
                    form.nama.focus();
                    return (false);
                }

                pola = /^[a-zA-Z0-9\_\-]{9,100}$/;
                if(!pola.test(form.nama.value)) {
                    sweetAlert('Nama minimal 5 karakter');
                    form.nama.focus();
                    return false;
                }

                pola_email = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,4}$/;
                if(!pola_email.test(form.email.value)) {
                    sweetAlert('E-mail yang anda tulis tidak benar atau masih kosong!');
                    form.email.focus();
                    return false;
                }

                if(form.pass.value == "") {
                    sweetAlert('Kata Kunci masih kosong!');
                    form.pass.focus();
                    return (false);
                }

                if(form.repass.value == "") {
                    sweetAlert('Konfirmasi Kata Kunci masih kosong!');
                    form.repass.focus();
                    return (false);
                }
            }

            function cekkunci() {
                var kunci1 = document.getElementById('kunci1');
                var kunci2 = document.getElementById('kunci2');
                var pesan = document.getElementById('confirmMessage');

                if(kunci1.value == kunci2.value) {
                    kunci2.style.backgroundColor = '#66cc66';
                    pesan.style.color = '#66cc66';
                    pesan.innerHTML = 'KATA KUNCI COCOK';
                } else {
                    kunci2.style.backgroundColor = '#ff6666';
                    pesan.style.color = '#ff6666';
                    pesan.innerHTML = 'KATA KUNCI TIDAK COCOK';
                }
            }

    </script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/backend/assets/js/custom.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/assets/js/shop.js"></script>
    
</body>
</html>
