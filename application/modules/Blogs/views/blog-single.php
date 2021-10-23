<section class="section-erp" style="background: url(<?php echo base_url(); ?>'img/blog-banner-2.jpg'); background-size: cover;height: 350px;">
	<div class="overlay-internal"></div>
	<div class="row">
		<div class="mx-auto mt-10">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
		</div>
	</div>
</section>

<section class="details-card">
	
	<div class="container">
		<div class="row">
			<?php if(!empty($singleblogData)) foreach ($singleblogData as $singleblog) { ?>
				<div class="col-md-8">
					<h2><?php if(!empty($singleblog->PostTitle)) echo $singleblog->PostTitle; ?></h2>
					<p><?php if(!empty($singleblog->PostDescription)) echo $singleblog->PostDescription ;?> </p>
					<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5" width="100%"></div>
				</div>

				<div class="col-md-4">



					<h3>You may also read</h3>	
					<ul class="sidebar">
						<?php foreach ($recentblogData as $blog) { ?>
							<li><a href="<?php if(!empty($blog->PostId)) echo $blog->PostId; ?>"><?php if(!empty($blog->PostTitle)) echo $blog->PostTitle; ?></a></li>
							<?php } ?>


						</ul>													
					<!-- <ul class="sidebar">
						<li><a href="#">Blog Heading 1</a></li>
						<li><a href="#">Blog Heading 2</a></li>
						<li><a href="#">Blog Heading 3</a></li>
						<li><a href="#">Blog Heading 4</a></li>
						<li><a href="#">Blog Heading 5</a></li>
						<li><a href="#">Blog Heading 6</a></li>
						<li><a href="#">Blog Heading 7</a></li>

					</ul> -->

					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FBaffleSol%2F&tabs=timeline&width=340&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=1173730016042675" width="340" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>

				</div>
				<?php }?>
			</div>
		</div>
	</section>

