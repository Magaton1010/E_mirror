0<?php
$dir = opendir("/var/www/html/images");
$images = array();

while ($file = readdir($dir)) {
    if (getimagesize("/var/www/html/images/".$file)) {
        $images[] = $file;
    }
}

closedir($dir);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Album</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			background-color: black;
			color: black ;
			font-family: sans-serif;
		}

		.album-container {
			
			display: flex;
			align-items: center;
			justify-content: center;
	        width: 100vw;
			height: 100vh;
		}

		.album-container img {
			max-width: 100%;
			max-height: 100%;
			object-fit: cover;
			
		}
	</style>
</head>
<body>
	<div class="album-container">
		<?php foreach ($images as $image): ?>
			<img src="/images/<?php echo $image; ?>" alt="<?php echo $image; ?>" style="display:none;">
		<?php endforeach; ?>
	</div>

	<script>
	var images = document.querySelectorAll(".album-container img");
var duration = 24*60*60*1000; // 24 hours

function showImage() {
  var now = new Date();
  var utcOffset = now.getTimezoneOffset() / 60;
  var usTime = now.getHours() - utcOffset + 24;
  var index = usTime % images.length;

  for (var i = 0; i < images.length; i++) {
    images[i].style.display = "none";
  }
  images[index].style.display = "block";
  setTimeout(showImage, duration);
}

showImage();

	</script>
</body>
</html>
