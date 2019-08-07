<div class="col-md-8">	
<?php if (!isset($data_event_list)){  
	echo "error!!!";	
}else{  
	foreach ($data_event_list as $row) {
		?>
		<h3><a href="<?=base_url()?>event/<?=$row['event_id']?>/<?=$row['event_slug']?>"><?=$row['event_title']?></a></h3>
	 	<hr/>
	 	<div class="row">
            <div class="col-md-9" style="border-left: 1px solid #eee;">
                <p><h4><?=nama_hari($row['event_date'])?>, <?=tgl_indo($row['event_date'])?></h4></p>
                <p><?=$row['event_isi']?></p>
            </div>
        </div>
        <hr/>
		<?php  
	}  
}?>
</div>
