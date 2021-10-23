<section class="section-erp">
	<div class="overlay-internal"></div>
	<div class="row">
		<div class="mx-auto">
			<h1 class="text-center">Blog</h1>
			<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod eiusmod</p>
		</div>
	</div>
</section>

<section class="details-card">
	
	<div class="container">
		<div class="row">
			<?php if(!empty($blogData)) foreach ($blogData as $blog) { ?>
				<div class="col-md-4">
					<div class="card-content">
						<div class="card-img">
							<img src="<?php echo base_url(); ?>uploads/blogs/<?php echo $blog->PostFeaturedImage; ?>" height=400 width="500" alt="">

						</div>
						<div class="card-desc">
							<h3><?php if(!empty($blog->BlogTitle)) echo $blog->PostTitle; ?></h3>
							<p><?php if(!empty($blog->PostSummary)) echo $blog->PostSummary; ?></p>
							<a href="<?php echo base_url();?>single-blog/<?php if(!empty($blog->PostId)) echo $blog->PostId ;?>" class="btn btn-primary btn-baff">Read</a>   
						</div>
					</div>
				</div>
				<?php } ?>

			</div>
		</div>
	</section>