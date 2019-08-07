			</div>
			<div class="row blog-footer">
				<div class="col-sm-2">
					<h4>Menu</h4>
					<ul class="footer">
						<?php if (!isset($data_menu)){  
						echo "error!!!";	
						}else{  
						foreach ($data_menu as $row) {
						?>
						<li><a href="<?=$row['menu_link']?>"> <?=$row['menu_title']?> </a></li>
						<?php
						}
						}?>
					</ul>
				</div>
				<div class="col-sm-2">
					<h4>Link Luar</h4>
					<ul class="footer">
						<li><a href="http://lamongankab.go.id/" target="_blank">Lamongan Kab.</a></li>
						<li><a href="http://disdik.lamongankab.go.id/" target="_blank">Dinas Pendidikan</a></li>
						<li><a href="http://www.kemdikbud.go.id/" target="_blank">Kemdikbud</a></li>
					</ul>
				</div>
				<div class="col-sm-2">
					<h4>Fasilitas</h4>
					<ul class="footer">
						<li><a>Mushola</a></li>
						<li><a>Ruang Kelas</a></li>
						<li><a>Laboratorium</a></li>
						<li><a>Perpustakaan</a></li>
					</ul>
				</div>
				<div class="col-sm-4 col-sm-offset-2">
                                        <?php echo $setting[0]['footer']; ?>
					
					<div class="copyright">
						<p>Hak Cipta © 2015 By <a href="http://codekece.com">Codekece.com</a></p>
					</div>
				</div>
			</div>
		</div>

		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/fancybox/jquery.fancybox.pack.js"></script>
		<script type="text/javascript">
			$(document).ready( function() {
			    // Don't execute if we're in the Live Editor
			    if( !window.isCMS ) {
			        // Group images by gallery using `data-fancybox-group` attributes
			        var galleryId = 1;
			        $('.gallery').each( function() {
			            $(this).find('a').attr('data-fancybox-group', 'gallery-' + galleryId++);
			        });
			        // Initialize Fancybox
			        $('.gallery a').fancybox({
			            // Use the `alt` attribute for captions per http://fancyapps.com/fancybox/#useful
			            beforeShow: function() {
			                var alt = this.element.find('img').attr('alt');
			                this.inner.find('img').attr('alt', alt);
			                this.title = alt;
			            }
			        });
			    }
			});
		</script>

		<script src="<?php echo base_url(); ?>assets/w/js/masonry.pkgd.min.js"></script>

		<script>
			docReady( function() {
			  var msnry = new Masonry( '#masonry', {
			    isFitWidth: true,
			    columnWidth: 0
			  });
			});
		</script>

	</body>
</html>