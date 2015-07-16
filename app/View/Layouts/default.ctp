<?php

?>
<!DOCTYPE html>
<html>
    <head itemscope itemtype="http://schema.org/WebSite">
    <?php echo $this->Html->charset(); ?>
<title itemprop='name'>
    <?php echo Configure::read('Config.site_name'); ?>
    <?php if(isset($title_for_layout) && !empty($title_for_layout) ){ echo " -  ".h($title_for_layout);} ?>
</title>
<?php
    echo $this->Html->meta('icon');
    echo $this->Html->meta(array('name' => 'copyright', 'content' => Configure::read("Config.from_system_name") .' ' . Configure::read("Config.site_base_url") ));
    echo $this->Html->meta(array('name' => 'creation_date', 'content' => '2014-11-17'));
    echo $this->Html->meta(array('name' => 'page-type', 'content' => 'E-Learning website'));
    echo $this->Html->meta(array('name' => 'audience', 'content' => 'Cameroon,Africa,USA,France,Germany,Italy,UK,World wide'));
   
    $meta_page_description = ( isset( $description_for_layout ) ) ? $description_for_layout : configure::read("Config.description");
    $meta_page_tags = ( isset( $tags_for_layout ) ) ? $tags_for_layout : configure::read("Config.tags");
    echo  $this->Html->meta('keywords', '' );
    echo  $this->Html->meta('description', '' );
    echo $this->Html->meta( array('name' => 'author', 'content' => Configure::read("Config.from_system_name") .' Cameroon') );
    echo $this->Html->meta(array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0'));
    
    echo $this->Html->meta(['name' => 'robots', 'content' => 'index, follow']);
    echo $this->Html->css(array('bootstrap-theme.min', 'site','bootstrap.min'));
       
    echo $this->fetch('meta');
    echo $this->fetch('css');
    ?>
<link rel="canonical" href="<?php echo Configure::read("Config.site_base_url");?>" itemprop="url">
<link rel="alternate" hreflang="fr" href="<?php echo Configure::read("Config.site_base_url");?>/languages/fr" />
<link rel="alternate" hreflang="pe" href="<?php echo Configure::read("Config.site_base_url");?>/languages/pe" />
<link rel="alternate" hreflang="en" href="<?php echo Configure::read("Config.site_base_url");?>/" />
<script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "SkinOfBlackpikin",
      "sameAs" : [ "https://www.facebook.com/blackpikin" ,"https://twitter.com/blackpikin"],
      "url": "<?php echo Configure::read("Config.site_base_url"); ?>",
     "contactPoint" : [
    { "@type" : "ContactPoint",
      "telephone" : "+237 6 70008921",
      "contactType" : "customer service",
      "areaServed" : "CM",
      "availableLanguage" : ["English","French", 'Pidgin English']
    } ]
    }
    </script>
</head>
<body>
    <div id='header-wrapper'>
	<div id='header' class='container'>
		<div id='logo'>
                    <h1><a style='color:#ffffff; font-weight:bold;' href='/skinofblackpikin'><?php echo $this->Html->image('blackpikin_main_logo.png', array('alt'=>'Blackpikin.cm'))?></a></h1>
		</div>
		<div id='menu'>
                <ul id='menu-list'>
                    <li class='menu-list-item'><a href='/skinofblackpikin' accesskey='0' title=''>Home</a></li>
                    <li class='menu-list-item'><a href='<?php echo $this->Html->url(array('controller'=>'tutorials', 'action'=>'index')) ?>' accesskey='1' title=''>Tutorials</a></li>
                    <li class='menu-list-item'><a href='<?php echo $this->Html->url(array('controller'=>'lectures', 'action'=>'index')) ?>' accesskey='2' title=''>Lectures</a></li>
                    <li class='menu-list-item'><a href='<?php echo $this->Html->url(array('controller'=>'business', 'action'=>'index')) ?>' accesskey='3' title=''>Business</a></li>
                    <li class='menu-list-item'><a href='<?php echo $this->Html->url(array('controller'=>'softwares', 'action'=>'index')) ?>' accesskey='4' title=''>Software</a></li>
                    <li class='menu-list-item'><a href='<?php echo $this->Html->url(array('controller'=>'photos', 'action'=>'index')) ?>' accesskey='5' title=''>Photos</a></li>
                    <li class='menu-list-item'><a href='<?php echo $this->Html->url(array('controller'=>'musics', 'action'=>'index')) ?>' accesskey='6' title=''>Music</a></li>
                    <li class='menu-list-item'><a href='<?php echo $this->Html->url(array('controller'=>'novels', 'action'=>'index')) ?>' accesskey='7' title=''>Novels</a></li>
                    <li class='menu-list-item'><a href='<?php echo $this->Html->url(array('controller'=>'careers', 'action'=>'index')) ?>' accesskey='8' title=''>Careers</a></li>
                    <li class='menu-list-item'><a href='<?php echo $this->Html->url(array('controller'=>'abouts', 'action'=>'index')) ?>' accesskey='9' title=''>About us</a></li>
                    <li class='menu-list-item'><a href='<?php echo $this->Html->url(array('controller'=>'contacts', 'action'=>'index')) ?>' title=''>Contact us</a></li>
                </ul>
		</div>
	</div>
</div>
    
    <div><?php echo $this->fetch('content'); ?></div>
    
    
    <div id='header-wrapper' class="nav navbar-fixed-bottom">
    <div id='footer' class='container'>
       <p style='color:#ffffff; font-weight: bold;'>&copy; 2015 Habetak systems Inc.</p>
    </div>
</div>
   
   <?php 
   echo $this->html->script(array('jquery-2.1.3.js', 'bootstrap.min.js'));
   echo $this->fetch('script');
   ?>
</body>
</html>