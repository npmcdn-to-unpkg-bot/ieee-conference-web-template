<?php 
ini_set('error_reporting', E_ALL);
error_reporting(-1);
$json = json_decode(file_get_contents('configuration/config.json'), true);
?>

<html>
<head>
	<link href="css/reset.css" rel='stylesheet' type='text/css'>
	<link href="css/basscss.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/main-styles.css">
	<?php 
		if(isset($stylesheet)){
			echo '<link rel="stylesheet" type="text/css" href="'.$stylesheet.'">'; 
		}
	?>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<style type="text/css">

		#header:after{
		    background-image: url(<?php echo $json['header']['bannerImage'];?>); 
		    background-position: right <?php echo $json['header']['bannerRightPlacement'];?> top <?php echo $json['header']['bannerTopPlacement'];?> ;
		}
	</style>
</head>
<body>
	<div class="flex-column main-container">
		<div id="header" class="flex flex-columm flex-auto">
			<div class="flex-auto" style="width: 85%">
				<div class="bars"><a href="#left-bar-container"><i class="fa fa-2x fa-bars"></i></a></div>
				<div class="dates"><a href="#right-bar"><i class="fa fa-2x fa-calendar"></i></a></div>
				<div id="header-title-container">
					<div class="header-title bold flux-auto" style=""><img src="images/ieee-logo.png" style=""></img><div style="vertical-align: middle;display: inline-block;"><?php echo $json['header']['title'];?></div></div>
					<div class="header-title bold" style="font-size: x-large;"><?php echo $json['header']['subtitle'];?></div>
					<div class="header-title bold" style="font-size: large;"><?php echo $json['header']['dateTitle'];?></div>
					<div class="header-title bold" style="font-size: medium;"><?php echo $json['header']['locationPlaceName'];?> <br> <?php echo $json['header']['locationAreaName'];?></div>
				</div>
				<div id="header-quick-links" class="flex flex-wrap">
					<button onclick="location.href='hotel.php';">HOTEL</button>
					<button onclick="location.href='authors.php';">AUTHORS</button>
					<button onclick="location.href='dates.php';">DATES</button>
				</div>
			</div>
			<div class="flex flex-wrap logos" style="width: 15%">
				<div class="" style="margin-top:3%;width:100%;height:85px;background:url(images/css-logo.png) no-repeat"></div>
				<div style="margin-top:1%;width:220px;height:85px;background:url(images/robotics-logo.png) no-repeat"></div>
				<div style="margin-top:1%;width:220px;height:85px;background:url(images/sice-logo.png) no-repeat"></div>
			</div>
		</div>
		<div id="content-container" class="flex flex-auto flex-space-between">
			<div id=left-bar-container class="flex flex-auto col-2">
				<ul class="left-bar list-reset">
					<li name="back" class="bold" style="font-size: x-large">IEEE <?php echo $json['meta']['conferenceName'];?><a href="#" class="slide-back"><i class="fa fa-lg fa-arrow-circle-left" aria-hidden="true"></i></a></li>
					<li name="home"><a href="index.php"><i class="fa fa-lg fa-home" aria-hidden="true"></i>HOME</a></li>
					<li name="organizers"><a href="organizers.php"><i class="fa fa-lg fa-users" aria-hidden="true"></i>ORGANIZERS</a></li>
					<li name="authors"><a href="authors.php"><i class="fa fa-lg fa-pencil-square-o" aria-hidden="true"></i>AUTHORS</a></li>
					<li name="events"><a href="events.php"><i class="fa fa-lg fa-calendar" aria-hidden="true"></i>EVENTS</a></li>
					<li name="registration"><a href="registration.php"><i class="fa fa-lg fa-sign-in" aria-hidden="true"></i>REGISTRATION</a></li>
					<li name="hotel"><a href="hotel.php"><i class="fa fa-lg fa-bed" aria-hidden="true"></i>HOTEL</a></li>
					<li name="visa-information"><a href="sponsors.php"><i class="fa fa-lg fa-thumbs-up" aria-hidden="true"></i>SPONSORS</a></li>
					<li name="visa-information"><a href="visa-information.php"><i class="fa fa-lg fa-globe" aria-hidden="true"></i>VISA INFORMATION</a></li>

				</ul>
			</div>
			<div id="center-content" class="flex flex-auto flex-column col-7">
				<div class="flex">
					<div style="height:80px;background:#191970;color:white;width: 100%">
						<div id="page-title" style="padding:3%;font-weight:bold;font-size: x-large;text-transform: uppercase;"><i class="fa fa-3 fa-long-arrow-right" aria-hidden="true"></i> <?php echo $pageTitle ?></div>
					</div>
				</div>
				<div class="main-content flex-auto">