<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("klik",$con);
$n=mysql_query("select iname from votes order by votes desc");

while($row = mysql_fetch_array($n))
			{
				$m2[] =$row['iname'];
				$k=count($m2);
			
			}
			
?>
<html>

<title>KLIK</title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			
<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>

<link rel="stylesheet" type="text/css" href="stylesheets/style.css" />
<link rel="stylesheet" type="text/css" href="stylesheets/sidebar.css" />

<script>
	
	$(document).ready(function () {

		//set the default location (fix ie 6 issue)
		$('.lava').css({left:$('span.item:first').position()['left']});
		
		$('.item').mouseover(function () {
			//scroll the lava to current item position
			$('.lava').stop().animate({left:$(this).position()['left']}, {duration:200});
			
			//scroll the panel to the correct content
			$('.panel').stop().animate({left:$(this).position()['left'] * (-2)}, {duration:200});
		});
		
	});
	
	</script>


<script src="js/stuHover.js" type="text/javascript"></script>

<script language="JavaScript1.1">
<!--




var slideimages=new Array()
var slidelinks=new Array()
function slideshowimages(){
for (i=0;i<slideshowimages.arguments.length;i++){
slideimages[i]=new Image()
slideimages[i].src=slideshowimages.arguments[i]
}
}

function slideshowlinks(){
for (i=0;i<slideshowlinks.arguments.length;i++)
slidelinks[i]=slideshowlinks.arguments[i]
}

function gotoshow(){
if (!window.winslide||winslide.closed)
winslide=window.open(slidelinks[whichlink])
else
winslide.location=slidelinks[whichlink]
winslide.focus()
}

//-->
</script>


</head>


<body>



<br>
<br>



<div class="whole">

<div id="header">

<ul>
<li><a href="about.html">ABOUT</a></li>
<li><a href="index.html">HOME</a></li>

<li><a href="upload.php">UPLOAD</a></li>
<li><a href="login.html">LOGIN</a></li>		
<li><a href="disp.php">VOTE</a></li>
<li><a href="register.html">REGISTER</a></li>

</ul>

</div>
<div id="content">
<br>
<br>
<div class="welcme">
<b><i><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
BEST PICS OF THE DAY</i></b></p>
</div>

<div class="slides">

<fieldset class="slideb">
<div class="slideimg">

<img src="C:\Users\hp\Desktop\images\gmail.jpg" name="slide" width=490 height=350 >
</fieldset>
</div>



<script language="JavaScript1.1">
<!--

//configure the paths of the images, plus corresponding target links
var ar=new Array;
 <?php
        for($i=0;$i<count($m2); $i++)
                {
            echo "ar[$i]='".$m2[$i]."';\n";
        }
?>
var g="images1/";
var z=g+ar[0];
var y=g+ar[1];
var w=g+ar[2];
var v=g+ar[3];
var u=g+ar[4];
var u1=g+ar[5];
var u2=g+ar[6];
var u3=g+ar[7];
var u4=g+ar[8];
var u5=g+ar[9];
if(ar.length==10)
slideshowimages(z,y,w,v,u,u1,u2,u3,u4,u5);
else if(ar.length==9)
slideshowimages(z,y,w,v,u,u1,u2,u3,u4);
else if(ar.length==8)
slideshowimages(z,y,w,v,u,u1,u2,u3);
else if(ar.length==7)
slideshowimages(z,y,w,v,u,u1,u2);
else if(ar.length==6)
slideshowimages(z,y,w,v,u,u1);
else if(ar.length==5)
slideshowimages(z,y,w,v,u);
else if(ar.length==4)
slideshowimages(z,y,w,v);
else if(ar.length==3)
slideshowimages(z,y,w);
else if(ar.length==2)
slideshowimages(z,y);
else
slideshowimages(z);

//configure the speed of the slideshow, in miliseconds
var slideshowspeed=1700

var whichlink=0
var whichimage=0
function slideit(){
if (!document.images)
return
document.images.slide.src=slideimages[whichimage].src
whichlink=whichimage
if (whichimage<slideimages.length-1)
whichimage++
else
whichimage=0
setTimeout("slideit()",slideshowspeed)
}
slideit()

//-->
</script>

</div>	




<br>
<br>
<br>
<br>
<br>

		
	

</div>

</div>



</body>
</html>

