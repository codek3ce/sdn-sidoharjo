<div class="container">
    <div class="content">
        <div class="content-container">
            <div class="content-header">
                <h2 class="content-header-title">Slide</h2>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>blank">Home</a>
                    </li>
                    <li class="active">Slide</li>
                </ol>
            </div>
            <!-- /.content-header -->
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet">
                        <div class="portlet-header">
                            <h3><i class="fa fa-table"></i>Manajement Slide</h3>
                        </div>
                        <!-- /.portlet-header -->
                        <div class="portlet-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover table-highlight table-checkable" data-provide="datatable" data-display-rows="10" data-info="true" data-search="true" data-length-change="true" data-paginate="true">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th data-filterable="true" data-sortable="true">Title</th>
                                            <th>Image</th>
                                            <th>Link</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!isset($data_slide)){  
											echo "Tidak ada slide";  
										}else{
											$no = 1;
											foreach ($data_slide as $row) {
											?>                            
											<tr>
												<td style="width: 20px"><?php echo $no; ?></td>
												<td><?=$row['slide_title']?></td>
                                                <td><?=$row['slide_image']?></code></td>
												<td><?=$row['slide_link']?></code></td>
												<td style="width: 50px">
												<a href="<?=base_url()?>blank/edit_slide/<?=$row['slide_id']?>" title="Edit"><i class="fa fa-pencil-square-o fa-fw"></i></a>
												</td>
											</tr>
											<?php
											$no++;  
											}  
										}?>
                                    </tbody>
                                </table>
                            </div><!-- /.table-responsive -->
                        </div><!-- /.portlet-content -->
                    </div><!-- /.portlet -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.content-container -->
    </div><!-- /.content -->
</div><!-- /.container -->