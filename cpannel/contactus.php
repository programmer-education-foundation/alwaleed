<?php include("../include/connection.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php $browser = $_SERVER['HTTP_USER_AGENT']; ?>  
    <?php if (strstr($browser, "MSIE")) { ?>  
    <link rel="stylesheet" href="stylesheets/IEstyle.css" type="text/css" media="screen" />
    <?php }else{ ?>  
    <link rel="stylesheet" href="stylesheets/style.css" type="text/css" media="screen" />
    <?php } ?>
    
<html lang="en">
<head>
    <title>Alwaleed Cpannel:اتصل بنا   </title>
    
    <script type="text/javascript" src="js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>


<script type="text/javascript">
if (document.location.protocol == 'file:') {
	alert("The examples might not work properly on the local file system due to security settings in your browser. Please use a real webserver.");
}
</script>



<?php include("include/cheader.php"); ?>
            
            
            
            <div id="page">
      
      <div align="center">
    <p> رسائل وأراء الزوار  </p>
 <?php
   
   
    echo "<table cellpadding=10 border=3>";
    echo "<th>  الرسالة </th>";
    echo "<th> الاميل </th>";
    echo "<th> الاسم  </th>";
    
    ;
    
    $result=mysql_query("SELECT * FROM opinion") or die(mysql_error());
    while($row=mysql_fetch_array($result))
    {
     echo"<tr><td style='text-align:right'>";
      
     echo $row['content']."</td>";
    
     echo "<td style='text-align:right'>".$row['email']."</td>";
     echo "<td style='text-align:right'>".$row['name']."</td>";
    
    }    
    echo "</table>"
    
    
    
    
    
    
    
    
   ?>
    <p>حذف جميع الرسائل     </p>  
<a href="deleteop.php"><p><img src="images/delete.png"></a> 
</div>
 
            
            
            </div>
    
    
    
    
    
      <?php include("include/cfooter.php"); ?>
    
    
</body>
</html>


