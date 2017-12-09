<?php
session_start();

$_SESSION["name"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recipient</title>

</head>
<body>
	<h1>Update Convert Settings</h1>

	<ul>
		<li>
			audio
			<select id="content_audio">
				<option value="1">audio</option>
				<option value="2">text</option>
				<option value="3">image</option>
				<option value="4">video</option>
			</select>
		</li>

		<li>
			text
			<select id="content_text">
				<option value="1">audio</option>
				<option value="2">text</option>
				<option value="3">image</option>
				<option value="4">video</option>
			</select>
		</li>

		<li>
			image
			<select id="content_image">
				<option value="1">audio</option>
				<option value="2">text</option>
				<option value="3">image</option>
				<option value="4">video</option>
			</select>
		</li>
		
		<li>
			video
			<select id="content_video">
				<option value="1">audio</option>
				<option value="2">text</option>
				<option value="3">image</option>
				<option value="4">video</option>
			</select>
		</li>
	</ul>

	<button id="requestupdate">更新</button>


	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>  
	<script type="text/javascript">
		$("#requestupdate").on("click", function(){
			let param = {
				name: $_SESSION["name"],
				content_audio: $("#content_audio").val(),
				content_text: $("#content_text").val(),
				content_image: $("#content_image").val(),
				content_video: $("#content_video").val()
			}

			$.get("https://mayoneko.xyz/phptest/kernel_update.php", param, function(data){
				console.log(data);
			});
		});
	</script>
</body>
</html>