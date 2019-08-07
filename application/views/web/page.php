<div class="col-md-12">	
<?php if (!isset($data_page)){  
	echo "error!!!";	
}else{  
	foreach ($data_page as $row) {
		if($row['page_image'] != ''){
		 	echo '<img src="'.$row['page_image'].'" class="img-responsive" width="100%"/> <hr/> ';
		}
		?>
			<div style="background-color:#fff; padding:10px 10px 5px 10px;"> <?=$row['page_isi']?> </div>
		<?php  
	}  
}?>

</div>