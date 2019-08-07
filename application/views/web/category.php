<div class="col-md-7">

    <h2><?=$category?></h2>

    <hr/>

	<?php if (!isset($data_posts_category)){  
        echo "error!!!";	
    }else{  
        foreach ($data_posts_category as $row) {
            ?>
                <h3><a href="<?=base_url()?>read/<?=$row['posts_id']?>/<?=$row['posts_slug']?>"><?=$row['posts_judul']?></a></h3>
                
				<p><span style="font-weight:bold;font-size:11px;"><?=tgl_indo($row['posts_date'])?> / <?=$row['posts_time']?></span>
                <?=substr(strip_tags($row['posts_isi']),0,160)."..."?></p>
				<hr/>
            <?php  
        }  
    }?>
    <b><?=$pages?> </b>

</div>

<div class="col-md-4 col-sm-offset-1">
    
    <header class="divider2">
        <h5 class="topic-sub-title"><a href="#">CATEGORY</a></h5>
    </header> 
    <ul class="list">
    <?php if (!isset($list_category)){  
        echo "error!!!";    
    }else{  
        foreach ($list_category as $row) {
            ?>
            <li>
                <a href="<?=base_url()?>category/<?=$row['category_id']?>/<?=$row['category_slug']?>"><?=$row['category_title']?></a>
            </li>
            <?php  
        }  
    }?>
    </ul>
    
</div>



