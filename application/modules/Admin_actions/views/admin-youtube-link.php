<div class="main-panel">
	<?php $this->load->view('admin-top-nav'); ?>
	<div class="content">

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header card-header-icon" data-background-color="purple">
							<i class="material-icons">perm_identity</i>
						</div>
						
						<div class="card-content">
							<h4 class="card-title">Add Convention Live Link
								<!-- <small class="category">Complete your profile</small> -->
							</h4>
							<form action="<?php echo base_url(); ?>youtube-link-submit" method="post" id="youtubelinkform" enctype="multipart/form-data" >
								
								<div class="row">
									<div class="col-md-6 col-md-offset-3">
										<div class="form-group">
											<label class="control-label">Video Title</label>
											<input type="text" required placeholder="Enter Video Title" class="form-control valid" id="Title" name="Title">
										</div>
									</div>

									<div class="col-md-6 col-md-offset-3">
										<div class="form-group">
											<label class="control-label">Video Link</label>
											<input type="text" required placeholder="Enter Video Link" class="form-control valid" id="VideoLink" name="VideoLink">
										</div>
									</div>
									
									<div class="col-md-6 col-md-offset-3">
										<div class="form-group">
											<label class="control-label">Embed Code</label>
											
										</div>
										<textarea rows="3" class="form-control" id="editor1" name="EmbedCode"></textarea>
										
									</div>
									
								</div>

								<button type="submit" class="btn btn-primary pull-right" >Submit</button>
								<div class="clearfix"></div>
							</form>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>