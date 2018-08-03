<div class="row">

	<div class="span12">

    	<ul class="breadcrumb">
			<li><a href="<?php echo base_url('index.php/toko/');?>">Home</a> <span class="divider">/</span></li>
			<li class="active"><?php echo $title['judulhal'];?></li>
    	</ul>

		<div class="well">
		
			<h3><?php echo $title1['judulhal'];?></h3>

				<div class="well">

					<div class="control-group">
						<label><strong>Name :</strong></label>
						<div class="controls">
							<?php echo $data['title'];echo ' '.$data['firstname'];echo ' '.$data['lastname']; ?>
						</div>
					</div>
					<div class="control-group">
						<label><strong>Email :</strong></label>
						<div class="controls">
		 					<?php echo $data['email']; ?></p>
						</div>
	    			</div>	  
					<div class="control-group">
						<label><strong>Password :</strong></label>
						<div class="controls">
		  					<?php echo $data['password']; ?>
						</div>
	    			</div>
					<div class="control-group">
						<label><strong>Date of Birth :</strong></label>
						<div class="controls">
							<?php echo $data['date']; ?>
						</div>
	 				</div>
	 				
				</div>

		</div>

	</div>

</div>

<section class="our_client">
	<hr class="soften"/>
	<h4 class="title cntr"><span class="text">Manufactures</span></h4>
	<hr class="soften"/>
	<div class="row">

		<?php foreach ($merk as $key => $value) { ?>

			<div class="span2">
				<a href="<?php echo base_url('index.php/toko/detaillist/').$value['idmerk']; ?>"><img alt="" src="<?php echo base_url(); ?>assets/gambar/merk/<?php echo $value['gambar']; ?>"></a>
			</div>

		<?php } ?>
		
	</div>
</section>