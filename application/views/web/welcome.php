            </div>
            
            <div class="row">
                <div class="col-sm-3">
                    
                    <div class="sidebar-module ">
			<img src="<?php echo $setting[0]['web_image']; ?>" class="img-responsive" alt="Responsive image">
			<div style="margin:15px 0;">
                   	<small><i><?php echo $setting[0]['web_description']; ?></i></small>
            		</div>
                    </div>
                    
                </div>
                <div class="col-sm-5">
                    <header class="divider2">
                        <h5 class="topic-sub-title"><a href="#">BERITA</a></h5>
                    </header>
                    <div class="box scroll-pane">
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
                                        <small><i class="fa fa-calendar fa-fw"></i><?=tgl_indo($row['posts_date'])?></small>
                                    </div>
                                </li>
                                <?php  
                            }  
                        }?>
                        </ul>
                    </div>
                    <hr class="divider2"/>
                </div>
                <div class="col-sm-4">
                    <header class="divider2">
                        <h5 class="topic-sub-title"><a href="#">AGENDA</a></h5>
                    </header> 
                    <div class="box scroll-pane">
                    <?php if (!isset($data_event)){  
                        echo "error!!!";    
                    }else{  
                        foreach ($data_event as $row) {
                            ?>
                                <p>
                                    <small style="text-align:;"><i class="fa fa-calendar fa-fw"></i> <b><?=tgl_indo($row['event_date'])?></b></small>
                                    <p><a href="<?=base_url()?>event/<?=$row['event_id']?>/<?=$row['event_slug']?>"><?=$row['event_title']?></a></p>   
                                </p>         
                            <?php  
                        }  
                    }?>
                    </div>
                    <hr class="divider2"/>
                </div>
                
                
            