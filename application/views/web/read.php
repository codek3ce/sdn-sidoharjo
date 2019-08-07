<div class="col-md-8">	

<?php if (!isset($data_posts_read)){  

	echo "error!!!";	

}else{  

	foreach ($data_posts_read as $row) {

		if($row['posts_image'] != ''){

	            echo'<img class="img-responsive" src="'.$row['posts_image'].'"data-holder-rendered="true" style="">';

	        }else{

	            echo'';

	        }

	    ?>

			<h3><a href="<?=base_url()?>read/<?=$row['posts_id']?>/<?=$row['posts_slug']?>"><?=$row['posts_judul']?></a></h3>

			<p style="font-weight: bold; font-size: 12px;"> By <?=$row['user_nama_depan']?>  -  <?=nama_hari($row['posts_date'])?>, <?=tgl_indo($row['posts_date'])?> / <?=$row['posts_time']?> In <a href="<?=base_url()?>category/<?=$row['category_id']?>/<?=$row['category_slug']?>"><?=$row['category_title']?></a></p>

			<hr/>

			<p><?=$row['posts_isi']?></p>

			<hr/>



			Share : 

			<a href="http://www.twitter.com/home?status=<?=base_url()?>read/<?=$row['posts_id']?>/<?=$row['posts_slug']?>">

			<i class="fa fa-twitter-square fa-fw"></i> </a>

			

			<a href="http://www.facebook.com/sharer.php?u=<?=base_url()?>read/<?=$row['posts_id']?>/<?=$row['posts_slug']?>">

			<i class="fa fa-facebook-square fa-fw"></i> </a>

			

			<a href="https://plus.google.com/share?url=http:<?=base_url()?>read/<?=$row['posts_id']?>/<?=$row['posts_slug']?>">

			<i class="fa fa-google-plus-square fa-fw"></i> </a>



		<?php  

	}  

}?>

</div>

