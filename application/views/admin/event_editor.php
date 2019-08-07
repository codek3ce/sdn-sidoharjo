<div class="container">
	<div class="content">
		<div class="content-container">
		
			<div class="content-header">
				<h2 class="content-header-title"><?php if($editor_status == "new"){ ?> Add <?php }else{ ?> Edit <?php } ?> event</h2>
				<ol class="breadcrumb">
					<li><a href="<?php echo base_url(); ?>blank">Home</a></li>
					<li><a href="javascript:;">event</a></li>
					<li class="active"><?php if($editor_status == "new"){ ?> Add <?php }else{ ?> Edit <?php } ?> event</li>
				</ol>
			</div> <!-- /.content-header -->

			<div class="row">
				<form method="post" action="<?php echo base_url(); ?>blank/save_event">      
					<div class="col-sm-12">
					
                    	<label>Title *</label>
						<div class="form-group">
							<input type="text" name="event_title" value="<?php echo $event_title;?>" class="form-control" required="required" />
							<small><em>Enter title hire.</em></small>
						</div>

						<label>Date *</label>
						<div class="form-group">
							<input type="text" name="event_date" value="<?php echo $event_date;?>" class="form-control" placeholder="Ex: 2015/02/31" required="required" />
							<small><em>Enter event date format: YYYY/MM/DD</em></small>
						</div>
						
						<label>Decribtion *</label>
                        <div class="form-group">
							<textarea name="event_isi" id="ckeditor" class="form-control" required="required"><?php echo $event_isi;?></textarea>
							<small><em>Enter Article hire.</em></small>
						</div>
                        
                        <hr/>   		
                                                         
                        <input type="hidden" value="<?php echo $event_id; ?>" name="event_id" />
                        <input type="hidden" value="<?php echo $editor_status; ?>" name="editor_status" />
                        <button type="submit" class="btn btn-primary">Publish event</button>
					
					</div>
					
				</form>
			</div> <!-- /.row -->
			
		</div> <!-- /.content-container -->
	</div> <!-- /.content -->
</div> <!-- /.container -->
