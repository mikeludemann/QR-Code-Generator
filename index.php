<html>
<head>
<style>
body{
	width: 100%;
	margin: 0px;
	padding: 0px;
}
#container{
	font-family: Arial, serif; 
	font-size: 12px;	
	padding: 5px;
	width: calc(95vw);
	margin: auto;	
}
form{
 	width: 300px;
 	padding: 0px;
 	margin: 0px;
}
iframe {
	width: calc(40vw);
	height: calc(70vh);
}
form textarea{
	font-family: Arial, serif; 
	font-size: 12px;
	width: calc(35vw);
	margin: 5px;
	height: calc(25vh);	
	overflow: hidden;
}
iframe{
 	border: 1px solid #DDD;
}
#generator, #result{
	width: 45%;
	float: left;
}
#generator fieldset{
	border: 1px solid #DDD;
}
#result{
	padding-top: 7px;
}
fieldset {
	width: calc(40vw);
	height: auto;
}
input[type=submit]{
	height: 25px;
	width: calc(40vw);
	margin: 10px;
}
</style>
</head>

<body>
<div id="container">
	<div id="title">
		<h1>QR Code Generator</h1>
	</div>
	<div id="generator">
		<form target="qrcode-frame" action="generator.php" method="post">
		  <fieldset>
		    <legend>Size:</legend>
				<input type="radio" name="size" value="100x100" checked>100x100<br>
				<input type="radio" name="size" value="150x150">150x150<br>
				<input type="radio" name="size" value="200x200">200x200<br>
				<input type="radio" name="size" value="250x250">250x250<br>
				<input type="radio" name="size" value="300x300">300x300<br>
				<input type="radio" name="size" value="250x250">350x350<br>
				<input type="radio" name="size" value="300x300">400x400<br>
		  </fieldset>
		  <fieldset>
		    <legend>Encoding:</legend>
		    <input type="radio" name="encoding" value="UTF-8" checked>UTF-8<br>
		    <input type="radio" name="encoding" value="Shift_JIS">Shift_JIS<br>
		    <input type="radio" name="encoding" value="ISO-8859-1">ISO-8859-1<br>
		  </fieldset>
		  <fieldset>
		    <legend>Content:</legend>
		    <textarea name="content"></textarea>
				<p>"Free Text", "URL",  "vcf", "Phone Number" or "SMS" data</p> 
		  </fieldset>		  
		  <fieldset>
		    <legend>Error Correction:</legend>
		    <select name="correction">
		    	<option value="L" selected>L</option>
		    	<option value="M">M</option>
		    	<option value="Q">Q</option>
		    	<option value="H">H</option>
		    </select>
		  </fieldset>		  
		  <input type="submit" value="Generate"></input>
		</form>
	</div>	
	<div id="result">
		<iframe name="qrcode-frame" frameborder="0" id="qrcode" src="generator.php"></iframe>
	</div>
</div>

</body>

</html>