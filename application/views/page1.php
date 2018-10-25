<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE HTML>
<html>
<head>

	<script src='/id/assets/js/jquery.js'></script>
	<script>
		$(document).ready(function() {
			$.get('https://api.instagram.com/v1/users/6263195264/?access_token=6263195264.fe3d84a.b9b2eddf904441cdabf39386d8e0e93f', function(result) {
				alert(result);
			});
		});
	</script>

</head>

<body>
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=1660520170872878';
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

	<div class="fb-page" data-href="https://www.facebook.com/pwtjobs" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/pwtjobs" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/pwtjobs">PWTjobs.com</a></blockquote></div>
</body>
</html>