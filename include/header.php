<!--This Site Is Designed & Developed By
Eng. Ahmed Samir (Zvampire21@yahoo.com) ,01007256294
Eng. AbdelRahman Ragab on (twitter: @d7my11),01146652154-->

<?php include("include/connection.php");?>
<html lang="en">
<head>
    
    <script type="text/javascript" src="js/fader.js"> </script>
   
    
    <link rel="stylesheet" href="stylesheets/slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="stylesheets/nivo-slider.css" type="text/css" media="screen" />
    <LINK rel="ICON" href="../images/ico.png">
    <link rel="shortcut icon" href="favicon.ico" />
    <script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
    
    
    <script type="text/javascript">
    $(document).ready(function () {	
	
	$('#nav li').hover(
		function () {
			//show its submenu
			$('ul', this).slideDown(100);

		}, 
		function () {
			//hide its submenu
			$('ul', this).slideUp(100);			
		}
	);
	
    });
    </script>
	 


</head>

<body>
    
    <div id="wrapper">
        
        <div id=firstheader>
            <ul>
                <li><a href="#ff"><img src="Images/search_icon.png"/> </a></li>
                <li class="b"><form>
                                <input type="text" style="border:none;height:22px;text-align:right;background:none"/>
                              </form>
                </li>
                <li class="c"><a href="#ff"><img src="Images/facebook.png"/> </a></li>
                <li class="c"><a href="#ff"><img src="Images/twitter.png"/> </a></li>
            </ul>
        </div>
        
        <div id="header">
            <ul>
                <li> <a href="lands.php">اراضي<img src="images/lands_icon.png"/> </a>     </li>
                <li class="b"> <a href="villas.php">فيلات<img src="images/villas_icon.png"/> </a>     </li>
                <li class="c"> <a href="buildings">عمارات<img src="images/building_icon.png"/> </a> </li>
                <li class="d"><ol id="nav">
	
	<li><a href="#">محلات<img src="images/shops_icon.png"/></a>
		<ul>
			<li><a href="shops1.php">تمليك</a></li>
			<li><a href="shops2.php">ايجار جديد </a></li>
			<li><a href="shops3.php">ايجار قديم</a></li>
		</ul>
		
	</li>
	
	
</ol></a>       </li>
                <li class="e"><ol id="nav">
	
	<li><a href="#">شقق<img src="images/building_icon.png"/></a>
		<ul>
			<li><a href="flats1.php">تمليك</a></li>
			<li><a href="flats2.php">ايجار جديد </a></li>
			<li style=" "><a href="flats3.php">ايجار قديم</a></li>
		</ul>
		
	</li>
	
	
</ol> </li>
                <li class="f"> <a href="index.php">الرئيسية<img src="images/home_icon.png"/></a>    </li>
                
            </ul>
        </div>