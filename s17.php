 
<?php


 // Connecting to mysql
 $conn=pg_connect("host=localhost port=5432  dbname=ty1 user=postgres password=123456");
if(!$conn)
{

echo("An error.....in connection");
}
else
{
echo("connection succesfull");
 $output = <<<O
    <table border='1'><tr><th>Number</th><th>NAME</th><th>SUBJECT</th><th>REASERCH AREA</th> </tr>
O;

$s1="SELECT * FROM teacher";
 $result = pg_query($conn, $s1);
  	if (!$result)
	{
		echo"ERROR.....";
		exit;
	}
 	while($r=pg_fetch_assoc($result))
   	{
    		 echo("<tr>");     echo("<td>");


                $output .= '<tr>';
                $output .= "<td>".$r['tno']."</td>";
                $output .= "<td>".$r['tname']."</td>";
                $output .= "<td>".$r['subject']."</td>";
                $output .= "<td>".$r['research_area']."</td>";
		 
                $output .= '</tr>';
    }
    $output .= '<tr><td colspan=5>No more record found!</td></tr>';
    $output .= '</table>';
}

 echo $output; 
?>
