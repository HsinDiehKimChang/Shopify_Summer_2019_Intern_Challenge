<html>
	<head>
		<title>Test Barebone</title>
	</head>
	<body>
		<?php
//Connect to Database
			include("connect.php");
                        echo "Todays' Inventory list:";
//Use list.php to acquire data from database
			include("list.php");
//Show Database(Inventory list)
	             for ($i=1; $i <=$array_lengh; $i++){
//if inventory is zero
		    	         if($data2[$i] ==0){
                                 echo "Sorry, ".$name1[$i]." is out of stock </p>";
                                 }else{
//else if inventory is not zzero
                                 echo '<p>Title： '.$name1[$i].'，Price：'.$data1[$i].'，Remain：'.$data2[$i].'</p>';
				}
                    }
      	       ?>

</br>
</p>
<text>I want to buy:</text>
</p>
<!---Process order --->
	<form method='POST' action="order.php">
	<select  name='D1'>
           <?php
              include("list.php");
                 for ($x=1; $x <=$array_lengh; $x++){
		     echo "<option value=".$name1[$x].">".$name1[$x]."</option>";
                    }
           ?>
            <option name="D1"> </option>   
        </select> 
        <select  name='D2'>
           <?php
              include("list.php");
                 for ($y=1; $y <=20; $y++){
		     echo "<option value=".$y.">".$y."</option>";
                    }
           ?>
            <option name="D2"> </option>   
        </select> 
        </p>
   	<input type="submit" value="submit">
        </form>



                <?php
			//include("list.php");


		?>



	</body>
</html>
