<html>


<head>
	<script src="../js/jquery-1.11.1.min.js"></script>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>OpenWB Logging</title>
	<meta name="description" content="Control your charge" />
	<meta name="author" content="Kevin Wieland" />
	<link rel="apple-touch-icon" sizes="57x57" href="../img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="../img/favicons/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="../img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="../img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="../img/favicons/manifest.json">
	<link rel="shortcut icon" href="../img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="../img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/owl.css">
	<link rel="stylesheet" type="text/css" href="../css/animate.css">
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../fonts/eleganticons/et-icons.css">
	<link rel="stylesheet" type="text/css" href="../css/cardio.css">
</head>


<body>


		 <ul class="nav nav-tabs">
			 <li><a href="../index.php">Zurück</a></li>
			 <li><a href="index.html">Live</a></li>
			 <li><a href="daily.php">Daily</a></li>
			 <li class="active"><a href="monthly.php">Monthly</a></li>
			 <li><a href="yearly.php">Yearly</a></li>
		 </ul>


<!--	<div class="preloader">
		<img src="../img/loader.gif" alt="Preloader image">
	</div> -->
<section id="services">
<div class="container">


<?php
$today = date('Ymd');
if (isset($_GET[date])) {
	$daydate = $_GET[date];
	$_SESSION = $daydate;
}
else
{
	$daydate = $today;
	$_SESSION = $daydate;
}
$daybefore = date('Ymd',strtotime($daydate . "-1 days"));
$nextday = date('Ymd',strtotime($daydate . "+1 days")); 
?>

<div class="row col-xs-12">
	<div class="text-center">
		<br><h3> ...in Development</h3><br>
	</div>
</div>
<!--
<div class="row"> 
	<div class="col-xs-1">
	</div>


	<div class="col-xs-10">
		<div class="imgwrapper">	
			<img src="graph-monthly.php?thedate=<?php echo $daydate ?>"
			alt="" class="img-responsive" />
		</div>
	</div>
	<div class="col-xs-1">
	</div>

</div>

<br><br>
<div class="row col-xs-12">
	<div class="col-xs-4">
	</div>
	<div class="col-xs-4 text-center">
	<a href="daily.php?date=<?php print $daybefore ?>"><i class="fa fa-angle-left" style="font-size:48px;"></i></a>
		<?php print $daydate ?>
		
		<a href="daily.php?date=<?php print $nextday ?>"><i class="fa fa-angle-right" style="font-size:48px;"></i></a>
	</div>	
	<div class="col-xs-4">
	</div>
</div>
-->






</div>
</section>
</body>
</html>
