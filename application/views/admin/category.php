<div class="container">
	<div class="content">
		<div class="content-container">

			<div class="content-header">
				<h2 class="content-header-title">Category</h2>
				<ol class="breadcrumb">
					<li><a href="<?php echo base_url(); ?>blank">Home</a></li>
					<li><a href="javascript:;">News</a></li>
					<li class="active">Category</li>
				</ol>
			</div> <!-- /.content-header -->
			
			<div class="row">
		  
				<div class="col-sm-4">
					<div class="portlet">
						<div class="portlet-header">
							<h3><i class="fa fa-table"></i>Add Category</h3>
						</div> <!-- /.portlet-header -->

						<div class="portlet-content">

							<form method="post" action="<?php echo base_url(); ?>blank/save_category">
								<div class="form-group">
									<label for="text-input">Title</label>
									<input type="text" id="text-input" class="form-control" value="<?php echo $category_title; ?>" name="category_title">
									<small><em>The name is how it appears on your site.</em></small>
								</div>
								<div class="form-group">
									<input type="hidden" value="<?php echo $category_id; ?>" name="category_id" />
                                	<input type="hidden" value="<?php echo $editor_status; ?>" name="editor_status" />
									<button type="submit" class="btn btn-primary">Save Category</button>
								</div>
							</form>

						</div> <!-- /.portlet-content -->
					</div> <!-- /.portlet -->
				</div>

				<div class="col-md-8">

					<div class="portlet">
						<div class="portlet-header">
							<h3><i class="fa fa-table"></i>Management Category</h3>
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
										<?php if (!isset($data_category)){  
											echo "Tidak ada berita";  
										}else{
											$no=1;
											foreach ($data_category as $row) {
											?>                             
											<tr>
												<td style="width: 20px"><?=$no?></td>
												<td><strong><?=$row['category_title']?></strong></td>
												<td style="width: 50px"><a href="<?=base_url()?>blank/edit_category/<?=$row['category_id']?>" title="Edit"><i class="fa fa-pencil-square-o fa-fw"></i> </a>  
												<a href="<?=base_url()?>blank/del_category/<?=$row['category_id']?>" title="Delete">
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
