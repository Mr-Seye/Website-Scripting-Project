<!DOCTYPE html>
<html lang="en">
<head>
<title>Create Table</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
  background-color:#aaaabb;}
table.table{
  font-size:1.5em;
  text-align:center;
  width:60%;
  margin-left:auto;
  margin-right:auto;
  border-style:outset;
  border-width:0.3em;
  border-color:#6666dd;}
th.head{
  border-style:inset;
  border-width:0.15em;
  border-color:#9999ff;
  background-color:#44bbbb;}
td.cell1{
  border-style:inset;
  border-width:0.15em;
  border-color:#9999ff;
  background-color:#8888ff;}
td.cell2{
  border-style:inset;
  border-width:0.15em;
  border-color:#9999ff;
  background-color:#88ff88;
}
td:hover{
  background-color:#ffbbff;}

</style>
<title> PHP generated table </title>
</head>

<body>

<!-- two rows of numbers --> 
<table class="table">
  <tr>
  <th class="head">Heading 1</th><th class="head">Heading 2</th><th class="head">Heading 3</th>
  </tr>
  <tr>
    <td class="cell1">1</td><td class="cell1">1</td><td class="cell1">1</td>
  </tr>
  <tr>
    <td class="cell1">2</td><td class="cell1">2</td><td class="cell1">2</td>
  </tr>
</table>
<br>

<!-- Task1: use PHP to create 10 rows of numbers with alternative colours along each column   -->
<table class="table">
<tr>
<th class="head">Heading 1</th><th class="head">Heading 2</th><th class="head">Heading 3</th>
</tr>
<?php
$NumRows=10;
for($i=1;$i<=$NumRows;$i++){
	echo '<tr>
      <td class="cell1">'.$i.'</td>
	  <td class="cell2">'.$i.'</td>
	  <td class="cell1">'.$i.'</td>
      </tr>';
 
	/*
	echo "<tr>
      <td class='cell1'>$i</td>
	  <td class='cell2'>$i</td>
	  <td class='cell1'>$i</td>
      </tr>"; 
	*/ 
}
?>
</table>
<br>
<br>

<!-- Task2: use PHP to create 10x10 multiplication table --> 
<table class="table">
<?php

function bmiCalc($i, $j){
  $j = $j/100;
  $bmi = $i/($j*$j);
  $bmi = round((float) $bmi, 3, PHP_ROUND_HALF_UP);
  return $bmi;
}

$min_height = 140;
$max_height = 160;

$min_weight = 60;
$max_weight = 75;

echo "<th class='head'>v Weight//Height -></th>";
$NumRows = ($max_weight - $min_weight)/5;
for($i = $min_weight; $i <= $max_weight; $i = $i + 5){
	echo "<th class= 'head'> $i</th>";
}
echo "</table>";

echo "<table class = table>";
for($j = $min_height; $j <= $max_height; $j = $j + 5) {
  echo '<tr>';
  echo '<th class= "head">'.$j.'</th>';

  for($i = $min_weight; $i <= $max_weight; $i = $i + 5){
    for($j = $min_height; $j <= $max_height; $j = $j + 5) {
      echo '<td class="cell2">'.bmiCalc($i, $j).'</td>';
      echo "</tr>";
    }
}
}
	echo '</tr>';

?>
</table>

</body>
</html>