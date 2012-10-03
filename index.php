<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php $browser = $_SERVER['HTTP_USER_AGENT']; ?>  
    <?php if (strstr($browser, "MSIE")) { ?>  
    <link rel="stylesheet" href="stylesheets/IEstyle.css" type="text/css" media="screen" />
    <?php }else{ ?>  
    <link rel="stylesheet" href="stylesheets/style.css" type="text/css" media="screen" />
    <?php } ?>
    
    
    
<?php include("include/header.php"); ?>


        
        <div id="sliders">
            <div id="slider-wrapper">
        
            <div id="slider" class="nivoSlider">
                <img src="images/1.jpg" alt="" />
                <img src="images/2.jpg" alt="" />
                <img src="images/3.jpg" alt="" />
            </div>
            
        
        </div>

            
        </div>
        
<?php include("include/footer.php"); ?>

</body>
</html>
