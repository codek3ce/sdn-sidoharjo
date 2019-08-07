<div class="col-md-8">
	<h2><?=$data_gallery_album[0]['gallery_album_title'];?></h2>
	<p><?=$data_gallery_album[0]['gallery_album_desc'];?></p>
	<hr/>
	<div id="" class="gallery">	
        <div class="row">			
    	<?php if (!isset($data_gallery_photo)){  
            echo "error!!!";	
        }else{  
            foreach ($data_gallery_photo as $row) {
                ?>
                    <div class="col-md-4" style="height: 200px;">
                        <a href="<?=base_url()?>assets/images/gallery/<?=$row['gallery_data']?>"  class="thumbnail">
                        <img src="<?=base_url()?>assets/images/gallery/<?=$row['gallery_data']?>" class="img-responsive" /></a>
                    </div>
                <?php  
            }  
        }?>
        </div>
    </div>
    <hr/>
</div>

<div class="col-md-4">
    <div class="box3">
         <header class="divider2">
            <h5 class="topic-sub-title"><a href="#">ALBUM</a></h5>
        </header> 

        <ul class="list">
        <?php if (!isset($data_gallery)){  
            echo "error!!!";    
        }else{  
            foreach ($data_gallery as $row) {
                ?>
                <li class="media">
                    <div class="media-left">
                      <?php if($row['gallery_album_image'] != ''){
                            echo'<img class="media-object" src="'.$row['gallery_album_image'].'" data-holder-rendered="true" style="width: 64px; height: 64px;">';
                        }else{
                            echo'<img class="media-object" src="'.base_url('assets/images/no-cover.png').'" data-holder-rendered="true" style="width: 64px; height: 64px;">';
                        }
                      ?>
                    </div>
                    <div class="media-body">
                      <h5 class="media-heading"><a href="<?=base_url()?>gallery/album/<?=$row['gallery_album_id']?>/<?=$row['gallery_album_slug']?>"><?=$row['gallery_album_title']?></a></h5>
                      <h6><?=substr(strip_tags($row['gallery_album_desc']),0,80)."..."?></h6>
                    </div>
                </li>
                <?php  
            }  
        }?>
        </ul>
    </div>
</div>

