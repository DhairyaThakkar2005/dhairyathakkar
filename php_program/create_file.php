<?php
$fp="d:\\f2.txt";
$del=unlink($fp);

if($del)
{
    echo "File deleted successfully";
}

else
{
    echo "Error deleting file";
}

// // Writing the file
// $f=fopen($fp,'r');
// if($f)
// {
//     echo "file is open/created";
// }
// $r=fwrite($f,"My Name is Dhairya");
// $r1=fwrite($f,"I Study in SYBCA");
// if($r && $r1)
// {
//     echo "Data is written successfully";
// }
// else
// {
//     echo "Error writing data";
// }

// // Reading the file
// $read=fread($f,filesize($fp));
// echo $read;

// fclose($f);
?>