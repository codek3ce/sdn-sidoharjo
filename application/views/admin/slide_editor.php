<div class="container">
	<div class="content">
		<div class="content-container">

			<div class="content-header">
				<h2 class="content-header-title">Edit Slide</h2>
				<ol class="breadcrumb">
					<li><a href="<?php echo base_url(); ?>targetindex.html">Home</a></li>
					<li><a href="javascript:;">Slide</a></li>
					<li class="active">Edit Slide</li>
				</ol>
			</div> <!-- /.content-header -->
			
			<div class="row">
		  
				<div class="col-sm-12">
					<div class="portlet">
						<div class="portlet-header">
							<h3><i class="fa fa-table"></i>Edit Slide</h3>
						</div> <!-- /.portlet-header -->

						<div class="portlet-content">

							<form method="post" action="<?php echo base_url(); ?>blank/save_slide">
								<div class="form-group">
									<label for="text-input">Title</label>
									<input type="text" id="text-input" class="form-control" value="<?php echo $slide_title; ?>" name="slide_title">
								</div>

                                <div class="form-group">
                                	<label>Slide Image</label>
                                    <input type='text' class='validate[required] form-control' name='slide_image' id='posts_image' value='<?php echo $slide_image; ?>'/>								
                                </div>
                                <div class="form-group">  
                                    <button class="btn btn-default btn-sm" id="btn_browse_image">Browse Image</button>
                                </div>
                                <div class="form-group">
									<label for="text-input">Link</label>
									<textarea class="form-control" name="slide_link"><?php echo $slide_link; ?></textarea>
								</div>
								<div class="form-group">
									<input type="hidden" value="<?php echo $slide_id; ?>" name="slide_id" />
									<button type="submit" class="btn btn-primary">Save Slide</button>
								</div>
							</form>

						</div> <!-- /.portlet-content -->
					</div> <!-- /.portlet -->
				</div>
			</div> <!-- /.row -->
		</div> <!-- /.content-container -->
	</div> <!-- /.content -->
</div> <!-- /.container -->
