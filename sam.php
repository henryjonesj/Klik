<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("klik",$con);
$n=mysql_query("select iname from votes order by votes desc");

while($row = mysql_fetch_array($n))
			{
				$m2[] =$row['iname'];
				$k=count($m2);
			
			}
			echo $k;
			
?>
<html>
<head>
<script language="JavaScript1.1">

var ar=new Array;
 <?php
        for($i=0;$i<count($m2); $i++)
                {
            echo "ar[$i]='".$m2[$i]."';\n";
        }
?>
for(i=0;i<ar.length;i++)
alert(ar[i]);


</script>
</head>
</html>