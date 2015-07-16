<?php 
/**
 * Created by Halsey Takang 
 */
?>

<div class='row'>
    <section class='hidden-xs col-sm-4 col-md-3'>
        
    </section>
    <section class='col-xs-12 col-sm-4 col-md-6'>
    <div class='pageheader'>Contact us</div>  
    <div class="tutorial_category_title">Online</div>
    <div class="sidebar articleBody">
        <div>Email:<?php echo Configure::read("Config.contact_email")?></div>
    </div>
    <div class="tutorial_category_title">Physically</div>
    <div class="sidebar articleBody">
        <div><?php echo Configure::read("Config.address1")?></div><br/>
        <div><?php echo Configure::read("Config.address2")?></div><br/>
        <div><?php echo Configure::read("Config.address3")?></div><br/>
        <div>Phone:<?php echo Configure::read("Config.telephone")?></div>
    </div>
    </section>
    <section class='hidden-xs col-sm-4 col-md-3'>
        
    </section>
</div>