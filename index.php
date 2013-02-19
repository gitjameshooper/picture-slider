<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gallery</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="main.js"></script>
<link rel="stylesheet" href="main.css" />
</head>

<body>
<div id="wrapper">
  <ul id="nav">
    <li><a id="home"  href="#home" onclick="checkHash(this.href);" >Home</a> </li>
    <li><a id="basment"  href="#basement" onclick="checkHash(this.href);" >Basement</a> </li>
    <li><a id="bathroom" href="#bathroom" onclick="checkHash(this.href)"  >Bathroom</a> </li>
    <li><a id="family" href="#family" onclick="checkHash(this.href)"   >Family</a> </li>
    <li><a id="kitchen" href="#kitchen" onclick="checkHash(this.href)"  >Kitchen</a> </li>
    <li><a id="landscaping" href="#landscaping" onclick="checkHash(this.href)"  >Landscaping</a> </li>
    <li><a id="other" href="#other" onclick="checkHash(this.href)"  >Other</a> </li>
  </ul>
  <!--Nav-->
  <div id="text_box"> In this gallery I have pictures of a house I lived in and fixed up. Using my creativity and handyman skills I did a variety of projects. I refinished the kitchen cabinets and installed a new countertop. In the bathroom I tiled the shower/floor and installed the sink. Ran the plumbing and moved a wall to create more space.  The basement room took about two months. I had to completely frame/drywall the entire room put in light fixtures, and laydown the carpet.  I also have some other side projects posted. One is an end table made out of pallets. The other is a bookcase I built for my niece. </div>
  <!--Text Box-->
  <div id="scroll"> </div>
  <!--Scroll-->
  <hr style="visibility:hidden; clear:both;"/>
  <div id="main_pic"></div>
  <!--Main Pic-->
  <hr style="visibility:hidden; clear:both;"/>
</div>
<!--Wrapper-->

<?php 
// Load Pics as Background 
$folders = array('family','basement','bathroom','kitchen','landscaping','other');

foreach($folders as $pic_folder){
	
		$handle = opendir($pic_folder);
        echo '<div id="outside_area_'.$pic_folder.'">';
	
			 while (false !== ($entry = readdir($handle))) {
        		 if($entry != '.' && $entry != '..' && $entry != 'Thumbs.db' && $entry != 'photothumb.db' && $entry != '_notes'){
			 
			   //Generate Positioning
			       $z_index_num = rand(-5,-1);
				   $top_num = rand(0,300);
			 
			 	echo '<img style="position:relative; z-index:'.$z_index_num.'; top:'.$top_num.'px;" class="transform_'.$pic_folder.' picture_style" src="'.$pic_folder.'/'.$entry.'" /> ';
			  
    }
	 }
	 
	 echo '</div><!--Outside Area '.$pic_folder.' -->';
	  closedir($handle);

}?>
</body>
</html>