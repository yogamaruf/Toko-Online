<hr class="soften">

	<div>
		<h1>About us</h1>
	</div>

	<hr class="soften">

	<div class="row">

		<div class="span8">
		  	<h6>
				I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.
		  	</h6>
		  	<p>
				It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.<br>
				<br>
				This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.
				<br><br>
				Sometimes I'm right and I can be wrong. My own beliefs are in my song. The butcher, the banker, the drummer and then, makes no difference what group I'm in. I am everyday people! Yeah. Yeah.<br>
		  	</p>
		</div>

		<div class="span4">
			Monday - Friday<br/>
			09:00am - 09:00pm<br/>
			Saturday<br/>
			09:00am - 07:00pm<br/>
			Sunday<br/>
			12:30pm - 06:00pm<br/>
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