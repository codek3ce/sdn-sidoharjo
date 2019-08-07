<div class="container">
    <div class="content">
        <div class="content-container">
            <div class="content-header">
                <h2 class="content-header-title">Page</h2>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>blank">Home</a>
                    </li>
                    <li class="active">Page</li>
                </ol>
            </div>
            <!-- /.content-header -->
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet">
                        <div class="portlet-header">
                            <h3><i class="fa fa-table"></i>Manajement Page</h3>
                            <ul class="portlet-tools pull-right">
                                <li><a href="<?php echo base_url(); ?>blank/new_page"><button class="btn btn-sm btn-primary">Add New</button></a></li>
                            </ul>
                        </div>
                        <!-- /.portlet-header -->
                        <div class="portlet-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover table-highlight table-checkable" data-provide="datatable" data-display-rows="10" data-info="true" data-search="true" data-length-change="true" data-paginate="true">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th data-filterable="true" data-sortable="true">Title</th>
                                            <th>Url</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!isset($data_page)){  
											echo "Tidak ada page";  
										}else{
											$no = 1;
											foreach ($data_page as $row) {
											?>                            
											<tr>
												<td style="width: 20px"><?php echo $no; ?></td>
												<td><?=$row['page_title']?><small><em> <a href="<?=base_url()?>page/<?=$row['page_id']?>/<?=$row['page_slug']?>" target="_blank">View</a></em></small></td>
												<td><code><?=base_url()?>page/<?=$row['page_id']?>/<?=$row['page_slug']?></code></td>
												<td style="width: 50px">
												<a href="<?=base_url()?>blank/edit_page/<?=$row['page_id']?>" title="Edit"><i class="fa fa-pencil-square-o fa-fw"></i></a>
												<a href="<?=base_url()?>blank/del_page/<?=$row['page_id']?>" title="Delete" onClick="return confirm('Anda yakin akan Menghaspus PAGE dengan judul : <?=$row[ 'page_title']?> ?..')">
												<i class="fa fa-trash-o"></i>
												</a>
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