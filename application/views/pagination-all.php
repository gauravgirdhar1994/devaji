<?php 

if(!empty($data_count) && $data_count > 10) { 

	if(!empty($limit))
		$no_items_in_page = $limit;
	else
		$no_items_in_page = CNST_NO_ITEMS_PER_PAGE;
	// var_dump($data_count);die;
	

	$pages = ceil($data_count / $no_items_in_page);

	
	if($pages > 1)
	{
		$segs = $this->uri->segment_array();

		$current_uri_segment_count = count($segs);
		$current_page_no = end($segs); array_pop($segs);

		if($current_page_no == 1) 
			$prev_page_no = 1;
		else
			$prev_page_no = $current_page_no - 1;

		if($current_page_no == $pages) 
			$next_page_no = $pages;
		else
			$next_page_no = $current_page_no + 1;						

		$part_url = implode('/', $segs);	

		?>
		<div class="row">
			<div class="col-md-12">
				<ul class="pagination pagination-sm pull-right">
					<!-- First Page -->
					<li <?php if($current_page_no == 1) { echo 'class="disabled"'; } ?> >
						<a href="<?php echo site_url($part_url.'/1'); ?>">
							<i class="fa fa-angle-double-left"></i>
						</a>
					</li>
					<!-- previous page -->
					<li <?php if($current_page_no == 1) { echo 'class="disabled"'; } ?> >
						<a href="<?php echo site_url($part_url.'/'.$prev_page_no); ?>">
							<i class="fa fa-angle-left"></i>
						</a>
					</li>
					<?php for($i=1;$i<=$pages;$i++) { ?>

						<!-- page no -->
						<li <?php if($current_page_no == $i) { echo 'class="active"'; } ?> >
							<a href="<?php echo site_url($part_url.'/'.$i); ?>"><?php echo $i; ?></a>
						</li>

						<?php } ?>
						<!-- next page -->
						<li <?php if($current_page_no == $pages) { echo 'class="disabled"'; } ?> >
							<a href="<?php echo site_url($part_url.'/'.$next_page_no); ?>">
								<i class="fa fa-angle-right"></i>
							</a>
						</li>
						<!-- Last Page -->
						<li <?php if($current_page_no == $pages) { echo 'class="disabled"'; } ?> >
							<a href="<?php echo site_url($part_url.'/'.$pages); ?>">
								<i class="fa fa-angle-double-right"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<?php 	} 
		} 
		
		?>