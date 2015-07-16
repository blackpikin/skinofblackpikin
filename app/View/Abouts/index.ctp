<?php 
/**
 * Created by Halsey Takang 
 */
?>

<div class='row'>
    <section class='hidden-xs col-sm-4 col-md-3'>
        
    </section>
    <section class='col-xs-12 col-sm-4 col-md-6'>
        <div class='pageheader'>About us</div>
    <?php 
       if(!empty($about)){
         foreach($about as $abt){?>    
    <div class="tutorial_category_title"><?php echo $abt['About']['title'] ?></div>
    <div class="sidebar articleBody">
        <div><?php echo $abt['About']['content']; ?></div>
    </div>
    <?php }?>
    <?php } ?>
    </section>
    <section class='hidden-xs col-sm-4 col-md-3'>
        
    </section>
</div>