<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("klik",$con);
$p=$_POST['s'];
$im=$_POST['hi'];
$f=0;
$res=mysql_query("select * from user where (pwd='$p') ");
while($row = mysql_fetch_array($res))
		{
			$m=$row['uname'];
			$n=mysql_query("select * from votes where (uname='$m')");
			while($row1 = mysql_fetch_array($n))
			{
				$m2=$row1['iname'];
				if(!($m2==$im))
				{
					$f=1;
				
				}
			
			}
			

		}
		if($f==1)
		{
			$r1=mysql_query("select flag from register where uname='$m'");
			while($roww=mysql_fetch_array($r1))
			{
				if($roww['flag']==0)
				{
					$r="UPDATE register SET flag=flag+1 WHERE uname='$m'";
					mysql_query($r);
					$q="UPDATE votes SET votes=votes+1 WHERE iname='$m2'";
					mysql_query($q);
					echo "U have voted successfully";
				}
				else
				{
					echo "Sorry!! U have voted already";
				}
			}
		}
		else
		{
			
			echo "Sorry! U cannot vote for the image u loaded" ;
		}
?>