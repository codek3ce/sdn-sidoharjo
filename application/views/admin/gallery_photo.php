<div class="container">
	<div class="content">
		<div class="content-container">

			<div class="content-header">
				<h2 class="content-header-title">Photo</h2>
				<ol class="breadcrumb">
					<li><a href="<?php echo base_url(); ?>targetindex.html">Home</a></li>
					<li><a href="javascript:;">Gallery</a></li>
					<li class="active">Photo</li>
				</ol>
			</div> <!-- /.content-header -->
			
			<div class="row">
		  
				<div class="col-sm-4">
					<div class="portlet">
						<div class="portlet-header">
							<h3><i class="fa fa-table"></i>Add Photo</h3>
						</div> <!-- /.portlet-header -->

						<div class="portlet-content">

							<form method="post" action="<?php echo base_url(); ?>blank/save_photo" enctype="multipart/form-data">
								<div class="form-group">
									<label for="text-input">Photo</label>
									<input type="file" id="text-input" class="form-control" name="gallery_data" required>
									<small><em>The name is how it appears on your site.</em></small>
								</div>
								<div class="form-group">
									<label for="text-input">Album</label>
									<select  class="form-control" name="gallery_album_id" required>
										<option value="" disabled selected></option>
									<?php if (!isset($data_gallery_album)){  
											echo "error!!!";  
										}else{
											foreach ($data_gallery_album as $row) {
											?>
										<option value="<?=$row['gallery_album_id']?>"><?=$row['gallery_album_title']?></option>
											<?php
										}
									}?>
									</select>
									<small><em>Select album gallery.</em></small>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary">Save Photo</button>
								</div>
							</form>

						</div> <!-- /.portlet-content -->
					</div> <!-- /.portlet -->
				</div>

				<div class="col-md-8">

					<div class="portlet">
						<div class="portlet-header">
							<h3><i class="fa fa-table"></i>Management Photo</h3>
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
										<?php if (!isset($data_gallery_photo)){  
											echo "error!!!";  
										}else{
											$no=1;
											foreach ($data_gallery_photo as $row) {
											?>                             
											<tr>
												<td style="width: 20px"><?=$no?></td>
												<td><strong><?=$row['gallery_data']?></strong> / <small><?=$row['gallery_album_title']?></small></td>
												<td style="width: 50px"> 
												<a href="<?=base_url()?>blank/del_gallery_photo/<?=$row['gallery_id']?>" title="Delete">
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
