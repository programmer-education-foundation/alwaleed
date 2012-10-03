<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

 <?php $browser = $_SERVER['HTTP_USER_AGENT']; ?>  
    <?php if (strstr($browser, "MSIE")) { ?>  
    <link rel="stylesheet" href="stylesheets/articleIEstyle.css" type="text/css" media="screen" />
    <?php }else{ ?>  
    <link rel="stylesheet" href="stylesheets/articlestyle.css" type="text/css" media="screen" />
    <?php } ?>

<?php
include("include/connection.php");

  
    $result1 = mysql_query("SELECT title, content FROM shops2")or die(mysql_error());
    $numRows = mysql_num_rows($result1);
    
    if($numRows<10 && $numRows!=0)
    {
        $a = $numRows-5;
        $result = mysql_query("SELECT title, content FROM shops2 ORDER by id ASC LIMIT $a ")or die(mysql_error());
        while( $row = mysql_fetch_array($result))
       {
           echo "<div id='title'> <span class='t'>". $row['title']."</span></div><br/><br/>";
           echo "<div id='content'>";
           echo substr($row['content'], 0, 450);
           echo "<a href='details.php?id=".$row['0']."'><div class='more'>..الـمـزيـد</div></a><br/><br/><br/>";
           echo "</div>";
       
       }

    }
    elseif($numRows>10)
    {
        
        $start = $numRows-5;
        
        for($i=0;$i<=4;$i++)
        {
           $result = mysql_query("SELECT * FROM shops2  WHERE id='$start' ORDER by id DESC ")or die(mysql_error());
           $row = mysql_fetch_array($result);
           echo "<div id='title'> <span class='t'>". $row['title']."</span></div><br/><br/>";
           echo "<div id='content'>";
           echo substr($row['content'], 0, 450);
           echo "<a href='details.php?id=".$row['0']."'><div class='more'>..الـمـزيـد</div></a><br/><br/><br/>";
           echo "</div>";
          $start-=1;
        }

        
        
    }
    
    elseif($numRows==0)
    {
        echo "لايوجد عروض الآن";
    }
    
    



?>