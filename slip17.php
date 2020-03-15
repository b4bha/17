<?php
	$s1=$_POST['s'];
	echo "Enter string is:$s1<br>";
	/*$a=array();

	for($i=0;$i<strlen($s1);$i++)
	{
		array_push($a,$s1[$i]);
	}
	for($i=0;$i<strlen($s1);$i++)
	{
		$rev=array_pop($a);
	
	if(strcmp($rev,$s1[$i])==0)
	{
		$flag=1;
	}
	else
	{
		$flag=0;
	}

	}
	if($flag==1)
		echo "$s1 is palindrome  string";
	else
		echo "$s1 is not palindrome string";*/


  $str=strrev($s1);

   if(strcmp($s1,$str)==0)
  echo "string is palindrome";
else
echo"string is not palindrome";
?>
