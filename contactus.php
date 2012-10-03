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


        <div id="contact">

        </div>
      
        <div id="contactform">
           
 
 
<form name="signup" id="formID" class="formular" action="" method="POST" style="margin-top:50px;  text-align:right;">
            
            <input type="text" name="name" style="height:30px; width:200px; border:1px groove #db1e5a; border-radius:9px; text-align:right; margin-right:40px; " > &nbsp;:&nbsp;الاســـــــــــــــــم <br/><br/>
          
            <input type="text" class="validate[required,custom[email]] text-input" type="text" name="email" id="email" style="height:30px; width:200px; border:1px groove #db1e5a; border-radius:9px; text-align:right; " > &nbsp;:&nbsp;البريد الإلكتروني <br/><br/>
            
            <textarea name="message" style="width:200px; height:150px; border:1px groove #db1e5a; border-radius:9px; margin-right:100px; text-align:right; resize:none;"></textarea><div style="margin-top:-100px;">&nbsp;:&nbsp;الــــرســـالــــة</div><br/><br/>
            
            <input type="button" name="send" style="width:84px; height:27px; background:url('images/send.png'); border:none; cursor:pointer; margin-right:155px; margin-top:75px;">
            
            </form>

 
        </div>
        
        
<?php include("include/footer.php"); ?>


</body>
</html>
