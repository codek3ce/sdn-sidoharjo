<div class="container">
	<div class="content">
		<div class="content-container">
		
			<div class="content-header">
				<h2 class="content-header-title"><?php if($editor_status == "new"){ ?> Add <?php }else{ ?> Edit <?php } ?> Page</h2>
				<ol class="breadcrumb">
					<li><a href="<?php echo base_url(); ?>blank">Home</a></li>
					<li><a href="javascript:;">Page</a></li>
					<li class="active"><?php if($editor_status == "new"){ ?> Add <?php }else{ ?> Edit <?php } ?> Page</li>
				</ol>
			</div> <!-- /.content-header -->

			<div class="row">
				<form method="post" action="<?php echo base_url(); ?>blank/save_page">      
					<div class="col-sm-9">
					
                    	<label>Title *</label>
						<div class="form-group">
							<input type="text" name="page_title" value="<?php echo $page_title;?>" class="form-control" required="required" />
							<small><em>Enter title hire.</em></small>
						</div>
						
						<label>Content *</label>
                        <div class="form-group">
							<textarea name="page_isi" id="ckeditor" class="form-control" required="required"><?php echo $page_isi;?></textarea>
							<small><em>Enter Article hire.</em></small>
						</div>
                        
                         
					
					</div>

					<div class="col-sm-3">
						<div class="portlet">
							<div class="portlet-header">
								<h3><i class="fa fa-gear"></i>Setting Content</h3>
							</div> <!-- /.portlet-header -->

							<div class="portlet-content">
                                <label>Featured Image</label>
                                <div class="form-group">
                                    <?php
                                        if($page_image != ""){
                                            echo "<img src='$page_image' class='img-responsive' style='border: solid 4px #eee;' />";
                                            echo "<input type='hidden' class='validate[required] form-control' name='page_image' id='posts_image' value='$page_image'/>";
                                        } else {
                                            echo '<input type="text" class="validate[required] form-control" name="page_image" id="posts_image"/>';
                                        }
                                    ?>									
                                </div>
                                <div class="form-group">  
                                    <button class="btn btn-default btn-sm" id="btn_browse_image">Browse Image</button>
                                </div>
                                
                                <hr/>   		
                                                         
                                <input type="hidden" value="<?php echo $page_id; ?>" name="page_id" />
		                        <input type="hidden" value="<?php echo $editor_status; ?>" name="editor_status" />
		                        <button type="submit" class="btn btn-primary">Publish Page</button>
                        	
                            </div><!-- /.portlet-content -->
						</div>        
					</div> <!-- /.col -->
					
				</form>
			</div> <!-- /.row -->
			
		</div> <!-- /.content-container -->
	</div> <!-- /.content -->
</div> <!-- /.container -->
