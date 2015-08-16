<?php $title = 'Primaria'; ?>
<meta charset="utf-8"/>
<meta name="viewport" content="<?php echo $viewport; ?>" />
<meta name="keywords" content="<?php echo $keywords; ?>"/>
<meta name="description" content="<?php echo $description; ?>">
<meta name="robots" content="<?php echo $robots; ?>"/>
<meta name="author" content="<?php echo $author; ?>"/>
<link rel="shortcut icon" href="../interfaz/img/icons/favicon.ico"/>
<title><?php echo $title; if($subtitle){ echo' | '.$subtitle; } ?></title>
<!-- CSS -->
<link rel="stylesheet" href="../interfaz/css/interfaz.css" type="text/css" />
<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css" type="text/css" />
<link rel="stylesheet" href="css/primaria.css" type="text/css" />
<!-- LIBRARIES -->
<script src="../interfaz/js/jquery.js" type="text/javascript"></script>
<script src="../interfaz/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="../interfaz/js/modernizr.custom.js" type="text/javascript"></script>
<!-- JS -->
<script src="../interfaz/js/interfaz.js" type="text/javascript"></script>
<!--[if lt IE 9]>
  <script src="//ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
  <link rel="stylesheet" type="text/css" href="../interfaz/css/internet-explorer.css" />
<![endif]-->
<?php $primaria = true; ?>