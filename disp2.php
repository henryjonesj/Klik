<?php
session_start();
$imname=$_GET["fname"];

echo'<img src="upload/'.$imname.'">';


?>


<html>
<body>
<div id="fb-root"></div>
<script>

function check()
{
	var x=document.forms["form1"]["p"].value;
	if(x=="" || x==null)
	{
		alert("Please enter password");
		return false;
	}
}
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

</script>
<form action="vote.php" method="post"
enctype="multipart/form-data"  name="form1" onsubmit="return check()">

<input type="hidden" name="hi" value="<?php echo $imname ;?>" id="txtsamp" /><br/>
Password: <input type="password" name="s" id="p" />
<input type="image" src="vote.jpg" alt="Submit" /> <br/>
<br>
<br>
<?php

echo '<iframe src="http://www.facebook.com/plugins/like.php?href=localhost/klik/disp2.php?fname='.$imname.'"
        scrolling="no" frameborder="0"
        style="border:none; width:450px; height:80px"></iframe>
<br>
<br>
<br>
<div class="fb-comments" data-href="localhost/klik/disp2.php?fname='.$imname.'" data-num-posts="2" data-width="470">
</div>
 ';
 


?>


</body>
</html>
