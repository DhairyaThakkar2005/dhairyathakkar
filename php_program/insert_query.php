<?php
include "conn.php";

// $q="insert into student(sid,sname,sadd) values(1001,'Dhairya','aa')";
$q="update student set sname ='xyz' where sname='Dhairya'";
// $q="delete from student where sid ='1001'";
// $q="select * from student";
$r=mysqli_query($con,$q);
// $n=mysql_num_rows($r);
// if($n>0){
//     while($r1=mysqli_fetch_row($r))
//     {
//         echo "student id is: {$r1['sid']}<br>";
//         echo "student name is: {$r1['sname']}<br>";
//         echo "student address is: {$r1['sadd']}<br>";
//         echo "----------------------------------";

//     }
//     echo "Data is succcessfully getting";
// }
// else
// {
//     echo "No data found";
// }
// if($r)
// {
//     echo "data inserted successfully";
// }
if($r)
{
    echo "data updated successfully";
}

// if($r)
// {
//     echo "data deleted successfully";
// }

?>