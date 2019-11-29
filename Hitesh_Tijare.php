<?php

//Assignment Number:1
echo "<b>Assignment Number:1</b>"."<br><br>";
$string="01010101001";
if(strlen($string) >= 1 && strlen($string) <=100)
{
	if(strpos($string, '111111') !== false || strpos($string, '000000') !== false)
	{
      echo "Sorry, sorry!";
		
	}else{
		echo "Good luck!";
	}
	
}else{
	echo "String Not valid";
}

echo "<br><br>";

//Assignment Number:2
echo "<b>Assignment Number:2</b>"."<br><br>";
$string="lov3333333asdafajfgnkdfn33333e";
if(strlen($string) >= 1 && strlen($string) <=100)
{
	if (strpos($string, 'l') !== false && strpos($string, 'o') !== false && strpos($string, 'v') !== false && strpos($string, 'e') !== false)
	 {
	 	if(strlen($string) == 4)
	 	{
	 		echo "Let us breakup!";
	 	}else
	 	{
	 		echo "I love you, too!";
	 	}
	 	
	}else{
		echo "Let us breakup!";
	}

}else{
	echo "String Not valid";
}

echo "<br><br>";

//Assignment Number:3
echo "<b>Assignment Number:3</b>"."<br><br>";
$roses=4;
$petals=array(2,3,5,4);
if($roses >= 1 && $roses <=100)
{
	foreach($petals as $key => $petal){
		
	if($petal >= 1 && $petal <=100)
	{
		$ot=":( , Sorry Assignment no.3 is not understandable.";
	}else{
	echo "Invalid Petals Input";
	}
  }
  if($ot)
	 {
	 	echo $ot;
	}
}else{
	echo "Invalid Roses Input";
}
?>