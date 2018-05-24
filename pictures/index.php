<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Oskar Rosén">
	<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="../css.css">
	<!--<link rel="icon" type="image/png" href="../img/favicon.png">-->
	<title>Oskar's Pictures</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<script src="https://cdn.apple-livephotoskit.com/lpk/1/livephotoskit.js"></script>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-38018646-4', 'auto');
	  ga('send', 'pageview');

	  $( document ).ready(function() {
			$("#menu").load("../menu.html")
		});

	</script>
  <style>
  body {
	  /*background-color: #58595b;*/
  }
    /*img {
        width: 50vw;
        margin-left: -10vw;
        height: auto;
    }*/
    .center-image {
    margin: auto;
    max-width: 50%;
    /*border: 3px solid green;
    padding: 10px;*/
	}
	.image-size {
    margin: auto;
    display: block;
  	/*width: 23vw;*/
	  width: 100%;
  	height: auto;
	  margin-top:5px;
	}
	.image-size:hover  {
		color: black;
		opacity: 0.7;
	}

	/*.row {
		margin-top: 10px;
	}*/

	data-live-photo {

	}
	video {
		height: 50vh;

	}
</style>
</head>
<body>
<section id="menu">
</section>
  <br>
  <br>
  <br>
	<div class="container text-center">
		<h1>Oskar's Pictures</h1>
		<br>


		<!--<div
	        data-live-photo
	        data-photo-src="live-photos/IMG_3893.jpg"
	        data-video-src="live-photos/IMG_3893.mov"
	        style="width: 800px; height: 800px"
			class="img-rounded center-image">
	    </div>-->

    <!--<img src="IMG_0437.jpg" class="img-rounded pagination-centered" align="middle">-->

	<!--<div class="row">
		<div class="col-md-4"><a href="Photo Jun 25, 6 26 42 PM.jpeg" target="_blank"> <img  style="margin-top: 30px;" src="Photo Jun 25, 6 26 42 PM.jpeg" class="img-rounded image-size" align="middle"></a></div>
		<div class="col-md-4"><a href="IMG_2322,jpg" target="_blank"> <img src="IMG_2322.jpg" class="img-rounded image-size" align="middle"></a><br>
		<a href="IMG_0439,jpg" target="_blank"> <img src="IMG_0439.jpg" class="img-rounded image-size" align="middle"></div>
		<div class="col-md-4"><a href="IMG_0439,jpg" target="_blank"> <img src="IMG_0439.jpg" class="img-rounded image-size" align="middle"></a></div>
    </div>-->
	


	<br>
	<br>
	<br>

    <?php
		$tmp = ""; //this will list from "behind", i.e. the latest picture is first
	    $dir = new DirectoryIterator(dirname(__FILE__));
		$imagewidth = "<script>document.write($(window).width()/2);</script>";
		$counter = 0;
	    foreach ($dir as $fileinfo) {
	        if (!$fileinfo->isDot()) {
	            //var_dump($fileinfo->getFilename());

				if(preg_match('/(\.(jpg|jpeg|png))$/i', $fileinfo->getFilename())) {
					if($counter == 0)
						$tmp .= "<div class=\"row\">";
					else if($counter % 3 == 0)
						$tmp .= "</div><div class=\"row\">";

					//echo $fileinfo->getFilename();
					//$tmp = "<a href=\"".$fileinfo->getFilename()."\" target=\"_blank\"> <img src=\"thumbnail.php?width=300&path=".$fileinfo->getFilename()."\" class=\"img-rounded center-image\" align=\"middle\"></a><br><br>".$tmp;
					//$tmp = "<a href=\"".$fileinfo->getFilename()."\" target=\"_blank\"> <img src=\"".$fileinfo->getFilename()."\" class=\"img-rounded center-image\" align=\"middle\"></a><br><br>".$tmp;

					$thumbnail = $fileinfo->getFilename();
					$thumbnail_tmp = explode(".", $thumbnail);

					$thumbnail_tmp[0] .= "-800.";
					

					$thumbnail = implode($thumbnail_tmp);

					//$tmp .= "<div class=\"col-md-4\"><a href=\"".$fileinfo->getFilename()."\" target=\"_blank\"> <img src=\"".$fileinfo->getFilename()."\" class=\"img-rounded image-size\" align=\"middle\"></a></div>";
					$tmp .= "<div class=\"col-md-4\"><a href=\"".$fileinfo->getFilename()."\" target=\"_blank\"> <img src=\"thumbnails/".$thumbnail."\" class=\"img-rounded image-size\" align=\"middle\"></a></div>";
			
					$counter = $counter + 1;
				}
			}
	    }

		$tmp .= "</div>";
		echo $tmp;
    ?>

		<br>
	<br>
	<hr>
	<br>
	<br>

	<h1>Live Photos</h1>
	<div class="center-block">

		<<!--video id="testmov" src="Video Jun 25, 10 11 39 PM.mov" loop autoplay></video>-->
		<br><br>

		<!--<div
			data-live-photo
			data-photo-src="live-photos/IMG_3893.jpg"
			data-video-src="live-photos/IMG_3893.mov"
			style="min-width: 400px; height: 400px; display: block; margin-left: auto; margin-right: auto">
		</div>-->
		<?php
			$tmp = ""; //this will list from "behind", i.e. the latest picture is first
		    $dir = new DirectoryIterator(dirname(__FILE__).'/live-photos');
		    foreach ($dir as $fileinfo) {
		        if (!$fileinfo->isDot()) {
		            if(preg_match('/(\.jpg)$/i', $fileinfo->getFilename())) {
						$tmp= "<div	data-live-photo data-photo-src=\"live-photos/".$fileinfo->getFilename()."\" data-video-src=\"live-photos/".substr($fileinfo->getFilename(), 0, -3)."mov\" style=\"min-width: 400px; height: 400px; display: block; margin-left: auto; margin-right: auto\"></div>";
					}
		        }
		    }
			echo $tmp;
	    ?>
	</div>

  </div>
  	<br>

</body>
</html>
