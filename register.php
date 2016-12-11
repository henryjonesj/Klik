<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("klik",$con);
$q="INSERT INTO user (uname,pwd )
VALUES
('$_POST[h4]','$_POST[h5]')";

$res = mysql_query($q);

$q1="INSERT INTO register (fname,lname,gender,uname,pwd,mailid,flag )
VALUES ('$_POST[h1]','$_POST[h2]','$_POST[sex]','$_POST[h4]','$_POST[h5]','$_POST[h3]',0)";
$res1 = mysql_query($q1);
header("Location: index.html");
?>