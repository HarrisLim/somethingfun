<!DOCTYPE html>
<?
	$conn = mysqli_connect("localhost","root",'apmsetup');
	mysqli_select_db($conn, "jj");
	$result = mysqli_query($conn, "select * from customerlist");
?>
<html>
<head>
     <meta charset="utf-8">
 <link rel="stylesheet" type="text/css" href="http://localhost/harrishome/harrishome/style.css">
	<!-- Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
	<link href="./css/bootstrap.min.css" rel="stylesheet">
	
		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<script>
/* function changeWhite(){
	 var arr = [10,20,30,40,50,60];
	 result = 0;
	 // 배열의 길이 : array.length
	 // 출력방법 console.log(변수+문자열);
	 for(i=0; i<arr.length;i++)
	 { //console.log(arr[i]);
		//result += arr[i];
		var b = 0;
		if(arr[i]>= 40) {
			result += arr[i];
			b = i;
		} 
	 } console.log(i);
	 console.log(result/arr.length);
 )	2016.12.7 */
 
 	<!-- reversing display -->
 /*function changeWhite() {
	document.getElementById('target').className='white';
	}
 
 function changeBlack() {
	document.getElementById('target').className='black';
	}*/
 
 </script> 
 
</head>
<body class="change">
    <header>
		<img src="me2.jpg" class="img-rounded">
        <h1><a href="http://localhost/harrishome/harrishome/main.php">Harris's Page</a></h1>
    </header>
    <nav>
	<ul>
	<li><a href="http://localhost/harrishome/harrishome/chatting.html">Chatting</a></li>
	<li><a href="http://localhost/harrishome/harrishome/Cuslist.php">Customer List</a></li>
	<li><a href="http://localhost/harrishome/harrishome/Myhouse.html">My House</a></li>
	</ul>
	<h1><a style="color:yellow"><marquee direction="right">Welcome to Harris's Page</marquee><a></h1>
    </nav>
	<div id="control">
		<!-- reversing display -->
		<!--input type="button" class="btn" id="w1" value="White" onclick="changeWhite()">
		<input type="button" class="btn" id="b1" value="Black" onclick="changeBlack()"-->
		<a href="http://localhost/harrishome/harrishome/join.php">Join me !</a>
	</div>
	<article>
	<table class="table">
		<tr class="FontColor">
			<td align='center'>NAME</td>
			<td align='center'>AGE</td>
			<td align='center'>OCCUPATION</td>
		</tr>
		<?
			$connection = mysql_connect('localhost','root','apmsetup');
			$dbCon = mysql_select_db("jj",$connection);
			
			$query = "select * from customerlist";
			
			$result = mysql_query($query,$connection);
			
			while($row=mysql_fetch_array($result)){
				echo "<tr>";
				echo "<td align='center' calss='active'>".$row[name]."</td>".
					"<td align='center' calss='active'>".$row[age]."</td>".
					"<td align='center' calss='active'>".$row[occupation]."</td>";
				echo "</tr>";
				}      
		?>
		
		</table>
	</article>
</body>
</html>

<!-- customer list에 이름 클릭하면, 그 이름에 대한 정보(이름, 나이, 직업) 나오게. 2016.12.15,,1748-->