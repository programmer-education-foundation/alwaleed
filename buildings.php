<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>الوليد | عمارات</title>
    <?php $browser = $_SERVER['HTTP_USER_AGENT']; ?>  
    <?php if (strstr($browser, "MSIE")) { ?>  
    <link rel="stylesheet" href="stylesheets/articleIEstyle.css" type="text/css" media="screen" />
    <?php }else{ ?>  
    <link rel="stylesheet" href="stylesheets/articlestyle.css" type="text/css" media="screen" />
    <?php } ?>
    
         <script type="text/javascript">
              function get()
              {
                   $('#button').hide();
                   $('#wait').show();
                   $.post('databuildings.php', {name : name.value},
                      function(output){
                        
                       $('#more').html(output).show();
                       
                       $('#wait').hide();
                       
                       
                       
                      
                      });
              }
        
        </script>
         
          <style type="text/css">
        
       div#wait
        {
            background:url('images/wait.gif');
            width:28px;
            height:28px;
            display:none;
	    margin-left:320px;
            margin-top:40px;
            
            

        }
        
        div#result
        {
          text-align:right;
	    float:right;
        }
        </style>
    
<?php include("include/header.php"); ?>


        
        <div id="firstd"> </div>
        
        
        
        <div id="middle">
            
               <?php
         
         $result=$mysqli->query("SELECT * FROM buildings ORDER by id DESC LIMIT 5")or die($mysqli->error);
         
                   
                      
		      while($row=$result->fetch_array())
                      {
                        
                        echo "<div id='title'> <span class='t'>". $row['1']."</span></div><br/><br/>";
                        
                      
         
         ?>
         
                     <?php
             
             
              echo "<div id='content'>";
             echo substr($row['2'], 0, 450);
                      
                         echo "<a href='details.php?id=".$row['0']."'><div class='more'>..الـمـزيـد</div></a><br/><br/><br/>";
                    echo "</div>";
                      }
             
                    ?>
     <div id="more">
                    
        </div>
     <?php
     $result1 = $mysqli->query("SELECT title, content FROM buildings")or die($mysqli->error);
     $numRows = $result1->num_rows();
           if($numRows>5)
           {
            echo " <form id='form' name='form'>";
            echo "<div id='wait'> </div>  <input type='button' id='button' style='border:none; margin-right:250px; margin-top:30px; background:url(images/seemore.png); float:right; width:334px; height:34px; '  name='name' onClick='get();'>";
            echo "</form>";
            }
            elseif($numRows==0)
            {
                echo "<div style='text-align:center;'>"." لاتوجد عروض متاحة إلى الآن"."</div>";
            }
            ?>
      
            
        
        
        
            
            
        </div>
        

        <div id="last"> </div>
        
<?php include("include/footer.php"); ?>

</body>
</html>
