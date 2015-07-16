<?php 
/**
 * Created by Halsey Takang 
 */
?>

<div class='row'>
    <section class='hidden-xs col-sm-4 col-md-3'>
        
    </section>
    <section class='col-xs-12 col-sm-4 col-md-6'>
        <div class='pageheader'>Tutorials</div>
    <?php 
       if(!empty($tutorials)){
         foreach($tutorials as $key => $tutorial){?>    
    <div class="tutorial_category_title"><?php echo $key ?></div>
    <div class="sidebar articleBody">
        <?php foreach($tutorial as $k => $value){?>
        <div><a class="btn btn_style_sobp" href="<?php echo $this->Html->url(array('controller'=>'tutorials', 'action'=>'showTutorials', $value)); ?>" ><?php echo $value; ?></a></div>
        <?php }?>
    </div>
    <?php } ?>
    <?php } ?>
    </section>
    <section class='hidden-xs col-sm-4 col-md-3'>
        
    </section>
</div>


