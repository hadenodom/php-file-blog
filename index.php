<html>
<!-- apologies for not being HTML standards-compliant; this is a midnight one-hour half-asleep project I wrote in bed -->
<style>
hr{width: 400px;}
body{padding-left:15%;padding-right:15%;font-family:Helvetica; background-color:#34495e;} 
a:link {color:white: text-decoration:none;}      /* unvisited link */
a:visited {color:white; text-decoration:none;}  /* visited link */
a:hover {color:white; text-decoration:none;}  /* mouse over link */
a:active {color:white; text-decoration:none;}  /* selected link */ 
h3 {background-color:#c0392b; width:100%;
display:inline-block; padding:1em;}
h3:hover {background-color:#e74c3c; width:100%;
display:inline-block; padding:1em;}
</style>
<div>
<center><h1 style="width:100%;display:inline-block; padding:1em;font-decoration:underline;color:white;background-color:#27ae60;">Blog</h3>
</center>
<?php
    // Figure out how many blog posts there are on server
    // integer i used for incrementing
    $i = 0; 
    $dir = 'posts/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }
    // loads three most recent post titles (first lines of files in blag/)
    $x=$i - 2;// $x = $i - 3; // x, for the loop below.  three less than i because we wanna display the last three posts.
    while($i >= $x) {  // loop three times
    echo "<a href=blog.php?post=",$i,">"; 
    $file=fopen("posts/".$i,"r") or exit("Unable to open file!"); // open the file or spew error;
    echo fgets($file)."</a>";
    fclose($file); $i--; //close file; decrement the pointer
    } // end loop

?>
</div>
