<div class="container">
	<div class="content">
		<div class="content-container">
		
			<div class="content-header">
				<h2 class="content-header-title"><?php if($editor_status == "new"){ ?> Add <?php }else{ ?> Edit <?php } ?> Posts</h2>
				<ol class="breadcrumb">
					<li><a href="<?php echo base_url(); ?>blank">Home</a></li>
					<li><a href="javascript:;">Posts</a></li>
					<li class="active"><?php if($editor_status == "new"){ ?> Add <?php }else{ ?> Edit <?php } ?> Posts</li>
				</ol>
			</div> <!-- /.content-header -->

			<div class="row">
				<form method="post" action="<?php echo base_url(); ?>blank/save_posts">      
					<div class="col-sm-9">
					
                    	<label>Title</label>
						<div class="form-group">
							<input type="text" name="posts_judul" value="<?php echo $posts_judul;?>" class="form-control">
							<small><em>Enter title hire.</em></small>
						</div>
						
						<div class="form-group">
							<textarea name="posts_isi" id="ckeditor" class="form-control"><?php echo $posts_isi;?></textarea>
							<small><em>Enter Article hire.</em></small>
						</div>
	
					</div>

					<div class="col-sm-3">

						<div class="portlet">
							<div class="portlet-header">
								<h3><i class="fa fa-gear"></i>Setting Content</h3>
							</div> <!-- /.portlet-header -->

							<div class="portlet-content">
								
								<label>Status</label>
								<div class="form-group">
									<label class="radio-inline">
									<input type="radio" name="posts_status" id="1" value="1"
									<?php if ($posts_status == "1"){ echo 'checked'; } ?> /> Publish
									</label>
									<label class="radio-inline">
									<input type="radio" name="posts_status" id="1" value="0"
									<?php if ($posts_status == "0"){ echo 'checked'; } ?> /> No Publish
									</label>
								</div>

								<label>Categories</label>       
								<div class="form-group">
									<?php if (!isset($data_category)){  
										echo "error!!!";  
									}else{  
										foreach ($data_category as $row) {  
											?>
											<div class="radio">
												<label>
												<input type="radio" name="category_id" <?php if($row['category_id'] == $category_id){echo'checked';}?>  value="<?=$row['category_id']?>">
												<?=$row['category_title']?>
												</label>
											</div>
											<?php  
										}  
									}?>
								</div>
                                
                                <label>Featured Image</label>
                                <div class="form-group">
                                    <?php
                                        if($posts_image != ""){
                                            echo "<img src='$posts_image' class='img-responsive' style='border: solid 4px #eee;' />";
                                            echo "<input type='hidden' class='validate[required] form-control' name='posts_image' id='posts_image' value='$posts_image'/>";
                                        } else {
                                            echo '<input type="text" class="validate[required] form-control" name="posts_image" id="posts_image"/>';
                                        }
                                    ?>									
                                </div>
                                <div class="form-group">  
                                    <button class="btn btn-default btn-sm" id="btn_browse_image">Browse Image</button>
                                </div>
                                
                                <hr/>   		
                                                         
                                <input type="hidden" value="<?php echo $posts_id; ?>" name="posts_id" />
                                <input type="hidden" value="<?php echo $editor_status; ?>" name="editor_status" />
                                <button type="submit" class="btn btn-primary">Publish Posts</button>
                        	
                            </div><!-- /.portlet-content -->
						</div>        
					</div> <!-- /.col -->
					
				</form>
			</div> <!-- /.row -->
			
		</div> <!-- /.content-container -->
	</div> <!-- /.content -->
</div> <!-- /.container -->
