<div class="col-md-8">

    <h2>Student Event</h2>
    <hr/>
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
                    <p style="font-size:24px;"><a href="<?=base_url()?>event/<?=$row['event_id']?>/<?=$row['event_slug']?>"><?=$row['event_title']?></a></p>
                    <p><?=substr(strip_tags($row['event_isi']),0,160)."..."?></p>
                </div>
            </div>
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
    
</div>
