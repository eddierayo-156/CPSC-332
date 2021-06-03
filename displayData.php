</style></head>
<head>
<h1><center> Welcome to JEMS INC </center> </h1></head>
<hr><b><center>FIND THE BEST DEALS OF ALL YOUR JEWERLY NEEDS</center></b><hr>
<center> <p><b> Joseph Nasr, Eddie Rayo, Moses Merugus, Shadi Elkhatib</center>
</b>
<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "company";

function display_data($result)
{
	$output = '<table>';
	foreach($result as $key => $var) 
	{
		$output .= '<tr>';
		foreach($var as $k => $v) 
		{
			if ($key === 0) 
			{
				$output .= '<td><strong>' . $k . '</strong></td>';
			} 
			else 
			{
				$output .= '<td>' . $v . '</td>';
			}
		}
    $output .= '</tr>';
	}
$output .= '</table>';
echo $output;
}

$conn=mysqli_connect($hostName, $userName, $password)
or die("Unable to connect to host $hostName");

mysqli_select_db($conn, $dbName) or die("Unable to select database $dbName");

$sql = "SELECT * FROM EMPLOYEE WHERE DNO > 6";
$result = mysqli_query($conn, $sql);

display_data($result);
?>

<button onclick="goBack()">Go Back</button>

<script>
function goBack() {
    window.history.back();
}
</script>

</fieldset>
</div>
</body>
</html>