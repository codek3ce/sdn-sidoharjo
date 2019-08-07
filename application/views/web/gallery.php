<div class="col-md-8">

    <h1>Gallery</h1>

    <hr/>

    <ul class="media-list">
	<?php if (!isset($data_gallery)){  
        echo "error!!!";	
    }else{  
        foreach ($data_gallery as $row) {
            ?>
            <div class="media">
                <div class="media-left">
                    <?php if($row['gallery_album_image'] != ''){
                        echo'<img class="media-object thumbnail" src="'.$row['gallery_album_image'].'"data-holder-rendered="true" style="width: 100px; height: 100px;">';
                    }else{
                        echo'<img class="media-object thumbnail" src="'.base_url('assets/images/no-cover.png').'" data-holder-rendered="true" style="width: 100px; height: 100px;">';
                    }?>
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><a href="<?=base_url()?>gallery/album/<?=$row['gallery_album_id']?>/<?=$row['gallery_album_slug']?>"><?=$row['gallery_album_title']?></a></h4>
                    <p><?=substr(strip_tags($row['gallery_album_desc']),0,160)."..."?></p>
                </div>
            </div>
            <?php  
        }  
    }?>
    </ul>
    
    <div class="gr"></div>

    <div class="row">

    <?php if (!isset($data_gallery_video)){  
        echo "error!!!";    
    }else{  
        foreach ($data_gallery_video as $row) {
            ?>
            <div class="col-md-4">
                <div style="padding:10px 0;">
                <!-- 4:3 aspect ratio -->
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src="<?=$row['gallery_data']?>"></iframe>
                </div>
                </div>
            </div>
            <?php  
        }  
    }?>

    </div>

</div>