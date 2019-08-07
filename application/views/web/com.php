<div class="col-md-8">	
<?php if (!isset($data_com_read)){  
	echo "error!!!";	
}else{  
	foreach ($data_com_read as $row) {
		if($row['com_image'] != ''){
	            echo'<img class="img-responsive" src="'.$row['com_image'].'"data-holder-rendered="true" style="">';
	        }else{
	            echo'';
	        }
	    ?>
			<h3><a href="<?=base_url()?>com/<?=$row['com_id']?>/<?=$row['com_slug']?>"><?=$row['com_judul']?></a></h3>
			<p style="font-weight: bold; font-size: 12px;"> <?=$row['com_type']?> - <?=nama_hari($row['com_date'])?>, <?=tgl_indo($row['com_date'])?> / <?=$row['com_time']?></p>
			<hr/>
			<p><?=$row['com_isi']?></p>
			<hr/>

			Share : 
			<a href="http://www.twitter.com/home?status=+<?=$row['com_judul']?>+http:<?=base_url()?>com/<?=$row['com_id']?>/<?=$row['com_slug']?>">
			<i class="fa fa-twitter-square fa-fw"></i> </a>
			
			<a href="http://www.facebook.com/sharer.php?u=http:<?=base_url()?>com/<?=$row['com_id']?>/<?=$row['com_slug']?>">
			<i class="fa fa-facebook-square fa-fw"></i> </a>
			
			<a href="https://plus.google.com/share?url=http:<?=base_url()?>com/<?=$row['com_id']?>/<?=$row['com_slug']?>">
			<i class="fa fa-google-plus-square fa-fw"></i> </a>

		<?php  
	}  
}?>
</div>
