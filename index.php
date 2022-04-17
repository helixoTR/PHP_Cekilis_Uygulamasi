<!DOCTYPE html>
<html>
<head>
	<title>Örnek Form</title>
	<style type="text/css">
		*{
			margin: 3px;
		}
		textarea{
			display: block;
		}
	</style>
</head>
<body>
	<form action="" method="POST">
		<div id="response">
			<?php 
			if(isset($_POST['start'])){
				if(empty(htmlspecialchars(addslashes(strip_tags($_POST['participants']))))){
					echo '<strong style="color: red;">Katılımcı listesi girilmek zorundadır.</strong>';
				}else{
					$parse = explode("\n", htmlspecialchars(addslashes(strip_tags($_POST['participants']))));
					$count = count($parse);
					shuffle($parse);
					$count = $count - 1;
					$randNum = rand(0,$count);
					echo 'Kazanan kişi: <strong>'.$parse[$randNum].'</strong>';
				}
			}			
			?>
		</div>
		<label for="participants">Katılımcılar (Her satıra 1 kişi)</label>
		<textarea name="participants"></textarea>
		<button type="submit" name="start">Çekiliş Yap</button>
	</form>
</body>
</html>