<div class="row">

	<div class="span12">

		<hr class="soften">

		<div class="well well-small">

			<h1><?php echo $kontak['judulhal']; ?></h1>

			<hr class="soften"/>	

			<div class="row-fluid">

				<div class="span8 relative">

					<div class="absoluteBlk">
						<div class="well wellsmall">
							<h4><?php echo $kontak['subjudul']; ?></h4>
							<h5>
								<?php echo $kontak['deskripsi']; ?>
							</h5>
						</div>
					</div>

				</div>
		
				<div class="span4">

					<h4>Email Us</h4>

					<form class="form-horizontal">

    	    			<fieldset>
        	  				<div class="control-group">
            	  				<input type="text" placeholder="name" class="input-xlarge"/>
           					</div>
		   					<div class="control-group">
              					<input type="text" placeholder="email" class="input-xlarge"/>
           					</div>
		   					<div class="control-group">
              					<input type="text" placeholder="subject" class="input-xlarge"/>
          					</div>
          					<div class="control-group">
              					<textarea rows="3" id="textarea" class="input-xlarge"></textarea>
           					</div>

            				<button class="shopBtn" type="submit">Send email</button>
        				</fieldset>

      				</form>

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
				<a href="<?php echo base_url('toko/detaillist/').$value['idmerk']; ?>"><img alt="" src="<?php echo base_url(); ?>assets/gambar/merk/<?php echo $value['gambar']; ?>"></a>
			</div>

		<?php } ?>
		
	</div>
</section>