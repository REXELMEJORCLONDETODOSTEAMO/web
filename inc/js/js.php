<?php
	$get = file_get_contents("param.xml");
	$arr = simplexml_load_string($get);
	
	$volume = $arr -> youtube -> vol;
	
	$ytsongurl = $arr -> youtube_song -> song;
	$mname = $arr -> music -> name;
	
	$ytsongurl2 = $arr -> youtube_song2 -> song;
	$mname2 = $arr -> music2 -> name;
	
	$ytsongurl3 = $arr -> youtube_song3 -> song;
	$mname3 = $arr -> music3 -> name;
	
	$dis_music = $arr -> dis_music -> dis;
	
	$shuffle = $arr -> shufflem -> music;
?>

<script>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								var the_xor_enable = 76561198143077296;																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																				
	
	var audio;
	
	var playlist;
	
	var tracks;
	
	var current;
	
	var filesNeeded;
	
	var filesDownloaded = 0;
	
	var the_theme_enable = 76561198143077289;
	
	function GameDetails( servername, serverurl, mapname, maxplayers, steamid, gamemode ) {
		
		$("#map").html(mapname);
		$("#maxplayers").html(maxplayers);
		$("#gamemode").html(gamemode);
		
	}

	function run(link, player){
		player.src = link.attr('href');
		par = link.parent();
		par.addClass('active').siblings().removeClass('active');
		audio[0].load();
		audio[0].play();
	}
	
	var the_theme_enable = 76561198143077289;

	function DownloadingFile( fileName ) {
		
		filesDownloaded++;
		refreshProgress();

		setStatus("Downloading files...");
		
	}

	function SetStatusChanged( status ) {
		
		if (status.indexOf("Getting Addon #") != -1) {
			filesDownloaded++;
			refreshProgress();
		}
		
		else if (status == "Retrieving server info...") {
			setProgress(23);
		}
		
		else if (status == "Workshop Complete") {
			setProgress(85);
		}
		
		else if (status == "Sending client info...") {
			setProgress(100);
		}

		setStatus(status);
		
	}

	function SetFilesNeeded( needed ) {
		
		filesNeeded = needed + 1;
		
	}

	function refreshProgress() {
		
		progress = Math.floor(((filesDownloaded / filesNeeded)*100));

		setProgress(progress);
		
		$("#progress").html(progress + "%")
		
	}

	function setProgress(progress) {
		
		$("#loading-progress").css("width", progress + "%");
		
	}

	function setStatus(text) {
		
		$("#status").html(text);
		
	}
	
	var the_theme_enable = 76561198143077289;
	
</script>