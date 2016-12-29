<?
	$name = $_POST["name"];
	$age = $_POST["age"];
	$occupation = $_POST["occupation"];
	$connection = mysql_connect('localhost','root','apmsetup');
	$dbCon = mysql_select_db("jj",$connection);
	
	$query = "insert into customerlist(name, age, occupation) values('".$name."','".$age."','".$occupation."')";
	
	$result = mysql_query($query,$connection);
	
	echo $query;
	
?>

<script>
location.href='index.php';
</script>
