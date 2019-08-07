

<div class="col-md-4">

     <div class="sidebar-module sidebar-module-inset">

        <header class="divider2">

            <h5 class="topic-sub-title"><a href="#">RECENT POST</a></h5>

        </header> 

        <ul class="list schedule">

        <?php if (!isset($data_posts_news)){  

            echo "error!!!";    

        }else{  

            foreach ($data_posts_news as $row) {

                ?>

                <li>

                    <a href="<?=base_url()?>read/<?=$row['posts_id']?>/<?=$row['posts_slug']?>"><?=$row['posts_judul']?></a>

                </li>

                <?php  

            }  

        }?>

        </ul>

    </div>

</div>



			