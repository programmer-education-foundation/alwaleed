
<!-- dd menu -->
<script type="text/javascript">
<!--
var timeout         = 500;
var closetimer		= 0;
var ddmenuitem      = 0;

// open hidden layer
function mopen(id)
{	
	// cancel close timer
	mcancelclosetime();

	// close old layer
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

	// get new layer and show it
	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';

}
// close showed layer
function mclose()
{
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}

// go close timer
function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}

// cancel close timer
function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

// close layer when click-out
document.onclick = mclose; 
// -->
</script>

</head>
<body>
    
    <div id="wrapper">
            <div id="header">
                
                
                <ul id="sddm">
                    <li class="a"><a href="#"  onmouseover="mopen('m1')" onmouseout="mclosetime()">إعلانات </a>
					<div id="m1" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
						<a href="">إضافة</a>
						<a href="">تعديل</a>
					</div>
		    </li>
                    <li class="b"><a href="#"  onmouseover="mopen('m2')" onmouseout="mclosetime()">اراضي</a>
			
		    
					<div id="m2" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
						<a href="addlands.php">إضافة</a>
						<a href="editlands.php">تعديل</a>
					</div>
		    
		        
		    </li>
                    
	<li class="c"><a href="#" onmouseover="mopen('m3')" onmouseout="mclosetime()">محلات</a>
                            <div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                                <a href="addshops.php">إضافة</a>
                                <a href="editshops.php">تعديل</a>
                            </div>
	</li>
        
	<li class="d"><a href="#" onmouseover="mopen('m4')" onmouseout="mclosetime()">فيلات </a>
			   <div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                                <a href="addvilas.php">إضافة</a>
                                <a href="editvillas.php">تعديل</a>
                            </div>
	
	</li>
        
	<li class="f"><a href="#" onmouseover="mopen('m5')" onmouseout="mclosetime()">شقق</a>
                            <div id="m5" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                                <a href="addflats.php">إضافة</a>
                                <a href="editflats.php">تعديل</a>
                            </div>
	</li>
        
        <li class="g"><a href="index.php">رئيسية</a></li>
</ul>
            </div>