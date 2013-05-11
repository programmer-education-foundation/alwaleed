<?php
include("../include/connection.php");
?>
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
    <title>Alwaleed Cpannel</title>

<?php include("include/cheader.php"); ?>
            
            
            
            <div id="page">
		
<div id="sliderupload">
    <span>: الصورة الأولى </span>
<form action="<?php echo $_SERVER['PHP_SELF']  ?>" method="post" enctype="multipart/form-data" >
                                        

<input type="file" name="file" id="file" /> <br>
<br />
<input  type="submit" name="submit1" value="رفع الملف" />
</form>
           
   

<?php
if(isset($_FILES["file"]) && isset($_POST['submit1']))
{
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 20000000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    

    if (file_exists("C:/xampp/htdocs/alwaleed/imgupload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . "<span style='text-align:center; margin-right:10px;'> .الملف موجود</span> ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "C:/xampp/htdocs/alwaleed/imgupload/" . $_FILES["file"]["name"]);
     
      $link = "C:/xampp/htdocs/alwaleed/imgupload/".$_FILES["file"]["name"];
      
      $statement = $mysqli->prepare("UPDATE slider SET url=? WHERE id=1 ");
      $statement->bind_param('s', $link);
      $statement->execute();
      echo "<span style='text-align:center; margin-right:20px;'>تم رفع الصورة بنجاح</span>";
      }
    }
  }
else
  {
  echo "<span style='text-align:center; margin-right:10px;'>..ملف خاطئ</span>";
  }
}
?>
</div> 

            
            
            
            
	    
	    
	    
        <div id="sliderupload2">
    <span>: الصورة الثانية </span>
<form action="<?php echo $_SERVER['PHP_SELF']  ?>" method="post" enctype="multipart/form-data" >
                                        

<input type="file" name="file" id="file" /> <br>
<br />
<input  type="submit" name="submit2" value="رفع الملف" />
</form>
           
 

<?php
if(isset($_FILES["file"]) && isset($_POST['submit2']))
{
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 20000000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    

    if (file_exists("C:/xampp/htdocs/alwaleed/imgupload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . "<span style='text-align:center; margin-right:10px;'> .الملف موجود ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "C:/xampp/htdocs/alwaleed/imgupload/" . $_FILES["file"]["name"]);
     
      $link = "C:/xampp/htdocs/alwaleed/imgupload/".$_FILES["file"]["name"];
      
      $statement = $mysqli->prepare("UPDATE slider SET url=? WHERE id=2 ");
      $statement->bind_param('s', $link);
      $statement->execute();
      echo "<span style='text-align:center; margin-right:20px;'>تم رفع الصورة بنجاح</span>";
      }
    }
  }
else
  {
  echo "<span style='text-align:center; margin-right:10px;'>..ملف خاطئ</span>";
  }
}
?>
            
    </div>
    
    
      <div id="sliderupload3">
    <span>: الصورة الثالثة  </span>
<form action="<?php echo $_SERVER['PHP_SELF']  ?>" method="post" enctype="multipart/form-data" >
                                        

<input type="file" name="file" id="file" /> <br>
<br />
<input  type="submit" name="submit3" value="رفع الملف" />
</form>
           
 

<?php
if(isset($_FILES["file"]) && isset($_POST['submit3']))
{
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 20000000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    

    if (file_exists("C:/xampp/htdocs/alwaleed/imgupload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . "<span style='text-align:center; margin-right:10px;'> .الملف موجود ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "C:/xampp/htdocs/alwaleed/imgupload/" . $_FILES["file"]["name"]);
     
      $link = "C:/xampp/htdocs/alwaleed/imgupload/".$_FILES["file"]["name"];
      
      $statement = $mysqli->prepare("UPDATE slider SET url=? WHERE id=2 ");
      $statement->bind_param('s', $link);
      $statement->execute();
      echo "<span style='text-align:center; margin-right:20px;'>تم رفع الصورة بنجاح</span>";
      }
    }
  }
else
  {
  echo "<span style='text-align:center; margin-right:10px;'>..ملف خاطئ</span>";
  }
}
?>
            </div>   
    
    
    		

            </div>
            
            
            
            
            
            
            
    
    
    
    
    
    
    <?php include("include/cfooter.php"); ?>
            
    
    
</body>
</html>
