<?php 
	include("chargerModule.php");
?>
<!DOCTYPE html>
 <html>
 	<head>
 		<title>Thursday French Fries</title>
 		<link rel="stylesheet" type="text/css" href="css/default.css" /> 			
		<link type="text/css" href="js/jQuery/player/blue.monday/jplayer.blue.monday.css" rel="stylesheet" />
		<script type="text/javascript" src="js/jQuery/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
		<script type="text/javascript" src="js/jQuery/player/jquery.jplayer.min.js"></script>
		<script type="text/javascript" src="js/jQuery/player/add-on/jplayer.playlist.min.js"></script>
		<script type="text/javascript" src="js/jQuery/player/add-on/jquery.jplayer.inspector.js"></script>
		<script type="text/javascript" src="js/default.js"></script>
		<script type="text/javascript" src="js/player.js"></script>
		<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
		<script type="text/javascript" src="js/ckeditor/plugins/editor.js"></script>
 	</head>
 	<body>

	<nav id='menu'>
		<div id='logo'>			
		</div>	
		<ul id='plan'>
			<li><a href='index.php?module=accueil'>Accueil</a></li>
			<li><a href='index.php?module=presentation'>Presentation</a></li>
			<li><a href='index.php?module=concert'>Concert</a></li>
			<li><a href='index.php?module=photo'>Photo</a></li>
			<li><a href='index.php?module=contact' style='border:none;'>Contact</a></li>
		</ul>						
	</nav>
	
	
<div id="jquery_jplayer_1" class="jp-jplayer"></div>
		<div id="jp_container_1" class="jp-audio">
			<div class="jp-type-playlist">
				<div class='jp-hide' id='jp-hide' onclick='hideaudio();'>
					>
				</div>
				<div class='jp-show'  id='jp-show' onclick='showaudio();'>
					<
				</div>
				<div class="jp-gui jp-interface">
					<ul class="jp-controls">
						<li><a href="javascript:;" class="jp-previous" tabindex="1">previous</a></li>
						<li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
						<li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
						<li><a href="javascript:;" class="jp-next" tabindex="1">next</a></li>
						<li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
						<li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
						<li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
						<li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
					</ul>
					<div class="jp-progress">
						<div class="jp-seek-bar">
							<div class="jp-play-bar"></div>
						</div>
					</div>
					<div class="jp-volume-bar">
						<div class="jp-volume-bar-value"></div>
					</div>
					<div class="jp-time-holder">
						<div class="jp-current-time"></div>
						<div class="jp-duration"></div>
					</div>
					<ul class="jp-toggles">
						<li><a href="javascript:;" class="jp-shuffle" tabindex="1" title="shuffle">shuffle</a></li>
						<li><a href="javascript:;" class="jp-shuffle-off" tabindex="1" title="shuffle off">shuffle off</a></li>
						<li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
						<li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
					</ul>
				</div>
				<div class="jp-playlist">
					<ul>
						<li></li>
					</ul>
				</div>
				<div class="jp-no-solution">
					<span>Update Required</span>
					To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
				</div>
			</div>
		</div>			
        
        <div id='background'></div>
		<div id='container'>			
			<?php 
				echo $module->afficher();
			?>
		</div>
		
		<div id='footer'>
			<ul id='liens'>
				<li><a href="https://www.facebook.com/ThursdayFrenchFries" target="_blank"><img src='images/facebook.png'></img></a></li>
				<li><a href=""><img src='images/twitter.png'></img></a></li>
				<li><a href=""><img src='images/rss.png'></img></a></li>
				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright Thursday French Fries 2013<li>
			</ul>
		</div>        
 	</body>
 </html>