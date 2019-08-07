<div class="container">
    <div class="content">
        <div class="content-container">
            <div class="content-header">
                <h2 class="content-header-title">Setting</h2>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>blank">Home</a></li>
					<li class="active">Setting</li>
                </ol>
            </div
            <!-- /.content-header -->
            <div class="row">
                <div class="col-sm-12">


                 <?php if($message != 0 && $message != -1){ ?>
                    <div class="alert alert-success">            
                        <strong>Well done!</strong> Operasi berhasil...
                    </div>
                <?php }else if($message == 0){ ?>
                    <div class="alert alert-error">            
                        <strong>Oh snap (-_-") !</strong> terjadi kesalahan... 
                    </div>
            <?php } ?>


                            <form method="post" action="<?php echo base_url(); ?>blank/save_setting">
                                <div class="form-group">
                                    <label for="text-input">Site Title</label>
                                    <input type="text" id="text-input" class="form-control" name="title" value="<?php echo $setting[0]['web_title']; ?>">
                                </div>
				<div class="form-group">
				    <label for="text-input">Site Image</label>
				    <input type="text" class="form-control" name="image" id="posts_image" value="<?php echo $setting[0]['web_image']; ?>"/>
                                    <button class="btn btn-default btn-sm" id="btn_browse_image">Browse Image</button>
                                </div>
                                <div class="form-group">
                                    <label for="text-input">Site Descripton</label>
                                    <textarea class="form-control" name="description"><?php echo $setting[0]['web_description']; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="text-input">Site Keyword</label>
                                    <textarea class="form-control" name="keyword"><?php echo $setting[0]['web_keyword']; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="text-input">Google Seo</label>
                                    <input type="text" id="text-input" class="form-control" name="seo" value="<?php echo $setting[0]['google_seo']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="text-input">Footer</label>
                                    <textarea class="form-control" name="footer"><?php echo $setting[0]['footer']; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="text-input">Custom CSS</label>
                                    <textarea class="form-control" name="css" rows="5"><?php echo $setting[0]['custom_css']; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Save Setting</button>
                                </div>
                            </form>

                </div>
            </div><!-- /.row -->
        </div><!-- /.content-container -->
    </div><!-- /.content -->
</div><!-- /.container -->