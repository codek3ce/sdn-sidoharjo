

<footer class="footer">

  <div class="container">

    <div class="row">

      <div class="col-sm-3">

        <h4>About</h4>

        <br>

        <p>Akademi Komunitas Negeri Lamongan - Administrator.</p>  

        <hr>    

        <p>&copy; 2014 Admin Themes - Shohibul Amin.</p>

      </div> <!-- /.col -->      

    </div> <!-- /.row -->

  </div> <!-- /.container -->
  
</footer>

  <script src="<?php echo base_url(); ?>assets/a/js/libs/jquery-1.10.1.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/a/js/libs/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/a/js/libs/bootstrap.min.js"></script>

  <!--[if lt IE 9]>
  <script src="<?php echo base_url(); ?>assets/a/js/libs/excanvas.compiled.js"></script>
  <![endif]-->
  
  <!-- Plugin JS -->
  <script src="<?php echo base_url(); ?>assets/a/js/plugins/icheck/jquery.icheck.js"></script>
  <script src="<?php echo base_url(); ?>assets/a/js/plugins/select2/select2.js"></script>
  <script src="<?php echo base_url(); ?>assets/a/js/libs/raphael-2.1.2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/a/js/plugins/morris/morris.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/a/js/plugins/sparkline/jquery.sparkline.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/a/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/a/js/plugins/fullcalendar/fullcalendar.min.js"></script>

  <!-- App JS -->
  <script src="<?php echo base_url(); ?>assets/a/js/target-admin.js"></script>
  
  <!-- Plugin JS -->
  <script src="<?php echo base_url(); ?>assets/a/js/demos/dashboard.js"></script>
  <script src="<?php echo base_url(); ?>assets/a/js/demos/calendar.js"></script>
  <script src="<?php echo base_url(); ?>assets/a/js/demos/charts/morris/area.js"></script>
  <script src="<?php echo base_url(); ?>assets/a/js/demos/charts/morris/donut.js"></script>
  <script src="<?php echo base_url(); ?>assets/a/js/plugins/magnific/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/a/js/plugins/howl/howl.js"></script>

  
  <!-- Plugin JS -->
  <script src="<?php echo base_url(); ?>assets/a/js/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/a/js/plugins/datatables/DT_bootstrap.js"></script>
  <script src="<?php echo base_url(); ?>assets/a/js/plugins/tableCheckable/jquery.tableCheckable.js"></script>
  <script src="<?php echo base_url(); ?>assets/a/js/plugins/icheck/jquery.icheck.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/a/js/demos/ui-notifications.js"></script> 

  <script src="<?php echo base_url(); ?>assets/a/js/bootstrap-tagsinput.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/a/js/bootstrap-tagsinput-angular.min.js"></script>
  
  
  
  
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/a/plugins/ck/ckeditor.js"></script>
  <script>
		$(document).ready(function(){
			$("#btn_browse_image").click(function(){
				window.KCFinder = {
					callBack: function(url) {
						$('#posts_image').val(url);
						window.KCFinder = null;					
					}
				};
				window.open('<?php echo base_url(); ?>assets/a/plugins/media/browse.php?type=images', 'kcfinder_textbox',
					'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
					'resizable=1, scrollbars=0, width=800, height=600'
				);
				return false;
			});
			
			/*$("#btnsubmit").click(function(){
				alert("submit");
				$('#validate').submit();				
			});*/
		});
        var ckeditor = CKEDITOR.replace('ckeditor',{
			height:'400px',
			filebrowserBrowseUrl : '<?php echo base_url(); ?>assets/a/plugins/media/browse.php?type=files',
			filebrowserImageBrowseUrl : '<?php echo base_url(); ?>assets/a/plugins/media/browse.php?type=images',
			filebrowserFlashBrowseUrl : '<?php echo base_url(); ?>assets/a/plugins/media/browse.php?type=flash',
			filebrowserUploadUrl : '<?php echo base_url(); ?>assets/a/plugins/media/upload.php?type=files',
			filebrowserImageUploadUrl : '<?php echo base_url(); ?>assets/a/plugins/media/upload.php?type=images',
			filebrowserFlashUploadUrl : '<?php echo base_url(); ?>assets/a/plugins/media/upload.php?type=flash'		
		});
        CKEDITOR.disableAutoInline = true;
        CKEDITOR.inline('editable');		
    </script>        

  
</body>
</html>
