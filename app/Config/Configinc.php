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


$config = array('blackpikin' => array(
    'version' => 1,
    'release' => '1.0',
));

Configure::write('Config.version', $config );
Configure::write('Config.description' , 'E-lerning for Pidgin English, High school subjects such as Biology, chemistry, physics, maths, Methematics, food science, literature, computer science, geography, economics, human biology, music, novels, publishing novels, business, business ideas, advertising, careers');
Configure::write('Config.tags' , 'Cameroon E-LEARNING, BOOKS ONLINE, COMPUTER SCIENCE TUTORIALS, TUTORIALS, HIGH SCHOOL LECTURES, UNIVERSITY LECTURES, MUSIC, NOVELS, CAREERS, TECHNOLOGY, FOOD SCIENCE LECTURES');
Configure::write('Config.html_lang', 'en' );
#Configure::write('Config.html_lang', substr(env('HTTP_ACCEPT_LANGUAGE'), 0, 2) );
Configure::write("Config.title_for_layout" , "BLACKPIKIN");
Configure::write('Config.anonym_userID'	,51);
Configure::write('Config.siteLong'	,"BLACKPIKIN");
Configure::write('Config.siteShort'	,"BP");
Configure::write('Config.encrypt'	,"md5crypt");
Configure::write('Config.copy_right_year'	,date("Y"));


Configure::write('Config.theme_thumbnail_width'			, '120');				// default theme thumbnail width
Configure::write('Config.theme_thumbnail_height'			, '90');				// default theme thumbnail height

Configure::write('Config.age_limit' , 12);							// under this age members birthday is shown as PRIVATE
Configure::write('Config.carte_limit' , 20);							// under this age members birthday is shown as PRIVATE
Configure::write('Config.comment_limit'	, 8);							// under this age members birthday is shown as PRIVATE
Configure::write('Config.comment_more_limit', 3);							// under this age members birthday is shown as PRIVATE
Configure::write('Config.comment_reply_limit', 3);							// under this age members birthday is shown as PRIVATE
Configure::write('Config.comment_more_reply_limit', 3);							// under this age members birthday is shown as PRIVATE
Configure::write('Config.flag_counter_limit'	, 10);							// under this age members birthday is shown as PRIVATE
Configure::write('Config.flag_counter_message', 10);							// under this age members birthday is shown as PRIVATE

# comment's settings
Configure::write('Config.comments_flood_time'	, 120);							// comments flood time
Configure::write('Config.comments_length'	     		, '15'); // min length for comments
Configure::write('Config.dislike_counter'	, 65); // min value for accept to view message
Configure::write('Config.dislike_counter_limit'	, 6); // min value for accept to view message
Configure::write('Config.max_days_to_show_other_notification'	, 6); //max value of days to show more notifications for password
Configure::write('Config.search_trend'	, 12);

#Which Groups can see Admin Panel link
Configure::write("Config.can_view_admin_panel", array(1,2,3)); // Admin/Developper/Poster

# Default Avatar's setting
Configure::write('Config.default_avatar', Configure::read("Config.site_base_url")."/pictures/camoo_placeholder.gif"); // default filename(avatar)


