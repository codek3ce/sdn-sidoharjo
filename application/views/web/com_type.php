<div class="col-md-8">

	<?php if (!isset($data_com)){  
        echo "error!!!";	
    }else{  
        foreach ($data_com as $row) {
            ?>
                <h3><a href="<?=base_url()?>com/<?=$row['com_id']?>/<?=$row['com_slug']?>"><?=$row['com_judul']?></a></h3>
                <p style="font-weight: bold; font-size: 12px;"> <?=$row['com_type']?> - <?=nama_hari($row['com_date'])?>, <?=tgl_indo($row['com_date'])?> / <?=$row['com_time']?> </p>
				<p><?=substr(strip_tags($row['com_isi']),0,160)."..."?></p>
				<hr/>
            <?php  
        }  
    }?>
    <b><?=$pages?> </b>

</div>

<div class="col-md-4">
    <div class="box3">
        <div class="icon"><i class="fa fa-newspaper-o"></i></div>
        <div class="title">News & Info</div>
        <div style="padding: 10px; 10px 0 10px">

        <ul class="media-list">
        <?php if (!isset($data_posts_news)){  
            echo "error!!!";    
        }else{  
            foreach ($data_posts_news as $row) {
                ?>
                <li class="media">
                    <div class="media-left">
                      <?php if($row['posts_image'] != ''){
                            echo'<img class="media-object" src="'.$row['posts_image'].'"data-holder-rendered="true" style="width: 64px; height: 64px;">';
                        }else{
                            echo'<img class="media-object" src="'.base_url('assets/images/no-img.png').'" data-holder-rendered="true" style="width: 64px; height: 64px;">';
                        }
                      ?>
                    </div>
                    <div class="media-body">
                      <h5 class="media-heading"><a href="<?=base_url()?>read/<?=$row['posts_id']?>/<?=$row['posts_slug']?>"><?=$row['posts_judul']?></a></h5>
                      <small><?=$row['posts_date']?> <?=$row['posts_time']?></small>
                    </div>
                </li>
                <?php  
            }  
        }?>
        </ul>
        </div>
        <span style="background-color:#333; padding:3px 10px;"><a href="<?php echo base_url();?>category/1/news">View All</a></span>
    </div>

    <div class="box3">
        <div class="icon"><i class="fa fa-calendar"></i></div>
        <div class="title">Student Events</div>
       
        <div class="box">
        <?php if (!isset($data_event)){  
            echo "error!!!";    
        }else{  
            foreach ($data_event as $row) {
                ?>
                <div class="row">
                    <div class="col-md-3 col-xs-4">
                        <div class="event">
                            <p style="background-color:#8BC34A; color:#fff; font-weight:bold;"> <?=nama_hari($row['event_date'])?> </p>
                            <small style="text-align: center;"> <?=tgl_indo($row['event_date'])?> </small>
                        </div>
                    </div>
                    <div class="col-md-9 col-xs-8">
                        <p><a href="<?=base_url()?>event/<?=$row['event_id']?>/<?=$row['event_slug']?>"><?=$row['event_title']?></a></p>
                        <h6><?=substr(strip_tags($row['event_isi']),0,80)."..."?></h6>
                    </div>
                </div> 
                <?php  
            }  
        }?>
        </div> 
    </div>
    
</div>
