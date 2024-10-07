<?php
$edata=array("eid"=>101,"ename"=>"Dhairya","salary"=>50000);

echo $edata["eid"]."<br>";
echo $edata["ename"]."<br>";
echo $edata["salary"]."<br>";

foreach($edata as $ans)
{
    echo $ans."<br>";
}
?>