<div class="col-md-12">



    <h2>Testimoni</h2>

    <hr/>

	<?php if (!isset($data_testimoni)){  

        echo "error!!!";    

    }else{  

        foreach ($data_testimoni as $row) {

            ?>
            <div style="margin:15px 0;">
                <div class="testimonial">
                    <p><?=$row['testimoni_isi']?></p>
                </div> 
                <div class="arrow-down"></div> 
                <p class="testimonial-author"><?=$row['testimoni_name']?> | <span> <?=$row['testimoni_date']?> </span></p>
            </div>   

            <?php  

        }  

    }?>

    <hr/>

    <b><?=$pages?> </b>

</div>

