<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html align="center">
<meta charset="utf-8">
<head>
<link rel="stylesheet" type ="text/css" href ="style.css"/>
  <title></title>
</head>
<?php
include("DB.php");
$db=new DataBase("skkmsr");
?>
<body background="MM.png" style="background-repeat: no-repeat;background-size: 100%">
<div align="center" style="	
			width: 100%;
			background-color: red;
			text-decoration:underline;
			text-align:center;
			text-transform: capitalize;
			text-shadow: 1px 2px #000000;
            line-height: 1.6 ;
            font-size: 25px;">
          Egypt trains-skk haded masr
	</div>

<pre>
<form action="view.php" method="post">
<select name="from" style="width:200px">
<option value='0'>From </option>

<?php
$q='select distinct(fromt) from trains order by fromt';
$test= array();
$data=$db->getRows($q,$test);
foreach($data as $row){
//echo"<option value='".$row['fromt']."'>".$row['fromt']."</option>";
?>
<option value='<?=$row['fromt']?>'><?=$row['fromt']?></option>
<?php
}
?>
</select>



<select name="to" style="width:200px">
<option value='0'>To </option>

<?php
$q="select distinct(tot) from trains order by tot";
$data2=$db->getrows($q,array());
foreach($data2 as $name){
?>
<option value ="<?=$name['tot']?>"><?=$name['tot']?></option>
<?php
}
?>
</select>



<select name="type"style="width:200px">
<option value='0'>Type </option>
<?php
$q=("select distinct(type) from trains order by type");
$data3=$db->getrows($q,array());
foreach ($data3 as $name){
	?>
	<option value="<?= $name['type']?>"><?= $name['type']?></option>
<?php
	}
?>


</select>


<input type="submit" name="View Trains" value="View Trains"/>


</pre>
</form>
</body>

</html>
