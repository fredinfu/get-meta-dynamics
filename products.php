<?php header('Access-Control-Allow-Headers: X-Requested-With, origin, content-type'); ?>
<?php
	$t = "Super Samus Blue";//isset($_GET["t"]) ? $_GET["t"] : ""
	$d = "Super NES";
	$img = "https://upload.wikimedia.org/wikipedia/en/f/f1/Mega_Man_X_Coverart.png";
?>
<html prefix="og: http://ogp.me/ns#">
	<head>
		<title><?php echo $t; ?></title>
		<meta property="og:title" content="<?php echo $t; ?>" />
		<meta property="og:description" content="<?php echo $d; ?>" />
		<meta property="og:image" itemprop="image" content="<?php echo $img; ?>" />
		<meta property="og:type" content="website" />
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	</head>
	<body style="background-color:#6f0000;font-family: 'Roboto', sans-serif;">
		<div style="max-width:1000px;margin:auto; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);background-color:#fafafa;display:block;margin-top:25px;">
			<div style="padding-top: 20px;padding-bottom: 40px;">
			<img style="width:100%;max-width:450px;margin:auto; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);display:block;margin-top:25px;" src=<?php echo $img; ?> />
			<h2 style="width:100%;text-align: center"><?php echo $t;?></h2>
			<p style="width:100%;text-align: center"><?php echo $d;?></p>
		    </div>
		</div>
	</body>
</html>

