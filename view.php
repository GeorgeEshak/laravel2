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
<body background="MM.png" style="background-repeat: no-repeat;background-size: 100%;">
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
<table border="2" cellspacing="2" cellpadding="2" align="center" width="50%" height=20%>
<tr>
<th>id</th>
<th>from</th>
<th>to</th>
<th>DepartureTime</th>
<th>ArrivalTime	</th>
<th>Duration</th>
<th>speedKM_H</th>
<th>type</th>
<th>stopin</th>
</tr>
<pre>
<?php
$from =$_POST['from'];
$to =$_POST['to'];
$type =$_POST['type'];
$q="select * from trains where fromt=? and tot=? and type=?";
$arg=array($from ,$to ,$type);
$view=$db->getrows($q,$arg);
foreach($view as $name)
	{
         echo "<tr>
         	<td>$name[id]</td>
                <td>$name[fromt]</td>
                <td>$name[tot]</td>
                <td>$name[DepartureTime]</td>
                <td>$name[ArrivalTime]</td>
                <td>$name[Duration]</td>
                <td>$name[speedKM_H]</td>
                <td>$name[Type]</td>
                <td>$name[stopin]</td>
              </tr>" ;
	}
echo "</table>"  ;
?>
</pre>
</table>
</body>
</html>
