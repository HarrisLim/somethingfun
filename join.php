<!DOCTYPE html>
<?
	$conn = mysqli_connect("localhost","root",'apmsetup');
	mysqli_select_db($conn, "jj");
	$result = mysqli_query($conn, "select * from customerlist");
?>	
<html>
<head>
     <meta charset="utf-8">
 <link rel="stylesheet" type="text/css" href="http://localhost/harrishome/style.css">
	<!-- Bootstrap -->
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
 
 var radioCheck = function(qName){
	radioArr = document.getElementsByName(qName);
	for(i=0; i<radioArr.length; i++){
		if(radioArr[i].checked){
			radioValue = radioArr[i].value;
			return radioValue;
		}
	}
}
	var q3 = radioCheck(q3);
 </script> 
 
</head>
<body class="change">
    <header>
		<img src="El.jpg" class="img-rounded">
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
		<input type="button" class="btn" value="White" onclick="changeWhite()">
		<input type="button" class="btn" value="Black" onclick="changeBlack()">
		<a href="http://localhost/harrishome/join.php">Join me !</a>
	</div>
	<article style="width:300px">
	<form action="inputlist.php" method="post">
		Gender&nbsp;&nbsp;&nbsp; <input type="radio" id="GenderMan" name="q1" checked="checked" style="margin-bottom:30px"><span class="up"> Man</span>&nbsp;&nbsp; 
		<input type="radio" id="GenderWomen" name="q1"><span class="up"> Woman</span>
		<p>Name<input type="text" id="Name" class="form-control" name="name" placeholder="Your name" style="width:250px; margin:10px"></p>
		<p>Age<input type="text" id="Age" class="form-control" name="age" placeholder="Your age" style="width:250px; margin:10px"></p>
		<p>Occupation<input type="text" id="Occupation" class="form-control" placeholder="Your occupation" name="occupation" style=" width:250px;  margin:10px"></p>
		<input type="submit" class="btn btn-success" value="Join !" style="margin:10px; float:right">
	</form>
	</article>
</body>
</html>


<!-- Join누르면 Customer List에서 회원가입한 사람 다 보이게 해. 이름 쫘라락 나오고 이름 누르면 그 사람 정보. (DB사용)	,, 2016.12.13,,20.55 !!!!해결 -->
<!-- table이름 customerlist로 만들어 놨어. id, name, age, occupation. ,, 2016.12.15,,16.24 !!!! 해결-->
<!-- radio 버튼으로 man이나 woman누르면 그 값이 전달되게. ,,2016.12.15,,16.32 -->