<div class="container">
    <div class="content">
        <div class="content-container">
            <div class="content-header">
                <h2 class="content-header-title">event</h2>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>blank">Home</a>
                    </li>
                    <li class="active">Event</li>
                </ol>
            </div>
            <!-- /.content-header -->
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet">
                        <div class="portlet-header">
                            <h3><i class="fa fa-table"></i>Manajement Event</h3>
                            <ul class="portlet-tools pull-right">
                                <li><a href="<?php echo base_url(); ?>blank/new_event"><button class="btn btn-sm btn-primary">Add New</button></a></li>
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
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!isset($data_event)){  
											echo "Tidak ada event";  
										}else{
											$no = 1;
											foreach ($data_event as $row) {
											?>                            
											<tr>
												<td style="width: 20px"><?php echo $no; ?></td>
												<td><?=$row['event_title']?><small><em> <a href="<?=base_url()?>event/<?=$row['event_id']?>/<?=$row['event_slug']?>" target="_blank">View</a></em></small></td>
												<td><?=$row['event_date']?></td>
                                                <td style="width: 50px">
												<a href="<?=base_url()?>blank/edit_event/<?=$row['event_id']?>" title="Edit"><i class="fa fa-pencil-square-o fa-fw"></i></a>
												<a href="<?=base_url()?>blank/del_event/<?=$row['event_id']?>" title="Delete" onClick="return confirm('Anda yakin akan Menghaspus event dengan judul : <?=$row[ 'event_title']?> ?..')">
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