<?php

function loadScripts(){
      echo '  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <script type="text/javascript" src="jquery-2.1.3.js"></script>
        <script type="text/javascript" src="bootstrap.min.js"></script>
        <link href="bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="bootstrap-theme.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="site.css" rel="stylesheet" type="text/css" media="all" />' ;
}

function createHeader(){
  echo "<div id='header-wrapper'>
	<div id='header' class='container'>
		<div id='logo'>
			<h1><a style='color:#ffffff; font-weight:bold;' href='#'>SkinOfBlackpikin</a></h1>
		</div>
		<div id='menu'>
                <ul id='menu-list'>
                    <li class='menu-list-item'><a href='#' accesskey='0' title=''>Home</a></li>
                    <li class='menu-list-item'><a href='#' accesskey='1' title=''>Tutorials</a></li>
                    <li class='menu-list-item'><a href='#' accesskey='2' title=''>Lectures</a></li>
                    <li class='menu-list-item'><a href='#' accesskey='3' title=''>Business</a></li>
                    <li class='menu-list-item'><a href='#' accesskey='4' title=''>Software</a></li>
                    <li class='menu-list-item'><a href='#' accesskey='5' title=''>Photos</a></li>
                    <li class='menu-list-item'><a href='#' accesskey='6' title=''>Music</a></li>
                    <li class='menu-list-item'><a href='#' accesskey='7' title=''>Novels</a></li>
                    <li class='menu-list-item'><a href='#' accesskey='8' title=''>Careers</a></li>
                    <li class='menu-list-item'><a href='#' accesskey='9' title=''>About us</a></li>
                    <li class='menu-list-item'><a href='#' title=''>Contact us</a></li>
                </ul>
		</div>
	</div>
</div>";
     
}

function createFooter(){
    echo "<div id='footer-wrapper' class='nav navbar-header navbar-fixed-bottom'>".
    "<div id='footer' class='container'>"
    ."<p style='color:#ffffff; font-weight: bold;'>&copy; 2015 Habetak systems Inc.</p>"
    ."</div>".
    "</div>";
}




