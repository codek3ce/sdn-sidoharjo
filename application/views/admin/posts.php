<div class="container">
    <div class="content">
        <div class="content-container">
            <div class="content-header">
                <h2 class="content-header-title">Posts</h2>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>blank">Home</a></li>
					<li><a href="javascript:;">Posts</a></li>
					<li class="active">All Posts</li>
                </ol>
            </div>
            <!-- /.content-header -->
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet">
                        <div class="portlet-header">
                            <h3> <i class="fa fa-table"></i>Manajement Posts</h3>
							<ul class="portlet-tools pull-right">
                                <li> <a href="<?php echo base_url(); ?>blank/new_posts"><button class="btn btn-sm btn-primary">Add New</button></a></li>
                            </ul>
                        </div>
                        <!-- /.portlet-header -->
                        <div class="portlet-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover table-highlight table-checkable" data-provide="datatable" data-display-rows="10" data-info="true" data-search="true" data-length-change="true" data-paginate="true">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th data-filterable="true" data-sortable="true">Title</th>
                                            <th data-filterable="true" data-sortable="true">Category</th>
                                            <th data-sortable="true">Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!isset($data_posts)){ echo "Tidak ada Posts"; }else{ $no=1 ; foreach ($data_posts as $row) { ?>
                                        <tr>
                                            <td style="width: 20px"><?=$no?></td>
                                            <td><?=$row[ 'posts_judul']?> <small><em><?=$row['posts_date']?> <a href="<?=base_url()?>read/<?=$row['posts_id']?>/<?=$row['posts_slug']?>" target="_blank">View</a></em></small></td>
                                            <td><?=$row[ 'category_title']?></td>
                                            <td><span class="label <?php if($row['posts_status'] == 'publish'){ echo 'label-success';}else{ echo 'label-danger'; }?>"><?=$row['posts_status']?></span></td>
                                            <td style="width: 50px">
												<a href="<?=base_url()?>blank/edit_posts/<?=$row['posts_id']?>" title="Edit"><i class="fa fa-pencil-square-o fa-fw"></i></a>
												<a href="<?=base_url()?>blank/del_posts/<?=$row['posts_id']?>" title="Delete" onClick="return confirm('Anda yakin akan Menghaspus Posts dengan judul : <?=$row[ 'posts_judul']?> ?..')"> <i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <?php $no++; } }?>
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