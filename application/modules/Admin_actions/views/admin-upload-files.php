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
							<h4 class="card-title">Upload Files
								<!-- <small class="category">Complete your profile</small> -->
							</h4>
							<form action="<?php echo base_url(); ?>upload-files-submit" method="post" id="uploadfilesform" enctype="multipart/form-data" >
								
								<div class="row">
									<div class="col-md-6 col-md-offset-3">
										<div class="form-group">
											<label class="control-label">Section</label>
											<select class="form-control" id="tabAlias" name="TabAlias">
												<?php foreach ($sections as $section) { if($section->TabAlias != 'youtubeStream') { ?>
													<option value="<?php if(!empty($section->TabAlias)) echo $section->TabAlias; ?>"><?php if(!empty($section->TabName)) echo $section->TabName; ?></option>
												<?php } } ?>
											</select>
										</div>
									</div>

									<div class="col-md-6 col-md-offset-3">
										<div class="form-group">
											<label class="control-label">Title</label>
											<input type="text" placeholder="Enter Title" class="form-control valid" id="Title" name="Title">
										</div>
									</div>

									<div class="col-md-6 col-md-offset-3" id="imageBlock">
										<legend>File</legend>
										<div class="fileinput fileinput-new text-center" data-provides="fileinput">

											<div class="fileinput-preview fileinput-exists thumbnail"></div>
											<div>
												<span class="btn btn-rose btn-round btn-file">
													<span class="fileinput-new">Select file</span>
													<span class="fileinput-exists">Change</span>
													<input type="file" name="MediaFile" id="imageupload">
												</span>
												<a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
											</div>
											<label id="filename"></label>

											<div class="fileinput-new thumbnail img-responsive img-center" >
												<img id="img-upload" src="<?php echo base_url(); ?>assets/images/image_placeholder.jpg" alt="...">
											</div>
										</div>
										<!-- <div class="row">
											<span class="text-danger">**For best results upload an image of size 785px X 320px</span>
										</div> -->
										
									</div>

									<div class="col-md-6 col-md-offset-3 hide" id="editorBlock">
										<div class="form-group">
											<label class="control-label">Embed Code</label>
											
										</div>
										<textarea rows="3" class="form-control" id="editor1" name="EmbedCode"></textarea>
										
									</div>
									
								</div>

								<button type="submit" class="btn btn-primary pull-right" id="upload-btn" disabled>Submit File</button>
								<div class="clearfix"></div>
							</form>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>