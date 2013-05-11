<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php $browser = $_SERVER['HTTP_USER_AGENT']; ?>  
    <?php if (strstr($browser, "MSIE")) { ?>  
    <link rel="stylesheet" href="stylesheets/articleIEstyle.css" type="text/css" media="screen" />
    <?php }else{ ?>  
    <link rel="stylesheet" href="stylesheets/articlestyle.css" type="text/css" media="screen" />
    <?php } ?>
    
    
    
<?php include("include/header.php"); ?>


        
        <div id="firstd"> </div>
        
        
        
        <div id="middle">
         
         <div id="title"> <span class="t">
         
            <?php
            if(isset($_GET['id']))
            {
               
               $a=$_GET['id'];
             $result=$mysqli->query("SELECT *FROM lands WHERE id='$a'")or die($mysqli->error);
             $row=$result->fetch_array();
             echo $row['1'];
            }
            
            else
            {
               header("location:index.php");
            }
            ?>
         </span></div>
            
           
           <div id="social">
            <ul>
               <li class="a1"> </li>
               <a href="https://twitter.com/share?url=http://google.com&text=hh"  class="custom-tweet-button" data-related="anywhere:The Javascript API,sitestreams,twitter:The official account" data-count="vertical" target="_blank"><li class="a2"> </li></a>
               <li class="a3"> </li>                       

            </ul>
            
         
           
         </div>
           <div style="clear:both;"></div>



        <?php
            if(isset($_GET['id']))
            {
               echo "<div id='content'>";
               $a=$_GET['id'];
             $result=$mysqli->query("SELECT *FROM lands WHERE id='$a'")or die($mysqli->error);
             $row=$result->fetch_array();
             echo $row['2'];
             echo "</div>";
            }
            
            else
            {
               header("location:index.php");
            }
            ?>

</div>
            

        <div id="last"> </div>
        
<?php include("include/footer.php"); ?>

</body>
</html>
