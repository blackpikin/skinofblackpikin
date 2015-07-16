<?php
/**
 *
 * CAMOO SARL: http://www.blackpikin.cm
 * Copyright (c) skinofblackpikin.cm
 * License: You are not allowed to sell or distribute this software without permission
 * Copyright reserved
 * File: app/Config/Configinc.php
 * updated: july 2015
 * Created by:  Halsey Takang (halsey.t@blackpikin.com)
 * Description:  Blackpikin Config file
 *
 * @link          http://www.blackpikin.cm
 */


$config=array('file'=>array('settings'=>1) );

//General settings
Configure::write("Config.from_system_name" , "BLACKPIKIN Team");
Configure::write("Config.notifications_from_email" , "info@blackpikin.cm");
Configure::write("Config.admin_notify_email" , "admin@blackpikin.cm");
Configure::write("Config.contact_email" , "contact@blackpikin.cm");
Configure::write("Config.site_name" , "BLACKPIKIN: Pidgin English Learning");
Configure::write("Config.date_format" , "d-m-y");
Configure::write("Config.site_base_url" , "https://www.blackpikin.cm");
Configure::write("Config.maximum_size_human_readale" , "2MB");
Configure::write("Config.path_to_php" , "/usr/bin/php");
Configure::write('Config.email_domain'  ,"blackpikin.cm");
Configure::write('Config.telephone'  ,"+237 6 670008921, +237 6 97486484");
Configure::write('Config.address1'  ,"H41 Camp SIC Mendong,");
Configure::write('Config.address2'  ,"Yaounde,");
Configure::write('Config.address3'  ,"Cameroon");


# Avatar's Settings
Configure::write('Config.allowed_avatar_extensions'  ,array('jpeg','jpg', 'png','gif'));
Configure::write('Config.avatars_dir', DIRECTORY_SEPARATOR.'var'.DIRECTORY_SEPARATOR.'spool'.DIRECTORY_SEPARATOR.'camoo'.DIRECTORY_SEPARATOR.'avatars'.DIRECTORY_SEPARATOR);
Configure::write('Config.video_thumb_dir', DIRECTORY_SEPARATOR.'var'.DIRECTORY_SEPARATOR.'spool'.DIRECTORY_SEPARATOR.'camoo'.DIRECTORY_SEPARATOR.'videos'.DIRECTORY_SEPARATOR);
Configure::write("Config.maximum_size_avatar",2097152); //2MB


# signature keys
Configure::write('Config.appkeys_dir', DIRECTORY_SEPARATOR.'var'.DIRECTORY_SEPARATOR.'spool'.DIRECTORY_SEPARATOR.'camoo'.DIRECTORY_SEPARATOR.'appkeys'.DIRECTORY_SEPARATOR);
//Default Lang setting
Configure::write("Config.language" , "fra");

//Other settings
Configure::write('debug', 1);
Configure::write('Exception', array(
    'handler' => 'ErrorHandler::handleException',
    'renderer' => 'AppExceptionRenderer',
    'log' => true
));

