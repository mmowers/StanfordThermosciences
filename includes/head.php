	<title><?php echo $title ?></title>
	<meta name="Keywords" content="<?php echo $keywords ?>" />
	<meta name="Description" content="<?php echo $description ?>" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="Revisit" content="30 days" />
	<meta name="distribution" content="all" />
	<meta name="robots" content="index,follow" />
	<meta name="geo.country" content="US" />
	<meta http-equiv="content-language" content="en-us" />
	<meta name="coverage" content="Worldwide" />
	<script type="text/javascript" src="<?php echo $dir ?>js/lib.js"></script>
<?PHP
	if ( isset($mootools) ) {
?>
	<script type="text/javascript" src="<?= $dir ?>js/mootools.js"></script>
        <script type="text/javascript" src="<?=$dir?>js/scrollMoo.js"></script>
	<script type="text/javascript" src="<?=$dir?>js/soeMoo.js"></script>
<?PHP
	}
	else if ( isset($videomoo) ) {
?>
	<script type="text/javascript" src="<?= $dir ?>js/mootools.js"></script>
	<script type="text/javascript" src="<?=$dir?>js/videoMoo.js"></script>
<?PHP
	}
?>


	<link rel="Bookmark" href="<?php echo $dir ?>favicon.ico" />
	<link rel="shortcut icon" href="<?php echo $dir ?>favicon.ico" />
    	<link rel="stylesheet" type="text/css" href="<?php echo $dir ?>css/nav_style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $dir ?>css/soenew_style.css" />
	<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="<?php echo $dir ?>css/IE_soe_style.css" />
	<![endif]-->
	<!--[if IE 6]>
	<link rel="stylesheet" type="text/css" href="<?php echo $dir ?>css/IE6_soe_style.css" />
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo $dir ?>css/print.css" media="print" />
