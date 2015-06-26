<?php

function loadScripts(){
      echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <script type="text/javascript" src="..\shared\jquery-2.1.3.js"></script>
        <script type="text/javascript" src="..\shared\bootstrap.min.js"></script>
        <link href="..\shared\bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="..\shared\bootstrap-theme.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="..\shared\site.css" rel="stylesheet" type="text/css" media="all" />' ;
}

function createHeader(){
  echo "<div id='header-wrapper'>
	<div id='header' class='container'>
		<div id='logo'>
			<h1><a style='color:#ffffff; font-weight:bold;' href='#'>SkinOfBlackpikin</a></h1>
		</div>
		<div id='menu'>
                <ul id='menu-list'>
                    <li class='menu-list-item'><a href='../home/' accesskey='0' title=''>Home</a></li>
                    <li class='menu-list-item'><a href='../tutorials/' accesskey='1' title=''>Tutorials</a></li>
                    <li class='menu-list-item'><a href='../lectures/' accesskey='2' title=''>Lectures</a></li>
                    <li class='menu-list-item'><a href='../business/' accesskey='3' title=''>Business</a></li>
                    <li class='menu-list-item'><a href='../software/' accesskey='4' title=''>Software</a></li>
                    <li class='menu-list-item'><a href='../photos/' accesskey='5' title=''>Photos</a></li>
                    <li class='menu-list-item'><a href='../music/' accesskey='6' title=''>Music</a></li>
                    <li class='menu-list-item'><a href='../novels/' accesskey='7' title=''>Novels</a></li>
                    <li class='menu-list-item'><a href='../careers/' accesskey='8' title=''>Careers</a></li>
                    <li class='menu-list-item'><a href='../about_us/' accesskey='9' title=''>About us</a></li>
                    <li class='menu-list-item'><a href='../contact_us/' title=''>Contact us</a></li>
                </ul>
		</div>
	</div>
</div>";
     
}

function createFooter(){
    echo "<div id='footer-wrapper' class='nav navbar-header navbar-fixed-bottom'><div id='footer' class='container'>
    <p style='color:#ffffff; font-weight: bold;'>&copy; 2015 Habetak systems Inc.</p></div></div>";
}




