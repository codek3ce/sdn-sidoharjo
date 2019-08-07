<div class="container">
	<div class="content">
		<div class="content-container">

			<div class="content-header">
				<h2 class="content-header-title">Album</h2>
				<ol class="breadcrumb">
					<li><a href="<?php echo base_url(); ?>targetindex.html">Home</a></li>
					<li><a href="javascript:;">Gallery</a></li>
					<li class="active">Album</li>
				</ol>
			</div> <!-- /.content-header -->
			
			<div class="row">
		  
				<div class="col-sm-4">
					<div class="portlet">
						<div class="portlet-header">
							<h3><i class="fa fa-table"></i>Add album</h3>
						</div> <!-- /.portlet-header -->

						<div class="portlet-content">

							<form method="post" action="<?php echo base_url(); ?>blank/save_album">
								<div class="form-group">
									<label for="text-input">Title</label>
									<input type="text" id="text-input" class="form-control" value="<?php echo $gallery_album_title; ?>" name="gallery_album_title">
									<small><em>The name is how it appears on your site.</em></small>
								</div>
								<div class="form-group">
									<label for="text-input">Description</label>
									<textarea class="form-control" name="gallery_album_desc"><?php echo $gallery_album_desc; ?></textarea>
									<small><em>Enter descripton album.</em></small>
								</div>
								
                                <div class="form-group">
                                	<label>Album Cover</label>
                                    <?php
                                        if($gallery_album_image != ""){
                                            echo "<img src='$gallery_album_image' class='img-responsive' style='border: solid 4px #eee;' />";
                                            echo "<input type='hidden' class='validate[required] form-control' name='gallery_album_image' id='posts_image' value='$gallery_album_image'/>";
                                        } else {
                                            echo '<input type="text" class="validate[required] form-control" name="gallery_album_image" id="posts_image"/>';
                                        }
                                    ?>									
                                </div>
                                <div class="form-group">  
                                    <button class="btn btn-default btn-sm" id="btn_browse_image">Browse Image</button>
                                </div>
								<div class="form-group">
									<input type="hidden" value="<?php echo $gallery_album_id; ?>" name="gallery_album_id" />
                                	<input type="hidden" value="<?php echo $editor_status; ?>" name="editor_status" />
									<button type="submit" class="btn btn-primary">Save Album</button>
								</div>
							</form>

						</div> <!-- /.portlet-content -->
					</div> <!-- /.portlet -->
				</div>

				<div class="col-md-8">

					<div class="portlet">
						<div class="portlet-header">
							<h3><i class="fa fa-table"></i>Management album</h3>
						</div> <!-- /.portlet-header -->

						<div class="portlet-content">         

							<div class="table-responsive">

								<table class="table table-striped table-bordered table-hover table-highlight table-checkable" data-provide="datatable" data-display-rows="10" data-info="true"
								data-search="true" data-length-change="true"
								data-paginate="true">
									<thead>
										<tr>
											<th>No. </th>
											<th data-filterable="true" data-sortable="true">Name</th>
											<th>Action</th>
										</tr>
										</thead>
									<tbody>
										<?php if (!isset($data_gallery_album)){  
											echo "error!!!";  
										}else{
											$no=1;
											foreach ($data_gallery_album as $row) {
											?>                             
											<tr>
												<td style="width: 20px"><?=$no?></td>
												<td><strong><?=$row['gallery_album_title']?></strong><br/><small><?=$row['gallery_album_desc']?></small></td>
												<td style="width: 50px"><a href="<?=base_url()?>blank/edit_album/<?=$row['gallery_album_id']?>" title="Edit"><i class="fa fa-pencil-square-o fa-fw"></i> </a>  
												<a href="<?=base_url()?>blank/del_album/<?=$row['gallery_album_id']?>" title="Delete">
												<i class="fa fa-trash-o"></i></a></td>
											</tr>
											<?php
											$no++;
											}  
										}?>
									</tbody>
								</table>
							</div> <!-- /.table-responsive -->
						</div> <!-- /.portlet-content -->
					</div> <!-- /.portlet -->
				</div> <!-- /.col -->
			</div> <!-- /.row -->
		</div> <!-- /.content-container -->
	</div> <!-- /.content -->
</div> <!-- /.container -->
