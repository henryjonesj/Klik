<?php
session_start();
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
<li><a href="register.html">REGISTER</a></li>
<li><a href="bp.php">BEST PICS OF THE DAY</a></li>		
</ul>

</div>
<div id="content">
<br>
<br>
<div class="welcme">
<b><i><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;WELCOME TO KLIK</i></b></p>
</div>

<div class="slides">

<fieldset class="slide">
<div class="slideimg">

<img src="C:\Users\hp\Desktop\images\gmail.jpg" name="slide" width=490 height=250 >
</fieldset>
</div>



<script>
<!--

//configure the paths of the images, plus corresponding target links
slideshowimages("images1/welcome.jpg","images1/easy.gif","images1/klik.gif");


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
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<marquee scrolldelay="50" ><font color="yellow" size="6"><b>Thumbails of the images so far loaded! Click to have an enlarged view<b></font></marquee>

<br/>
<br/>
<br/>
<center>&nbsp;
<?php

$files = glob("images/*.*"); 

if ($handle = opendir('upload/')) {
   
    

    $i=0;
    while (false !== ($entry = readdir($handle))) {
        
	$arr[$i]=$entry;
	
	
	$i++;
    }

    
    closedir($handle);
}



for ($j=0; $j<count($files); $j++)

{ 
$k=$j+2;
$num = $files[$j]; 
echo"$k";




echo '<a href="disp2.php?fname='.$arr[$k].'"><img src="'.$num.'" alt="random image" title="'.$arr[$k].'"></a>'; 

} 


?></center>


</div>	





<br>

<br>
<br>
<br>
<br>
<br>

		
	

</div>

</div>



</body>
</html>

