<?php
$date = $_POST['date'];
$hour = $_POST['hour'];
$data_url = "\"data.php?date=$date&hour=$hour\"";
?>

<html>
<head>
<title>api monitor</title>
	<script type="text/javascript" src="js/swfobject.js"></script>
	<script type="text/javascript">
	var flashvars = {"data-file":<?php echo $data_url?>};   
	swfobject.embedSWF(  
	"open-flash-chart.swf", "my_chart", "550", "300",  
	"9.0.0", "expressInstall.swf",  
	flashvars   
	);
	</script>
</head>
<body>
<form action = "show.php" method = "post">

<label>date [2012-12-08]</label><br>
<input type = "text" name ="date"/>
<br>
<label>hour[12] </label><br>
<input type = "text" name ="hour"/>
<br>
<input type="submit" name="yt0" value="submit" />
</form>

<div id="my_chart"></div>
</body>
</html>
