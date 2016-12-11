<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("klik",$con);
$res = mysql_query("SELECT * FROM user");
$f=0;
 while($row = mysql_fetch_array($res))
{

if($row['uname']==$_POST[h1] && $row['pwd']==$_POST[h2])
   $f=1;

}
if($f==0)
echo "Invalid user name and password";
else
header("Location: index.html");
?>