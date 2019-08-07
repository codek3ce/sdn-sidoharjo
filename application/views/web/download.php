<div class="col-md-8">

    <h2>Dowloads</h2>

    <hr/>

	<?php if (!isset($data_download)){  
        echo "error!!!";	
    }else{  
        foreach ($data_download as $row) {
            ?>
                <h3><a href="<?=base_url()?>assets/f/<?=$row['download_file']?>"><?=$row['download_title']?></a></h3>
            	<p><?=$row['download_date']?></p>
            <?php  
        }  
    }?>
</div>