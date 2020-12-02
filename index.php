<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<style type="">
	* {
		padding: 0;
		margin: 0;
		box-sizing: 0;
	}
	textarea{
		resize: none;
		width: 200px;
		height: 100px;
		font-size: 16px;
		font-family: Helvetica, Arial;
	}
	#lable, #mess{
		font-size: 16px;
		font-family: Helvetica, Arial;
	}

	body {
		display: flex;
		justify-content: center;
	}
	#name,#email,#text,#thema {
		border-radius: 15px;
		border:2px solid blue;
		width: 200px;


	}
	#name:active, #name:hover, #name:focus,#email:active, #email:hover,#email:focus,#text:active, #text:hover, #text:focus,#thema:active, #thema:hover, #thema:focus  {
    outline: 0;
    outline-offset: 0;
}
#form {
	border-radius: 15px;
	background-color: blue;
	width: 350px;
	height: 300px;
	display: flex;
	flex-flow: wrap;
	justify-content: center;
	border: 3px solid black;
}
#sub {
	display: inline-flex;
	justify-content: center;
	width: 100%;
	height: 30px;
}
#sub1 {
	background-color: green;
	font-size: 20px;
	font-family: Helvetica,Arial;
	border-radius: 10px;
	box-shadow: 0;
	color: white;
}
#sub1:focus,#sub1:active {
	outline: 0;
	outline-offset: 0;
}
</style>
<body>

<div id="form">
	<p id="mess"> </p>
<form action="mess.php" method="get" >
	<label id="lable">Имя:</label></br>
	<input type="text" name="name" id="name"></br>
	<label id="lable">Email:</label></br>
	<input type="email" name="email" id="email"></br>
	<label id="lable">Тема сообщения:</label></br>
	<input type="text" name="thema" id="thema"></br>
	<label id="lable">Ваш комментарий:</label></br>
	<textarea name="text" id="text"></textarea></br>
	<div id="sub">
	<input type="submit" name="submit" id="sub1" value="НАЖМИ МЕНЯ ПОЛНОСТЬЮ"></br>
	</div>
</form>
</div>
</body>
</html>