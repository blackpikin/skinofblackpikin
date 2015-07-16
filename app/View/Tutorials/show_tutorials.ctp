<?php 
/**
 * Created by Halsey Takang 
 */
?>

<div class='row'>
    <section class='hidden-xs col-sm-4 col-md-3'>
        
    </section>
    <section class='col-xs-12 col-sm-4 col-md-6'>
        <?php if(!empty($items)){?>
        <div class='pageheader'><?php echo $items[0]['Tutorial']['title']?></div>
    <?php foreach($items as $item){?>    
    <div class="tutorial_category_title"><?php echo $item['Tutorial']['name'] ?></div>
    <div class="sidebar articleBody">
        <div><?php echo $item['Tutorial']['content']; ?><div style="margin-top: 5px;"><a class="btn btn_style_sobp" href="<?php echo $this->Html->url(array('controller'=>'tutorials', 'action'=>'showTutorials')); ?>">Start</a></div></div>
    </div>
    <?php }?>
    <?php } ?>
    </section>
    <section class='hidden-xs col-sm-4 col-md-3'>
        
    </section>
</div>