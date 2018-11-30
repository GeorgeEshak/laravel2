<?php
 include("DB.php");
 $db=new DataBase("skkMsr");
$q= "create table trains (
id int(11) NOT NULL PRIMARY KEY,
fromt varchar(50),
tot varchar(50),
DepartureTime time ,
ArrivalTime time,
Duration time,
speedKM_H int(7),
Type varchar(50),
stopin int (50));";
 $db->myExec($q);
?>
