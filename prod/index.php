<?php
$page = $_SERVER['PHP_SELF'];
$sec = "120";


echo $current_time = urlEncode(date("Y-m-d"));
#echo "<br><br>";

header("Refresh: $sec; url=$page");
$r_body = rand(1,5);
$r_color = array(1 => '#ffffff', '#e5e5e5', '#fff7fe', '#f2fff7', '#f7fdff');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="ru">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=WINDOWS-1251"> 
<style>
td.green {
background: #8FBC8F;
height: 50px;
   font-size: 22;
}
td.yel {
background: #FFFACD;
height: 50px;
   font-size: 22;
}
tr.thead {
background: aliceblue;
}
td {
text-align: center;
   font-size: 20;
}
#red {
color: red;
text-color: red;
}

#main {
align: center;
}
span.redplan {
color: red;
text-color: red;
}
p#hed {
   font-size: 24;
}
body {
 background: <?php echo $r_color[$r_body]; ?>;
}

</style>
  </head>

<?php




$start_week =  date("d.m.Y", strtotime("last Monday")); // Начало недели

$end_week = date("d.m.Y", strtotime("Friday"));       // КОнец недели


##################

$link = mysqli_connect("127.0.0.1", "root", "", "db");




$result = mysqli_query($link, "SELECT `prod`.* FROM `prod` where id>280");
$num_rows = mysqli_num_rows($result);



while ($row = mysqli_fetch_array($result)) {

 # printf("ID: %s Name: %s qqqq: %s  qqqq: %s", $row[0], $row[1],$row[2], $row[3],$row[4], $row[5],$row[6], $row[7],$row[8], $row[9]);
#echo "<hr><br>";
$daten[] = $row[1];
$plan1[] = $row[2];
$fact1[] = $row[3];
$plan2[] = $row[4];
$fact2[] = $row[5];
$plan3[] = $row[6];
$fact3[] = $row[7];
$plan4[] = $row[8];
$fact4[] = $row[9];
$plan5[] = $row[10];
$fact5[] = $row[11];
$plan6[] = $row[12];
$fact6[] = $row[13];
$plan7[] = $row[14];
$fact7[] = $row[15];
$plan8[] = $row[16];
$fact8[] = $row[17];
$plan9[] = $row[18];
$fact9[] = $row[19];
$plan10[] = $row[20];
$fact10[] = $row[21];
$plan11[] = $row[22];
$fact11[] = $row[23];
$plan12[] = $row[24];
$fact12[] = $row[25];
}
#};

if($plan1[0]>$fact1[0])
{ $color_plan1_1 = "redplan"; }
if($plan1[1]>$fact1[1])
{ $color_plan1_2 = "redplan"; }
if($plan1[2]>$fact1[2])
{ $color_plan1_3 = "redplan"; }
if($plan1[3]>$fact1[3])
{ $color_plan1_4 = "redplan"; }
if($plan1[4]>$fact1[4])
{ $color_plan1_5 = "redplan"; }


if($plan2[0]>$fact2[0])
{ $color_plan2_1 = "redplan"; }
if($plan2[1]>$fact2[1])
{ $color_plan2_2 = "redplan"; }
if($plan2[2]>$fact2[2])
{ $color_plan2_3 = "redplan"; }
if($plan2[3]>$fact2[3])
{ $color_plan2_4 = "redplan"; }
if($plan2[4]>$fact2[4])
{ $color_plan2_5 = "redplan"; }

if($plan3[0]>$fact3[0])
{ $color_plan3_1 = "redplan"; }
if($plan3[1]>$fact3[1])
{ $color_plan3_2 = "redplan"; }
if($plan3[2]>$fact3[2])
{ $color_plan3_3 = "redplan"; }
if($plan3[3]>$fact3[3])
{ $color_plan3_4 = "redplan"; }
if($plan3[4]>$fact3[4])
{ $color_plan3_5 = "redplan"; }

if($plan4[0]>$fact4[0])
{ $color_plan4_1 = "redplan"; }
if($plan4[1]>$fact4[1])
{ $color_plan4_2 = "redplan"; }
if($plan4[2]>$fact4[2])
{ $color_plan4_3 = "redplan"; }
if($plan4[3]>$fact4[3])
{ $color_plan4_4 = "redplan"; }
if($plan4[4]>$fact4[4])
{ $color_plan4_5 = "redplan"; }

if($plan5[0]>$fact5[0])
{ $color_plan5_1 = "redplan"; }
if($plan5[1]>$fact5[1])
{ $color_plan5_2 = "redplan"; }
if($plan5[2]>$fact5[2])
{ $color_plan5_3 = "redplan"; }
if($plan5[3]>$fact5[3])
{ $color_plan5_4 = "redplan"; }
if($plan5[4]>$fact5[4])
{ $color_plan5_5 = "redplan"; }

if($plan6[0]>$fact6[0])
{ $color_plan6_1 = "redplan"; }
if($plan6[1]>$fact6[1])
{ $color_plan6_2 = "redplan"; }
if($plan6[2]>$fact6[2])
{ $color_plan6_3 = "redplan"; }
if($plan6[3]>$fact6[3])
{ $color_plan6_4 = "redplan"; }
if($plan6[4]>$fact6[4])
{ $color_plan6_5 = "redplan"; }

if($plan7[0]>$fact7[0])
{ $color_plan7_1 = "redplan"; }
if($plan7[1]>$fact7[1])
{ $color_plan7_2 = "redplan"; }
if($plan7[2]>$fact7[2])
{ $color_plan7_3 = "redplan"; }
if($plan7[3]>$fact7[3])
{ $color_plan7_4 = "redplan"; }
if($plan7[4]>$fact7[4])
{ $color_plan7_5 = "redplan"; }

if($plan8[0]>$fact8[0])
{ $color_plan8_1 = "redplan"; }
if($plan8[1]>$fact8[1])
{ $color_plan8_2 = "redplan"; }
if($plan8[2]>$fact8[2])
{ $color_plan8_3 = "redplan"; }
if($plan8[3]>$fact8[3])
{ $color_plan8_4 = "redplan"; }
if($plan8[4]>$fact8[4])
{ $color_plan8_5 = "redplan"; }

if($plan9[0]>$fact9[0])
{ $color_plan9_1 = "redplan"; }
if($plan9[1]>$fact9[1])
{ $color_plan9_2 = "redplan"; }
if($plan9[2]>$fact9[2])
{ $color_plan9_3 = "redplan"; }
if($plan9[3]>$fact9[3])
{ $color_plan9_4 = "redplan"; }
if($plan9[4]>$fact9[4])
{ $color_plan9_5 = "redplan"; }





##################


$daten1 = $daten[0];
$d1 = new DateTime($daten1);
$timestamp1 = $d1->getTimestamp(); 
$f_date1 = $d1->format('d.m.Y'); 

$daten2 = $daten[1];
$d2 = new DateTime($daten2);
$timestamp2 = $d2->getTimestamp(); 
$f_date2 = $d2->format('d.m.Y'); 

$daten3 = $daten[2];
$d3 = new DateTime($daten3);
$timestamp3 = $d3->getTimestamp(); 
$f_date3 = $d3->format('d.m.Y'); 

$daten4 = $daten[3];
$d4 = new DateTime($daten4);
$timestamp4 = $d4->getTimestamp(); 
$f_date4 = $d4->format('d.m.Y'); 

$daten5 = $daten[4];
$d5 = new DateTime($daten5);
$timestamp5 = $d5->getTimestamp(); 
$f_date5 = $d5->format('d.m.Y'); 


#$current_time = "2018-11-12";





mysqli_close($link);

?>

<?php 

 ?>

<!-- #######  YAY, I AM THE SOURCE EDITOR! #########-->
<div id="main" align="center">
<p id="hed"><strong>ПЛАН СДАЧИ ПРОДУКЦИИ</strong></p>
<table width="1600">
<tbody>
<tr class="thead">
<td rowspan="3" width="400">БРИГАДЫ</td>
<td colspan="2">Понедельник</td>
<td colspan="2">Вторник</td>
<td colspan="2">Среда</td>
<td colspan="2">Четверг</td>
<td colspan="2">Пятница</td>
<td colspan="2" rowspan="2">ИТОГО</td>
</tr>
<tr class="thead">
<td colspan="2"><?php echo $f_date1; ?></td>
<td colspan="2"><?php echo $f_date2; ?></td>
<td colspan="2"><?php echo $f_date3; ?></td>
<td colspan="2"><?php echo $f_date4; ?></td>
<td colspan="2"><?php echo $f_date5; ?></td>
</tr>
<tr class="thead">
<td  width="100">План</td>
<td width="100">Факт</td>
<td width="100">План</td>
<td width="100">Факт</td>
<td width="100">План</td>
<td width="100">Факт</td>
<td width="100">План</td>
<td width="100">Факт</td>
<td width="100">План</td>
<td width="100">Факт</td>
<td width="100">План</td>
<td width="100">Факт</td>
</tr>
<tr>
<td class="green" align="left">Гостиные</td>
<td class="green"><?php echo $plan1[0]; ?></td>
<td class="green"><span class="<?php echo $color_plan1_1; ?>"><?php echo $fact1[0]; ?></span></td>
<td class="green"><?php echo $plan1[1]; ?></td>
<td class="green"><span class="<?php echo $color_plan1_2; ?>"><?php echo $fact1[1]; ?></span></td>
<td class="green"><?php echo $plan1[2]; ?></td>
<td class="green"><span class="<?php echo $color_plan1_3; ?>"><?php echo $fact1[2]; ?></span></td>
<td class="green"><?php echo $plan1[3]; ?></td>
<td class="green"><span class="<?php echo $color_plan1_4; ?>"><?php echo $fact1[3]; ?></span></td>
<td class="green"><?php echo $plan1[4]; ?></td>
<td class="green"><span class="<?php echo $color_plan1_5; ?>"><?php echo $fact1[4]; ?></span></td>
<td class="green">&nbsp;</td>
<td class="green">&nbsp;</td>
</tr>
<tr>
<td class="yel" align="left">Восьмерки</td>
<td class="yel"><?php echo $plan2[0]; ?></td>
<td class="yel"><span class="<?php echo $color_plan2_1; ?>"><?php echo $fact2[0]; ?></span></td>
<td class="yel"><?php echo $plan2[1]; ?></td>
<td class="yel"><span class="<?php echo $color_plan2_2; ?>"><?php echo $fact2[1]; ?></span></td>
<td class="yel"><?php echo $plan2[2]; ?></td>
<td class="yel"><span class="<?php echo $color_plan2_3; ?>"><?php echo $fact2[2]; ?></span></td>
<td class="yel"><?php echo $plan2[3]; ?></td>
<td class="yel"><span class="<?php echo $color_plan2_4; ?>"><?php echo $fact2[3]; ?></span></td>
<td class="yel"><?php echo $plan2[4]; ?></td>
<td class="yel"><span class="<?php echo $color_plan2_5; ?>"><?php echo $fact2[4]; ?></span></td>
<td class="yel">&nbsp;</td>
<td class="yel">&nbsp;</td>
</tr>
<tr>
<td class="green" align="left">Пятерки</td>
<td class="green"><?php echo $plan3[0]; ?></td>
<td class="green"><span class="<?php echo $color_plan3_1; ?>"><?php echo $fact3[0]; ?></span></td>
<td class="green"><?php echo $plan3[1]; ?></td>
<td class="green"><span class="<?php echo $color_plan3_2; ?>"><?php echo $fact3[1]; ?></span></td>
<td class="green"><?php echo $plan3[2]; ?></td>
<td class="green"><span class="<?php echo $color_plan3_3; ?>"><?php echo $fact3[2]; ?></span></td>
<td class="green"><?php echo $plan3[3]; ?></td>
<td class="green"><span class="<?php echo $color_plan3_4; ?>"><?php echo $fact3[3]; ?></span></td>
<td class="green"><?php echo $plan3[4]; ?></td>
<td class="green"><span class="<?php echo $color_plan3_5; ?>"><?php echo $fact3[4]; ?></span></td>
<td class="green">&nbsp;</td>
<td class="green">&nbsp;</td>
</tr>
<tr>
<td class="yel" align="left">Экономы</td>
<td class="yel"><?php echo $plan4[0]; ?></td>
<td class="yel"><span class="<?php echo $color_plan4_1; ?>"><?php echo $fact4[0]; ?></span></td>
<td class="yel"><?php echo $plan4[1]; ?></td>
<td class="yel"><span class="<?php echo $color_plan4_2; ?>"><?php echo $fact4[1]; ?></span></td>
<td class="yel"><?php echo $plan4[2]; ?></td>
<td class="yel"><span class="<?php echo $color_plan4_3; ?>"><?php echo $fact4[2]; ?></span></td>
<td class="yel"><?php echo $plan4[3]; ?></td>
<td class="yel"><span class="<?php echo $color_plan4_4; ?>"><?php echo $fact4[3]; ?></span></td>
<td class="yel"><?php echo $plan4[4]; ?></td>
<td class="yel"><span class="<?php echo $color_plan4_5; ?>"><?php echo $fact4[4]; ?></span></td>
<td class="yel">&nbsp;</td>
<td class="yel">&nbsp;</td>
</tr>
<tr>
<td class="green" align="left">Тумбы</td>
<td class="green"><?php echo $plan5[0]; ?></td>
<td class="green"><span class="<?php echo $color_plan5_1; ?>"><?php echo $fact5[0]; ?></span></td>
<td class="green"><?php echo $plan5[1]; ?></td>
<td class="green"><span class="<?php echo $color_plan5_2; ?>"><?php echo $fact5[1]; ?></span></td>
<td class="green"><?php echo $plan5[2]; ?></td>
<td class="green"><span class="<?php echo $color_plan5_3; ?>"><?php echo $fact5[2]; ?></span></td>
<td class="green"><?php echo $plan5[3]; ?></td>
<td class="green"><span class="<?php echo $color_plan5_4; ?>"><?php echo $fact5[3]; ?></span></td>
<td class="green"><?php echo $plan5[4]; ?></td>
<td class="green"><span class="<?php echo $color_plan5_5; ?>"><?php echo $fact5[4]; ?></span></td>
<td class="green">&nbsp;</td>
<td class="green">&nbsp;</td>
</tr>
<tr>
<td class="yel" align="left">Комоды</td>
<td class="yel"><?php echo $plan6[0]; ?></td>
<td class="yel"><span class="<?php echo $color_plan6_1; ?>"><?php echo $fact6[0]; ?></span></td>
<td class="yel"><?php echo $plan6[1]; ?></td>
<td class="yel"><span class="<?php echo $color_plan6_2; ?>"><?php echo $fact6[1]; ?></span></td>
<td class="yel"><?php echo $plan6[2]; ?></td>
<td class="yel"><span class="<?php echo $color_plan6_3; ?>"><?php echo $fact6[2]; ?></span></td>
<td class="yel"><?php echo $plan6[3]; ?></td>
<td class="yel"><span class="<?php echo $color_plan6_4; ?>"><?php echo $fact6[3]; ?></span></td>
<td class="yel"><?php echo $plan6[4]; ?></td>
<td class="yel"><span class="<?php echo $color_plan6_5; ?>"><?php echo $fact6[4]; ?></span></td>
<td class="yel">&nbsp;</td>
<td class="yel">&nbsp;</td>
</tr>
<tr>
<td class="green" align="left">Купе Шкафы</td>
<td class="green"><?php echo $plan7[0]; ?></td>
<td class="green"><span class="<?php echo $color_plan7_1; ?>"><?php echo $fact7[0]; ?></span></td>
<td class="green"><?php echo $plan7[1]; ?></td>
<td class="green"><span class="<?php echo $color_plan7_2; ?>"><?php echo $fact7[1]; ?></span></td>
<td class="green"><?php echo $plan7[2]; ?></td>
<td class="green"><span class="<?php echo $color_plan7_3; ?>"><?php echo $fact7[2]; ?></span></td>
<td class="green"><?php echo $plan7[3]; ?></td>
<td class="green"><span class="<?php echo $color_plan7_4; ?>"><?php echo $fact7[3]; ?></span></td>
<td class="green"><?php echo $plan7[4]; ?></td>
<td class="green"><span class="<?php echo $color_plan7_5; ?>"><?php echo $fact7[4]; ?></span></td>
<td class="green">&nbsp;</td>
<td class="green">&nbsp;</td>
</tr>
<tr>
<td class="yel" align="left">Купе Столы комп.</td>
<td class="yel"><?php echo $plan8[0]; ?></td>
<td class="yel"><span class="<?php echo $color_plan8_1; ?>"><?php echo $fact8[0]; ?></span></td>
<td class="yel"><?php echo $plan8[1]; ?></td>
<td class="yel"><span class="<?php echo $color_plan8_2; ?>"><?php echo $fact8[1]; ?></span></td>
<td class="yel"><?php echo $plan8[2]; ?></td>
<td class="yel"><span class="<?php echo $color_plan8_3; ?>"><?php echo $fact8[2]; ?></span></td>
<td class="yel"><?php echo $plan8[3]; ?></td>
<td class="yel"><span class="<?php echo $color_plan8_4; ?>"><?php echo $fact8[3]; ?></span></td>
<td class="yel"><?php echo $plan8[4]; ?></td>
<td class="yel"><span class="<?php echo $color_plan8_5; ?>"><?php echo $fact8[4]; ?></span></td>
<td class="yel">&nbsp;</td>
<td class="yel">&nbsp;</td>
</tr>
<tr>
<td class="green" align="left">Купе Стеллажи</td>
<td class="green"><?php echo $plan9[0]; ?></td>
<td class="green"><span class="<?php echo $color_plan9_1; ?>"><?php echo $fact9[0]; ?></span></td>
<td class="green"><?php echo $plan9[1]; ?></td>
<td class="green"><span class="<?php echo $color_plan9_2; ?>"><?php echo $fact9[1]; ?></span></td>
<td class="green"><?php echo $plan9[2]; ?></td>
<td class="green"><span class="<?php echo $color_plan9_3; ?>"><?php echo $fact9[2]; ?></span></td>
<td class="green"><?php echo $plan9[3]; ?></td>
<td class="green"><span class="<?php echo $color_plan9_4; ?>"><?php echo $fact9[3]; ?></span></td>
<td class="green"><?php echo $plan9[4]; ?></td>
<td class="green"><span class="<?php echo $color_plan9_5; ?>"><?php echo $fact9[4]; ?></span></td>
<td class="green">&nbsp;</td>
<td class="green">&nbsp;</td>
</tr>


</tbody>
</table>

<br>
</div>
<br>
<br>
<?php

?>
<br>
<br>
<br>
<br>
<?php
#echo $myrow['name'];
?>