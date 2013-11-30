<html>
<!-- apologies for not being HTML standards-compliant; this is a midnight one-hour half-asleep project I wrote in bed -->
<style>
hr{width: 400px;}
body{padding-left:15%;padding-right:15%;font-family:Helvetica; background-color:#34495e;}
a:link {color:white: text-decoration:none;}      /* unvisited link */
a:visited {color:white; text-decoration:none;}  /* visited link */
a:hover {color:white; text-decoration:none;}  /* mouse over link */
a:active {color:white; text-decoration:none;}  /* selected link */
h3 {background-color:#c0392b;  padding:1em;}
h3:hover {background-color:#e74c3c; padding:1em;}
p{background-color:#3498db; padding:1em;}
</style>
<div>
<center><h1 style="padding:1em;color:white;background-color:#27ae60;"><a href="index.php">Blog</a></h1>
</center><br /> <br />
<?php
if(isset($_GET["post"])){
	$num = $_GET["post"];
	$file=fopen("posts/".$num,"r") or exit("Unable to open file!"); // open the file or spew error;
    	echo fread($file,filesize("posts/".$i));
    	fclose($file); $num--; //close file; decrement the pointer
    }else{
	  // Figure out how many blog posts there are on server
  	  // integer num used for incrementing
 	   $num = 0;
 	   $dir = 'posts/';
 	   if ($handle = opendir($dir)) {
 	       while (($file = readdir($handle)) !== false){
 	           if (!in_array($file, array('.', '..')) && !is_dir($dir.$file))
 	               $num++;
       	 }
	    }

	while($num >= 1) {  // loop to read all the blog posts
   		$file=fopen("posts/".$num,"r") or exit("Unable to open file!"); // open the file or spew error;
    		echo fread($file,filesize("posts/".$num))."<br /><br />";
    		fclose($file); $num--; //close file; decrement the pointer
    	} // end loop
    }


?>
