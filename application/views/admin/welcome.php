<div class="container">
    <div class="content">
        <div class="content-container">
            <div>
                


            </div>
            <br>
           
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet portlet-table">
                        <div class="portlet-header">                           
							<h3><i class="fa fa-newspaper-o"></i> Recent Posts</h3>
                            <ul class="portlet-tools pull-right">
                                <li>
                                    <a href="<?php echo base_url(); ?>blank/new_posts"><button class="btn btn-sm btn-default">Add New</button></a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.portlet-header -->
                        <div class="portlet-content">
                            <div class="table-responsive">
                                <table id="user-signups" class="table table-striped table-bordered table-checkable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Title</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!isset($data_posts)){ echo "Tidak ada data"; }else{ $no=0 ; foreach ($data_posts as $row) { $no++; ?>
                                        <tr>
                                            <td style="width: 20px;"><?=$no?></td>
                                            <td><?=$row[ 'posts_judul']?> <em><small> <?=$row['category_title']?>  / <?=$row['posts_date']?> </small></em></td>
                                        </tr>
                                        <?php } }?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.portlet-content -->
                        <div class="portlet-footer">
                            <div class="text-right">
                                <a href="<?php echo base_url(); ?>blank/posts"><button class="btn btn-sm btn-primary">All News</button></a>
                            </div>
                        </div>
                        <!-- /.portlet-footer -->
                    </div>
                    <!-- /.portlet -->
                    <div class="portlet portlet-table">
                        <div class="portlet-header">                           
							<h3><i class="fa fa-copy"></i> Recent Pages</h3>
                            <ul class="portlet-tools pull-right">
                                <li>
                                    <button class="btn btn-sm btn-default">Add New</button>
                                </li>
                            </ul>
                        </div>
                        <!-- /.portlet-header -->
                        <div class="portlet-content">
                            <table id="user-signups" class="table table-striped table-bordered table-checkable">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!isset($data_pages)){ echo "Tidak ada data"; }else{ $no=0 ; foreach ($data_pages as $row) { $no++; ?>
                                    <tr>
                                        <td style="width: 20px;"> <?=$no?></td>
                                        <td><?=$row[ 'page_title']?></td>
									</tr>
                                    <?php } }?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.portlet-content -->
                        <div class="portlet-footer">
                            <div class="text-right">
                                <a href="<?php echo base_url(); ?>blank/page"><button class="btn btn-sm btn-primary">All Pages</button></a>
                            </div>
                        </div>
                        <!-- /.portlet-footer -->
                    </div>
                    <!-- /.portlet -->
                    <div class="portlet portlet-table">
                        <div class="portlet-header">                           
							<h3><i class="fa fa-cloud-download"></i> Recent Downloads</h3>
                            <ul class="portlet-tools pull-right">
                                <li>
                                    <button class="btn btn-sm btn-default">Add New</button>
                                </li>
                            </ul>
                        </div>
                        <!-- /.portlet-header -->
                        <div class="portlet-content">
                            <table id="user-signups" class="table table-striped table-bordered table-checkable">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!isset($data_downloads)){ echo "Tidak ada data"; }else{ $no=0 ; foreach ($data_downloads as $row) { $no++; ?>
                                    <tr>
                                        <td style="width: 20px;"><?=$no?></td>
                                        <td><?=$row[ 'download_title']?> <em><small> <?=$row['download_file']?></small></em></td>
									</tr>
                                    <?php } }?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.portlet-content -->
                        <div class="portlet-footer">
                            <div class="text-right">
                                <a href="<?php echo base_url(); ?>blank/download"><button class="btn btn-sm btn-primary">All Download</button></a>
                            </div>
                        </div>
                        <!-- /.portlet-footer -->
                    </div>
                    <!-- /.portlet -->
                </div>
                <!-- /.col -->
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /.content-container -->
    </div>
    <!-- /.content -->
</div>
<!-- /.container -->