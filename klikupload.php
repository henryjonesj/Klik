<?php
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br />";
  }
else
  {
	
  //if the image already exists in the folder
  
if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
	  

//if image is new store the original image in upload folder

    else
      {
      $con=mysql_connect("localhost","root","");
		mysql_select_db("klik",$con);
		$p=$_POST['g1'];
		$f=0;
		$res=mysql_query("select * from user where (pwd='$p') ");
		while($row = mysql_fetch_array($res))
		{
			$m=$row['uname'];
			$q=$_FILES["file"]["name"];
			$q1="INSERT INTO votes (uname,iname,time,votes) VALUES ('$m','$q',now(),0)";
			$res1 = mysql_query($q1);
			$f=1;

		}
	}
	 if($f==1) 
	 {
		move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      
	//now crop the image and store in images folder
	$fn=$_FILES["file"]["name"];
	$filename = 'upload/'.$fn;
	$type=$_FILES["file"]["type"];

// Content type
header('Content-Type: image/jpeg');

// Get new dimensions
list($width, $height) = getimagesize($filename);
$new_width = 100;
$new_height = 100;

// Resample
$image_p = imagecreatetruecolor($new_width, $new_height);



if (($type == "image/jpg") || ($type == "image/jpeg") )
 {
     $image = imagecreatefromjpeg($filename);
       } 
elseif ($type == "image/gif") {
        $image = imagecreatefromgif($filename);

    }
 elseif ($type == "image/bmp") {
       $image = imagecreatefromwbmp($filename);

    } 
elseif ($type == "image/png") {
        $image = imagecreatefrompng($filename);

    } 
else { }




imagecopyresized($image_p, $image, 0, 0, $width/4, $height/4, 100, 100, $width/2, $height/2);

// Output
imagejpeg($image_p,"images/".$_FILES["file"]["name"]); 

header("location:disp.php");
      }
	  else
	  {
			echo " U have not registered yet";
		}
  }
?>