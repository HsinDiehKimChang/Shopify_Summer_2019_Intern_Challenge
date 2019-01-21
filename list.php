<?php

                      $sql = "SELECT * FROM title";
			if($stmt = $db->query($sql))
			{
				$num=1;
				while($result = mysqli_fetch_object($stmt))
				{
//extract row
                                 $title = $result->name;  
                                 $much = $result->price;
                                 $count = $result->count;
//Save to array
                                 $name1[$num]=$title;
                                 $data1[$num]=$much;
                                 $data2[$num]=$count;

//echo "Array test!"; 
//echo $data2[$num];                              
                                 $num++;
                                }
                         $array_lengh=count($name1);
//echo 'Arrary lengh:'.$array_lengh;	
			}


