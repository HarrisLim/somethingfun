
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
	 
 <!-- PTM3쓰려면 이거 밑에 거랑 input button에서 print 주석 풀고 input button에서 EasyPrint 주석처리 -->
 <link rel="stylesheet" type="text/css" href="http://localhost/harrishome/style.css">
 <!--script type="text/javascript" src="/development/Printmade3.js"></script>
 <script type="text/javascript" src="/development/PDonut.js"></script-->
 <script src="../development/print.js"></script>
		<!-- 부트스트랩 -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="./js/bootstrap.min.js"></script>
		<link href="./css/bootstrap.min.css" rel="stylesheet">
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
 
 function changeWhite() {
	document.getElementById('target').className='white';
	}
 
 function changeBlack() {
	document.getElementById('target').className='black';
	}
 
 </script> 
 
</head>
<body class="change">
    <header>
        <h1><a href="http://localhost/harrishome/">Harris's Page</a></h1>
    </header>
    <nav>
	<ul>
	<li><a href="http://localhost/harrishome/chatting.html" style="font-family:dotum">Chatting</a></li>
	<li><a href="http://localhost/harrishome/Cuslist.php" style="font-family:dotum">Customer List</a></li>
	<li><a href="http://localhost/harrishome/Myhouse.html" style="font-family:dotum">My House</a></li>
	</ul>
	<h1><a style="color:yellow"><marquee direction="right">Welcome to Harris's Page</marquee><a></h1>
    </nav>
	<div id="control">
		<input type="button" class="btn" id="w1" value="White" onclick="changeWhite()">
		<input type="button" class="btn" id="b1" value="Black" onclick="changeBlack()">
		<!--input type="button" id="p1" value="print" onclick="PTMPrintWebPage({})"-->
		<input type="button" class="btn" id="p1" value="Print" onclick="PTMPrintWebPage({})">
		<a href="http://localhost/harrishome/join.php">Join me !</a>
	</div>
	<section id="info">
	<img src="El.jpg">
	<div style="width:1000px">
	<h3>Elephants are large mammals of the family Elephantidae and the order Proboscidea. Two species are traditionally recognised, the African elephant (Loxodonta africana) and the Asian elephant (Elephas maximus), although some evidence suggests that African bush elephants and African forest elephants are separate species (L. africana and L. cyclotis respectively). Elephants are scattered throughout sub-Saharan Africa, South Asia, and Southeast Asia. Elephantidae is the only surviving family of the order Proboscidea; other, now extinct, members of the order include deinotheres, gomphotheres, mammoths, and mastodons. Male African elephants are the largest extant terrestrial animals and can reach a height of 4 m (13 ft) and weigh 7,000 kg (15,000 lb). All elephants have several distinctive features, the most notable of which is a long trunk or proboscis, used for many purposes, particularly breathing, lifting water and grasping objects. Their incisors grow into tusks, which can serve as weapons and as tools for moving objects and digging. Elephants' large ear flaps help to control their body temperature. Their pillar-like legs can carry their great weight. African elephants have larger ears and concave backs while Asian elephants have smaller ears and convex or level backs.</h3>
	</div>
	</section>
	<article>
	<?
		if(empty($_GET['id']) === false ) {
		$sql = 'SELECT * FROM customerlist WHERE id='.$_GET['id'];
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		echo '<h2>'.$row['name'].'</h2>';
		echo $row['age'];
		echo $row['occupation'];
		}
	?>
	</article>
</body>
</html>

<!-- 자기 소개 써. ,,20161215 ,,1803 !!!!!!!!! 해결 -->
