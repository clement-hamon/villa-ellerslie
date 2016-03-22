<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="<?= $metaKeywords ?>">
	<meta name="description" content="<?= $metaDescritption ?>">
	<title><?= $title; ?></title>
	<link rel="alternate" href="http://www.villa-ellerslie.com/fr/?p=<?=$page?>" hreflang="fr" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS -->
	<link rel="stylesheet" href="../css/reset.css">

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

<!-- Templates -->
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/nav.css">
	<link rel="stylesheet" href="../css/footer.css">

<!-- Parts -->
	<link rel="stylesheet" href="../css/<?= $link ?>.css">

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Pinyon+Script' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'>

<!-- Open graph media sociaux -->
<meta property="og:locale" content="fr_FR" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?= $title ?>" />
<meta property="og:description" content="<?= $metaDescritption ?>" />
<meta property="og:url" content="http://www.villa-ellerslie.com/" />
<meta property="og:site_name" content="La villa Ellerslie" />
<meta property="og:image" content="http://www.villa-ellerslie.com/en/img/villa/thumbs/exterieur03.jpg" />

<!-- fancyBox -->
	<link rel="stylesheet" href="js/fancybox/source/jquery.fancybox.css">
	<!-- Modernizr -->
	<script src="js/modernizr.js"></script>
</head>
<body>
	<?php 
	
	 include 'parts/nav.php'; 
	 include 'parts/'.$page.'.php'; 
	 include 'parts/footer.php'; 
	?>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> <!-- jQuery Core -->
 	<script src="js/fancybox/source/jquery.fancybox.js"></script>
 	<script src="js/fancybox/source/jquery.fancybox.pack.js"></script>


	<!-- Inclusion Javascript -->
	<?php
		foreach (glob("js/$link/*.js") as $filename)
		{
		   echo "<script src='$filename'></script>";
		}
 ?>
    <script>
        $( document ).ready(function() {

            $("#navButton").click(function(e){
                e.preventDefault();
                $("#menu").slideToggle();
            });

            var windowWidth = $( window ).width();

            if (windowWidth <= 650){
                $("#menu").slideUp();
            }
            $( window ).resize(function() {
                if (windowWidth > 500){
                    $("#menu").slideDown();
                }
            });
        });
    </script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64570119-1', 'auto');
  ga('send', 'pageview');

</script>
 

</body>
</html>