<?php
$page = $_SERVER['PHP_SELF'];
$sec = "10";


echo $current_time = urlEncode(date("Y-m-d"));
echo "<br><br>";

#header("Refresh: $sec; url=$page");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="ru">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=WINDOWS-1251"> 
<style>
td.green {
background: #8FBC8F;
}
td.yel {
background: #FFFACD;
}
tr.thead {
background: aliceblue;
}
td {
text-align: center;
}
p#hed {
   font-size: 24;
}
</style>
  </head>

<?php




$start_week =  date("d.m.Y", strtotime("last Monday")); // Начало недели
echo "<br><br>";
 $end_week = date("d.m.Y", strtotime("Friday"));       // КОнец недели



##################

$link = mysqli_connect("127.0.0.1", "root", "", "db");



$result = mysqli_query($link, "SELECT `prod`.* FROM `prod` where id>280");
$num_rows = mysqli_num_rows($result);


while ($row = mysqli_fetch_array($result)) {


$daten[] = $row[1];

}



##################


##########
#UPDATE!!!!

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$askp1 = "UPDATE `prod` SET plan1 =".$_POST['plan1_1']." WHERE DATE = '".$daten[0]."'";
mysqli_query($link,$askp1);
$askp2 = "UPDATE `prod` SET plan2 =".$_POST['plan2_1']." WHERE DATE = '".$daten[0]."'";
mysqli_query($link,$askp2);
$askp3 = "UPDATE `prod` SET plan3 =".$_POST['plan3_1']." WHERE DATE = '".$daten[0]."'";
mysqli_query($link,$askp3);
$askp4 = "UPDATE `prod` SET plan4 =".$_POST['plan4_1']." WHERE DATE = '".$daten[0]."'";
mysqli_query($link,$askp4);
$askp5 = "UPDATE `prod` SET plan5 =".$_POST['plan5_1']." WHERE DATE = '".$daten[0]."'";
mysqli_query($link,$askp5);
$askp6 = "UPDATE `prod` SET plan6 =".$_POST['plan6_1']." WHERE DATE = '".$daten[0]."'";
mysqli_query($link,$askp6);
$askp7 = "UPDATE `prod` SET plan7 =".$_POST['plan7_1']." WHERE DATE = '".$daten[0]."'";
mysqli_query($link,$askp7);
$askp8 = "UPDATE `prod` SET plan8 =".$_POST['plan8_1']." WHERE DATE = '".$daten[0]."'";
mysqli_query($link,$askp8);
$askp9 = "UPDATE `prod` SET plan9 =".$_POST['plan9_1']." WHERE DATE = '".$daten[0]."'";
mysqli_query($link,$askp9);



$askp13 = "UPDATE `prod` SET plan1 =".$_POST['plan1_2']." WHERE DATE = '".$daten[1]."'";
mysqli_query($link,$askp13);
$askp14 = "UPDATE `prod` SET plan2 =".$_POST['plan2_2']." WHERE DATE = '".$daten[1]."'";
mysqli_query($link,$askp14);
$askp15 = "UPDATE `prod` SET plan3 =".$_POST['plan3_2']." WHERE DATE = '".$daten[1]."'";
mysqli_query($link,$askp15);
$askp16 = "UPDATE `prod` SET plan4 =".$_POST['plan4_2']." WHERE DATE = '".$daten[1]."'";
mysqli_query($link,$askp16);
$askp17 = "UPDATE `prod` SET plan5 =".$_POST['plan5_2']." WHERE DATE = '".$daten[1]."'";
mysqli_query($link,$askp17);
$askp18 = "UPDATE `prod` SET plan6 =".$_POST['plan6_2']." WHERE DATE = '".$daten[1]."'";
mysqli_query($link,$askp18);
$askp19 = "UPDATE `prod` SET plan7 =".$_POST['plan7_2']." WHERE DATE = '".$daten[1]."'";
mysqli_query($link,$askp19);
$askp20 = "UPDATE `prod` SET plan8 =".$_POST['plan8_2']." WHERE DATE = '".$daten[1]."'";
mysqli_query($link,$askp20);
$askp21 = "UPDATE `prod` SET plan9 =".$_POST['plan9_2']." WHERE DATE = '".$daten[1]."'";
mysqli_query($link,$askp21);




$askp25 = "UPDATE `prod` SET plan1 =".$_POST['plan1_3']." WHERE DATE = '".$daten[2]."'";
mysqli_query($link,$askp25);
$askp26 = "UPDATE `prod` SET plan2 =".$_POST['plan2_3']." WHERE DATE = '".$daten[2]."'";
mysqli_query($link,$askp26);
$askp27 = "UPDATE `prod` SET plan3 =".$_POST['plan3_3']." WHERE DATE = '".$daten[2]."'";
mysqli_query($link,$askp27);
$askp28 = "UPDATE `prod` SET plan4 =".$_POST['plan4_3']." WHERE DATE = '".$daten[2]."'";
mysqli_query($link,$askp28);
$askp29 = "UPDATE `prod` SET plan5 =".$_POST['plan5_3']." WHERE DATE = '".$daten[2]."'";
mysqli_query($link,$askp29);
$askp30 = "UPDATE `prod` SET plan6 =".$_POST['plan6_3']." WHERE DATE = '".$daten[2]."'";
mysqli_query($link,$askp30);
$askp31 = "UPDATE `prod` SET plan7 =".$_POST['plan7_3']." WHERE DATE = '".$daten[2]."'";
mysqli_query($link,$askp31);
$askp32 = "UPDATE `prod` SET plan8 =".$_POST['plan8_3']." WHERE DATE = '".$daten[2]."'";
mysqli_query($link,$askp32);
$askp33 = "UPDATE `prod` SET plan9 =".$_POST['plan9_3']." WHERE DATE = '".$daten[2]."'";
mysqli_query($link,$askp33);


$askp37 = "UPDATE `prod` SET plan1 =".$_POST['plan1_4']." WHERE DATE = '".$daten[3]."'";
mysqli_query($link,$askp37);
$askp38 = "UPDATE `prod` SET plan2 =".$_POST['plan2_4']." WHERE DATE = '".$daten[3]."'";
mysqli_query($link,$askp38);
$askp39 = "UPDATE `prod` SET plan3 =".$_POST['plan3_4']." WHERE DATE = '".$daten[3]."'";
mysqli_query($link,$askp39);
$askp40 = "UPDATE `prod` SET plan4 =".$_POST['plan4_4']." WHERE DATE = '".$daten[3]."'";
mysqli_query($link,$askp40);
$askp41 = "UPDATE `prod` SET plan5 =".$_POST['plan5_4']." WHERE DATE = '".$daten[3]."'";
mysqli_query($link,$askp41);
$askp42 = "UPDATE `prod` SET plan6 =".$_POST['plan6_4']." WHERE DATE = '".$daten[3]."'";
mysqli_query($link,$askp42);
$askp43 = "UPDATE `prod` SET plan7 =".$_POST['plan7_4']." WHERE DATE = '".$daten[3]."'";
mysqli_query($link,$askp43);
$askp44 = "UPDATE `prod` SET plan8 =".$_POST['plan8_4']." WHERE DATE = '".$daten[3]."'";
mysqli_query($link,$askp44);
$askp45 = "UPDATE `prod` SET plan9 =".$_POST['plan9_4']." WHERE DATE = '".$daten[3]."'";
mysqli_query($link,$askp45);



$askp49 = "UPDATE `prod` SET plan1 =".$_POST['plan1_5']." WHERE DATE = '".$daten[4]."'";
mysqli_query($link,$askp49);
$askp50 = "UPDATE `prod` SET plan2 =".$_POST['plan2_5']." WHERE DATE = '".$daten[4]."'";
mysqli_query($link,$askp50);
$askp51 = "UPDATE `prod` SET plan3 =".$_POST['plan3_5']." WHERE DATE = '".$daten[4]."'";
mysqli_query($link,$askp51);
$askp52 = "UPDATE `prod` SET plan4 =".$_POST['plan4_5']." WHERE DATE = '".$daten[4]."'";
mysqli_query($link,$askp52);
$askp53 = "UPDATE `prod` SET plan5 =".$_POST['plan5_5']." WHERE DATE = '".$daten[4]."'";
mysqli_query($link,$askp53);
$askp54 = "UPDATE `prod` SET plan6 =".$_POST['plan6_5']." WHERE DATE = '".$daten[4]."'";
mysqli_query($link,$askp54);
$askp55 = "UPDATE `prod` SET plan7 =".$_POST['plan7_5']." WHERE DATE = '".$daten[4]."'";
mysqli_query($link,$askp55);
$askp56 = "UPDATE `prod` SET plan8 =".$_POST['plan8_5']." WHERE DATE = '".$daten[4]."'";
mysqli_query($link,$askp56);
$askp57 = "UPDATE `prod` SET plan9 =".$_POST['plan9_5']." WHERE DATE = '".$daten[4]."'";
mysqli_query($link,$askp57);




$askf1 = "UPDATE `prod` SET fact1 =".$_POST['fact1_1']." WHERE DATE = '".$daten[0]."'";
mysqli_query($link,$askf1);
$askf2 = "UPDATE `prod` SET fact2 =".$_POST['fact2_1']." WHERE DATE = '".$daten[0]."'";
mysqli_query($link,$askf2);
$askf3 = "UPDATE `prod` SET fact3 =".$_POST['fact3_1']." WHERE DATE = '".$daten[0]."'";
mysqli_query($link,$askf3);
$askf4 = "UPDATE `prod` SET fact4 =".$_POST['fact4_1']." WHERE DATE = '".$daten[0]."'";
mysqli_query($link,$askf4);
$askf5 = "UPDATE `prod` SET fact5 =".$_POST['fact5_1']." WHERE DATE = '".$daten[0]."'";
mysqli_query($link,$askf5);
$askf6 = "UPDATE `prod` SET fact6 =".$_POST['fact6_1']." WHERE DATE = '".$daten[0]."'";
mysqli_query($link,$askf6);
$askf7 = "UPDATE `prod` SET fact7 =".$_POST['fact7_1']." WHERE DATE = '".$daten[0]."'";
mysqli_query($link,$askf7);
$askf8 = "UPDATE `prod` SET fact8 =".$_POST['fact8_1']." WHERE DATE = '".$daten[0]."'";
mysqli_query($link,$askf8);
$askf9 = "UPDATE `prod` SET fact9 =".$_POST['fact9_1']." WHERE DATE = '".$daten[0]."'";
mysqli_query($link,$askf9);




$askf13 = "UPDATE `prod` SET fact1 =".$_POST['fact1_2']." WHERE DATE = '".$daten[1]."'";
mysqli_query($link,$askf13);
$askf14 = "UPDATE `prod` SET fact2 =".$_POST['fact2_2']." WHERE DATE = '".$daten[1]."'";
mysqli_query($link,$askf14);
$askf15 = "UPDATE `prod` SET fact3 =".$_POST['fact3_2']." WHERE DATE = '".$daten[1]."'";
mysqli_query($link,$askf15);
$askf16 = "UPDATE `prod` SET fact4 =".$_POST['fact4_2']." WHERE DATE = '".$daten[1]."'";
mysqli_query($link,$askf16);
$askf17 = "UPDATE `prod` SET fact5 =".$_POST['fact5_2']." WHERE DATE = '".$daten[1]."'";
mysqli_query($link,$askf17);
$askf18 = "UPDATE `prod` SET fact6 =".$_POST['fact6_2']." WHERE DATE = '".$daten[1]."'";
mysqli_query($link,$askf18);
$askf19 = "UPDATE `prod` SET fact7 =".$_POST['fact7_2']." WHERE DATE = '".$daten[1]."'";
mysqli_query($link,$askf19);
$askf20 = "UPDATE `prod` SET fact8 =".$_POST['fact8_2']." WHERE DATE = '".$daten[1]."'";
mysqli_query($link,$askf20);
$askf21 = "UPDATE `prod` SET fact9 =".$_POST['fact9_2']." WHERE DATE = '".$daten[1]."'";
mysqli_query($link,$askf21);




$askf25 = "UPDATE `prod` SET fact1 =".$_POST['fact1_3']." WHERE DATE = '".$daten[2]."'";
mysqli_query($link,$askf25);
$askf26 = "UPDATE `prod` SET fact2 =".$_POST['fact2_3']." WHERE DATE = '".$daten[2]."'";
mysqli_query($link,$askf26);
$askf27 = "UPDATE `prod` SET fact3 =".$_POST['fact3_3']." WHERE DATE = '".$daten[2]."'";
mysqli_query($link,$askf27);
$askf28 = "UPDATE `prod` SET fact4 =".$_POST['fact4_3']." WHERE DATE = '".$daten[2]."'";
mysqli_query($link,$askf28);
$askf29 = "UPDATE `prod` SET fact5 =".$_POST['fact5_3']." WHERE DATE = '".$daten[2]."'";
mysqli_query($link,$askf29);
$askf30 = "UPDATE `prod` SET fact6 =".$_POST['fact6_3']." WHERE DATE = '".$daten[2]."'";
mysqli_query($link,$askf30);
$askf31 = "UPDATE `prod` SET fact7 =".$_POST['fact7_3']." WHERE DATE = '".$daten[2]."'";
mysqli_query($link,$askf31);
$askf32 = "UPDATE `prod` SET fact8 =".$_POST['fact8_3']." WHERE DATE = '".$daten[2]."'";
mysqli_query($link,$askf32);
$askf33 = "UPDATE `prod` SET fact9 =".$_POST['fact9_3']." WHERE DATE = '".$daten[2]."'";
mysqli_query($link,$askf33);




$askf37 = "UPDATE `prod` SET fact1 =".$_POST['fact1_4']." WHERE DATE = '".$daten[3]."'";
mysqli_query($link,$askf37);
$askf38 = "UPDATE `prod` SET fact2 =".$_POST['fact2_4']." WHERE DATE = '".$daten[3]."'";
mysqli_query($link,$askf38);
$askf39 = "UPDATE `prod` SET fact3 =".$_POST['fact3_4']." WHERE DATE = '".$daten[3]."'";
mysqli_query($link,$askf39);
$askf40 = "UPDATE `prod` SET fact4 =".$_POST['fact4_4']." WHERE DATE = '".$daten[3]."'";
mysqli_query($link,$askf40);
$askf41 = "UPDATE `prod` SET fact5 =".$_POST['fact5_4']." WHERE DATE = '".$daten[3]."'";
mysqli_query($link,$askf41);
$askf42 = "UPDATE `prod` SET fact6 =".$_POST['fact6_4']." WHERE DATE = '".$daten[3]."'";
mysqli_query($link,$askf42);
$askf43 = "UPDATE `prod` SET fact7 =".$_POST['fact7_4']." WHERE DATE = '".$daten[3]."'";
mysqli_query($link,$askf43);
$askf44 = "UPDATE `prod` SET fact8 =".$_POST['fact8_4']." WHERE DATE = '".$daten[3]."'";
mysqli_query($link,$askf44);
$askf45 = "UPDATE `prod` SET fact9 =".$_POST['fact9_4']." WHERE DATE = '".$daten[3]."'";
mysqli_query($link,$askf45);


$askf49 = "UPDATE `prod` SET fact1 =".$_POST['fact1_5']." WHERE DATE = '".$daten[4]."'";
mysqli_query($link,$askf49);
$askf50 = "UPDATE `prod` SET fact2 =".$_POST['fact2_5']." WHERE DATE = '".$daten[4]."'";
mysqli_query($link,$askf50);
$askf51 = "UPDATE `prod` SET fact3 =".$_POST['fact3_5']." WHERE DATE = '".$daten[4]."'";
mysqli_query($link,$askf51);
$askf52 = "UPDATE `prod` SET fact4 =".$_POST['fact4_5']." WHERE DATE = '".$daten[4]."'";
mysqli_query($link,$askf52);
$askf53 = "UPDATE `prod` SET fact5 =".$_POST['fact5_5']." WHERE DATE = '".$daten[4]."'";
mysqli_query($link,$askf53);
$askf54 = "UPDATE `prod` SET fact6 =".$_POST['fact6_5']." WHERE DATE = '".$daten[4]."'";
mysqli_query($link,$askf54);
$askf55 = "UPDATE `prod` SET fact7 =".$_POST['fact7_5']." WHERE DATE = '".$daten[4]."'";
mysqli_query($link,$askf55);
$askf56 = "UPDATE `prod` SET fact8 =".$_POST['fact8_5']." WHERE DATE = '".$daten[4]."'";
mysqli_query($link,$askf56);
$askf57 = "UPDATE `prod` SET fact9 =".$_POST['fact9_5']." WHERE DATE = '".$daten[4]."'";
mysqli_query($link,$askf57);





}



#UPDATE!!!!
##########
$result = mysqli_query($link, "SELECT `prod`.* FROM `prod` where id>280");
while ($row = mysqli_fetch_array($result)) {
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





#$current_time = "2018-11-12";

##### 69 s obrabotkoi
$sql_count1 = 
"select COUNT(`T910_MACHINE_STATE_ID`)  
from `sv1_tmp` where `T910_MACHINE_STATE_ID`=69 and 
T910_TIMESTAMP BETWEEN '".$current_time." 00:00:00' and '".$current_time." 23:59:59'";

##### 97 vsego
$sql_count2 = 
"select COUNT(`T910_MACHINE_STATE_ID`)  
from `sv1_tmp` where `T910_MACHINE_STATE_ID`=97 and 
T910_TIMESTAMP BETWEEN '".$current_time." 00:00:00' and '".$current_time." 23:59:59'";
$count1 = mysqli_query($link,$sql_count1);
$count2 = mysqli_query($link,$sql_count2);

mysqli_query($link,$sql_count2);
$c1 = mysqli_fetch_row($count1);
$c2 = mysqli_fetch_row($count2);

#echo "<hr><br>";
#echo $c1[0];
#echo "<hr><br>";
#echo $c2[0];



mysqli_close($link);






?>

<?php 
#phpinfo();
 ?>

<!-- #######  YAY, I AM THE SOURCE EDITOR! #########-->

<p id="hed" align="center"><strong>ПЛАН СДАЧИ ПРОДУКЦИИ</strong></p>

<div align="center">
<form id="allform"  method="POST" action="index2.php">
<table width="1143">
<tbody>
<tr class="thead">
<td width="253">&nbsp;</td>
<td colspan="6" width="446">ЦЕХ МОДУЛЬНЫЕ СИСТЕМЫ</td>
<td width="80">&nbsp;</td>
<td width="78">&nbsp;</td>
<td width="80">&nbsp;</td>
<td width="78">&nbsp;</td>
<td width="64">&nbsp;</td>
<td width="64">&nbsp;</td>
</tr>
<tr class="thead">
<td rowspan="3">Станок</td>
<td colspan="2">Понедельник</td>
<td colspan="2">Вторник</td>
<td colspan="2">Среда</td>
<td colspan="2">Четверг</td>
<td colspan="2">Пятница</td>
<td colspan="2" rowspan="2">ИТОГО</td>
</tr>
<tr class="thead">
<td colspan="2"><?php echo $daten[0]; ?></td>
<td colspan="2"><?php echo $daten[1]; ?></td>
<td colspan="2"><?php echo $daten[2]; ?></td>
<td colspan="2"><?php echo $daten[3]; ?></td>
<td colspan="2"><?php echo $daten[4]; ?></td>
</tr>
<tr class="thead">
<td>План</td>
<td>Факт</td>
<td>План</td>
<td>Факт</td>
<td>План</td>
<td>Факт</td>
<td>План</td>
<td>Факт</td>
<td>План</td>
<td>Факт</td>
<td>План</td>
<td>Факт</td>
</tr>
<tr>
<td class="green" align="left">Гостинные</td>
<td class="green"><input type="number" id="plan1_1" name="plan1_1"
       min="0" max="10000" value="<?php echo $plan1[0]; ?>"></td>
<td class="green"><input type="number" id="fact1_1" name="fact1_1"
       min="0" max="10000" value="<?php echo $fact1[0]; ?>"></td>
<td class="green"><input type="number" id="plan1_2" name="plan1_2"
       min="0" max="10000" value="<?php echo $plan1[1]; ?>"></td>
<td class="green"><input type="number" id="fact1_2" name="fact1_2"
       min="0" max="10000" value="<?php echo $fact1[1]; ?>"></td>
<td class="green"><input type="number" id="plan1_3" name="plan1_3"
       min="0" max="10000" value="<?php echo $plan1[2]; ?>"></td>
<td class="green"><input type="number" id="fact1_3" name="fact1_3"
       min="0" max="10000" value="<?php echo $fact1[2]; ?>"></td>
<td class="green"><input type="number" id="plan1_4" name="plan1_4"
       min="0" max="10000" value="<?php echo $plan1[3]; ?>"></td>
<td class="green"><input type="number" id="fact1_4" name="fact1_4"
       min="0" max="10000" value="<?php echo $fact1[3]; ?>"></td>
<td class="green"><input type="number" id="plan1_5" name="plan1_5"
       min="0" max="10000" value="<?php echo $plan1[4]; ?>"></td>
<td class="green"><input type="number" id="fact1_5" name="fact1_5"
       min="0" max="10000" value="<?php echo $fact1[4]; ?>"></td>
<td class="green">&nbsp;</td>
<td class="green">&nbsp;</td>
</tr>
<tr>
<td class="yel" align="left">Восьмерки</td>
<td class="yel"><input type="number" id="plan2_1" name="plan2_1"
       min="0" max="10000" value="<?php echo $plan2[0]; ?>"></td>
<td class="yel"><input type="number" id="fact2_1" name="fact2_1"
       min="0" max="10000" value="<?php echo $fact2[0]; ?>"></td>
<td class="yel"><input type="number" id="plan2_2" name="plan2_2"
       min="0" max="10000" value="<?php echo $plan2[1]; ?>"></td>
<td class="yel"><input type="number" id="fact2_2" name="fact2_2"
       min="0" max="10000" value="<?php echo $fact2[1]; ?>"></td>
<td class="yel"><input type="number" id="plan2_3" name="plan2_3"
       min="0" max="10000" value="<?php echo $plan2[2]; ?>"></td>
<td class="yel"><input type="number" id="fact2_3" name="fact2_3"
       min="0" max="10000" value="<?php echo $fact2[2]; ?>"></td>
<td class="yel"><input type="number" id="plan2_4" name="plan2_4"
       min="0" max="10000" value="<?php echo $plan2[3]; ?>"></td>
<td class="yel"><input type="number" id="fact2_4" name="fact2_4"
       min="0" max="10000" value="<?php echo $fact2[3]; ?>"></td>
<td class="yel"><input type="number" id="plan2_5" name="plan2_5"
       min="0" max="10000" value="<?php echo $plan2[4]; ?>"></td>
<td class="yel"><input type="number" id="fact2_5" name="fact2_5"
       min="0" max="10000" value="<?php echo $fact2[4]; ?>"></td>
<td class="yel">&nbsp;</td>
<td class="yel">&nbsp;</td>
</tr>
<tr>
<td class="green" align="left">Пятерки</td>
<td class="green"><input type="number" id="plan3_1" name="plan3_1"
       min="0" max="10000" value="<?php echo $plan3[0]; ?>"></td>
<td class="green"><input type="number" id="fact3_1" name="fact3_1"
       min="0" max="10000" value="<?php echo $fact3[0]; ?>"></td>
<td class="green"><input type="number" id="plan3_2" name="plan3_2"
       min="0" max="10000" value="<?php echo $plan3[1]; ?>"></td>
<td class="green"><input type="number" id="fact3_2" name="fact3_2"
       min="0" max="10000" value="<?php echo $fact3[1]; ?>"></td>
<td class="green"><input type="number" id="plan3_3" name="plan3_3"
       min="0" max="10000" value="<?php echo $plan3[2]; ?>"></td>
<td class="green"><input type="number" id="fact3_3" name="fact3_3"
       min="0" max="10000" value="<?php echo $fact3[2]; ?>"></td>
<td class="green"><input type="number" id="plan3_4" name="plan3_4"
       min="0" max="10000" value="<?php echo $plan3[3]; ?>"></td>
<td class="green"><input type="number" id="fact3_4" name="fact3_4"
       min="0" max="10000" value="<?php echo $fact3[3]; ?>"></td>
<td class="green"><input type="number" id="plan3_5" name="plan3_5"
       min="0" max="10000" value="<?php echo $plan3[4]; ?>"></td>
<td class="green"><input type="number" id="fact3_5" name="fact3_5"
       min="0" max="10000" value="<?php echo $fact3[4]; ?>"></td>
<td class="green">&nbsp;</td>
<td class="green">&nbsp;</td>
</tr>
<tr>
<td class="yel" align="left">Экономы</td>
<td class="yel"><input type="number" id="plan4_1" name="plan4_1"
       min="0" max="10000" value="<?php echo $plan4[0]; ?>"></td>
<td class="yel"><input type="number" id="fact4_1" name="fact4_1"
       min="0" max="10000" value="<?php echo $fact4[0]; ?>"></td>
<td class="yel"><input type="number" id="plan4_2" name="plan4_2"
       min="0" max="10000" value="<?php echo $plan4[1]; ?>"></td>
<td class="yel"><input type="number" id="fact4_2" name="fact4_2"
       min="0" max="10000" value="<?php echo $fact4[1]; ?>"></td>
<td class="yel"><input type="number" id="plan4_3" name="plan4_3"
       min="0" max="10000" value="<?php echo $plan4[2]; ?>"></td>
<td class="yel"><input type="number" id="fact4_3" name="fact4_3"
       min="0" max="10000" value="<?php echo $fact4[2]; ?>"></td>
<td class="yel"><input type="number" id="plan4_4" name="plan4_4"
       min="0" max="10000" value="<?php echo $plan4[3]; ?>"></td>
<td class="yel"><input type="number" id="fact4_4" name="fact4_4"
       min="0" max="10000" value="<?php echo $fact4[3]; ?>"></td>
<td class="yel"><input type="number" id="plan4_5" name="plan4_5"
       min="0" max="10000" value="<?php echo $plan4[4]; ?>"></td>
<td class="yel"><input type="number" id="fact4_5" name="fact4_5"
       min="0" max="10000" value="<?php echo $fact4[4]; ?>"></td>
<td class="yel">&nbsp;</td>
<td class="yel">&nbsp;</td>
</tr>
<tr>
<td class="green" align="left">Тумбы</td>
<td class="green"><input type="number" id="plan5_1" name="plan5_1"
       min="0" max="10000" value="<?php echo $plan5[0]; ?>"></td>
<td class="green"><input type="number" id="fact5_1" name="fact5_1"
       min="0" max="10000" value="<?php echo $fact5[0]; ?>"></td>
<td class="green"><input type="number" id="plan5_2" name="plan5_2"
       min="0" max="10000" value="<?php echo $plan5[1]; ?>"></td>
<td class="green"><input type="number" id="fact5_2" name="fact5_2"
       min="0" max="10000" value="<?php echo $fact5[1]; ?>"></td>
<td class="green"><input type="number" id="plan5_3" name="plan5_3"
       min="0" max="10000" value="<?php echo $plan5[2]; ?>"></td>
<td class="green"><input type="number" id="fact5_3" name="fact5_3"
       min="0" max="10000" value="<?php echo $fact5[2]; ?>"></td>
<td class="green"><input type="number" id="plan5_4" name="plan5_4"
       min="0" max="10000" value="<?php echo $plan5[3]; ?>"></td>
<td class="green"><input type="number" id="fact5_4" name="fact5_4"
       min="0" max="10000" value="<?php echo $fact5[3]; ?>"></td>
<td class="green"><input type="number" id="plan5_5" name="plan5_5"
       min="0" max="10000" value="<?php echo $plan5[4]; ?>"></td>
<td class="green"><input type="number" id="fact5_5" name="fact5_5"
       min="0" max="10000" value="<?php echo $fact5[4]; ?>"></td>
<td class="green">&nbsp;</td>
<td class="green">&nbsp;</td>
</tr>
<tr>
<td class="yel" align="left">Комоды</td>
<td class="yel"><input type="number" id="plan6_1" name="plan6_1"
       min="0" max="10000" value="<?php echo $plan6[0]; ?>"></td>
<td class="yel"><input type="number" id="fact6_1" name="fact6_1"
       min="0" max="10000" value="<?php echo $fact6[0]; ?>"></td>
<td class="yel"><input type="number" id="plan6_2" name="plan6_2"
       min="0" max="10000" value="<?php echo $plan6[1]; ?>"></td>
<td class="yel"><input type="number" id="fact6_2" name="fact6_2"
       min="0" max="10000" value="<?php echo $fact6[1]; ?>"></td>
<td class="yel"><input type="number" id="plan6_3" name="plan6_3"
       min="0" max="10000" value="<?php echo $plan6[2]; ?>"></td>
<td class="yel"><input type="number" id="fact6_3" name="fact6_3"
       min="0" max="10000" value="<?php echo $fact6[2]; ?>"></td>
<td class="yel"><input type="number" id="plan6_4" name="plan6_4"
       min="0" max="10000" value="<?php echo $plan6[3]; ?>"></td>
<td class="yel"><input type="number" id="fact6_4" name="fact6_4"
       min="0" max="10000" value="<?php echo $fact6[3]; ?>"></td>
<td class="yel"><input type="number" id="plan6_5" name="plan6_5"
       min="0" max="10000" value="<?php echo $plan6[4]; ?>"></td>
<td class="yel"><input type="number" id="fact6_5" name="fact6_5"
       min="0" max="10000" value="<?php echo $fact6[4]; ?>"></td>
<td class="yel">&nbsp;</td>
<td class="yel">&nbsp;</td>
</tr>
<tr>
<td class="green" align="left">Купе Шкафы</td>
<td class="green"><input type="number" id="plan7_1" name="plan7_1"
       min="0" max="10000" value="<?php echo $plan7[0]; ?>"></td>
<td class="green"><input type="number" id="fact7_1" name="fact7_1"
       min="0" max="10000" value="<?php echo $fact7[0]; ?>"></td>
<td class="green"><input type="number" id="plan7_2" name="plan7_2"
       min="0" max="10000" value="<?php echo $plan7[1]; ?>"></td>
<td class="green"><input type="number" id="fact7_2" name="fact7_2"
       min="0" max="10000" value="<?php echo $fact7[1]; ?>"></td>
<td class="green"><input type="number" id="plan7_3" name="plan7_3"
       min="0" max="10000" value="<?php echo $plan7[2]; ?>"></td>
<td class="green"><input type="number" id="fact7_3" name="fact7_3"
       min="0" max="10000" value="<?php echo $fact7[2]; ?>"></td>
<td class="green"><input type="number" id="plan7_4" name="plan7_4"
       min="0" max="10000" value="<?php echo $plan7[3]; ?>"></td>
<td class="green"><input type="number" id="fact7_4" name="fact7_4"
       min="0" max="10000" value="<?php echo $fact7[3]; ?>"></td>
<td class="green"><input type="number" id="plan7_5" name="plan7_5"
       min="0" max="10000" value="<?php echo $plan7[4]; ?>"></td>
<td class="green"><input type="number" id="fact7_5" name="fact7_5"
       min="0" max="10000" value="<?php echo $fact7[4]; ?>"></td>
<td class="green">&nbsp;</td>
<td class="green">&nbsp;</td>
</tr>
<tr>
<td class="yel" align="left">Купе Столы комп.</td>
<td class="yel"><input type="number" id="plan8_1" name="plan8_1"
       min="0" max="10000" value="<?php echo $plan8[0]; ?>"></td>
<td class="yel"><input type="number" id="fact8_1" name="fact8_1"
       min="0" max="10000" value="<?php echo $fact8[0]; ?>"></td>
<td class="yel"><input type="number" id="plan8_2" name="plan8_2"
       min="0" max="10000" value="<?php echo $plan8[1]; ?>"></td>
<td class="yel"><input type="number" id="fact8_2" name="fact8_2"
       min="0" max="10000" value="<?php echo $fact8[1]; ?>"></td>
<td class="yel"><input type="number" id="plan8_3" name="plan8_3"
       min="0" max="10000" value="<?php echo $plan8[2]; ?>"></td>
<td class="yel"><input type="number" id="fact8_3" name="fact8_3"
       min="0" max="10000" value="<?php echo $fact8[2]; ?>"></td>
<td class="yel"><input type="number" id="plan8_4" name="plan8_4"
       min="0" max="10000" value="<?php echo $plan8[3]; ?>"></td>
<td class="yel"><input type="number" id="fact8_4" name="fact8_4"
       min="0" max="10000" value="<?php echo $fact8[3]; ?>"></td>
<td class="yel"><input type="number" id="plan8_5" name="plan8_5"
       min="0" max="10000" value="<?php echo $plan8[4]; ?>"></td>
<td class="yel"><input type="number" id="fact8_5" name="fact8_5"
       min="0" max="10000" value="<?php echo $fact8[4]; ?>"></td>
<td class="yel">&nbsp;</td>
<td class="yel">&nbsp;</td>
</tr>
<tr>
<td class="green" align="left">Купе Стеллажи</td>
<td class="green"><input type="number" id="plan9_1" name="plan9_1"
       min="0" max="10000" value="<?php echo $plan9[0]; ?>"></td>
<td class="green"><input type="number" id="fact9_1" name="fact9_1"
       min="0" max="10000" value="<?php echo $fact9[0]; ?>"></td>
<td class="green"><input type="number" id="plan9_2" name="plan9_2"
       min="0" max="10000" value="<?php echo $plan9[1]; ?>"></td>
<td class="green"><input type="number" id="fact9_2" name="fact9_2"
       min="0" max="10000" value="<?php echo $fact9[1]; ?>"></td>
<td class="green"><input type="number" id="plan9_3" name="plan9_3"
       min="0" max="10000" value="<?php echo $plan9[2]; ?>"></td>
<td class="green"><input type="number" id="fact9_3" name="fact9_3"
       min="0" max="10000" value="<?php echo $fact9[2]; ?>"></td>
<td class="green"><input type="number" id="plan9_4" name="plan9_4"
       min="0" max="10000" value="<?php echo $plan9[3]; ?>"></td>
<td class="green"><input type="number" id="fact9_4" name="fact9_4"
       min="0" max="10000" value="<?php echo $fact9[3]; ?>"></td>
<td class="green"><input type="number" id="plan9_5" name="plan9_5"
       min="0" max="10000" value="<?php echo $plan9[4]; ?>"></td>
<td class="green"><input type="number" id="fact9_5" name="fact9_5"
       min="0" max="10000" value="<?php echo $fact9[4]; ?>"></td>
<td class="green">&nbsp;</td>
<td class="green">&nbsp;</td>
</tr>

</tbody>
</table>
</div>
<br>
<br><div align="center">
<input type="submit" value="Send Request">
</div>
</form>
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