<div class="container">
    <div class="content">
        <div class="content-container">
            <div class="content-header">
                <h2 class="content-header-title">Testimoni</h2>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>blank">Home</a></li>
					<li class="active">Testimoni</li>
                </ol>
            </div
            <!-- /.content-header -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="portlet">
                        <div class="portlet-header">
                            <h3><i class="fa fa-table"></i>Add Testimoni</h3>
                        </div> <!-- /.portlet-header -->

                        <div class="portlet-content">

                            <form method="post" action="<?php echo base_url(); ?>blank/save_testimoni">
                                <div class="form-group">
                                    <label for="text-input">Name</label>
                                    <input type="text" id="text-input" class="form-control" name="testimoni_name">
                                </div>
                                <div class="form-group">
                                    <label for="text-input">Testimoni</label>
                                    <textarea class="form-control" name="testimoni_isi"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Save Testimoni</button>
                                </div>
                            </form>

                        </div> <!-- /.portlet-content -->
                    </div> <!-- /.portlet -->
                </div>

                <div class="col-md-12">
                    <div class="portlet">
                        <div class="portlet-header">
                            <h3> <i class="fa fa-table"></i>Manajement Testimoni</h3>
                        </div>
                        <!-- /.portlet-header -->
                        <div class="portlet-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover table-highlight table-checkable" data-provide="datatable" data-display-rows="10" data-info="true" data-search="true" data-length-change="true" data-paginate="true">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th data-filterable="true" data-sortable="true">Name</th>
                                            <th data-filterable="true" data-sortable="true">Testimoni</th>
                                            <th data-sortable="true">Date / Time</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!isset($data_testimoni)){ echo "Tidak ada testimoni"; }else{ $no=1 ; foreach ($data_testimoni as $row) { ?>
                                        <tr>
                                            <td style="width: 20px"><?=$no?></td>
                                            <td><?=$row[ 'testimoni_name']?></td>
                                            <td><?=$row[ 'testimoni_isi']?></td>
                                            <td><?=$row['testimoni_date']?></td>
                                            <td style="width: 50px">
												<a href="<?=base_url()?>blank/del_testimoni/<?=$row['testimoni_id']?>" title="Delete" onClick="return confirm('Anda yakin akan Menghaspus testimoni dari : <?=$row[ 'testimoni_name']?> ?..')"> <i class="fa fa-trash-o"></i></a>
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