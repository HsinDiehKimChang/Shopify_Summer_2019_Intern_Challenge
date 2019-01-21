<?php
include("connect.php");
include("list.php");
//acqurie variable from selection
$select1=$_POST['D1'];
$select2=$_POST['D2'];
echo "You want to buy ".$select2." ".$select1.'</p>';
     for ($i=1; $i <=$array_lengh; $i++){
	if ($name1[$i] ==$select1){
           //echo "name1:".$name1[$i]."seleti1:".$select1;
//examinate if the remaining product number is less than expected
           $data2[$i] = $data2[$i]-$select2;
           //echo $data2[$i];
           if ( $data2[$i] <0){
              echo "Sorry, ".$select1." is not available for ".$select2."</p>"."Please Return and reselect."."</p>";
              }
           }
    }

    for ($j=1; $j <=$array_lengh; $j++){
         $tmp=$data2[$j];
         $tmp2=$name1[$j];
         //echo "tmp:".$tmp."</p>";
         $sql2="UPDATE title SET count=$tmp WHERE name='".$tmp2."'";
         //echo "sql2: ".$sql2."</p>";
        }


?>

<form method='POST' action="main.php">
<input type="submit" value="Return">
</form>
<form method='POST' action="fianl.php">
<input type="submit" value="Confirm">
</form>
