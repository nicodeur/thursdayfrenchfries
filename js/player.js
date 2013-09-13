	$(document).ready(function(){

			new jPlayerPlaylist({
				jPlayer: "#jquery_jplayer_1",
				cssSelectorAncestor: "#jp_container_1"
			}, [
				{
					title:"Polyamour",
					//free: true, // pour autoriser le telechargement
					mp3:"polyamour.mp3",
					oga:"polyamour.ogg"
					
				},
				
				{
					title:"Brute realite",
					mp3:"brute_realite.mp3",
					oga:"brute_realite.ogg"
				}
			], {
				swfPath: "../js",
				supplied: "oga, mp3",
				wmode: "window",
				oggSupport: false // We're using MP3s only in this example, so OGG support is not needed
			});	

			$("#jp_container_1").hover(function(){
				if(etatjpaudio==1)
					$('#jp-hide').show();
			});
			
			$("#jp_container_1").mouseleave(function(){
				if(etatjpaudio==1)
					$('#jp-hide').hide();
			});
		});  
		
		var etatjpaudio = 1; // 1=affiché, 0 : caché
		function hideaudio() {		
				$('#jp-hide').hide();		
				$('#jp_container_1').animate({ 
					width: '1px',
					opacity: 0.4					
				  }, 1500 , function() {				  				  				
					
					$('#jp-show').show();
					etatjpaudio=0;
				  });

		}
		
		function showaudio() {	
				$('#jp-show').hide();		
				$('#jp_container_1').animate({ 
					width: '270px',
					opacity: 1				
				  }, 1500, function() {				  				  				
					etatjpaudio=1;
				  });
			
		}